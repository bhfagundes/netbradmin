<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mehedi.asiandevelopers.com/demo/woteen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2019 02:36:19 GMT -->
<head>
	<meta charset="UTF-8">
	<title>NetComboBR</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<!-- master stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    

	<!-- Responsive stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>

<body>
<div class="boxed_wrapper">

<div class="preloader"></div> 

<!-- Start Top Bar style1 -->  
<section class="top-bar-style1">
    <div class="border-box">
        <div class="border-1"></div>    
        <div class="border-2"></div>    
        <div class="border-3"></div>
            
        <div class="border-4"></div>
        <div class="border-5"></div>
        <div class="border-6"></div>
            
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="top-style1 clearfix">
                    <div class="top-left-style1 float-left clearfix">
                        <ul class="top-contact-info fix">
                            <li><span class="flaticon-user"></span>Customer Sign In</li>
                            <li><span class="flaticon-auricular-phone-symbol-in-a-circle"></span>Call Now 666 888 000</li>
                        </ul>
                    </div>
                    <div class="top-right-style1 float-right">
                        <ul class="sociallinks-style-one float-left fix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>
<!-- End Top Bar style1 -->  

<!--Start Main Header-->
<header class="main-header stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="main-box">
                    <div class="inner-container clearfix">
                        <div class="logo-box">
                            <a href="/">
                                <img src="{{ asset('images/logo.png') }}" alt="Awesome Logo">
                            </a>
                        </div>
                        <div class="nav-outer clearfix">
                            <nav class="main-menu clearfix">
                                <div class="navbar-header clearfix">   	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                @include('site.menu')
                            </nav>      
                        </div>
                        <div class="header-right clearfix">
                            <div class="button">
                                <a class="btn-one" href="/login">Login</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Main Header-->   
 
<!--Main Slider-->
@yield('content')

  
<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50">
                    <div class="title">
                        <h3>About Woteen</h3>
                    </div>
                    <div class="company-info">
                        <p>Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum Take a look at our round up of the best shows coming soon to your telly box has been the is industrys.</p>
                        <div class="read-more">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                <div class="single-footer-widget marbtm50">
                    <div class="title">
                        <h3>Company</h3>
                    </div>
                    <ul class="page-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Missions</a></li>
                        <li><a href="#">Our Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>  
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                <div class="single-footer-widget marbtm50">
                    <div class="title">
                        <h3>Services</h3>
                    </div>
                    <ul class="services-links">
                        <li><a href="#">Broadband</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Phone</a></li>
                        <li><a href="#">Super Fiber</a></li>
                    </ul>   
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="single-footer-widget pdtop50">
                    <div class="title">
                        <h3>Newsletter</h3>
                    </div>
                    <form class="newsletter-form" action="#">
                        <input type="email" name="email" placeholder="Your Email">
                        <button class="btn-one" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="border-box">
        <div class="border-1"></div>    
        <div class="border-2"></div>    
        <div class="border-3"></div>
            
        <div class="border-4"></div>
        <div class="border-5"></div>
        <div class="border-6"></div>
            
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="inner clearfix">
                    <div class="single copyright-text">
                        <p>© Copyright 2019 by<br> <a href="#">woteen</a></p>
                    </div>
                    <div class="single footer-bottom-contact-info">
                        <ul class="left">
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:needhelp@woteen.com">needhelp@woteen.com</a></li>
                            <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="tel:666888000">666 888 000</a></li>
                        </ul>
                    </div>
                    <div class="single footer-bottom-contact-info">
                        <ul class="right">
                            <li>855 Road Broklyn Street, 600</li>
                            <li>New York, USA</li>
                        </ul>
                    </div>
                    <div class="single footer-social-links">
                        <ul class="sociallinks-style-two fix">
                            <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                            </li>
                            <li class="wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>   
            </div>
        </div>
    </div>    
</section>
<!--End footer bottom area-->   



</div>  

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target thm-bg-clr" data-target="html"><span class="fa fa-angle-up"></span></div>


<!-- main jQuery -->
<script src="js/jquery.js"></script>
<!-- Wow Script -->
<script src="js/wow.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- Fancybox Script -->
<script src="js/jquery.fancybox.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<script src="js/appear.js"></script>
<script src="js/knob.js"></script>
<!-- owl carousel -->
<script src="js/owl.js"></script>
<!-- validate -->
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<!-- Easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- Gmap helper -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<!--Gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- jQuery ui js -->
<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- jQuery timepicker js -->
<script src="assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script> 
<!-- html5lightbox js -->                              
<script src="assets/html5lightbox/html5lightbox.js"></script>


<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<!-- thm custom script -->
<script src="js/custom.js"></script>



</body>

<!-- Mirrored from mehedi.asiandevelopers.com/demo/woteen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2019 02:36:19 GMT -->
</html>