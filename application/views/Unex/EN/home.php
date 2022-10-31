<?php
    if(isset($accept_cookie)) {
       setcookie("accept_cookie",md5('true'));
       /*header('Location:home.php');*/
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<!-- Stylesheets -->
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/responsive.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/business-casual.css') ?>" rel="stylesheet">

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
<style type="text/css">
    .intro-text, .intro1-text{
        -webkit-transition: width 2s, height 4s;  For Safari 3.1 to 6.0 
        transition: width 2s, height 4s;
    }
    .intro-text:hover, .intro1-text:hover{
        width: 100%;
        background-color: #fff;
    }
    #wallet_slide, #wallet_slide1{
        color: #472176;
    }
    @media screen and (max-width: 480px) {
        #wallet_slide{
            text-align: right;
            padding-top: 75px;
        }
        #wallet_slide1{

            padding-left: 85px;
            text-align: right;
        }
    }
</style>
</head>

<body>

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
                                    <li class="current"><a href="<?php echo base_url(); ?>EN/Unex/home">Home</a></li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/wallet">Wallet</a></li>
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

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <div class="slide-item style-two" style="background-image: url(<?php echo base_url('assets/images/main-slider/wallet1.jpg') ?>);">
                <div class="anim-icons">
                    <span class="icon icon-circle-11 wow zoomIn" data-wow-delay="400ms"></span>
                    <span class="icon icon-circle-2 wow zoomIn" data-wow-delay="800ms"></span>
                    <span class="icon icon-circle-3 wow zoomIn" data-wow-delay="1200ms"></span>
                    <span class="icon icon-circle-4 wow zoomIn" data-wow-delay="1600ms"></span>
                </div>
                <div class="auto-container clearfix">
                    <div class="content-box" align="center">

                        <h2 id="wallet_slide">Our Wallet</h2>
                        <div class="text" id="wallet_slide1">Accessible, Flexible, secure and open internationally.</div>
                        <div class="btn-box clearfixr">
                            <a href="https://client.unex.online/Register" class="theme-btn btn-style-two">Register Now</a>
                            <a href="<?php echo base_url(); ?>EN/Unex/wallet" class="theme-btn btn-style-two">More Details</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="slide-item style-two" style="background-image: url(<?php echo base_url('assets/images/main-slider/cb1.jpg') ?>);">
                <div class="auto-container clearfix">
                    <div class="content-box" align="center">
                        <h2>Our Cards</h2>
                        <div class="text">Tailored to your needs.<br>With 3D secure.</div>
                        <div class="btn-box clearfixr">
                            <a href="https://client.unex.online/Register" class="theme-btn btn-style-two">Register Now</a>
                            <a href="<?php echo base_url(); ?>EN/Unex/card" class="theme-btn btn-style-two">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Features Section -->
    <section class="features-section">
        <span class="float-text">our feature</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Our Features</h2>
            </div>

            <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded wow fadeInUp" data-wow-delay="300ms" src="<?php echo base_url('assets/images/gallery/international_transfer.jpg') ?>" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded wow fadeInUp" data-wow-delay="600ms">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Unex</span>
              <span class="section-heading-lower">International transfer</span>
            </h2>
            <p>Avec Unex, envoyer et recevoir de l'argent devient un jeu d'enfant. <br>Nous prenons en charge tout type de virement et dans n'importe quel pays, que ce soit des virements SEPA, ACH ou autres.
            </p>
            <div class="intro-button mx-auto">
              <a class="theme-btn btn-style-two" style="border-radius: 10px;" href="<?php echo base_url(); ?>EN/Unex/faq">More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro1">
          <img class="intro1-img img-fluid mb-3 mb-lg-0 rounded wow fadeInUp" data-wow-delay="900ms" src="<?php echo base_url('assets/images/gallery/multicurrency.jpg') ?>" alt="">
          <div class="intro1-text right-0 text-center bg-faded p-5 rounded wow fadeInUp" data-wow-delay="1100ms">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Unex</span>
              <span class="section-heading-lower">Multicurrencies</span>
            </h2>
            <p>Convert easily your money anywhere you are with the best exchange taux.</p>
            <div class="intro1-button mx-auto">
              <a class="theme-btn btn-style-two" style="border-radius: 10px;" href="<?php echo base_url(); ?>EN/Unex/faq">More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded wow fadeInUp" data-wow-delay="1400ms" src="<?php echo base_url('assets/images/gallery/pay.png') ?>" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded wow fadeInUp" data-wow-delay="1700ms">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Unex</span>
              <span class="section-heading-lower">Flexible method of deposit</span>
            </h2>
            <p>Déposez des fonds sur votre compte à l'aide des moyens de paiement locaux, à savoir le Mobile Money tel que Mvola, Airtel Monnaie et Orange Monnaie, ainsi que des autres portefeuilles électroniques comme PayPal, Skrill, Payoneer, etc...
            </p>
            <div class="intro-button mx-auto">
              <a class="theme-btn btn-style-two" style="border-radius: 10px;" href="<?php echo base_url(); ?>EN/Unex/faq">More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro1">
          <img class="intro1-img img-fluid mb-3 mb-lg-0 rounded wow fadeInUp" data-wow-delay="2000ms" src="<?php echo base_url('assets/images/gallery/dashboard.jpg') ?>" alt="">
          <div class="intro1-text right-0 text-center bg-faded p-5 rounded wow fadeInUp" data-wow-delay="2300ms">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Unex</span>
              <span class="section-heading-lower">Comfortable plateform</span>
            </h2>
            <p>Manage your account anywhere you are with our plateform, it is simple, practice and secured.
            </p>
            <div class="intro1-button mx-auto">
              <a class="theme-btn btn-style-two" style="border-radius: 10px;" href="https://client.unex.online/Register">More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
        </div>
    </section>
    <!--End Features Section -->

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="anim-icons">
            <span class="icon icon-circle-1 wow zoomIn"></span>
            <span class="icon icon-circle-2 wow zoomIn" data-wow-delay="600ms"></span>
            <span class="icon icon-circle-3 wow zoomIn" data-wow-delay="1200ms"></span>
            <span class="icon icon-circle-4 wow zoomIn" data-wow-delay="1800ms"></span>
        </div>
        <span class="float-text">Card Pricing</span>
        <div class="auto-container">
            <div class="sec-title light">
                <h2>Card Pricing</h2>
            </div>

            <div class="row no-gutters">
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="price">$5</div>
                        <figure class="image"><img src="<?php echo base_url('assets/images/icons/black_card.png') ?>" alt="" width="250px" id="card_home"></figure>
                        <h4 class="title">Black card</h4>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="price">$10</div>
                        <figure class="image"><img src="<?php echo base_url('assets/images/icons/gold_card.png') ?>" alt="" width="250px" id="card_home"></figure>
                        <h4 class="title">Gold card</h4>
                        <div class="btn-box">
                            <a href="<?php echo base_url(); ?>EN/Unex/pricing#pricing" class="theme-btn">More details</a>
                        </div> 
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="price">$20</div>
                        <figure class="image"><img src="<?php echo base_url('assets/images/icons/platinium_card.png') ?>" alt="" width="235px" id="card_home"></figure>
                        <h4 class="title">Platinum card</h4>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--End Pricing Section -->

