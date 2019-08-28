<?php
session_start();
include_once "../base_url.php";
if( isset($_SESSION['email']) && $_SESSION['level']==1){ // Jika ada session email berarti sudah login
    header("location: dashboard_admin.php"); // Kita Redirect ke halaman dash.php karena sudah login
} elseif (isset($_SESSION['email'])){
	header("location: dash.php");
}else {
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo $base_url ?>assets2/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
<div id="wrapper">
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="login.php">Home</a>
								</li>

								<li>
									<a href="menu.html">Menu</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
    </header>


    
	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo $base_url ?>images/bgr.jpeg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Sestem Antrian Online Honda
						<div class="text-center">
							  <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Masuk</a>
							</div>
							<div class="text-center">
							  <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Daftar</a>
							</div>
						</span>
							
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(<?php echo $base_url ?>images/bgr.jpeg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Sistem Antrian Online Honda
                        <div class="text-center">
							  <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Masuk</a>
							</div>
							<div class="text-center">
							  <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Daftar</a>
							</div>
						</span>
						
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(<?php echo $base_url ?>assets2/images/master-slides-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
						Sistem Antrian Online Honda
							  <div class="text-center">
							  <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Masuk</a>
							</div>
							<div class="text-center">
							  <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Daftar</a>
							</div>
						</span>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Masuk</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <h4>Email</h4><br>
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control-lg" placeholder="Masukkan Email">
        </div>

        <div class="md-form mb-4">
          <h4>Password</h4><br>
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control-lg" placeholder="Masukkan Password">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Buat Akun</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      	<div class="md-form-half mb-5">
          <h4>Nama</h4><br>
          <i class="fa fa-user prefix grey-text"></i>
          <input type="text" id="defaultForm-text" class="form-control-lg" placeholder="Masukkan Nama">
        </div>

        <div class="md-form-half mb-5">
          <h4>Email</h4><br>
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control-lg" placeholder="Masukkan Email">
        </div>

        <div class="md-form mb-4">
          <h4>Password</h4><br>
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control-lg" placeholder="Masukkan Password">
        </div>

        <div class="md-form mb-5">
          <h4>No Handphone</h4><br>
          <i class="fa fa-phone-square prefix grey-text"></i>
          <input type="text" id="defaultForm-text" class="form-control-lg" placeholder="Contoh : 0812345678">
        </div>

        <div class="md-form mb-5">
          <h4>NIK</h4><br>
          <i class="fa fa-calendar prefix grey-text"></i>
          <input type="text" id="defaultForm-text" class="form-control-lg" placeholder="Contoh : 1871XXXXXXXXXXXX">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Daftar</button>
      </div>
    </div>
  </div>
</div>


	<!-- Footer -->
	<footer class="bg1">
		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2019 <i class="fa fa-heart"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>assets2/js/main.js"></script>

</body>
</html>
