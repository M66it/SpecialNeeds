<?php
session_start();
$end="";
if(isset($_GET['vkey'])){
	$vkey = $_GET['vkey'];
	$conn = mysqli_connect('localhost', 'root', '', 'specialneeds');
	$sql = "select verified,vkey from sn-users where verified = 0 and vkey ='$vkey' limit 1";
	$result1 = mysqli_query($conn, $sql);
	$result2 = mysqli_num_rows($result1);
	if($result2 == 1){ 
	$end = "your account has been verified. you may now signin";
	$update = mysqli_query($conn,"update sn-users set verified = 1 where vkey = '$vkey' limit 1");
	}else{
		$end = "this account invalid or already verified";
	}
}else{
	$end ="Somthing wet wrong";
}
?>
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
								<img src="images/sno.png" style="width:20%">
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
										<?php
											echo $end;
										?>
									</section>
							</div>
						</div>
					</div>
				</div><center>

			 <!-- الجزء السفلي -->
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