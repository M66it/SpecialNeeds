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
								<img src="images/SNO.png" style="width:20%">
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
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- قالب -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/1.jpg" alt="" /></a>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- قالب -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/1.jpg" alt="" /></a>
									</section>
							</div>
							<div class="col-4 col-12-medium">

								<!-- قالب -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/1.jpg" alt="" /></a>
									</section>
							</div>
							<div class="col-12 col-10-larg">

								<!-- Box -->
										<form dir="rtl" action="index.html" method="post">
										<section class="box feature">
										
										<h4>الوصف</h4>
										<h2>السعر</h2>
										<label for="count">الكمية</label>
										<input id="count" max="10" type="number" value="1">
										<br>
										<label for="size">المقاس</label>
										<select class=" select-my" id="size">
											<option>المقاسات</option>
											<option>XL</option>
											<option>XXL</option>
											<option>Small</option>
											<option>Large</option>
										</select>
										<div class="inner"><center>
											<header>

												<button type="submet">اضافة الى السلة</button>
											</header>
										</form>
										</center></div>
									</section>
							</div>
						</div>
					</div>
				</div><center>

			<!-- Footer -->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="footer-col">
							<h4>الموقع</h4>
							<ul>
								<li><a href="#">about us</a></li>
								<li><a href="#">our services</a></li>
								<li><a href="#">privacy policy</a></li>
								
							</ul>
						</div>
						<div class="footer-col">
							<h4>المساعدة</h4>
							<ul>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">shipping</a></li>
								<li><a href="#">returns</a></li>
								<li><a href="#">order status</a></li>
								<li><a href="#">payment options</a></li>
							</ul>
						</div>
						
					
						<div class="footer-col">
							<h4>طرق التواصل</h4>
							<div class="social-links">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>

								
							</div>
							
							
						</div>
					</div>
					<div  class="footer66">
						<p> designed by <span>ali-Talal-Mohamed-yousef 2021</span></p>
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