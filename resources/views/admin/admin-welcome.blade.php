<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medi-tech </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

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
						<li><span class="icon fas fa-envelope"></span>meditech@gmail.com admin</li>
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
                        <div class="logo"><a href="l"><img src="images/logo1.png" alt="" title=""></a></div>
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
                                    <li class="current dropdown"><a href="#">Home</a>
                                     
                                    </li>
									
									<li class="dropdown"><a href="#">Sections</a>
										<ul>
                                            <li><a href="about.html">About Us</a></li>
											<li><a href="services.html">Services</a></li>
                                        </ul>
                                    </li>
													
									<li class="dropdown"><a href="#">Fast detection</a>
                                        
                                    </li>
									<li class="dropdown"><a href="#">Reservations</a>
                                        <ul>
                                            <li><a href="department.html">Department</a></li>
                                            <li><a href="department-detail.html">Department Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Articles</a>
                                    </li>
									<li class="dropdown"><a href="#">About us</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
											<li><a href="services.html">Services</a></li>
											<li><a href="services.html">Connect with us</a></li>
                                        </ul>
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
                	<a href="index.html" class="img-responsive"><img src="images/logo1-small.png" alt="" title=""></a>
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
            	<div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
	
	<!-- Main Slider -->
	<section class="main-slider">
		<div class="banner-carousel">
			<!-- Swiper -->
			<div class="swiper-wrapper">

				<div class="swiper-slide slide" style="background-image:url(images/main-slider/a1.jpg)">
					<div class="auto-container">
						<div class="content clearfix">
							<div class="title">Welcome our Medical Care Center</div>
							<h2>Take Care of Your Health</h2>
							<div class="text">We're always available for our Patients with emergent problems. You can easily reach us 24/7 via the phone number below:</div>
							<div class="btn-box clearfix">
                            </br><a href="contact.html" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>335-6789-765</a>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide slide" style="background-image:url(images/main-slider/a1.jpg)">
					<div class="auto-container">
						<div class="content">
							<div class="title">Our Spicialist Doctor Provide the</div>
							<h2>Full Medical Care</h2>
							<div class="text">Our team of diagnosticians is always ready <br> to help you be more healthy.</div>
							<div class="btn-box">
							</br>
								<a href="contact.html" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>335-6789-765</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>
	<!-- End Main Slider -->
	
	<!-- Department Section -->
	<section class="department-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Health Articles</h2>
				<div class="separator"></div>
			</div>
			
			<div class="services-carousel owl-carousel owl-theme">
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Urology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-brain"></div>
							<h3><a href="#">Neurology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Gastrology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Urology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-brain"></div>
							<h3><a href="#">Neurology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Gastrology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Urology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-brain"></div>
							<h3><a href="#">Neurology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Gastrology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Department Section -->
	
	<!-- Fluid Section One -->
    <section class="fluid-section-one">
		<div class="outer-section clearfix">
        	
           <!--Image Column-->
        	<div class="image-column" style="background-image: url(images/resource/image-1.jpg)">
            	<div class="image">
                	<img src="images/resource/image-1.jpg" alt="">
                </div>
            </div>
            <!--End Image Column-->
           
            <!--Content Column-->
            <div class="content-column">
            	<div class="content-box">
					<div class="sec-title">
						<h2>Pioneering in Health.</h2>
						<div class="separator style-two"></div>
					</div>
					<div class="text">
						<p>Our main long-term goal is always achieving complex results for your dental health.  But in the process, we also keep the focus on giving you the best customer service. We're always making our dental office as safe place as possible!</p>
						<p>Nulla auctor neque non tortor tincidunt fringilla. Nam in condimentum orci. Integer ac pellentesque sem. Nulla fringilla dui id metus viverra interdum.</p>
					</div>
					<div class="row clearfix">
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="list-style-one">
								<li><span class="icon flaticon-medical-stethoscope-variant"></span>Medical Treatment</li>
								<li><span class="icon flaticon-doctor"></span>Qualified Doctors</li>
							</ul>
						</div>
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="list-style-one">
								<li><span class="icon flaticon-ambulance-side-view"></span>Emergency Help</li>
								<li><span class="icon flaticon-medical-kit"></span>Medical Professionals</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Best Health Services</h2>
				<div class="separator"></div>
			</div>
			
			<div class="row clearfix">
			
				<!-- Left Column -->
				<div class="left-column pull-left col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Service Block -->
						<div class="service-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-doctor-stethoscope"></span>
								</div>
								<h3><a href="doctors-detail.html">Outdoor Checkup</a></h3>
								<div class="text">We provide best service for our cline. <br> Now place take it.</div>
							</div>
						</div>
						
						<!-- Service Block -->
						<div class="service-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-operating-room"></span>
								</div>
								<h3><a href="doctors-detail.html">Operation Theater</a></h3>
								<div class="text">We provide best service for our cline. Now place take it.</div>
							</div>
						</div>
						
						<!-- Service Block -->
						<div class="service-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-van"></span>
								</div>
								<h3><a href="doctors-detail.html">Emergency Care</a></h3>
								<div class="text">We provide best service for our cline. <br> Now place take it.</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Circles Column -->
				<div class="circles-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<div class="circles">
							<div class="circle-one"></div>
							<div class="circle-two"></div>
							<div class="circle-three"></div>
						</div>
						
					</div>
				</div>
				
				<!-- Right Column -->
				<div class="right-column pull-right col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Service Block -->
						<div class="service-block-two">
							<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-water"></span>
								</div>
								<h3><a href="doctors-detail.html">Blood Test</a></h3>
								<div class="text">We provide best service for our cline. <br> Now place take it.</div>
							</div>
						</div>
						
						<!-- Service Block -->
						<div class="service-block-two">
							<div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-pharmacy"></span>
								</div>
								<h3><a href="doctors-detail.html">Pharmacy Support</a></h3>
								<div class="text">We provide best service for our cline. Now place take it.</div>
							</div>
						</div>
						
						<!-- Service Block -->
						<div class="service-block-two">
							<div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-nurse"></span>
								</div>
								<h3><a href="doctors-detail.html">24/7 Service</a></h3>
								<div class="text">We provide best service for our cline. <br> Now place take it.</div>
							</div>
						</div>
						
					</div>
				</div>
			
			</div>
			
		</div>
	</section>
	
	<!-- Counter Section -->
	<section class="counter-section" style="background-image: url(images/background/pattern-3.png)">
		<div class="auto-container">
		
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="2350">0</span>
								</div>
								<h4 class="counter-title">Satisfied Patients</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									+<span class="count-text" data-speed="3000" data-stop="350">0</span>
								</div>
								<h4 class="counter-title">Doctor’s Team</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="2150">0</span>
								</div>
								<h4 class="counter-title">Success Mission</h4>
							</div>
						</div>
					</div>
					
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									+<span class="count-text" data-speed="2500" data-stop="225">0</span>
								</div>
								<h4 class="counter-title">Successfull Surgeries</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>The Medical Specialists</h2>
				<div class="separator"></div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/team-1.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-skype"></span></a></li>
									<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
								<a href="#" class="appointment">Make Appointment</a>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Dr. Andria Jonea</a></h3>
							<div class="designation">Cancer Specialist</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/team-2.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-skype"></span></a></li>
									<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
								<a href="#" class="appointment">Make Appointment</a>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Dr. Robet Samith</a></h3>
							<div class="designation">Heart Surgen</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/team-3.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-skype"></span></a></li>
									<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
								<a href="#" class="appointment">Make Appointment</a>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Dr. Sharon Laura</a></h3>
							<div class="designation">Family Physician</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/team-4.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-skype"></span></a></li>
									<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
								<a href="#" class="appointment">Make Appointment</a>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Dr. Alex Furgosen</a></h3>
							<div class="designation">Ortho Specialist</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- FullWidth Section -->
	<section class="fullwidth-section">
		<div class="outer-container">
			<div class="clearfix">
			
				<!-- Left Column -->
				<div class="left-column" style="background-image: url(images/background/1.jpg)">
					<div class="inner-column clearfix">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-contract-1"></span>
							</div>
							<div class="title">Need a Doctor for Check-up?</div>
							<h2>JUST MAKE AN APPOINTMENT</h2>
							<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Get an Appointment</span></a>
						</div>
					</div>
				</div>
				
				<!-- Right Column -->
				<div class="right-column">
					<div class="inner-column">
						
						<!-- Upper Box -->
						<div class="upper-box">
							<div class="icon flaticon-alarm-clock"></div>
							<h3>Opening Hours</h3>
						</div>
						<ul class="time-list">
							<li class="clearfix"><span class="left-span pull-left">Monday - Friday</span><span class="right-span pull-right">08:00am - 10:00pm</span></li>
							<li class="clearfix"><span class="left-span pull-left">Saturday - Sunday</span><span class="right-span pull-right">09:00am - 06:00pm</span></li>
							<li class="clearfix"><span class="left-span pull-left">Emergency Services</span><span class="right-span pull-right">24 hours Open</span></li>
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End FullWidth Section -->
	
	<!-- Testimonial Section -->
    <section class="testimonial-section">
    	<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>What Patients Saying</h2>
				<div class="separator"></div>
			</div>
        	<div class="testimonial-outer" style="background-image: url(images/background/pattern-4.png)">
            
            	<!--Client Testimonial Carousel-->
                <div class="client-testimonial-carousel owl-carousel owl-theme">
                
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                    
                </div>
				
				<!--Product Thumbs Carousel-->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                    </div>
                </div>
				
                
            </div>
        </div>
    </section>
    <!-- End Testimonial Section Two -->
	
	<!-- News Section -->
    <section class="news-section">
    	<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Latest News & Articals</h2>
				<div class="separator style-three"></div>
			</div>
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="category">Artical</div>
							<a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><a href="#">03 Comments</a></li>
								<li><a href="#">June 21, 2018 at 8:12pm</a></li>
								<li><a href="#">12 Liks</a></li>
							</ul>
							<h3><a href="blog-detail.html">Diagnostic Services for Efficient Results Picking Right </a></h3>
							<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="category">Artical</div>
							<a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><a href="#">03 Comments</a></li>
								<li><a href="#">June 21, 2018 at 8:12pm</a></li>
								<li><a href="#">12 Liks</a></li>
							</ul>
							<h3><a href="blog-detail.html">Reasons to Visit for Heart Specialist Us</a></h3>
							<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="category">Artical</div>
							<a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><a href="#">03 Comments</a></li>
								<li><a href="#">June 21, 2018 at 8:12pm</a></li>
								<li><a href="#">12 Liks</a></li>
							</ul>
							<h3><a href="blog-detail.html">Preparing for an ECG Tips From Our Diagnosticians</a></h3>
							<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Newsletter Section -->
	<section class="newsletter-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Subscribe Our Newsletter</h2>
						<div class="text">To receive email releases, simply provide us with your email address below.</div>
					</div>
				</div>
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<form method="post" action="contact.html">
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Your Email Address" required>
									<button type="submit" class="theme-btn btn-style-two"><span class="txt">subscribe</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Newsletter Section -->
	
	<!--Main Footer-->
    <footer class="main-footer" style="background-image: url(images/background/2.jpg)">
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
                                    	<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                                    </div>
                                    <div class="text">Meditech is a library of health and medical templates with predefined web elements which helps you to build your medical templates best site Provide Comprehensive Quality Care About Medical Care Health Suspendisse metus turpis.</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fab fa-google"></span></a></li>
										<li><a href="#"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#"><span class="fab fa-skype"></span></a></li>
										<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<div class="footer-title  clearfix">
										<h2>Departments</h2>
										<div class="separator"></div>
									</div>
									<ul class="footer-list">
										<li><a href="#">Surgery & Radiology</a></li>
										<li><a href="#">Family Medicine</a></li>
										<li><a href="#">Women’s Health</a></li>
										<li><a href="#">Optician</a></li>
										<li><a href="#">Pediatrics</a></li>
										<li><a href="#">Dermatology</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<div class="footer-title  clearfix">
										<h2>News Update</h2>
										<div class="separator"></div>
									</div>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-1.jpg" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a></h3>
                                            <div class="post-date">July 11, 2017</div>
                                        </div>
                                    </div>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-2.jpg" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">Achieving Better Health Care One Patient  Time</a></h3>
                                            <div class="post-date">July 11, 2018</div>
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
										<li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br> <a href="tel:+898-68679-575-09">+898 68679 575 09</a></li>
										<li><span class="icon flaticon-message"></span>Do you have a Question? <a href="mailto:info@gmail.com">info@gmail.com</a></li>
									</ul>
									
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">MediTech Helth Care &copy; All Rights Reserved By Expertthemes</div>
			</div>
		</div>
	
	</footer>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fas fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
	
	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>
    
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>
</html>