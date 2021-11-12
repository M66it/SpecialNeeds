<?php require_once('Logic.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Special Needs Supplies - SignIn</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<img src="images/Special Needs Only.png" style="width:20%">
								<span style="font-size:2vw"><b>Special Needs</b> Supplies</span>
							</div>
							<hr style="color: black">
						<!-- Nav -->
<?php require_once('Nav.php'); ?>

					</header>
				</div>

			<!-- Items -->
				<center><div id="features-wrapper">
					<div class="container">
						<div class="row2">
							<div class="col-4 col-10-medium">

								<!-- Box -->
									<section class="box">
										<form action="" method="post">
										<label for="mail">الايميل</label>
										<input type="email" id="mail" name="mail"required>
										<br>
										<label for="pass">الرقم السري</label>
										<input type="password" id="pass" name="pass_1"required>
										<label class="container2">تذكر الايميل
										<input type="checkbox" >
										<span class="checkmark"></span>
										</label>
										<div class="inner"><center>
											<header>

												<button type="submet" name="signin">تسجيل الدخول</button>
												<br><br>
												</form>
												<a href="SignUp.php" class="button">انشاء حساب</a>
											</header>
										</center></div>
									</section>
							</div>
						</div>
					</div>
				</div><center>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>طرق التواصل</h3>
										<ul>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
										<p>EMAIL<br />
										LOCATION<br />
										WHATSAPP</p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; 2021 جميع الحقوق محفوظة</li><li>تصميم: علي - محمد - يوسف - طلال </li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>