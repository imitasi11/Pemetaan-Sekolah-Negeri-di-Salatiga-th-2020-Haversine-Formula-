
<?php 

session_start();
$_SESSION['lat'] = $_GET['lat'];
	$_SESSION['long'] = $_GET['long'];
	$x = explode('Kec.', $_GET['address']);
	if(!empty($x[1])){
	$y = explode(',', $x[1]);
	$z = explode(' ', $y[0]);
	$_SESSION['alamat'] = $z[1];
	$alamat=$_SESSION['alamat'];
	}else{
		$_SESSION['alamat'] = 'Tingkir';
		$alamat=$_SESSION['alamat'];
	}
	header("location:home.php?jenjang=&alamat=$alamat");
?>