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

<script>

</script>
</head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		<div class="container" style="margin-top: -17%;" align="center">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/logo.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Form Koordinat</h1>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k&callback=initMap&libraries=&v=weekly"
      defer></script>

<script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}

function geocodeLatLng(geocoder) {
        const lat = document.getElementById("lat").value;
        const lng = document.getElementById("lng").value;
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
                 const lat = document.getElementById("lat").value;
        const lng = document.getElementById("lng").value;
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
function initMap() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.347063, 110.493260),
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  const geocoder = new google.maps.Geocoder();
        
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
  document.getElementById("submit").addEventListener("click", () => {
          geocodeLatLng(geocoder);
        });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>
  
</head>
<body>

  <div id="googleMap" style="width:100%;height:380px;"></div>
  
   <input id="lat" name="latitude" placeholder="latitude">
    <input id="lng" name="longitude" placeholder="longitude">
    <input id="submit" type="button" value="Reverse Geocode" class="link animated fadeInUp delay-1s servicelink"/>
    
			
			
		</div>
	</header>
	<!--header-end-->


</body>

</html>

