<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Blog</title>
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
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/home">Accueil</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/wallet">Portefeuille</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">Crypto</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/pricing">Tarifs</a></li>
                                    <li class="current"><a href="<?php echo base_url(); ?>FR/Unex/blog">Blog</a></li>
                                    <li class="dropdown"><a href="#">Langues</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/blog">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/blog">FR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Aides</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/faq">FAQ</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/tuto">Tutoriel</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/contacte">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                    <a href="https://client.unex.online/Login" class="theme-btn btn-style-one" style="padding:15px 40px 15px; :hover{color:#f20487;}"><span class="fa fa-sign-in"></span> Se connecter</a>
                             
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
    <section class="page-title" style="background: linear-gradient(45deg, rgba(68, 34, 167, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url(<?php echo base_url(); ?>assets/images/resource/hero-bg.jpg) center center no-repeat;background-size: cover;">
        <div class="auto-container">
            <span class="float-text">Blog</span>
            <h1>Blog</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home </a></li>
                <li>Blog</li>
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
                    <div class="blog-grid">
                        <div class="row">
                            <!-- News block --> 
                            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="<?php echo base_url('assets/images/icons/user.jpg') ?>" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="info-box">
                                            <span class="date">19- JAN- 2019</span>
                                            <span class="author">Jamie Ashbrook</span>
                                        </div>
                                        <h4><a href="<?php echo base_url(); ?>FR/Unex/blog_single">Why Lead Generation Is Key For Business Growth.</a></h4>
                                        <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                                        <div class="link-box"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><span class="fa fa-angle-right"></span>Read More</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- News block --> 
                            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="<?php echo base_url('assets/images/icons/user.jpg') ?>" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="info-box">
                                            <span class="date">19- JAN- 2019</span>
                                            <span class="author">Jamie Ashbrook</span>
                                        </div>
                                        <h4><a href="<?php echo base_url(); ?>FR/Unex/blog_single">How To Increase In-App Purchases In 2019.</a></h4>
                                        <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                                        <div class="link-box"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><span class="fa fa-angle-right"></span>Read More</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- News block --> 
                            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="<?php echo base_url('assets/images/icons/user.jpg') ?>" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="info-box">
                                            <span class="date">19- JAN- 2019</span>
                                            <span class="author">Jamie Ashbrook</span>
                                        </div>
                                        <h4><a href="<?php echo base_url(); ?>FR/Unex/blog_single">Voxburner Launches Youth Trends Report 2018.</a></h4>
                                        <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                                        <div class="link-box"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><span class="fa fa-angle-right"></span>Read More</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- News block --> 
                            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="<?php echo base_url('assets/images/icons/user.jpg') ?>" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="info-box">
                                            <span class="date">19- JAN- 2019</span>
                                            <span class="author">Jamie Ashbrook</span>
                                        </div>
                                        <h4><a href="<?php echo base_url(); ?>FR/Unex/blog_single">Voxburner Launches Youth Trends Report 2018.</a></h4>
                                        <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                                        <div class="link-box"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><span class="fa fa-angle-right"></span>Read More</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- News block --> 
                            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="<?php echo base_url('assets/images/icons/user.jpg') ?>" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="info-box">
                                            <span class="date">19- JAN- 2019</span>
                                            <span class="author">Jamie Ashbrook</span>
                                        </div>
                                        <h4><a href="<?php echo base_url(); ?>FR/Unex/blog_single">Voxburner Launches Youth Trends Report 2018.</a></h4>
                                        <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                                        <div class="link-box"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><span class="fa fa-angle-right"></span>Read More</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- News block --> 
                            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="<?php echo base_url('assets/images/icons/user.jpg') ?>" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="info-box">
                                            <span class="date">19- JAN- 2019</span>
                                            <span class="author">Jamie Ashbrook</span>
                                        </div>
                                        <h4><a href="<?php echo base_url(); ?>FR/Unex/blog_single">Voxburner Launches Youth Trends Report 2018.</a></h4>
                                        <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                                        <div class="link-box"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><span class="fa fa-angle-right"></span>Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Post Share Options-->
                    <div class="styled-pagination">
                        <ul class="clearfix">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
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
                                <li><a href="#">Crypto <span>3</span></a></li>
                                <li><a href="#">Virement bancaire<span>1</span></a></li>
                                <li><a href="#">Perfect Money <span>5</span></a></li>
                                <li class="active"><a href="#">Payeer <span>2</span></a></li>
                                <li><a href="#">Utilisation <span>0</span></a></li>
                            </ul>
                        </div>

                        <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h3>Les dernières nouvelles</h3></div>
                            <div class="widget-content">
                                <article class="post">
                                    <div class="post-thumb"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                    <div class="post-info">25- JAN- 2019</div>
                                    <h3><a href="<?php echo base_url(); ?>FR/Unex/blog_single">Nullam at mauris fauci bus orci luctus pel.</a></h3>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                    <div class="post-info">25- JAN- 2019</div>
                                    <h3><a href="<?php echo base_url(); ?>FR/Unex/blog_single">Nullam at mauris fauci bus orci luctus pel.</a></h3>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="<?php echo base_url(); ?>FR/Unex/blog_single"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                    <div class="post-info">25- JAN- 2019</div>
                                    <h3><a href="<?php echo base_url(); ?>FR/Unex/blog_single">Nullam at mauris fauci bus orci luctus pel.</a></h3>
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