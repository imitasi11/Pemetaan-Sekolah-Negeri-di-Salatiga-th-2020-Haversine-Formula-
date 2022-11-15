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
		<div class="container wow fadeInUp delay-04s" align="center" >
		<div style="width: 340px;display:inline-block;">
			<h3 align="left"><?php echo $data['nama_tempat'] ?></h3>
			<h3 align="left"><small><?php echo $data['lokasi'] ?></small></h3>
			<div style="width: 100%;">
			<img style="width: 500px;margin-right: 5px;" src="upload/<?php echo $data['nama_tempat']; ?>.<?php echo $data['gambar'];?>"></div>
		</div>
		<div style="width:340px;display:inline-block;">
			<ul class="list-group" align="left" style="width:90%;float:top;display:inline-block;margin-left: 5px;margin-top: 13px;">
				
				
				<li class="list-group-item"><i class="fa fa-user"></i>&nbsp;&nbsp;Nomer telefon :<?php echo ' '.$data['telp'] ?></li>
				<li class="list-group-item"><i class="fa fa-user"></i>&nbsp;&nbsp;email :<?php echo ' '.$data['email'] ?></li>
				<li align="center"class="list-group-item"><a class="btn btn-xs btn-primary" href="rute.php?id=<?php echo $data['id_tempat']; ?>" >Tampilkan Rute</a></li>
			</ul>
			
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