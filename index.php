<?php require_once('Logic.php'); 
    //pull
	
    $sql = "SELECT * FROM item";
	
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Special Needs Supplies - Main</title>
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

			<!-- المستلزمات -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
						<?php
						$inum=1;
						$ipage=1;
						$check=0;
						while ($item = mysqli_fetch_assoc($result)) {
							if($inum == 10){
								break;
							}
							$inum++;
							if($ipage <= $check){
								$ipage++;
							continue; }?>
							<div class="col-4 col-12-medium">

								<!-- قالب -->
									<section class="box feature">
										<a href="Item.php" class="image featured"><img src="uploads/<?php echo $item['image'];?>" alt="" /></a>
										<div class="inner"><center>
											<header style="margin: 20px">
												<h2><?php echo $item['name'];?></h2>
												<p><?php echo $item['price'];?></p>
											</header>
											<p><?php echo $item['description'];?></p>
										</center></div>
						</div><?php } ?>
						
						</div><center><button>next</button></center>
					</div>
				</div>

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