<!-- Speakers Section Two -->
    <section class="speakers-section-two">
        <span class="float-text">Our Team</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Our Team</h2>
            </div>            

            <div class="speakers-area clearfix">
                <!-- Feature Block -->
                <div class="speaker-block-two wow fadeInUp">
                    <div class="image-box img-thumbnail">
                        <figure class="image"><img src="<?php echo base_url('assets/images/clients/Fy.jpg') ?>" alt=""></figure>
                        <div class="overlay-box">
                            <a href="#popup_11" class="link view-speaker ts-image-popup" data-effect="mfp-zoom-in"><span class="flaticon-add-1"></span></a>
                            <div class="info">
                                <h5 class="name">RABY Fy</h5>
                            </div>
                        </div>
                        <div class="sec-title">
                            <h2 style="padding-top: 50px;">COO</h2>
                        </div>
                    </div>

                    <!-- popup start-->
                    <div id="popup_11" class="container ts-speaker-popup mfp-hide">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-img">
                                    <img src="<?php echo base_url('assets/images/clients/Fy.jpg') ?>" alt="">
                                </div>
                            </div><!-- col end-->
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-content">
                                    <h3 class="ts-title">RABY Fy</h3>
                                    <span class="speakder-designation"></span>
                                    <div class="col-lg-6">
                                            <div class="speaker-session-info">
                                                <p>Chief Officer Officer</p>
                                            </div>
                                        </div>
                                    
                                    <div class="ts-speakers-social" align="center">
                                        <a href="https://www.linkedin.com/in/fy-raby-129a8218a/" target="_blank" style="font-size: 50px;"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div><!-- ts-speaker-popup-content end-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="speaker-block-two wow fadeInUp" data-wow-delay="400ms">
                    <div class="image-box img-thumbnail">
                        <figure class="image"><img src="<?php echo base_url('assets/images/clients/Schubert.jpg') ?>" alt=""></figure>
                        <div class="overlay-box">
                            <a href="#popup_12" class="link view-speaker ts-image-popup" data-effect="mfp-zoom-in"><span class="flaticon-add-1"></span></a>

                            <div class="info">
                                <h5 class="name">RAKOTOMALALA Schubert</h5>
                            </div>
                        </div>
                        <div class="sec-title">
                            <h2 style="padding-top: 50px;">CEO</h2>
                        </div>
                    </div>

                    <!-- popup start-->
                    <div id="popup_12" class="container ts-speaker-popup mfp-hide">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-img">
                                    <img src="<?php echo base_url('assets/images/clients/Schubert.jpg') ?>" alt="">
                                </div>
                            </div><!-- col end-->
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-content">
                                    <h3 class="ts-title">RAKOTOMALALA Ravo Marie Schubert</h3>
                                    <div class="col-lg-6">
                                            <div class="speaker-session-info">
                                                <p>Chief Executive Officer</p>
                                            </div>
                                        </div>
                                    
                                    <div class="ts-speakers-social" align="center">
                                        <a href="https://www.linkedin.com/in/schubert-rakotomalala-150a9816b/" target="_blank" style="font-size: 50px;"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div><!-- ts-speaker-popup-content end-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="speaker-block-two wow fadeInUp" data-wow-delay="800ms">
                    <div class="image-box img-thumbnail">
                        <figure class="image"><img src="<?php echo base_url('assets/images/clients/Rado.jpg') ?>" alt=""></figure>
                        <div class="overlay-box">
                            <a href="#popup_13" class="link view-speaker ts-image-popup" data-effect="mfp-zoom-in"><span class="flaticon-add-1"></span></a>

                            <div class="info">
                                <h5 class="name">RAVELONJATO Rado</h5>
                            </div>
                        </div>
                        <div class="sec-title">
                            <h2 style="padding-top: 50px;">CBDO</h2>
                        </div>
                    </div>

                    <!-- popup start-->
                    <div id="popup_13" class="container ts-speaker-popup mfp-hide">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-img">
                                    <img src="<?php echo base_url('assets/images/clients/Rado.jpg') ?>" alt="">
                                </div>
                            </div><!-- col end-->
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-content">
                                    <h3 class="ts-title">RAVELONJATO Rado Mickaël</h3>
                                    <div class="col-lg-6">
                                            <div class="speaker-session-info">
                                                <p>Chief Business Development Officer</p>
                                            </div>
                                        </div>
                                    
                                    <div class="ts-speakers-social" align="center">
                                        <a href="https://www.linkedin.com/in/rado-micka%C3%ABl-ravelonjato-3a946217a/" target="_blank" style="font-size: 50px;"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div><!-- ts-speaker-popup-content end-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="speaker-block-two wow fadeInUp" data-wow-delay="1200ms">
                    <div class="image-box img-thumbnail">
                        <figure class="image"><img src="<?php echo base_url('assets/images/clients/Nirina.jpg') ?>" alt=""></figure>
                        <div class="overlay-box">
                            <a href="#popup_14" class="link view-speaker ts-image-popup" data-effect="mfp-zoom-in"><span class="flaticon-add-1"></span></a>

                            <div class="info">
                                <h5 class="name">ANDRIAMASINORO Nirina</h5>
                            </div>
                        </div>
                        <div class="sec-title">
                            <h2 style="padding-top: 50px;">CMO</h2>
                        </div>
                    </div>

                    <!-- popup start-->
                    <div id="popup_14" class="container ts-speaker-popup mfp-hide">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-img">
                                    <img src="<?php echo base_url('assets/images/clients/Nirina.jpg') ?>" alt="">
                                </div>
                            </div><!-- col end-->
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-content">
                                    <h3 class="ts-title">ANDRIAMASINORO Nirina Tantely</h3>
                                    <div class="col-lg-6">
                                            <div class="speaker-session-info">
                                                <p>Chief Marketing Officer</p>
                                            </div>
                                        </div>
                                    
                                    <div class="ts-speakers-social" align="center">
                                        <a href="#" target="_blank" style="font-size: 50px;"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div><!-- ts-speaker-popup-content end-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="speaker-block-two wow fadeInUp">
                    <div class="image-box img-thumbnail">
                        <figure class="image"><img src="<?php echo base_url('assets/images/clients/Nico.jpg') ?>" alt=""></figure>
                        <div class="overlay-box">
                            <a href="#popup_15" class="link view-speaker ts-image-popup" data-effect="mfp-zoom-in"><span class="flaticon-add-1"></span></a>

                            <div class="info">
                                <h5 class="name">ANDRIAMIHANTA Nico</h5>
                            </div>
                        </div>
                        <div class="sec-title">
                            <h2 style="padding-top: 50px;">CTO</h2>
                        </div>
                    </div>

                    <!-- popup start-->
                    <div id="popup_15" class="container ts-speaker-popup mfp-hide">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-img">
                                    <img src="<?php echo base_url('assets/images/clients/Nico.jpg') ?>" alt="">
                                </div>
                            </div><!-- col end-->
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-content">
                                    <h3 class="ts-title">ANDRIAMIHANTA Iangalinirina Nico</h3>
                                    <div class="col-lg-6">
                                            <div class="speaker-session-info">
                                                <p>Chief Technical Officer</p>
                                            </div>
                                        </div>
                                    
                                    <div class="ts-speakers-social" align="center">
                                        <a href="https://www.linkedin.com/in/nico-andriamihanta-69a422140/" target="_blank" style="font-size: 50px;"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div><!-- ts-speaker-popup-content end-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="speaker-block-two wow fadeInUp" data-wow-delay="400ms">
                    <div class="image-box img-thumbnail">
                        <figure class="image"><img src="<?php echo base_url('assets/images/clients/Miangaly.jpg') ?>" alt=""></figure>
                        <div class="overlay-box">
                            <a href="#popup_16" class="link view-speaker ts-image-popup" data-effect="mfp-zoom-in"><span class="flaticon-add-1"></span></a>

                            <div class="info">
                                <h5 class="name">R. Miangaly</h5>
                            </div>
                        </div>
                        <div class="sec-title">
                            <h2 style="padding-top: 50px;">CFO</h2>
                        </div>
                    </div>

                    <!-- popup start-->
                    <div id="popup_16" class="container ts-speaker-popup mfp-hide">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-img">
                                    <img src="<?php echo base_url('assets/images/clients/Miangaly.jpg') ?>" alt="">
                                </div>
                            </div><!-- col end-->
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-content">
                                    <h3 class="ts-title">RANDRIANOMENJANAHARY Miangaly</h3>
                                    <div class="col-lg-6">
                                            <div class="speaker-session-info">
                                                <p>Chief Financial Officer</p>
                                            </div>
                                        </div>
                                    
                                    <div class="ts-speakers-social" align="center">
                                        <a href="https://www.linkedin.com/in/miangaly-randrianomenjanahary-776038170/" style="font-size: 50px;"><i class="fab fa-linkedin" target="_blank"></i></a>
                                    </div>
                                </div><!-- ts-speaker-popup-content end-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Speakers Section -->

    <!-- Location Section -->
    <section class="location-section">
        <span class="float-text">Get Direction</span>
        <div class="anim-icons">
            <span class="icon icon-dots wow zoomIn"></span>
            <span class="icon icon-dots-2"></span>
            <span class="icon icon-lines"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Locations</h2>
            </div>

            <div class="row">
                <!-- Block Column -->
                <div class="blocks-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Location Block -->
                        <div class="location-block wow fadeInUp">
                            <div class="inner-box">
                                <!-- <span class="icon icon-balloon"></span> -->
                                <div class="icon-box"><img src="<?php echo base_url('assets/images/icons/uk.png') ?>" width="50px"></div>
                                <h4><a href="#">United Kingdom</a></h4>
                                <div class="text">Companies House, number 12277150  Address : 71-75, Shelton Street, London, Greater London, WC2H 9JQ, UNITED KINGDOM</div>
                            </div>
                        </div>

                        <!-- Location Block -->
                        <div class="location-block wow fadeInUp">
                            <div class="inner-box">
                                <!-- <span class="icon icon-information"></span> -->
                                <div class="icon-box"><img src="<?php echo base_url('assets/images/icons/mdg.png') ?>" width="50px"></div>
                                <h4><a href="#">Madagascar</a></h4>
                                <div class="text">VI 22 Ambatoroka Tananarive, 101</div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="map-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight">
                        <div class="image-box">
                            <figure class="image"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.907722327096!2d-0.12573508416523263!3d51.514908917974964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ccaaa0b0b7%3A0xbe144a0754857ae1!2s71-75%20Shelton%20St%2C%20West%20End%2C%20London%20WC2H%209JQ%2C%20Royaume-Uni!5e0!3m2!1sfr!2smg!4v1605509689830!5m2!1sfr!2smg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Location Section -->

        <!-- Main Footer -->
    <div class="main-footer">    
        <div class="anim-icons">
            <span class="icon icon-twist-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-6 wow zoomIn" data-wow-delay="400ms"></span>
            <span class="icon icon-twist-line-2 wow zoomIn" data-wow-delay="800ms"></span>
            <span class="icon icon-circle-8 wow zoomIn" data-wow-delay="1200ms"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center light">
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
                    <li><a href="https://www.facebook.com/EquityMadagascar" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="https://www.linkedin.com/company/equitymadagascar/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>

            <!-- Footer Nav -->
            <div class="footer-nav">
                <ul>
                    <li><a href="<?php echo base_url(); ?>EN/Unex/home">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="<?php echo base_url(); ?>EN/Unex/pricing">Pricing</a></li>
                    <li><a href="<?php echo base_url(); ?>EN/Unex/contacte">Contact Us</a></li>
                </ul>                                  
            </div>

            <!-- Copyright -->
            
            <div class="copyright footer-nav">
                <ul>
                    <li><a href="<?php echo base_url('assets/docs/Website-Terms-Conditions.pdf') ?>') ?>" target="_blank">Terms</a></li>
                    <li>|</li>
                    <li><a href="<?php echo base_url('assets/docs/Website-Privacy-Policy.pdf') ?>') ?>" target="_blank">Privacy</a></li>
                    <li>|</li>
                    <li><a href="<?php echo base_url('assets/docs/Cookie-UNEX.pdf') ?>') ?>" target="_blank">Cookies</a></li>
                </ul> 

                <div class="copyright">Copyright &copy; Unex 2020. All Rights Reserved.</div>
                <p align="center">All content on the site, such as text, graphics, logos, button icons and images ("Content"), all software on these site, as well as the design, composition, selection, arrangement, and presentation of all materials on the site are the property of Equity MG LTD (Company number <a href="https://find-and-update.company-information.service.gov.uk/company/12277150" target="_blank"><u>12277150</u></a>) or its content suppliers and is protected by applicable copyright laws. Except for the limited right to use the site set forth in these Terms of Use, all rights are reserved.</p>
            </div>
        </div>

    </div>
    <!-- End Footer -->
    

