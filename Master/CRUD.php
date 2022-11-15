<!doctype html>
<html>
<?php
include "koneksi.php";
session_start();
if(!empty($_SESSION['username'])) {
    
}else{
            header("location:login.php?pesan=gagal");

}


?>

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

</head>

<body>
	
<section class="main-section paddind" id="Portfolio">
		<!--main-section-start-->
		<div class="container" style="margin-top: -50px;">
			<h2>Admin Page</h2>
			<h6>CRUD</h6>
	
	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di tambahkan.</p>";
	}
	?>
 
	<div class="c-logo-part" style=" width:1179px; background-image: url('img/pw_maze_black.png');">
		<!--c-logo-part-start-->
		<div class="container">      
        <form action="CRUD.php" method="get"style="display: inline-block;">
        	<table>
        		<tr>
        			<td>
        	<input  class="form-control" type="text" placeholder="Search. . ." name="cari">
        	</td><td><button  style="margin-left: 10px;"class="btn btn-success">Refresh</button>
        	</td><td><a  style="margin-left: 10px;"class="btn btn-primary" href="tambah.php">Tambah</a>
        	</td>
        	<td><a style="margin-left: 800px;"class="btn btn-danger" href="logout.php">Logout</a>
        	</td></table>
        </form>
    </div>
    </div>
    <?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
}
?>
    <div class="table-responsive" style="width: 1179px;">

	<div style="height: 370px;overflow-y: scroll;">
	<table border="1px" class="table table-bordered table-hover table-striped" width="100%">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Nama_tempat</th>
			<th>Jenjang</th>
			<th>gambar</th>
			<th>Lat</th>
			<th>Long</th>
			<th>lokasi</th>
			<th>telefon</th>
			<th>email</th>
			<th colspan="2">Aksi</th>
		</tr>
		</thead>
		<tbody>
			
			
		
		<?php 
		include 'koneksi.php';
		$no=1;
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($connect,"select * from tb_tempat where nama_tempat like '%".$cari."%'");		
		}else{
		$data = mysqli_query($connect,"select * from tb_tempat");		
		}
		
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_tempat']; ?></td>
				<td><?php echo $d['tingkat']; ?></td>
				<?php if($d['gambar']=='not found'){?>
					<td><?php echo $d['gambar']; ?></td>
				<?php }else{?>
				<td><img style="width: 50px" src="upload/<?php echo $d['nama_tempat']; ?>.<?php echo $d['gambar'];?>"></td>
				<?php } ?>
				<td><?php echo $d['lat']; ?></td>
				<td><?php echo $d['lng']; ?></td>
				<td><?php echo $d['lokasi']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				
				<td>
                <a class="btn btn-xs btn-warning" href="edit.php?id=<?php echo $d['id_tempat']; ?>">Edit</a>
            	</td>
            	<td>
                <a class="btn btn-xs btn-danger" href="hapus.php?id=<?php echo $d['id_tempat']; ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            	</td>
			</tr>
			<?php 
		}
		?>
		 
 </tbody>

	</table>
 </div>
</div>
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