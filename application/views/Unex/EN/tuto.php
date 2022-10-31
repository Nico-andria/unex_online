<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tutorial</title>
<!-- Stylesheets -->
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/responsive.css') ?>" rel="stylesheet">

<link rel="icon" href="<?php echo base_url('assets/images/logo.png') ?>" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

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
</head>
<body>

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
                                    <li class="dropdown current"><a href="#">Help</a>
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
                <form method="post" action="<?php echo base_url(); ?>EN/Unex/mail">
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
                    <li>+(261) 34 84 786 32</li>
                    <li>+(261) 34 62 706 39</li>
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

   <!-- Vidéos tutos -->
    <div class="container-fluid sponsor-section">
        <span class="float-text">Tutorials</span>
        <div class="container">
            <div class="sec-title light">
                <h2>Tutorials</h2>
            </div>

            <div class="row">
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    
                    <div class="price" style="color: white;">
                        <h2 style="padding-bottom: 10px;" align="center">Beginning</h2>
                        <div style="padding-right: 20px;">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/TXNPhbwA4t4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                            
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    
                    <div class="price" style="color: white;">
                        <h2 style="padding-bottom: 10px;" align="center">Handling</h2>
                        <div style="padding-right: 20px;">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/uHOajNjYqZs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <div class="container">
            <div class="sec-title light">
                <h2>Guide</h2>
            </div>

            <div class="row">
                <div class="pricing-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms" style="padding: 20px;">
                    <a href="<?php echo base_url(); ?>assets/docs/guide/Inscription.pdf" target="_blank" style="color: white;">How to sign up ?</a>
                </div> 
                <div class="pricing-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="600ms" style="padding: 20px;">
                    <a href="<?php echo base_url(); ?>assets/docs/guide/Depot.pdf" target="_blank" style="color: white;">How to deposit funds into your UNEX account ?</a>
                </div> 
                <div class="pricing-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms" style="padding: 20px;">
                    <a href="<?php echo base_url(); ?>assets/docs/guide/numero_compte.pdf" target="_blank" style="color: white;">How to see your account number ?</a>
                </div> 
                <div class="pricing-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms" style="padding: 20px;">
                    <a href="<?php echo base_url(); ?>assets/docs/guide/retrait.pdf" target="_blank" style="color: white;">How to withdraw your funds ?</a>
                </div> 
                <div class="pricing-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="600ms" style="padding: 20px;">
                    <a href="<?php echo base_url(); ?>assets/docs/guide/conversion_devises.pdf" target="_blank" style="color: white;">How to convert funds into your account ?</a>
                </div> 
                <div class="pricing-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms" style="padding: 20px;">
                    <a href="<?php echo base_url(); ?>assets/docs/guide/demande_de_paiement.pdf" target="_blank" style="color: white;">How to ask funds to another user ?</a>
                </div> 
                <div class="pricing-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms" style="padding: 20px;">
                    <a href="<?php echo base_url(); ?>assets/docs/guide/recevoir.pdf" target="_blank" style="color: white;">How to receive funds from another user ?</a>
                </div> 
                <div class="pricing-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms" style="padding: 20px;">
                    <a href="<?php echo base_url(); ?>assets/docs/guide/transfert.pdf" target="_blank" style="color: white;">How to send funds to another user ?</a>
                </div>                
            </div>
        </div>
    </div>
    <!--End Vidéos tutos -->

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
<script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
<script type="text/javascript">
        const accordion = document.getElementsByClassName('contentBx');
        for(i=0;i<accordion.length;i++){
            accordion[i].addEventListener('click',function(){
                this.classList.toggle('active')
            })
        }
</script>
</body>
</html>