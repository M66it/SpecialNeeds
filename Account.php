<?php require_once('Logic.php'); 
    //pull
	
    $sql = "SELECT * FROM user WHERE id=$id";
	
    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Special Needs Supplies - Account</title>
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
								<img src="images/Special Needs Only.png" style="width:20%">
								<span style="font-size:2vw"><b>Special Needss</b> Supplies</span>
							</div>
							<hr style="color: black">
						<!-- القائمة -->


						<?php require_once('Nav.php'); ?>	


					</header>
				</div>

<center>
                <div class="container22">
				<form action="" method="post">
					<div class="user-details11">
					<div class="input-box">
                      <span class="details">قم بتعديل البيانات التي تريد تغييرها</span>
					</div>
					<br>
					
					
					<div class="user-details11">
					<div class="input-box">
                      <span class="details">أسم المستخدم</span>
					  <input type="text" name="name" value="<?php echo $user['name']; ?>">
					</div>
					
					<div class="input-box">
                      <span class="details">الايميل</span>
					  <input type="email" name="email" value="<?php echo $user['email']; ?>">
					</div>	

					<div class="input-box">
                      <span class="details">رقم الهاتف</span>
					  <input type="text" name="phone" value="<?php echo $user['phone']; ?>">
					</div>	

					<div class="input-box">
                      <span class="details">الرقم السري</span>
					  <input type="password" name="password">
					</div>	
					</div>

										<div class="inner"><center>
											<header>
												<br>
												<button type="submet" name="userchange">تعديل</button>
												<br><br>
												</form>

											</header>
										</center></div>
				</form>
                </div>
				</center>

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