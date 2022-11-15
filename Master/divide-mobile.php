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
  <script type="text/javascript" src="main.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k"></script>


<body  onLoad="watchPosition();">

  <header class="header" id="header">
    <!--header-start-->
    <div class="container" style="margin-top: -17%; min-height: 570px;" align="center">
      
  <div align="center" style="margin-top: 203px;">
<h2 style="color: white;"><div id="demo"></div></h2>

<h4><span>Jika tidak bekerja, tolong cek smartphone anda</span></h4>
<p>-Hidupkan Gps terlebih dahulu</p>
<p>-allow bila ada notifikasi meminta akses lokasi</p>
<p>-refresh page ini</p>
<p>-bila akurasi lebih dari 200 silahkan cek sinyal anda</p>

</div>
</div>
</header>

<script type="text/javascript" >
var watchId = -1;
var meter = 200;
const demo = document.getElementById('demo');

function error(err) {
  demo.innerHTML = `Failed to locate. Error: ${err.message}`;
}

function success(pos) {
  if(pos.coords.accuracy>meter||pos.coords.accuracy<meter){
    var geocoder = new google.maps.Geocoder();
    const lat = pos.coords.latitude;
        const lng = pos.coords.longitude;
        const latlng = {
          lat: parseFloat(lat),
          lng: parseFloat(lng)
        };
        geocoder.geocode(
          {
            location: latlng
          },
          (results, status) => {
            if (status === "OK") {
              if (results[0]) {
       const lat = pos.coords.latitude;
        const lng = pos.coords.longitude;
                location.replace('divide-process2.php?address='+results[0].formatted_address+'&lat='+parseFloat(lat)+'&long='+parseFloat(lng));
                
              } else {
                window.alert("No results found");
              }
            } else {
              window.alert("Geocoder failed due to: " + status);
            }
          }
        );
  }
  alert(`
    \n accuracy: ${pos.coords.accuracy}
  \n koneksi anda kurang memadai`);}

function watchPosition() {
  if (navigator.geolocation) {
    demo.innerHTML = 'Watching...';
    watchId = navigator.geolocation.watchPosition(success);
  } else {
    demo.innerHTML = 'Geolocation is not supported by this browser.';
  }
}

function stopWatching() {
  if (navigator.geolocation) {
    demo.innerHTML = 'Stopped';
    navigator.geolocation.clearWatch(watchId);
  } else {
    demo.innerHTML = 'Geolocation is not supported by this browser.';
  }
}
 
</script>
</body>

</html>
