<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">

  <title>Homepage</title>
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>
  <script type="text/javascript" src="js/magnific-popup.js"></script>
  <script src="contactform/contactform.js"></script>

  <script type="text/javascript" src="main.js"></script>

  <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

<?php 
  include "koneksi.php";
  session_start();
  $id = $_GET['id'];
  $query_mysql = mysqli_query($connect,"SELECT * FROM tb_tempat WHERE id_tempat='$id'")or die(mysql_error());
  $nomor = 1;
  ?>
</head>

<body>
  <nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container">
      <ul class="main-nav">
        <li><a href="home.php?jenjang=">Home</a></li>
        <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
        <li><a href="map.php?jenjang=">Map</a></li>
      </ul>
      <a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
    </div>
  </nav>
  <!--main-nav-end-->
  <!--main-section-start-->
    <section class="main-section alabaster" style="min-height: 520px;">
    <?php while($data = mysqli_fetch_array($query_mysql)){ ?>
    <div class="container wow fadeInUp delay-04s" align="center" style="margin-top: -80px" >
       <style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      
      #map {
        height: 500px;
        float: left;
        width: 63%;
      }
      #right-panel {
        float: right;
        width: 34%;
        height: 500px;
        overflow: auto;
      }
      .panel {
        height: 500px;
        overflow: auto;
      }
    </style>
    
<div class="page-header">
    <h1>Rute Detail ke <?php echo $data['nama_tempat']?></h1>
</div>
<div class="clearfix" style="background: white;">
    <div id="map"></div>
    <div id="right-panel">
      <p>Total Jarak: <span id="total"></span><br />
      Node Terdekat: <span id="terdekat"></span></p>
    </div>
</div>
<p class="help-block">Geser marker atau garis untuk mengubah rute.</p>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k"></script>
<script>
        var default_lat = -7.347022; 
        var default_lng = 110.493244;
        var default_zoom = 14;
    </script>
<script>


$(function(){
    initMap();
})

var markerArray = [];

  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: {lat: default_lat, lng: default_lng}  // Australia.
    });

    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer({
      draggable: true,
      map: map,
      panel: document.getElementById('right-panel')
    });
    
    var stepDisplay = new google.maps.InfoWindow;
    
    
    directionsDisplay.addListener('directions_changed', function() {
        //calculateAndDisplayRoute()
      computeTotalDistance(directionsDisplay.getDirections());
          for (var i = 0; i < markerArray.length; i++) {
            markerArray[i].setMap(null);
        }
        
        showSteps(directionsDisplay.getDirections(), markerArray, stepDisplay, map);
      //calculateAndDisplayRoute(pos, {lat: <?php echo $data['lat']?>, lng: <?php echo $data['lng']?>}, directionsService, directionsDisplay, stepDisplay, map);
    });
    
    // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
      
         var coords = new google.maps.LatLng(<?php echo $_SESSION['lat'];?>,<?php echo $_SESSION['long'];?>);

            //infoWindow.setPosition(pos);
            //infoWindow.setContent('Location found.');
            //infoWindow.open(map);
            //map.setCenter(pos);
            calculateAndDisplayRoute(coords, {lat: <?php echo $data['lat']?>, lng: <?php echo $data['lng']?>}, directionsService, directionsDisplay, stepDisplay, map);
          }, function() {
                calculateAndDisplayRoute(getCurLocation(), {lat: <?php echo $data['lat']?>, lng: <?php echo $data['lng']?>}, directionsService, directionsDisplay, stepDisplay, map);
          });
        } else {
          // Browser doesn't support Geolocation
          calculateAndDisplayRoute(getCurLocation(), {lat: <?php echo $data['lat']?>, lng: <?php echo $data['lng']?>}, directionsService, directionsDisplay, stepDisplay, map);
        }            
  }

  function calculateAndDisplayRoute(origin, destination, directionsService, directionsDisplay, stepDisplay, map) {
    
    for (var i = 0; i < markerArray.length; i++) {
        markerArray[i].setMap(null);
    }
        
    directionsService.route({
      origin: origin,
      destination: destination,
      //waypoints: [{location: 'Adelaide, SA'}, {location: 'Broken Hill, NSW'}],
      travelMode: 'DRIVING',
      avoidTolls: true
    }, function(response, status) {
      if (status === 'OK') {
        //console.log(response);
        directionsDisplay.setDirections(response);
        showSteps(response, markerArray, stepDisplay, map);
      } else {
        alert('Could not display directions due to: ' + status);
      }
    });
  }
  
  function showSteps(directionResult, markerArray, stepDisplay, map) {
    // For each step, place a marker, and add the text to the marker's infowindow.
    // Also attach the marker to an array so we can keep track of it and remove it
    // when calculating new routes.
    var myRoute = directionResult.routes[0].legs[0];
    
    //console.log(directionResult.routes[0].legs[0]);
    
    for (var i = 0; i < myRoute.steps.length; i++) {
      var marker = markerArray[i] = markerArray[i] || new google.maps.Marker();
      //marker.setMap(map);
      //marker.setPosition(myRoute.steps[i].start_location);
      //marker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
      attachInstructionText(
          stepDisplay, marker, myRoute.steps[i].instructions, map);
    }
  }
  
  function attachInstructionText(stepDisplay, marker, text, map) {
        google.maps.event.addListener(marker, 'click', function() {
          // Open an info window when the marker is clicked on, containing the text
          // of the step.
          stepDisplay.setContent(text);
          stepDisplay.open(map, marker);
        });
      }

  function computeTotalDistance(result) {
    var total = 0;
    var myroute = result.routes[0];
    var terdekat = 0;
    
    terdekat = myroute.legs[0].steps[0].distance.value;
    
    //console.log(result);
    for (var i = 0; i < myroute.legs.length; i++) {
      total += myroute.legs[i].distance.value;      
    }
    total = total / 1000;
    document.getElementById('total').innerHTML = total + ' km';
    document.getElementById('terdekat').innerHTML = (terdekat / 1000) + ' km';// + terdekat + ' m';
  }
