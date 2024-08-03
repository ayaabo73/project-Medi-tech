<html lang="en">
<head>
<meta charset="utf-8">
<title>Medi-tech </title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <ul class="list">
						<li><span class="icon fas fa-envelope"></span>meditech@gmail.com</li>
						<li><span class="icon fas fa-phone"></span> <a href="#"> 335-6789-765</a></li>
					</ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icons">
						<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fab fa-google"></span></a></li>
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-skype"></span></a></li>
						<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
					</ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="/"><img src="images/logo1.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                
                                        
										<ul class="navigation clearfix">
											<li class="item"><a class="link" href="/">Home</a>
											 
											</li>
											
											<li class="item"> <a  class="link" href="/">Section</a>
											
											</li>
															
											<li class="item"><a class="link"  href="/">Article</a>
												
											</li>
											<li class="item"><a  class="link" href="/">Service</a>
											  
											</li>
											<li class="item"><a class="link" href="/">Doctor</a>
											</li>
											<li class="item"><a  class="link"href="/">Check-up</a>
											</li>
											
											<li class="item"><a  class="link"href="#">Contact</a>
												
											</li>
										</ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
							<!-- Search Btn -->
							<div class="search-box-btn"><span class="icon flaticon-search"></span></div>
                            <!-- Button Box -->
                            <div class="btn-box">
								@if (Route::has('login'))
									@auth
									<a href="{{ route('login')  }}" class="theme-btn btn-style-one"><span class="txt">Home</span></a>
									@else
									<a href="{{ route('login') }}" class="theme-btn btn-style-one"><span class="txt">Login</span></a>
									@if (Route::has('register'))
									<a href="{{ route('register') }}" class="theme-btn btn-style-one"><span class="txt">Register</span></a>
								@endif
						@endauth
						@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="/" class="img-responsive"><img src="images/logo1.png" alt="" title=""></a>
                </div>
                
				<!--Right Col-->
                <div class="right-col pull-right">
					<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon far fa-window-close"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="index.html"><img src="images/nav-logo1.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/a1.jpg);">
        <div class="auto-container">
            <h1>Contact For MediTech</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="/"><span class="fas fa-home"></span> Home </a></li>
				<li>Contact us</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2>Now Contact With Us</h2>
				<div class="separator"></div>
			</div>
			
			<!-- Contact Form -->
			<div class="contact-form">
				
				<!--Contact Form-->
				<form method="post" action="#" id="contact-form">
					<div class="row clearfix">
					
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="text" name="username" placeholder="Name" required>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="email" name="email" placeholder="Email" required>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="text" name="phone" placeholder="Phone" required>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="text" name="Adress" placeholder="Adress" required>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<textarea name="message" placeholder="Your Question"></textarea>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
							<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Contact Us</span></button>
						</div>
						
					</div>
				</form>
				
				<!--End Contact Form -->
			
		</div>
	</section>
	<!-- End Contact Page Section -->
	
	<!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="outer-container">
			<div class="auto-container clearfix">
				<div class="map-content">
					<div class="title">Wanna Touch?</div>
					<h2>Contact Info</h2>
					<ul class="info-list">
						<li><span class="icon fas fa-envelope"></span>meditech@gmail.com</li>
						<li><span class="icon fas fa-phone-volume"></span>335-6789-765</li>
						<li><span class="icon fas fa-map-marker-alt"></span>9332 Bernier Dam, Miami, USA</li>
						<li><span class="icon far fa-clock"></span>Mon to Fri : 08:30 - 18:00</li>
					</ul>
					
					<ul class="social-icons">
						<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fab fa-google"></span></a></li>
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-skype"></span></a></li>
						<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
					</ul>
					
				</div>
			</div>
            <div class="map-outer">
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
	
	<!-- Newsletter Section -->
	<section class="newsletter-section style-two">
		
	</section>
	<!-- End Newsletter Section -->
	
	<!--Main Footer-->
    <footer class="main-footer style-two">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="images/logo1.png" alt="" /></a>
                                    </div>
                                    
									
								</div>
							</div>
							
							
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<div class="footer-title  clearfix">
										<h2>Contact Us</h2>
										<div class="separator"></div>
									</div>
									
									<ul class="contact-list">
										<li><span class="icon flaticon-placeholder"></span>2130 Fulton Street San Diego <br> CA 94117-1080 USA</li>
										<li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br> <a href="tel:+898-68679-575-09">335-6789-765</a></li>
										<li><span class="icon flaticon-message"></span>Do you have a Question? <a href="mailto:info@gmail.com">meditech@gmail.com</a></li>
									</ul>
									
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	
	</footer>
	

</div>        
           



<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD39_Mb1wKUcuRD-0KPmQT6SQHhEMVX1O0"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>