<?php
if(!isset($_COOKIE['accept_cookie'])) {
?>
<div class="cookie-alert" id="cookie">
    <div class="text_cookie">
        By continuing to browse this site, you accept the use of cookies to provide you with content and services tailored to your areas of interest.
    
    </div>
    <div class="button_cookie">
        <!-- <a href="accept_cookie.php">OK</a> -->
        <!-- <button type="submit" id="hide" class="theme-btn btn-style-three" name="accept_cookie">Accepter</button> -->
        <button type="submit" id="hide" class="theme-btn btn-style-three" name="accept_cookie">Accept</button>
    </div>
</div>
<?php
}
?>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/magnific-popup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/appear.js') ?>"></script>
<script src="<?php echo base_url('assets/js/owl.js') ?>"></script>
<script src="<?php echo base_url('assets/js/wow.js') ?>"></script>
<script src="<?php echo base_url('assets/js/countdown.js') ?>"></script>
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/cookies.js') ?>"></script>
<script type="text/javascript">
    document.getElementById("hide").addEventListener("click",function(){
        var hidediv=document.getElementById("cookie");
        if(hidediv!=="none"){
            <?php $cookie=md5('accept'); ?>
            document.cookie="accept_cookie=<?php echo $cookie; ?>";
            hidediv.style.display="none";
        }
    })
</script>
</body>
</html>