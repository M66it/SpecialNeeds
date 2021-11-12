							<nav id="nav">
								<ul>
									<li class="current"><a href="index.php">الصفحة الرئيسية</a></li>
<<<<<<< HEAD
									<?php if(!empty($_SESSION['username'])){echo '
									<li>
										الحساب
										<ul>
											<li><a href="#">معلومات الحساب</a></li>
											<li><a href="cart.php">السلة</a></li>
											<li><a href="#">الطلبات</a></li>
											<li>
												<a href="#">التبرعات</a>
												<ul>
													<li><a href="#">طلب تبرع بالمستلزمات</a></li>
													<li><a href="#">طلب احتياج مستلزمات</a></li>
													<li><a href="#">قائمة الطلبات</a></li>
												</ul>
											</li>
											<li><a href="SignOut.php">تسجيل الخروج</a></li>
										</ul>
									</li> ';
									} ?>
									<li><a href="SignIn.php">تسجيل الدخول</a></li>
									<li><a href="">التواصل</a></li>
=======
									<?php if(!empty($_SESSION['id'])){echo '
									<li>
										الحساب
										<ul>
											<li><a href="Account.php">معلومات الحساب</a></li>
											<li><a href="cart.php">السلة</a></li>
											<li><a href="Orders.php">الطلبات</a></li>
											<li>
												<a href="#">التبرعات</a>
												<ul>
									<li><a href="CharitySend.php">طلب تبرع/احتياج مستلزمات</a></li>
													<li><a href="#">قائمة الطلبات</a></li>
												</ul>
											</li>
											<li><a href="add.php">اضافة منتج</a></li>
											<li><a href="SignOut.php">تسجيل الخروج</a></li>
										</ul>
									</li> ';
									} if(empty($_SESSION['id'])){echo '
									<li><a href="SignIn.php">تسجيل الدخول</a></li>';
									}?>
									<li><a href="ContactUs.php">التواصل</a></li>
>>>>>>> 6377ffb864ece4cd0ad6f8b7127fca9023683027
								</ul>
							</nav>