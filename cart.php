<?php require_once('Logic.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
		<title>Special Needs Supplies - cart</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- الواجهة -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- اللوقو -->
							<div id="logo">
								<img src="images/Special Needs Only.png" style="width:15%">
								<span style="font-size:2vw"><b>Special Needs</b> Supplies</span>
							</div>
							<hr style="color: black">
						<!-- القائمة -->

<?php require_once('Nav.php'); ?>	

					</header>
				</div>

			<section dir="rtl" id="cart-container" class="container my-5">
				<table width="100px">
					<thead>
						<tr>
							<td>مسح</td>
							<td>الصوره</td>
							<td>المنتج</td>
							<td>السعر</td>
							<td>عدد المنتج</td>
							<td>السعر النهائي</td>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
							<td><img src="images/1.jpg" alt=""></td>
							<td><h5>كرسي</h5></td>
							<td><h5>$10</h5></td>
							<td><input class="w-25 pl-1" value="1" type="number"></td>
							<td><h5>$50</h5></td>
						</tr>
						<tr>
							<td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
							<td><img src="images/4.jpg" alt=""></td>
							<td><h5>يد أسطناعيه</h5></td>
							<td><h5>$10</h5></td>
							<td><input class="w-25 pl-1" value="1" type="number"></td>
							<td><h5>$50</h5></td>
						</tr>
						<tr>
							<td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
							<td><img src="images/3.jpg" alt=""></td>
							<td><h5>عكاز</h5></td>
							<td><h5>$10</h5></td>
							<td><input class="w-25 pl-1" value="1" type="number"></td>
							<td><h5>$50</h5></td>
						</tr>
					</tbody>
				</table>
			</section>

		<section dir="rtl" id="cart-bottom" class="container">
			<div class="row">
				<div class="coupon col-lg-6 col-md-6 col-12 mb-4">
					<div >
						<h5>كوبون</h5>
						<p>قم بإدخال رقم الكوبون إذا لديك</p>
						<input type="text" placeholder="أدخل الكوبون">
						<button class="bo2">تنفيذ</button>
					</div>
			</div>
				<div class="total col-lg-6 col-md-6 col-12">
					<div>
						<h5>إجمالي سلة التسوق</h5>
					    <div class="d-flex justify-content-between">
						<h6>المجموع الفرعي</h6>
						<p>$400</p>
					</div>
					<div class="d-flex justify-content-between">
						<h6>التسوق</h6>
						<p>$430</p>
					</div>
					<hr class="second-hr">
					<div class="d-flex justify-content-between">
						<h6>المجموع</h6>
						<p>$400</p>
					</div>
						<button  class="ml-auto">تنفيذ</button>
					</div>
				</div>
			</div>
             </section>

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