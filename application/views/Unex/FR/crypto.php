<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Crypto</title>
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

<style type="text/css">
	figure#slide{
		height: auto;
		width: 500px;
	}
	figure#detail{
		height: 250px;
	}
    #hero {
        width: 100%;
        height: 100vh;
        background: linear-gradient(45deg, rgba(68, 34, 167, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url("<?php echo base_url(); ?>assets/images/resource/hero-bg.jpg") center center no-repeat;
        background-size: cover;
    }
    #details{
        padding-top: 80px;
    }
    @media (max-width: 500px) {
        figure#slide{
            height: auto;
            width: auto;
        }
    }
</style>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
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
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/blog">Blog</a></li>
                                    <li class="dropdown"><a href="#">Langues</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/crypto">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">FR</a></li>
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

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Accédez à vos cryptos via Unex</h1>
          <h2>Unex, institution financière agréée, permet à son vaste réseau de partenaires d'accepter le plus grand nombre de méthodes de paiement, notamment Visa, MasterCard, Apple Pay, SWIFT, SEPA, et bien d'autres encore !</h2>
          <div><a href="#crypto" class="btn-get-started scrollto">En savoir plus</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="<?php echo base_url('assets/images/resource/btc-1.png') ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->



    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features" data-aos="fade-up"> -->
    	<section class="about-section" data-aos="fade-up">
    	<div class="anim-icons">
            <span class="icon icon-cross-1"></span>
            <span class="icon icon-circle-9"></span>
        </div>
        <span class="float-text">Nous offrons</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Nous offrons</h2>
            </div>
      <div class="container">


        <div class="row content" id="details">
          <div class="col-md-5 wow slideInRight order-1 order-md-2" data-aos="fade-left">
            <img src="<?php echo base_url('assets/images/features/cryptocurrency.png') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1 wow slideInLeft" data-aos="fade-right">
            <h3>Toutes vos cryptomonnaies préférées en un seul endroit</h3>
            <p class="font-italic">
              Vous trouverez ici toutes les principales crypto-monnaies et les plus populaires - Bitcoin (BTC), Ethereum (ETH), Litecoin (LTC), Dash (DASH), Ripple (XRP), Bitcoin Cash (BCH) 
            </p>
          </div>
        </div>

        <div class="row content" id="details">
          <div class="col-md-5 wow slideInLeft" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo base_url('assets/images/features/p2p.png') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4 wow slideInRight" data-aos="fade-left" data-aos-delay="100">
            <h3>Les opérations concernant les cryptomonnaies</h3>
            <p class="font-italic">
              Avec Unex, les opérations concernant les cryptomonnaies n'ont jamais été aussi simple.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Acheter toutes les variétés de cryptomonnaie</li>
              <li><i class="icofont-check"></i> Vendre les cryptomonnaies dont vous disposez.</li>
            </ul>
          </div>
        </div>

        <div class="row content" id="details">
          <div class="col-md-5 wow slideInRight order-1 order-md-2" data-aos="fade-left">
            <img src="<?php echo base_url('assets/images/features/multiples_paiements.png') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1 wow slideInLeft" data-aos="fade-right">
            <h3>Multiples moyens de paiement</h3>
            <p class="font-italic">
              Désormais acheter vos cryptos avec n'importe quel moyen de paiement
            </p>
            <p>
              Notre plateforme offre une multitude de manières pour que vous ayez vos cryptomonnaies.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Par carte de débit/crédit VISA et MasterCard</li>
              <li><i class="icofont-check"></i> Par mobile money</li>
              <li><i class="icofont-check"></i> Paiement en espèces directement dans nos locaux</li>
            </ul>
          </div>
        </div>

        <div class="row content" id="details">
          <div class="col-md-5 wow slideInLeft" data-aos="fade-right">
            <img src="<?php echo base_url('assets/images/features/wallet.png') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 wow slideInRight" data-aos="fade-left">
            <h3>Utilisez vos propres portefeuilles électroniques</h3>
            <p>Nous recevons et envoyons vers tous les portefeuilles électroniques<br>Que ce soit :</p>
            <ul>
              <li><i class="icofont-check"></i> Binance</li>
              <li><i class="icofont-check"></i> Blockchain wallet</li>
              <li><i class="icofont-check"></i> Coinbase</li>
              <li><i class="icofont-check"></i> Payeer</li>
              <li><i class="icofont-check"></i> Tronlink</li>
              <li><i class="icofont-check"></i> ...</li>
            </ul>
          </div>
        </div>

        <div class="row content" id="details">
          <div class="col-md-5 wow slideInRight order-1 order-md-2" data-aos="fade-left">
            <img src="<?php echo base_url('assets/images/features/f1.png') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1 wow slideInLeft" data-aos="fade-right">
            <h3>Plateforme sécurisée</h3>
            <p class="font-italic">
              Unex propose une vérification d'identité (KYC) suivant les normes européennes pour pallier à toute tentative de fraudes.<br>
              L'historique de vos transactions s'afficheront direct dans votre back-office dès lors que vous en faite une.
            </p>
            <p>
              La sécurité des informations et des fonds des utilisateurs est notre première priorité.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

        <!-- About Section -->
    <section class="about-section" id="crypto">
        <div class="anim-icons">
            <span class="icon icon-cross-1"></span>
            <span class="icon icon-circle-9"></span>
        </div>
        <span class="float-text">Réseau</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Réseau</h2>
            </div>

            <div class="about-carousel owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="slide"><img src="<?php echo base_url('assets/images/resource/blockchain.png') ?>" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <div class="inner-box">
                            <span class="title">Blockchain</span>  
                            <h3>Blockchain</h3>
                            <div class="text">
                                Vérification dans la Blockchain décentralisée.
                            </div>
                            <div class="btn-box"><a href="https://client.unex.online" class="theme-btn btn-style-one">En savoir plus</a></div>
                        </div> 
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="slide"><img src="<?php echo base_url('assets/images/resource/erc20.png') ?>" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <div class="inner-box">
                            <span class="title">ERC20</span>  
                            <h3>Ethereum</h3>
                            <div class="text">Le token standard de l'Ethereum (ERC20) (pour « Ethereum Request for Comment ») utilisé pour les contrats intelligents sur le réseau Ethereum. </div>
                            <div class="btn-box"><a href="https://fr.wikipedia.org/wiki/ERC20" class="theme-btn btn-style-one">En savoir plus</a></div>
                        </div> 
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="slide"><img src="<?php echo base_url('assets/images/resource/bsc.png') ?>" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <div class="inner-box">
                            <span class="title">BSC</span>  
                            <h3>Binance Smart Chain</h3>
                            <div class="text">La Binance Smart Chain (BSC) peut être décrite comme une blockchain fonctionnant en parallèle de la Binance Chain. Contrairement à la Binance Chain, BSC permet de programmer des smart contracts et est compatible avec l'Ethereum Virtual Machine (EVM).</div>
                            <div class="btn-box"><a href="https://academy.binance.com/fr/articles/how-to-get-started-with-binance-smart-chain-bsc" class="theme-btn btn-style-one">En savoir plus</a></div>
                        </div> 
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="anim-icons">
            <span class="icon icon-circle-9"></span>
            <span class="icon icon-twist-line-3"></span>
        </div>
        <span class="float-text">Détails</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Détails</h2>
            </div>

            <div class="row">
                
                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/eth.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Ethereum</span>
                                <span class="author">ETH</span>
                            </div>
                            <h4><a href="blog-single.html">Ethereum est une plateforme globale et open source pour des applications décentralisées.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">ETH est une monnaie numérique. Elle est purement numérique et peut être envoyée à n'importe qui dans le monde, instantanément. La masse monétaire d’ETH n’est contrôlée par aucun gouvernement ou entreprise. Elle est décentralisée et limitée. Le monde entier utilise ETH pour effectuer des paiements, en tant que réserve de valeur ou en tant que caution.</div>
                            <div class="link-box"><a href="https://ethereum.org"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/btc.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Bitcoin</span>
                                <span class="author">BTC</span>
                            </div>
                            <h4><a href="blog-single.html">Bitcoin est un réseau de paiement novateur et une nouvelle forme d'argent.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">Bitcoin est une technologie pair à pair fonctionnant sans autorité centrale. La gestion des transactions et la création de bitcoins est prise en charge collectivement par le réseau. Bitcoin est libre et ouvert. Sa conception est publique, personne ne possède ni ne contrôle Bitcoin et tous peuvent s'y joindre. Grâce à plusieurs de ses propriétés uniques, Bitcoin rend possible des usages prometteurs qui ne pourraient pas être couverts par les systèmes de paiement précédents.</div>
                            <div class="link-box"><a href="https://bitcoin.org"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1000ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/usdt.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Tether</span>
                                <span class="author">USDT</span>
                            </div>
                            <h4><a href="blog-single.html">Tout ce que vous pouvez faire avec les monnaies numériques, vous pouvez maintenant le faire avec l'argent numérique.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">Tether est une crypto-monnaie, de type stablecoin, émise par la société Tether Limited. Historiquement, la société affirmait que chaque coin était adossée à un dollar américain, mais depuis le 14 mars 2019, elle a modifié son adossement pour inclure les prêts aux entreprises affiliées</div>
                            <div class="link-box"><a href="https://tether.to"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1000ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/ltc.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Litecoin</span>
                                <span class="author">LTC</span>
                            </div>
                            <h4><a href="blog-single.html">Litecoin est une monnaie électronique distribuée sous licence libre, inspirée par et techniquement similaire à Bitcoin.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden"> Litecoin peut fonctionner avec les mêmes logiciels « d’exploitation minière » que bitcoin. Chaque Litecoin est divisé en cent millions d'unités plus petites, définies par huit décimales.Litecoin est un outil puissant, politique et économique que n'importe qui, n'importe où, peut utiliser sans permission pour effectuer des transactions avec n'importe qui dans le monde et participer à une économie véritablement mondiale.</div>
                            <div class="link-box"><a href="https://litecoin.com/en/"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/bnb.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Binance coin</span>
                                <span class="author">BNB</span>
                            </div>
                            <h4><a href="blog-single.html">La cryptomonnaie déployée par la société qui pilote la plateforme d'échange de monnaies virtuelles Binance</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">Le BNB est une crypto-monnaie créée par Binance.
                            	Il a plusieurs cas d'utilisation concrète (« use case » en anglais):
                            	<ul>
                            		<li>Vous pouvez l'utiliser pour payer les frais de transaction sur Binance;</li>
                            		<li>Il est utilisé dans les ventes de token hébergées sur Binance Launchpad;</li>
                            		<li>De plus en plus de vendeurs l'acceptent comme moyen de paiement;</li>
                            		<li>Bientôt, il sera utilisé pour le fonctionnement de la future plate-forme d'échange décentralisée de Binance;</li>
                            	</ul>
                            </div>
                            <div class="link-box"><a href="https://www.binance.com/fr/buy-BNB"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/xrp.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Ripple</span>
                                <span class="author">XRP</span>
                            </div>
                            <h4><a href="blog-single.html">Il s'agit de l'actif numérique natif du grand livre XRP, une technologie blockchain décentralisée, sans autorisation et à code source ouvert</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">RippleNet rend plus facile que jamais la gestion d'une entreprise de paiements performante.

								Grâce à la technologie blockchain la plus avancée pour les paiements mondiaux, les institutions financières sont en mesure de se développer sur de nouveaux marchés dans le monde entier et même d'éliminer le préfinancement en tirant parti de la puissance de XRP grâce au service de liquidité à la demande de RippleNet.

								Avec nos clients, nous construisons un système financier plus inclusif où davantage de personnes et de PME ont accès à de meilleurs services financiers.</div>
                            <div class="link-box"><a href="https://www.ripple.com"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/ada.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Cardano</span>
                                <span class="author">ADA</span>
                            </div>
                            <h4><a href="blog-single.html">Le Cardano est une plateforme blockchain qui s'appuie sur la preuve d'enjeu et dont l'objectif est de permettre « aux créateurs de solutions, aux innovateurs et aux visionnaires » d'amener un changement positif global.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden;">Cardano est une plateforme blockchain pour les faiseurs de changement, les innovateurs et les visionnaires, avec les outils et les technologies nécessaires pour créer des possibilités pour le plus grand nombre, ainsi que pour quelques-uns, et apporter un changement mondial positif.</div>
                            <div class="link-box"><a href="https://cardano.org"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/doge.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Dogecoin</span>
                                <span class="author">DOGE</span>
                            </div>
                            <h4><a href="blog-single.html">Les créateurs du Dogecoin l’imaginent comme une crytpomonnaie “fun” et légère qui pourrait s’avérer très attractive pour le public cible du Bitcoin, étant donné qu’elle est basée sur le meme du chien</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">Dogecoin est une crypto-monnaie avec une image du Shiba Inu chien du mème « Doge » comme logo. Présenté comme une blague le 6 décembre 2013, le Dogecoin a rapidement développé sa propre communauté en ligne et a atteint une capitalisation de 60 millions de dollars en janvier 2014.</div>
                            <div class="link-box"><a href="https://dogecoin.com"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/tron.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Tron</span>
                                <span class="author">TRX</span>
                            </div>
                            <h4><a href="blog-single.html">Le TRON est un système d'exploitation basé sur la blockchain qui souhaite rendre cette technologie adaptée à une utilisation quotidienne</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">TRON est un système d'exploitation décentralisé basé sur Blockchain basé sur une crypto-monnaie native du système, connue sous le nom de TRX</div>
                            <div class="link-box"><a href="https://tron.network"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/xlm.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Stellar</span>
                                <span class="author">XLM</span>
                            </div>
                            <h4><a href="blog-single.html">Le Stellar est un réseau ouvert qui permet de déplacer et de stocker de l'argent.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden"><p>Ce réseau a été créé pour qu'il soit libre d’accès, et surtout facilement utilisable pour tous les niveaux de revenus et à faible coût de transaction (0,00001 stellar par transactions). Grâce à leur monnaie intermédiaire, le lumens (XLM), un utilisateur peut envoyer n'importe quelle devise (Monnaie fiduciaire et Cryptomonnaie) vers une autre personne qui peut avoir une devise différente.<br>Il peut faire des transactions avec des Monnaie fiduciaire et avec des autres cryptomonnaie. Cette monnaie est une monnaie centralisée et fait des transactions multiplateformes et des micro-transactions comme Ripple (protocole de paiement), une autre cryptomonnaie qui est aussi centralisée. C'est aussi une technologie de paiement qui vise à relier les institutions financières entre elles et à considérablement réduire le coût et le temps pour les transferts transfrontaliers.</p></div>
                            <div class="link-box"><a href="https://www.stellar.org"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url('assets/images/resource/iota.png') ?>" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Miota</span>
                                <span class="author">IOTA</span>
                            </div>
                            <h4><a href="blog-single.html">Le Tangle de IOTA est un grand livre distribué ouvert, sans sensation et évolutif, conçu pour permettre un transfert de données et de valeurs sans friction.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden"><p>Le IOTA est une cryptomonnaie expérimentale et un protocole open-source qui a pour objectif de fournir un moyen de paiement sécurisé pour la monétisation de données entre les appareils dits de l'Internet des objets.</p></div>
                            <div class="link-box"><a href="https://www.stellar.org"><span class="fa fa-angle-right"></span>En savoir plus</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section -->

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