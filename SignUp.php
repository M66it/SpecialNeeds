<?php require_once('Logic.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Special Needs Supplies - SignUp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- الجواجهة -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- اللوقو -->
							<div id="logo">
								<img src="images/Special Needs Only.png" style="width:20%">
								<span style="font-size:2vw"><b>Special Needs</b> Supplies</span>
							</div>
							<hr style="color: black">
						<!-- القائمة -->
<?php require_once('Nav.php'); ?>

					</header>
				</div>

			<!-- القالب -->
				<center><div id="features-wrapper">
					<div class="container">
						<div class="row2">
							<div class="col-4 col-10-medium">

								<!-- نموذج انشاء الحساب -->
									<section class="box">
<<<<<<< HEAD
=======
										<?php require_once('errors.php'); ?>
>>>>>>> 6377ffb864ece4cd0ad6f8b7127fca9023683027
										<form action="" method="post">
										<label for="name">الاسم</label>
										<input type="text" id="name" name="name" >
										
										<label for="email_1">الايميل</label>
										<input type="email" id="email_1" name="email_1" required>

										<label for="email_2">اعادة الايميل</label>
										<input type="email" id="email_2" name="email_2" required>
										
										<label for="phone">رقم الجوال</label>
										<input type="number" id="phone" name="phone" required>
										
										<label for="pass_1">الرقم السري</label>
										<input type="password" id="pass_1" name="pass_1" required>
										
										<label for="pass_2">اعادة الرقم السري</label>
										<input type="password" id="pass_2" name="pass_2" required>
										<label class="container2">قرأت ووافقت على الشروط
										<input type="checkbox" required>
										<span class="checkmark"></span>
										</label>
										<div class="inner"><center>
											<header>

												<button type="submet" name="signup">انشاء الحساب</button>
												<br><br>
												</form>
												<a href="SignIn.php" class="button">تسجيل الدخول</a>
											</header>
										</center></div>
									</section>
							</div>
						</div>
					</div>
				</div><center>

			<!-- الجزء السفلي -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- التواصل -->
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

		<!-- سكربتات -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>