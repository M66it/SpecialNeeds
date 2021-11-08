							<nav id="nav">
								<ul>
									<li class="current"><a href="index.php">الصفحة الرئيسية</a></li>
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
								</ul>
							</nav>