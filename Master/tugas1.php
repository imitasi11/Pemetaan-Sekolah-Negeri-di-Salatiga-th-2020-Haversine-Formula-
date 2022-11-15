<!doctype html>
<html>

<head>

	<script type="text/javascript" src="jquery.1.8.3.min.js"></script>


</head>
<style type="text/css">
	.col{
		display: inline-block;
		height: 400px;
	}
	.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<body>
	<div class="header">
		<div class="line1">
			<p style="position: absolute;float: left;margin-left: 3px;margin-top: -5px;">Fazjar Sekti Aji</p>
			<p align="right"><a href="">Home</a>>
				<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
		><a href="">Contact</a>><a href="">Register</a>><a href="">Login</a></p>
		</div>
		<div class="line2" style="width: 100%;border-bottom: solid 3px;" align="center">
			<img src="pasphoto.png" style="width: 70px;" alt="">
		</div>
	</div>
	<div class="body" style="width: 100%;">
		<div class="container" style="padding: 21px;">
		
		<div class="col" style="width: 80%;">
		<div id="googleMap" style="width:100%;height:400px;">
		</div>
		</div>
		<div class="col" style="width: 18%;margin-left:1%;background-color: cyan;border:solid 1px;">
		<div style="float: top;background-color: white; width: 90px;height: 20px;padding: 10px;" >
			
		</div>
			
		</div>
		</div>
</div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(-7.3416611,110.497141),
  zoom:14,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k&callback=myMap"></script>
	
	<div class="footer" style="width: 100%;border-top: solid 3px;">
		<div class="container" style="padding: 21px;">
		<div class="line1">
			<a href="">Home</a>><a href="">Product</a>><a href="">Contact</a>
		</div>
		<div class="line2" align="right">
			Fazjar Sekti Aji, 97 2020 020
		</div>
	</div>
</div>


</body>

</html>