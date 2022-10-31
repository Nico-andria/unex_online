<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Card</title>
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
<style type="text/css">
    .main-header {
        position: fixed;
        z-index: 999;
        width: 100%;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
        background-color: #292e86;
    }
</style>
</head>

<body>

<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header" id="card_menu">
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
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/home">Accueil</a>
                                        
                                    </li>
                                    <li class="dropdown current"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/wallet">Portefeuille</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">Crypto</a></li>
                                            <!-- <li><a href="<?php //echo base_url(); ?>FR/Unex/card#our_card">Cartes</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/pricing">Tarifs</a></li>
                                    <li class="dropdown"><a href="#">Langues</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/card">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/card">FR</a></li>
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
                        
                        <!-- btn box -->
                        <!-- <div class="btn-box"> -->
                            <!-- <a href="contacte.php" class="theme-btn btn-style-one">Contactez-nous</a> -->
                            <!-- <a href="https://client.unex.online" class="theme-btn btn-style-one"><span class="fa fa-sign-in"></span> Se connecter</a>
                        </div>
 -->
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

    <!-- About Section -->
    <section class="about-section">
        <div class="anim-icons">
            <span class="icon icon-cross-1"></span>
            <span class="icon icon-circle-9"></span>
        </div>
        <span class="float-text">Cartes Unex</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Cartes Unex</h2>
            </div>

            <div class="about-carousel owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="cards"><img src="<?php echo base_url('assets/images/icons/black_card.png') ?>" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <h3>Carte Noire</h3>
                        <div class="inner-box">
                            <div class="text">La carte Noire Unex est accessible pour tous les particuliers.</div>
                        </div> 
                        <div><br><br><br></div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="cards"><img src="<?php echo base_url('assets/images/icons/gold_card.png') ?>" alt="">
                        </figure>
                    </div>
                    <div class="content-box">
                        <div class="inner-box"> 
                            <h3>Carte Or</h3>
                            <div class="text">La carte Or de Unex est mieux adaptée pour les employés ayant un salaire fixe.</div>
                        </div> 
                            <div><br><br><br></div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="cards"><img src="<?php echo base_url('assets/images/icons/platinium_card.png') ?>" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <h3>Carte Platine</h3>
                        <div class="inner-box">
                            <div class="text">La carte Platine Unex est généralement utilisée pour les comptes business des entreprises.</div>
                        </div> 
                        <div><br><br><br></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-title container" id="description_cards">
                <h5>La carte de débit UNEX est attachée à votre portefeuille et servira à la fois de moyen de retrait d'espèces au guichet automatique mais également de moyen de paiement sur les sites marchands acceptant VISA, Mastercard, UnionPay ... Les cartes UNEX ont l'option 3D secure. Les limites de la carte, l'abonnement mensuel ainsi que les frais varient selon les gammes proposées par UNEX</h5>
            </div>
    </section>
    <!--End About Section -->

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
<script src="<?php echo base_url('assets/js/appear.js') ?>"></script>
<script src="<?php echo base_url('assets/js/owl.js') ?>"></script>
<script src="<?php echo base_url('assets/js/wow.js') ?>"></script>
<script src="<?php echo base_url('assets/js/countdown.js') ?>"></script>
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
</body>
</html>