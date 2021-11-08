<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
	

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2></span> <span>SpecialNeeds</h2>
        </div>
        <!--Secciones-del-tablero-->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-home"></span>
                    <span>الرئيسية</span></a>
                </li>
                <li>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                      </svg>
                    <span>المستخدمين</span></a>
                </li>
             
                <li>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                      </svg>
                    <span>التعليقات</span></a>
                </li>
                <li>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                      </svg>
                    <span>الاعدادات</span></a>
                </li>
                <li>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                      </svg>
                    <span>تسجبل الخروج</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> 
            

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="البحث" />
            </div>
            <div class="user-wrapper">
                <img src="images/SNO.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Administrador</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>الزيارات اليومية</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
							<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
						  </svg>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>12</h1>
                        <span>المبيعات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
							<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
						  </svg>

                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>25</h1>
                        <span>التعليفات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
							<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
							<path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
						  </svg>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span>المكتسب</span>
                    </div>
                    <div>
                        <span class="lab la-wpforms"></span>
                    </div>
                </div>
            </div>
            <!--Tabla-->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>الطلبات الحاليه</h3>

                            <button>الكل <span class="las la-arrow-right">
                            </span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>الاسم</td>
                                            <td>السعر</td>
                                            <td>حالة الطلب</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Talal Maghrabi</td>
                                            <td>100 SR</td>
                                            <td>
                                                <span class="status green"></span> تم التوصيل
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ali</td>
                                            <td>75 SR</td>
                                            <td>
                                                <span class="status red"></span> إعادة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mohammed</td>
                                            <td>200 SR</td>
                                            <td>
                                                <span class="status yellow"></span> تتم المعالجة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Yousif</td>
                                            <td>150 SR</td>
                                            <td>
                                                <span class="status green"></span> تم التوصيل
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status red"></span> إعادة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status yellow"></span> تتم المعالجة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status yellow"></span> تتم المعالجة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status green"></span>تم التوصيل 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status red"></span> إعادة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status yellow"></span> تتم المعالجة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status yellow"></span> تتم المعالجة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status green"></span> تم التوصيل
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status red"></span> إعادة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status yellow"></span> تتم المعالجة
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>*****</td>
                                            <td>*****</td>
                                            <td>
                                                <span class="status yellow"></span> تتم المعالجة
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="customers">

                    <div class="card">
                        <div class="card-header">
                            <h3>طلبات جديده</h3>

                            
                        </div>

                        <div class="card-body">

                            <div class="customer">
                                <div class="info">
                                   
                                    <div>
                                        <h4>Talal Maghrabi</h4>
                                        <small>SA</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="lab la-whatsapp"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    
                                    <div>
                                        <h4>Ali</h4>
                                        <small>SA</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    
                                    <div>
                                        <h4>Mohammed</h4>
                                        <small>USA</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    
                                    <div>
                                        <h4>YOUSIF</h4>
                                        <small>UK</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    
                                    <div>
                                        <h4>****</h4>
                                        <small>****</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    
                                    <div>
                                        <h4>*****</h4>
                                        <small>****</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                   
                                    <div>
                                        <h4>*****</h4>
                                        <small>*****</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    
                                    <div>
                                        <h4>****</h4>
                                        <small>******</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                   
                            

                            
                        </div>
                    </div>
                </div>
                
            </div>
        </main>



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

    </div>
	

</body>

</html>