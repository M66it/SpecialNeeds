							<nav id="nav">
								<ul>
									<li class="current"><a href="index.php">الصفحة الرئيسية</a></li>
									<?php if(!empty($_SESSION['username'])){echo '
									<li>
										الحساب
										<ul>
											<li><a href="#">معلومات الحساب</a></li>
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
									<li><a href="">المستلزمات الجديدة</a></li>
									<li><a href="">المستلزمات المستعملة</a></li>
									<li><a href="SignIn.php">تسجيل الدخول</a></li>
									<li><a href="">التواصل</a></li>
								</ul>
							</nav>