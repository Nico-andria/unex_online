<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Blog Single</title>
<!-- Stylesheets -->
<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/business-casual.css'); ?>" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">

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
                        <div class="logo"><a href="<?php echo base_url(); ?>FR/Unex/home"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" title="" width="70px"></a></div>
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
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/home">Home</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/wallet">Wallet</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">Crypto</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/pricing">Pricing</a></li>
                                    <li class="current"><a href="<?php echo base_url(); ?>FR/Unex/blog">Blog</a></li>
                                    <li class="dropdown"><a href="#">Languages</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/crypto">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">FR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Help</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/faq">FAQ</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/tuto">Tutorial</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/contacte">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                    <a href="https://client.unex.online/Login" class="theme-btn btn-style-one" style="padding:15px 40px 15px; :hover{color:#f20487;}"><span class="fa fa-sign-in"></span> Sign in</a>
                             
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
                <h2>Contactez-nous</h2>
            </div>
            
            <!--Appointment Form-->
            <div class="appointment-form">
        <form method="POST" action="<?php echo base_url(); ?>FR/Unex/mail">
                <div class="form-group validate-input">
                    <input id="name" class="input100" type="text" name="name" placeholder="Entrez votre nom">
                    <span class="focus-input100"></span>
                </div>


                <div class="form-group validate-input">
                    <input id="email" class="input100" type="email" name="email" placeholder="Ex. example@email.com">
                    <span class="focus-input100"></span>
                </div>


                <div class="form-group validate-input">
                    <input id="subject" class="input100" type="text" name="subject" placeholder="Entrez le sujet de votre message">
                    <span class="focus-input100"></span>
                </div>


                <div class="form-group validate-input">
                    <input id="phone" class="input100" type="text" name="phone" placeholder="Ex. +44 12 34 567 89">
                    <span class="focus-input100"></span>
                </div>


                <div class="form-group validate-input">
                    <textarea id="message" class="input100" name="message" placeholder="Votre message..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <input class="theme-btn btn-style-one" type="submit" name="send" value="Envoyer">
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
    <section class="page-title" style="background: linear-gradient(45deg, rgba(68, 34, 167, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url(<?php echo base_url(); ?>assets/images/resource/hero-bg.jpg) center center no-repeat; background-size: cover;">
        <div class="auto-container">
            <span class="float-text">Blog</span>
            <h1>Blog Single</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home </a></li>
                <li>Blog Single</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="anim-icons">
            <span class="icon icon-circle-12 wow zoomIn"></span>
            <span class="icon icon-circle-9 wow zoomIn" data-wow-delay="500ms"></span>
            <span class="icon icon-twist-line-3 wow zoomIn" data-wow-delay="800ms"></span>
        </div>

        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="image-box">
                            <figure class="image wow fadeIn"><img src="<?php echo base_url(); ?>assets/images/icons/multicurrency.png" alt=""></figure>
                        </div>
                        <div class="lower-content">
                            <h3>The 15 Best San Francisco Venues for Your Next Conference.</h3>
                            <p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod risus ligula, id luctus lectus volutpat sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id mi sit amet nibh iaculis faucibus vitae et magna. Nulla bibendum, lectus et molestie vestibulum, tellus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed bibendum leo. Mauris mauris massa, eleifend et purus vel, feugiat rutrum nulla. Cras vitae est vel ipsum faucibus fermentum a ultricies urna. Cum sociis natoque penatibus et magnis dis parturient montes. Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero. Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vulputate, tortor nec commodo ultricies, lectus nisl facilisis enim, vitae viverra urna nulla sed turpis. Nullam lacinia faucibus risus, a euismod lorem tincidunt id. Donec maximus placerat tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse faucibus sed dolor eget posuere. Proin tincidunt fermentum arcu. Nam ac elementum nibh. Donec facilisis interdum orci </p>
                            <blockquote>
                                <span class="icon fa fa-quote-left"></span>
                                <p>It's crazy, but the things you love, prospective buyers might hate—and that means you might have a hard time unloading your home when it comes time to sell. Here's how to choose wisely</p>
                                <cite> David Leo</cite>
                            </blockquote>
                            <p>Donec gravida malesuada lacus, eget tristique Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vulputate, tortor nec commodo ultricies, lectus nisl facilisis enim, vitae viverra urna nulla sed turpis. Nullam lacinia faucibus risus, a euismod lorem tincidunt id. Donec maximus placerat tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse faucibus sed dolor eget posuere. Proin tincidunt fermentum arcu. Nam ac elementum nibh. Donec facilisis interdum orci sit amet ullamcorper. Donec gravida malesuada lacus, eget tristique Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vulputate,</p>
                        </div>

                        <!-- Other Options -->
                        <div class="other-options clearfix">
                            <ul class="info">
                                <li>By <a href="#">admin</a></li>
                                <li><a href="#">February 20th, 2018</a></li>
                            </ul>

                            <div class="tags-box">
                                <ul class="tags">
                                    <li><a href="#">blog post</a></li>
                                    <li><a href="#">Artistic</a></li>
                                    <li><a href="#">real estate</a></li>
                                    <li><a href="#">family home</a></li>
                                </ul>                               
                            </div>

                            <div class="social-iocns">
                                <ul class="social-icon-colored">
                                    <li class="facebook"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li class="twitter"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li class="google"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    <li class="instagram"><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Comments Area -->
                    <div class="comments-area">
                        <div class="group-title">
                            <h3>Comments ( 2 )</h3>
                        </div>
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="images/resource/avatar-1.jpg" alt=""></div> 
                                <div class="comment-info">
                                    <div class="name">Kavin smith</div> -
                                    <div class="date">CEO CHI ART PRO</div>
                                </div>      
                                <div class="text">Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehiculaa,Duis lacus </div>
                                <a href="#" class="reply-btn">REPLY</a>
                            </div>
                        </div>

                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="images/resource/avatar-2.jpg" alt=""></div> 
                                <div class="comment-info">
                                    <div class="name">Kavin smith</div> -
                                    <div class="date">CEO CHI ART PRO</div>
                                </div>      
                                <div class="text">Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehiculaa,Duis lacus </div>
                                <a href="#" class="reply-btn">REPLY</a>
                            </div>
                        </div>

                    </div>

                    <!--Comment Form-->
                    <div class="comment-form">
                        <div class="group-title">
                            <h3>Leave a comment</h3>
                        </div>
                        <form method="post" action="blog.html"> 
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your Comments"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-five" type="submit" name="submit-form">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Catagories</h3></div>
                            <ul class="cat-list">
                                <li><a href="#">Dessert <span>3</span></a></li>
                                <li><a href="#">Vegetarian <span>5</span></a></li>
                                <li class="active"><a href="#">Western <span>2</span></a></li>
                                <li><a href="#">Photograph<span>1</span></a></li>
                                <li><a href="#">Uncategorized <span>0</span></a></li>
                            </ul>
                        </div>

                        <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h3>Latest News</h3></div>
                            <div class="widget-content">
                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                    <div class="post-info">25- JAN- 2019</div>
                                    <h3><a href="blog-single.html">Nullam at mauris fauci bus orci luctus pel.</a></h3>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                    <div class="post-info">25- JAN- 2019</div>
                                    <h3><a href="blog-single.html">Nullam at mauris fauci bus orci luctus pel.</a></h3>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                    <div class="post-info">25- JAN- 2019</div>
                                    <h3><a href="blog-single.html">Nullam at mauris fauci bus orci luctus pel.</a></h3>
                                </article>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="sidebar-widget tags">
                            <div class="sidebar-title"><h3>Tag Cloud</h3></div>
                            <ul class="tag-list clearfix">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Success</a></li>
                                <li><a href="#">Client Meetings</a></li>
                                <li><a href="#">Charity</a></li>
                            </ul>
                        </div>              
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

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
                <span class="title">Recevez les dernières offres</span>
                <h2>S'inscrire à la Newsletter</h2>
            </div>

            <!--Newsletter Form-->
            <div class="newsletter-form">
                <form method="post" action="<?php echo base_url(); ?>FR/Unex/comingSoon">
                    <div class="form-group">
                        <input type="email" name="field-name" value="" placeholder="email@gmail.com" required>
                        <button type="submit" class="theme-btn btn-style-three">Envoyer</button>
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
                        <li><a href="<?php echo base_url('assets/docs/Website-Terms-Conditions.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Mentions légales</a></li>
                        <li>|</li>
                        <li><a href="<?php echo base_url('assets/docs/Website-Privacy-Policy.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Politique de confidentialités</a></li>
                        <li>|</li>
                        <li><a href="<?php echo base_url('assets/docs/Cookie-UNEX.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Cookies</a></li>
                    </ul> 
                </div>
            <p align="center" id="copyright">Copyright &copy; Unex 2020. Tous droits réservés.</p>

            <p align="center">Tout le contenu du site, tel que le texte, les graphiques, les logos, les icônes de bouton et les images («Contenu»), tous les logiciels de ce site, ainsi que la conception, la composition, la sélection, l'agencement et la présentation de tous les matériaux sur le site sont la propriété d'Equity MG LTD (numéro d'entreprise <a href="https://find-and-update.company-information.service.gov.uk/company/12277150" target="_blank"> <u> 12277150 </u></a>) ou de ses fournisseurs de contenu et est protégé par les lois sur les droits d'auteur applicables. À l'exception du droit limité d'utiliser le site énoncé dans les présentes conditions d'utilisation, tous les droits sont réservés.</p>
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
<script src="<?php echo base_url('assets/js/magnific-popup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/appear.js') ?>"></script>
<script src="<?php echo base_url('assets/js/owl.js') ?>"></script>
<script src="<?php echo base_url('assets/js/wow.js') ?>"></script>
<script src="<?php echo base_url('assets/js/countdown.js') ?>"></script>
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/cookies.js') ?>"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="<?php echo base_url('assets/js/map-script.js') ?>"></script>
<!--End Google Map APi-->

<!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/counterup/counterup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>
</html>