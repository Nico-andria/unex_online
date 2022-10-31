<!DOCTYPE html>
<html>
<head>
	<title>Guide</title>
	<meta charset="utf-8">
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
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">
<!--===============================================================================================-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

	<!--===============================================================================================-->
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css') ?>" rel="stylesheet">
	<!--===============================================================================================-->
</head>
<style>
		*,
		*::before,
		*::after{
			margin: 0;
			padding: 0;
			box-sizing: inherit;
		}
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
		article{
			width: 100%;
			/*height: 100vh;*/
			/*background-color: #3c4053;*/
			background-color: transparent;
			display: flex;
			/*align-items: center;*/
			/*justify-content: center;*/
			margin-top: 50px;
		}
		.container{
			width: 100%;
			max-width: 80rem;
			margin: 0 auto;
		}
		/**************************/
		.accordion .contentBx{
			position: relative;
			margin: 10px 20px;

		}
		.accordion .contentBx .label{
			position: relative;
			padding: 10px;
			background: #fff;
			color: #12114a;
			cursor: pointer;
			border-radius: 5px;
			/*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
			border-bottom: 4px solid rgba(0, 0, 0, 0.2);
		}
		.accordion .contentBx .label::before{
			content:'+';
			position: absolute;
			top: 50%;
			right: 20px;
			transform: translateY(-50%);
			font-size: 1.5em;
			
		}
		.accordion .contentBx.active .label::before{
			content: '-';
		}
		.accordion .contentBx .content{
			position: relative;
			background: #fff;
			height: 0;
			overflow: hidden;
			transition: 0.5s;
			overflow-y: auto;
		}
		.accordion .contentBx.active .content{
			height: 150px;
			padding: 10px;

		}
</style>
<body>

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
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/home">Accueil</a>
                                        
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/wallet">Portefeuille</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">Crypto</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/card#our_card">Cartes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/pricing#pricing">Tarifs</a></li>
                                    <li class="dropdown"><a href="#">Langues</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/guide">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/guide">FR</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/faq">FAQ</a>
                                    	<li><a href="<?php echo base_url(); ?>FR/Unex/tuto">Tutoriels</a>
                                    <li class="current"><a href="<?php echo base_url(); ?>FR/Unex/guide">Guide</a>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/contacte">Contact</a>
                                </ul>
                            </div>
                        </nav>
                        
                        <!-- btn box -->
                        <div class="btn-box">
                            <!-- <a href="contacte.php" class="theme-btn btn-style-one">Nous contacter</a> -->
                            <a href="https://client.unex.online" class="theme-btn btn-style-one"><span class="fa fa-sign-in"></span> Se connecter</a>
                        </div> 

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

    <!-- Pricing Section -->
    <section class="pricing-section style-four" id="pricing">
    	
        <div class="anim-icons">
            <span class="icon icon-circle-1 wow zoomIn"></span>
            <span class="icon icon-circle-2 wow zoomIn" data-wow-delay="600ms"></span>
            <span class="icon icon-circle-3 wow zoomIn" data-wow-delay="1200ms"></span>
            <span class="icon icon-circle-4 wow zoomIn" data-wow-delay="1800ms"></span>
        </div>
        <div class="container-fluid" id="pricing">
            	<span class="float-text">Guide</span>
            <div class="row">
                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">Comment manipuler son compte UNEX ?</h2>
								<ul>
									<li><a href="<?php echo base_url(); ?>assets/docs/guide/Inscription.docs" target="_blank">Comment faire son inscription ?</a></li>
									<li><a href="<?php echo base_url(); ?>assets/docs/guide/Depot.docs" target="_blank">Comment déposer de l'argent sur son compte UNEX ?</a></li>
									<li><a href="<?php echo base_url(); ?>assets/docs/guide/numero_compte.docs" target="_blank">Comment savoir son numéro de compte UNEX ?</a></li>
									<li><a href="<?php echo base_url(); ?>assets/docs/guide/retrait.docs" target="_blank">Comment faire le retrait de vos fonds ?</a></li>
									<li><a href="<?php echo base_url(); ?>assets/docs/guide/conversion_devises.docs" target="_blank">Comment convertir les devises dans son compte ?</a></li>
									<li><a href="<?php echo base_url(); ?>assets/docs/guide/demande_de_paiement.docs" target="_blank">Comment demander des soldes à un autre utilisateur ?</a></li>
									<li><a href="<?php echo base_url(); ?>assets/docs/guide/recevoir.docs" target="_blank">Comment recevoir de l'argent depuis un autre compte ?</a></li>
									<li><a href="<?php echo base_url(); ?>assets/docs/guide/transfert.docs" target="_blank">Comment transférer vos soldes vers un autre utilisateur ?</a></li>
								</ul>
								
							</div>
						</article>
                    </div>
                </div>

                

                
            </div>
        </div>
    </section>
    <!--End Pricing Section -->

	

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
<script>
		const accordion = document.getElementsByClassName('contentBx');
		for(i=0;i<accordion.length;i++){
			accordion[i].addEventListener('click',function(){
				this.classList.toggle('active')
			})
		}
	</script>
</body>
</html>