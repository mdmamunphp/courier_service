<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Roll Express </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/home/pre_express.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('public/home/assets/css/style.css')}}">
</head>
<body>












<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('public/home/pre_express.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>     
                                    <li>Phone: +88 01828020427</li>
                                    <li>Email: rollexpress2020@gmail.com</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/Roll-express-104614961387604" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo <img src="public/home/assets/img/logo/roll.png" height="39px" width="171px"alt="">-->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('public/home/pre_express.png')}}" height="39px" width="150px" alt=""></a>
                                <h4 style="color:#ffffff;margin-left:25px">Roll Express</h4>
                             
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                               
                                    <nav> 
                                        <ul id="navigation">       
                                        <!-- use for google translate  -->   
                                        <!-- <div id="google_translate_element"></div>      -->
                                        <!-- use for google translate  -->    

                                            <!-- <li><a href="index.html">Home</a></li> -->
                                            <!-- <li><a href="about.html">About</a></li> -->
                                            <!-- <li><a href="services.html">Services</a></li> -->
                                            <li><a href="{{url('login_page')}}">Login</a></li>

                                            <!-- <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li><a href="contact.html">Contact</a></li> -->
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <!-- <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="contact.html" class="btn header-btn">Get A Qoue</a>
                                </div> -->
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
   
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
               
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1 >আপনার ব্যবসার জন্য <span>নির্ভরযোগ্য ডেলিভারি পার্টনার</span></h1>
                            </div>
                            <!--Hero form -->
                            <form action="{{URL::to('home_product_details')}}" method="post" class="search-box">
                                @csrf
                                <div class="input-form">
                                    <input type="text" name="tracking" placeholder="আপনার পার্সেল আইডি">
                                </div>
                                <div class="search-form">
                                    <a href="#">ট্র্যাক <input type="submit"hidden></a>
                                    <!-- <input type="submit" value="ট্র্যাক"> -->
                                </div>	
                            </form>	
                            <!-- Hero Pera -->
                            <div class="hero-pera">
                                <p>আপনার পার্সেল ট্র্যাক করুন</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? our info Start -->
  <!--  <div class="our-info-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="info-caption">
                            <p>Call Anytime</p>
                            <span>01828020427</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="info-caption">
                            <p>Sunday CLOSED</p>
                            <span>Mon - Sat 8.00 - 18.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-place"></span>
                        </div>
                        <div class="info-caption">
                            <p>Khilgaon,560/c</p>
                            <span>Bangladesh, Dhaka - 1219</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- our info End -->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                       <!-- <span>Our Services</span>-->
                        <h2>কেন Roll Express</h2>
						<p>roll express আপনার ব্যবসার গুরুত্ব বোঝে,প্রদান করে ব্যবসার জন্য সবচেয়ে সুবিধাজনক ডেলিভারি সার্ভিস</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                       <!--  <div class="cat-icon">
                            <span class="flaticon-shipped"></span>
                        </div>-->
						<div class="cat-icon">
								<span class="">
									<i class="fas fa-address-card"></i>
								</span>
							 </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">রিয়েল টাইম অর্ডার ট্র্যাকিং</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <!-- <div class="cat-icon">
                            <span class="flaticon-ship"></span>
                        </div>-->
							<div class="cat-icon">
								<span class="">
									<i class="far fa-money-bill-alt"></i>
								</span>
							 </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">০% COD. চার্জ</a></h5>
                            <p>ঢাকার ভেতর ডেলিভারি দিতে, নেই কোন “ক্যাশ অন ডেলিভারি” চার্জ।</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                      <!--   <div class="cat-icon">
                            <span class="flaticon-plane"></span>
                        </div>-->
						<div class="cat-icon">
							
                       <span class=""><i class="fas fa-map-marker-alt"></i></span>
                        </div>
						
                        <div class="cat-cap">
                            <h5><a href="services.html">ঢাকার ভিতরে ডেলিভারি সার্ভিস</a></h5>
                            <p>ঢাকা সিটিকে ৪ টি ভাগে ভাগ করে  দ্রুত ডেলিভারির নিঃশ্চয়তা। </p>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                      <!--   <div class="cat-icon">
                            <span class="flaticon-plane"></span>
                        </div>-->
						<div class="cat-icon"> 
							<span class="">
						<i class="fab fa-accessible-icon"></i>
							</span>
						</div>
                        <div class="cat-cap">
                            <h5><a href="services.html">দ্রুত ডেলিভারি</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                      <!--   <div class="cat-icon">
                            <span class="flaticon-plane"></i></span>
                        </div>-->
						<div class="cat-icon"> 
							<span class="">
							
									<i class="fas fa-mobile-alt"></i>
							</span>
						</div>
                        <div class="cat-cap">
                            <h5><a href="services.html">পেমেন্ট সুবিধা :</a></h5>
                            <p>অর্ডারকৃত পন্য ডেলিভারির পরের দিনই হেনক্যাস,ব্যাংক ও বিকাশের মাধ্যমে পেমেন্ট। </p>
                        </div>
                    </div>
                </div>
				 <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
						<div class="cat-icon">
							
                       <span class=""><i class="fas fa-truck"></i></span>
                        </div>
						
                        <div class="cat-cap">
                            <h5><a href="services.html">পন্য পিক আপ সুবিধা </a></h5>
                            <p> Roll Star সদস্যদের মাধ্যমে সময় মতো মারচেন্ট পন্য পিক আপ সুবিধা।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Area End -->
    <!--? About Area Start -->
   <!-- <div class="about-low-area padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                       
                        <div class="section-tittle mb-35">
                            <span>About Our Company</span>
                            <h2>Safe Logistic & Transport  Solutions That Saves our Valuable Time!</h2>
                        </div>
                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                        <p>Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                        <a href="about.html" class="btn">More About Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  
                    <div class="about-img ">
                        <div class="about-font-img">
                            <img src="public/home/assets/img/gallery/about2.png" alt="">
                        </div>
                        <div class="about-back-img d-none d-lg-block">
                            <img src="public/home/assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- About Area End -->
    <!--? contact-form start -->
    <!-- <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="public/home/assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row justify-content-end">
            
                <div class="col-xl-8 col-lg-9">
                    <div class="contact-form-wrapper">
                     
                        <div class="row">
                            <div class="col-lg-12">
                               
                                <div class="section-tittle mb-50">
                                    <span>Get a Qote For Free</span>
                                    <h2>Request a Free Quote</h2>
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
                                </div>
                            </div>
                        </div>
                     
                        <form action="#" class="contact-form">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="select-items">
                                        <select name="select" id="select1">
                                            <option value="">Freight Type</option>
                                            <option value="">Catagories One</option>
                                            <option value="">Catagories Two</option>
                                            <option value="">Catagories Three</option>
                                            <option value="">Catagories Four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="City of Departure">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Incoterms">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Weight">
                                    </div>
                                </div>
                               
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Height">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Width">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="length">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="radio-wrapper mb-30 mt-15">
                                        <label>Extra services:</label>
                                        <div class="select-radio">
                                            <div class="radio">
                                                <input id="radio-1" name="radio" type="radio" checked="">
                                                <label for="radio-1" class="radio-label">Freight</label>
                                            </div>
                                            <div class="radio">
                                                <input id="radio-2" name="radio" type="radio">
                                                <label for="radio-2" class="radio-label">Express Delivery</label>
                                            </div>
                                            <div class="radio">
                                                <input id="radio-4" name="radio" type="radio">
                                                <label for="radio-4" class="radio-label">Insurance</label>
                                            </div>
                                            <div class="radio">
                                                <input id="radio-5" name="radio" type="radio">
                                                <label for="radio-5" class="radio-label">Packaging</label>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                              
                                <div class="col-lg-12">
                                    <button name="submit" class="submit-btn">Request a Quote</button>
                                </div>
                            </div>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- contact-form end -->
    <!--Team Ara Start -->
   <!-- <div class="team-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                  
                    <div class="section-tittle text-center mb-70">
                        <span>Our Team Mambers</span>
                        <h2>What We Can Do For You</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="public/home/assets/img/gallery/team1.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                              
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="public/home/assets/img/gallery/team2.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>

                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="public/home/assets/img/gallery/team3.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                              
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Team Ara End -->
    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding section-bg" data-background="{{ asset('public/home/assets/img/gallery/section_bg04.jpg')}}">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-25">
                        <span>Clients Testimonials</span>
                        <h2>What Our Clients Say!</h2>
                    </div> 
                    <div class="h1-testimonial-active mb-70">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('public/home/assets/img/gallery/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jhaon smith</span>
                                        <p>Creative designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('public/home/assets/img/gallery/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jhaon smith</span>
                                        <p>Creative designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Start -->
                <div class="col-xl-4 col-lg-5 col-md-8">
				<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F104614961387604%2Fvideos%2F353550699223123%2F&show_text=0&width=560" width="560" height="316" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                    <!--<div class="testimonial-form text-center">
                          <h3>সর্বদা শুনছি, always understanding.</h3>
                  <input type="text" placeholder="Enter Your Email">
                        <button name="submit" class="submit-btn">Subscribe</button>
						
                    </div>-->
                </div>
                <!-- Form End -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!--? Blog Area Start -->
    <div class="home-blog-area section-padding30">
        <div class="container">
          
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-70">
                         <!-- <span>Our Recent news</span>-->
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="public/home/assets/b-1.jpg" height="280" alt="">
                            </div>
                        </div>
                      <div class="blog-caption">
                           <!--  <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('public/home/assets/b-2.jpg')}}" height="280" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                           <!--  <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('public/home/assets/b4.jpg')}}" alt="">
                            </div>
                        </div>
                          <div class="blog-caption">
                          <!--   <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
</main>



<section>
<div class="row">
<div class="col-sm-6">
 <img src="{{ asset('public/home/assets/map-2.jpg')}}" height="450" width="100%"alt="">
</div>
<div class="col-sm-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9586662160946!2d90.41379988407179!3d23.74885333513149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b86341f8bd53%3A0x9f25e5acdff8eef3!2sAtish%20Deepankar%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1601697295632!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

</div>
</section>
<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- footer Heading -->
                <div class="footer-heading">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>  Roll EXpress  হট লাইন</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <span class="contact-number f-right">+8801828020427</span>
                        </div>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>গুরুত্বপূর্ণ লিংক</h4>
                                <ul>
                                    <li><a href="#">প্রাইভেসি পলিসি</a></li>
                                    <li><a href="#">কভারেজ এরিয়া</a></li>                                   
                                </ul>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>আামাদের সাথে যোগাযোগ করুন</h4>
                                <ul>
                                    <li><a href="#">+8801828020427</a></li>
                                    <li><a href="#">rollexpress2020@gmail.com</a></li>                                   
                                </ul>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>আামাদের ঠিকানা</h4>
                                <ul>
                                    <li><a href="#">৫৬০/সি খিলগাঁও, ঢাকা-১২১৯</a></li>
                                    <li><a href="#">বাংলাদেশ</a></li>                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Open hour</h4>
                                <ul>
                                    <li><a href="#">Monday 11am-7pm</a></li>
                                    <li><a href="#"> Tuesday-Friday 11am-8pm</a></li>
                                    <li><a href="#"> Saturday 10am-6pm</a></li>
                                    <li><a href="#"> Sunday 11am-6pm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>RESOURCES</h4>
                                <ul>
                                    <li><a href="#">Home Insurance</a></li>
                                    <li><a href="#">Travel Insurance</a></li>
                                    <li><a href="#"> Car Insurance</a></li>
                                    <li><a href="#"> Business Insurance</a></li>
                                    <li><a href="#"> Heal Insurance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('public/home/pre_express.png')}}" height="39px" width="150px" alt=""></a>
                                <h4 style="color:#ffffff;margin-left:25px">Roll Express</h4>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <!-- <p class="info1">GThe trade war currently ensuing between te US anfd several natxions around thdhe globe, most fiercely with.</p> -->
                                </div>
                            </div>
                            <!-- Footer Social -->
                            <div class="footer-social ">
                                <a href="https://www.facebook.com/Roll-express-104614961387604"><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://rollexpressbd.com" target="_blank">Roll Express</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- use for google translate  -->
<!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
<!--end use for google translate  -->
    <!-- JS here -->

    <script src="{{ asset('public/home/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('public/home/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('public/home/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('public/home/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('public/home/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/animated.headline.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('public/home/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/jquery.sticky.js')}}"></script>
    
    <!-- contact js -->
    <script src="{{ asset('public/home/assets/js/contact.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/jquery.form.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/mail-script.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset('public/home/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('public/home/assets/js/main.js')}}"></script>
    
</body>
</html>