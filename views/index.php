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
<!DOCTYPE HTML>
<html>
	<head>
		<title>SISTEM ANTRIAN ONLINE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $base_url ?>assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $base_url ?>assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<!-- <div class="logo">
							<span class="icon fa-user"></span>
						</div> -->
						<div class="content">
							<div class="inner">
								<h1>SISTEM ANTRIAN ONLINE</h1>
								<pre><code>... </code></pre>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#akun">Buat Akun </a></li>
								<li><a href="#masuk">Masuk</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- masuk -->
						<article id="masuk">
							<h2 class="major">Masuk</h2>
							
							<section>
								<form method="post" action="<?php echo $base_url ?>controller/login.php">
									<div class="fields">
										<div class="field half">
											<label for="demo-name">Email</label>
											<input type="email" name="email" placeholder="Masukkan Email..." />
										</div>
										<div class="field half">
											<label for="demo-email">Password</label>
											<input type="password" name="password" placeholder="Masukkan Password..." />
										</div>
										
									</div>
									<ul class="actions">
										<li><input type="submit" value="Login" class="primary" /></li>
									</ul>
								</form>
							</section>
						</article>


						<!-- buat akun -->
						<article id="akun">
							<h2 class="major">Buat Akun</h2>
							
							<section>
								<form method="post" action="<?php echo $base_url ?>controller/daftar.php">
									<div class="fields">
										<div class="field half">
											<label>Nama</label>
											<input type="text" name="name" placeholder="Masukkan Nama Anda" />
										</div>
										<div class="field half">
											<label>Email</label>
											<input type="email" name="email" placeholder="Contoh: email@example.com" />
										</div>
										<div class="field half">
											<label>Password</label>
											<input type="password" name="password" />
										</div>
										<div class="field half">
											<label>Konfirmasi Password</label>
											<input type="password" name="password2" />
										</div>
										<div class="field ">
											<label>No. Handphone</label>
											<input type="text" name="mobile" placeholder="Masukkan No. Handphone Anda" />
										</div>
										<div class="field ">
											<label>NIK</label>
											<input type="text" name="nik" placeholder="Masukkan NIK Anda" />
										</div>
										
									</div>
									<ul class="actions">
										<li><input type="submit" name="Submit" value="Buat Akun" class="primary" /></li>
									</ul>
								</form>
							</section>
						</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Copyright &copy; D.A.M </p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="<?php echo $base_url ?>assets/js/jquery.min.js"></script>
			<script src="<?php echo $base_url ?>assets/js/browser.min.js"></script>
			<script src="<?php echo $base_url ?>assets/js/breakpoints.min.js"></script>
			<script src="<?php echo $base_url ?>assets/js/util.js"></script>
			<script src="<?php echo $base_url ?>assets/js/main.js"></script>

	</body>
</html>
