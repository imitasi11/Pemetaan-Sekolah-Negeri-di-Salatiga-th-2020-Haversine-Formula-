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
session_start();

if(!empty($_SESSION['lat'])) {
    
}else{
            header("location:index.php");

}
$jenjang="all";
?>
</head>

<body>
	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="home.php?jenjang=">Home</a></li>
				<li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
				<li><a href="#">Map</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->



	
	<section class="main-section paddind" id="Portfolio">
		<!--main-section-start-->
		<div class="container" style="margin-top: -50px;">
			<h2>Peta Sekolah Negeri Salatiga</h2>
			<div class="inline-block">
				<ul class="Portfolio-nav wow fadeIn delay-02s">
					<li style="display:inline-block;"><a href="?jenjang=" <?php if($_GET['jenjang']=='') {echo "class='current'";}?>><small>Semua</small></a></li>
					<li style="display: inline-block;"><a href="?jenjang=sd" <?php if($_GET['jenjang']=='sd') {echo "class='current'";}?> ><small>SD</small></a></li>
					<li style="display: inline-block;"><a href="?jenjang=smp" <?php if($_GET['jenjang']=='smp') {echo "class='current'";}?> ><small>SMP</small></a></li>
					<li style="display: inline-block;"><a href="?jenjang=sma" <?php if($_GET['jenjang']=='sma') {echo "class='current'";}?>><small>SMA</small></a></li>
					<li style="display: inline-block;"><a href="divide.php"><small>Reset Koordinat</small></a></li>
				</ul>
			</div>

		</div>
		<div style="margin-top: -25px;padding: 25px;" class=" wow fadeInUp delay-04s">
		<?php
  include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
  <head>
    <style>
      #map-canvas {
       height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k"></script>

    <script>
    var marker;
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }     
        var zom=15;
        var uluru = {lat:<?php echo $_SESSION['lat'];?>, lng: <?php echo $_SESSION['long'];?>};
        var map = new google.maps.Map(
      document.getElementById('map-canvas'), {zoom: zom, center: uluru});
        var infoWindow = new google.maps.InfoWindow;      
        var bounds = new google.maps.LatLngBounds();
 
 
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
          function addMarker(lat, lng, info, id) {
            var pt = new google.maps.LatLng(lat, lng);
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt
            });       
            var contentString = '<h3 align="center">'  + info + '</h3>' +
            '<p align="center"><a href="profil.php?id=' + id + '" class="link_detail btn btn-primary">Lihat Detail</a>';
            bindInfoWindow(marker, map, infoWindow, contentString);
          }
 
          <?php

          $jenjang="";
          if($_GET['jenjang']=='sd'){
          	$jenjang="sd";

          }elseif($_GET['jenjang']=='smp'){
          	$jenjang="smp";?>var zom=13;<?php
          }elseif($_GET['jenjang']=='sma'){
          	$jenjang="sma";?>var zom=13;<?php
          }else{
          	$jenjang="all";
          }
          if($jenjang!="all"){
          	
			$query = mysqli_query($connect,"SELECT * from tb_tempat where tingkat='$jenjang'");
          }else{
          	$query = mysqli_query($connect,"SELECT * from tb_tempat");
          }
            
          while ($data = mysqli_fetch_array($query)) {
            $lat = $data['lat'];
            $lon = $data['lng'];
            $nama = $data['nama_tempat'];
            $id= $data['id_tempat'];
            echo ("addMarker($lat, $lon, '<b>$nama</b>','$id');\n");                        
          }
          ?>
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  
    <div id="map-canvas"></div>
 
		</div>
	</section>
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