</script>
 
      
    </div>
    </div>
    </section>
  <?php } ?>


  <footer class="footer" style="margin-top: 20px;">
    <div class="col-lg-2 col-md-6 col-sm-6" style="float: right;">
          <ul class="Portfolio-nav wow fadeIn delay-02s">
            <div class="info_item">
              <li><a class="white_bg_btn" href="login.php">Login Admin</a></li>
            </div>
          </div>
        </div>
    <div class="container">
      <div class="container">
      <div class="footer-logo"><a href="#"><img src="img/logo.png" alt=""></a></div>
      <span class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Created by <a href="https://1cak.com" target="_blank">Fazjar Aji</a></span>
      
    </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <!--main-section-end-->
  <!--main-section alabaster-end-->
  <script type="text/javascript">
    $(document).ready(function(e) {

      $('#test').scrollToFixed();
      $('.res-nav_click').click(function() {
        $('.main-nav').slideToggle();
        return false

      });

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

    });
  </script>

  <script>
    wow = new WOW({
      animateClass: 'animated',
      offset: 100
    });
    wow.init();
  </script>


  <script type="text/javascript">
    $(window).load(function() {

      $('.main-nav li a, .servicelink').bind('click', function(event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 102
        }, 1500, 'easeInOutExpo');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        if ($(window).width() < 768) {
          $('.main-nav').hide();
        }
        event.preventDefault();
      });
    })
  </script>

  <script type="text/javascript">
    $(window).load(function() {


      var $container = $('.portfolioContainer'),
        $body = $('body'),
        colW = 375,
        columns = null;


      $container.isotope({
        // disable window resizing
        resizable: true,
        masonry: {
          columnWidth: colW
        }
      });

      $(window).smartresize(function() {
        // check if columns has changed
        var currentColumns = Math.floor(($body.width() - 30) / colW);
        if (currentColumns !== columns) {
          // set new column count
          columns = currentColumns;
          // apply width to container manually, then trigger relayout
          $container.width(columns * colW)
            .isotope('reLayout');
        }

      }).smartresize(); // trigger resize to set container width
      $('.portfolioFilter a').click(function() {
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

          filter: selector,
        });
        return false;
      });

    });
  </script>
</body>

</html>