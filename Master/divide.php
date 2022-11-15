<?php 
include 'Mobile_Detect.php';

$detect = new Mobile_Detect();
?><script>
function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(redirectToPosition);
        } else {
            echo  "*input otomatis tidak mensupport perangkat anda.";
        }
    }

    function redirectToPosition(position) {
        window.location='divide-process.php?lat='+position.coords.latitude+'&long='+position.coords.longitude;
    }
</script>
<?php
// Check for any mobile device.
if ($detect->isMobile()){
	?>
	<script type="text/javascript">
		geolocation();
	</script>

	<?php
    
}
else {
   header("location:divide-pc.php");
}
?>