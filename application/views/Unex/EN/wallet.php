<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wallet</title>
<!-- Stylesheets -->
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/responsive.css') ?>" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png') ?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/images/logo.png') ?>" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">
<!--===============================================================================================-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="outer-container">
                <div class="clearfix">
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="<?php echo base_url(); ?>EN/Unex/home"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" title="" width="70px"></a></div>
                    </div>
                    
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/home">Home</a></li>
                                    <li class="current"><a href="<?php echo base_url(); ?>EN/Unex/wallet">Wallet</a></li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/crypto">Crypto</a></li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/pricing">Pricing</a></li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/blog">Blog</a></li>
                                    <li class="dropdown"><a href="#">Language</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/crypto">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">FR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Help</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/faq">FAQ</a></li>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/tuto">Tutorial</a></li>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/contacte">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                    <a href="https://client.unex.online/Login" class="theme-btn btn-style-one" style="padding:15px 40px 15px; :hover{color:#f20487;}"><span class="fa fa-sign-in"></span> Sign-up</a>
                             
                            </div>
                        </nav>
                       

                    </div>
                    <!--Outer Box-->
                    <div class="outer-box">
                        <!-- <div class="btn-box">
                            <a href="http://client.unex.online" class="theme-btn btn-style-one">Sign in</a>
                        </div> -->
                        <!-- Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="nav-btn"><span class="icon flaticon-arrows"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->
    </header>
    <!--End Main Header -->

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>
    
    <!-- Hidden Bar -->
    <section class="hidden-bar">
        <div class="inner-box">
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title">
                <h2>Contact Us</h2>
            </div>
            
            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="POST" action="<?php echo base_url(); ?>EN/Unex/mail">
				<div class="form-group validate-input">
					<input id="name" class="input100" type="text" name="name" placeholder="Full name">
					<span class="focus-input100"></span>
				</div>


				<div class="form-group validate-input">
					<input id="email" class="input100" type="email" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>
                
                <div class="form-group validate-input">
                    <input id="subject" class="input100" type="text" name="subject" placeholder="Enter the subject">
                    <span class="focus-input100"></span>
                </div>

				<div class="form-group validate-input">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +44 12 34 567 89">
					<span class="focus-input100"></span>
				</div>


				<div class="form-group validate-input">
					<textarea id="message" class="input100" name="message" placeholder="Your message..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<input class="theme-btn btn-style-one" type="submit" name="send" value="Send now">
						<!-- Send Now
					</button> -->
				</div>
			</form>
            </div>
            
            <!--Contact Info Box-->
            <div class="contact-info-box">
                <ul class="info-list">
                    <li>contact@unex.online</li>
                    <li>+(44) 20 7097 3573</li>
                </ul>
                <ul class="social-list clearfix">
                    <li><a href="https://www.facebook.com/EquityMadagascar" target="_blank">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/company/equitymadagascar/" target="_blank">Linkedin</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo base_url('assets/images/icons/world_map.jpg') ?>);">
        <div class="auto-container">
        <p style="color: #12114a; text-align: center; font-size: 30px;"><b>Send money at low cost to all countries and with major currencies like EUR, GBP, USD using UNEX Wallet.</b></p>
            <ul class="bread-crumb clearfix">
                <li><a href="home.php">Home </a></li>
                <li>Wallet</li>
            </ul>
            
        </div>
    </section>
    <!--End Page Title-->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section-two">
        <div class="anim-icons">
            <span class="icon icon-circle-10"></span>
            <span class="icon icon-twist-line-3"></span>
        </div>
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <span class="icon flaticon-money-bag"></span>
                            <span class="count-text" data-speed="3000" data-stop="250">0</span>+
                            <h4 class="counter-title">Deposit <br>Method</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <span class="icon flaticon-worldwide"></span>
                            <span class="count-text" data-speed="3000" data-stop="60">0</span>+
                            <h4 class="counter-title">Countries <br>Covered</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <span class="icon flaticon-calculator"></span>
                            <span class="count-text" id="transparency">No hidden fees</span>
                            <h4 class="counter-title">Transparency<br></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <span class="icon flaticon-support-1"></span>
                            <span class="count-text" data-speed="3000" data-stop="24"></span>H / 24
                            <p></p>7D / 7
                            <!-- <span class="count-text" data-speed="3000" data-stop="35">0</span>+ -->
                            <!-- <span class="title" id="transparency">24h / 24 <br>7d / 7</span> -->
                            <h4 class="counter-title">Customer Support </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

  
    <!-- Sponsor Section -->
    <section class="sponsor-section style-two" style="background-image: url(<?php echo base_url('assets/images/main-slider/fond-degrade-rose.jpg') ?>);">
        <span class="float-text">About us</span>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure class="image" align="center"><a href="#"><img src="<?php echo base_url('assets/images/icons/iban.png') ?>" alt="" width="400px" height="200px"></a></figure>
                    <p style="color: #12114a; text-align: center; font-size: 20px;" class="text">Wallet account with IBAN</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure class="image" align="center"><a href="#"><img src="<?php echo base_url('assets/images/icons/retrait.png') ?>" alt="" width="90px" height="200px"></a></figure>
                    <p style="color: #12114a; text-align: center; font-size: 20px;" class="text">Access your money easily</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure class="image" align="center"><a href="#"><img src="<?php echo base_url('assets/images/icons/wiretransfer.png') ?>" alt="" width="200px" height="200px"></a></figure>
                    <p style="color: #12114a; text-align: center; font-size: 20px;" class="text">SEPA and SWIFT transfer</p>
                    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure class="image" align="center"><a href="#"><img src="<?php echo base_url('assets/images/icons/transfer.png') ?>" alt="" width="345px" height="200px"></a></figure>
                    <p style="color: #12114a; text-align: center; font-size: 20px;" class="text">Simple money management</p>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Sponsor Section -->

    
     <!-- Main Footer -->
    <div class="main-footer style-two">    
        <div class="anim-icons">
            <span class="icon icon-twist-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-6 wow zoomIn" data-wow-delay="400ms"></span>
            <span class="icon icon-twist-line-2 wow zoomIn" data-wow-delay="800ms"></span>
            <span class="icon icon-circle-8 wow zoomIn" data-wow-delay="1200ms"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Get The Latest Offers</span>
                <h2>Subscribe To Newsletter</h2>
            </div>

            <!--Newsletter Form-->
            <div class="newsletter-form">
                <form method="post" action="<?php echo base_url(); ?>EN/Unex/comingSoon">
                    <div class="form-group">
                        <input type="email" name="field-name" value="" placeholder="email@gmail.com" required>
                        <button type="submit" class="theme-btn btn-style-three">Send</button>
                    </div>
                </form>
            </div>

            <!-- Social Links -->
            <div class="social-links">
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>

            <!-- Footer Bottom -->
                <!-- <div class="copyright footer-nav" align="center"> -->
                <div class="social-links" align="center">
                    <ul>
                        <li><a href="<?php echo base_url('assets/docs/Website-Terms-Conditions.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Terms</a></li>
                        <li>|</li>
                        <li><a href="<?php echo base_url('assets/docs/Website-Privacy-Policy.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Privacy</a></li>
                        <li>|</li>
                        <li><a href="<?php echo base_url('assets/docs/Cookie-UNEX.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Cookies</a></li>
                    </ul> 
                </div>
            <p align="center" id="copyright">Copyright &copy; Unex 2020. All Rights Reserved.</p>

            <p align="center">All content on the site, such as text, graphics, logos, button icons and images ("Content"), all software on these site, as well as the design, composition, selection, arrangement, and presentation of all materials on the site are the property of Equity MG LTD (Company number <a href="https://find-and-update.company-information.service.gov.uk/company/12277150" target="_blank"><u>12277150</u></a>) or its content suppliers and is protected by applicable copyright laws. Except for the limited right to use the site set forth in these Terms of Use, all rights are reserved.</p>
            <!-- Copyright -->
        </div>
    </div>
    <!-- End Footer -->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/appear.js') ?>"></script>
<script src="<?php echo base_url('assets/js/owl.js') ?>"></script>
<script src="<?php echo base_url('assets/js/wow.js') ?>"></script>
<script src="<?php echo base_url('assets/js/countdown.js') ?>"></script>
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
</body>
</html>