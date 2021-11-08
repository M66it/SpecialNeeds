<?php require_once('Logic.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Special Needs Supplies - contact us</title>
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
										<?php require_once('errors.php'); ?>
										<form action="" method="post">
										<label for="mail">عنوان الرسالة</label>
										<input type="text" id="mail" name="mail"<?php if(!empty($_COOKIE['mail'])) { ?> value="<?php print $_COOKIE['mail'] ?>" <?php } ?> required>
										<br>
										<label for="pass">نص الرسالة</label>
										<textarea id="story" name="story"
										rows="5" cols="33">
										
										</textarea>
										<div class="inner"><center>
											<header>
												<br>
												<button type="submet" name="">ارسال</button>
												<br><br>
												</form>

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