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

</head>

<body>
	
	<!--main-nav-end-->
<section class="main-section paddind" id="Portfolio">
		<!--main-section-start-->
		<div class="container" style="margin-top: -50px;">
			<h2>Tambah data sekolah</h2>
			<h6>Admin page</h6>
	
	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di tambahkan.</p>";
	}
	?>
 
	<div>
		<!--c-logo-part-start-->
		<div class="container" style="margin-top: -50px;">      
         <section id="main-content">
      <section class="wrapper">
         <div class="row" style="margin-left: 130px;">
          <div class="col-lg-6"style="padding: 0px;width: 850px;">
            <section class="panel" >
              
              <div class="panel-body">
                <form role="form" action="input-aksi.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="masukkan nama sekolah">
                  </div>
                  <div class="form-group" >
                  	<label>Jenjang Sekolah</label>
                    <div class="radios"style="margin-top: 13px">
                        <label class="label_radio" for="radio-01" >
                                                  <input name="jenjang" id="radio-01" value="sd" type="radio" checked /> SD
                                              </label>
                        <label class="label_radio" for="radio-02"style="margin-left: 10px">
                                                  <input name="jenjang" id="radio-02" value="smp" type="radio" />SMP
                                              </label>
                        <label class="label_radio" for="radio-03"style="margin-left: 10px">
                                                  <input name="jenjang" id="radio-03" value="sma" type="radio" />SMA
                                              </label>
                      </div>
                  </div>
                  <div class="form-inline">
                  	<div class="form-group">
                    <label>Latitude</label>
                    <input type="text" name="latitude" class="form-control" id="exampleInputEmail2" placeholder="Latitude">
                  </div>
                  <div class="form-group" style="margin-left: 7px;">
                    <label>Longitude</label>
                    <input type="text" name="longitude" class="form-control" id="exampleInputPassword2" placeholder="Longitude">
                  </div>
                  </div><br>
                  <div class="form-inline">
                  	<div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail2" placeholder="Kecamatan">
                  </div>
                  <div class="form-group" style="margin-left: 7px;">
                    <label >Kelurahan</label>
                    <input type="text" name="kelurahan" class="form-control" id="exampleInputPassword2" placeholder="Kelurahan">
                  </div>
                  <div class="form-group" style="margin-left: 7px;">
                    <label >Jalan</label>
                    <input type="text" name="jalan" class="form-control" id="exampleInputPassword2" placeholder="Jalan">
                  </div>
                  </div><br>
                  <div class="form-inline">
                  	<div class="form-group">
                    <label>Nomer telefon</label>
                    <input type="text" name="telefon" class="form-control" id="exampleInputEmail2" placeholder="Nomer telefon">
                  </div>
                  <div class="form-group" style="margin-left: 7px;">
                    <label >email</label>
                    <input type="text" name="email"class="form-control" id="exampleInputPassword2" placeholder="email">
                  </div>
                  <div class="form-group" style="margin-left: 7px;">
                    <label >Keterangan</label>
                    <input type="text" name="keterangan"class="form-control" id="exampleInputPassword2" placeholder="email">
                  </div>
                  
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Sekolah</label>
                    <input type="file" name="file" id="file">
                  </div>
                  
                  <input type="submit" name="upload" value="Upload" class="btn btn-primary">
              		</form>
              </div>
            </section>
          </div>
			
          
        </div>
        <!-- page end-->
      </section>
    </section>
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