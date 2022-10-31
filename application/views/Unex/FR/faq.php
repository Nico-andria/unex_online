<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>
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
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/home">Accueil</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/wallet">Portefeuille</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">Crypto</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/pricing">Tarifs</a></li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/blog">Blog</a></li>
                                    <li class="dropdown"><a href="#">Langues</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/faq">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/faq">FR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown current"><a href="#">Aides</a>
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

    <!-- Pricing Section -->
    <section class="pricing-section style-four" id="pricing">
    	
        <div class="anim-icons">
            <span class="icon icon-circle-1 wow zoomIn"></span>
            <span class="icon icon-circle-2 wow zoomIn" data-wow-delay="600ms"></span>
            <span class="icon icon-circle-3 wow zoomIn" data-wow-delay="1200ms"></span>
            <span class="icon icon-circle-4 wow zoomIn" data-wow-delay="1800ms"></span>
        </div>
        <div class="container-fluid" id="pricing">
            	<span class="float-text">FAQ</span>
            <div class="row">
                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">QU’EST-CE QUE UNEX ?</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Pourquoi UNEX ?</div>
									<div class="content">
										<p align="justify">UNEX est une marque de portefeuille électronique détenue par la société Equity MG Ltd, limited company enregistré au Companies House du Royaume-Unie sous  le numéro 12277150 à l’adresse : 71-75, Shelton Street, London, Greater London, WC2H 9JQ,  UNITED KINGDOM.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Quelles sont les solutions que UNEX proposent ?</div>
									<div class="content">
										<p align="justify">UNEX résout le problème des Malagasy et de plusieurs pays qui où l’utilisation de portefeuilles électroniques comme Paypal et Skrill est restreint, et où les transferts de fonds à l’internationale via les institutions bancaires sont soumis à des frais très élevés.
										UNEX est un portefeuille électronique multidevise (Euro, dollar, Ariary)  qui facilite l’envoi d’argent à international et la réception en MGA (Ariary) de fonds venant de l’étranger.</br>Vous pourrez même acheter des Bitcoins (BTC) avec le portefeuille UNEX dans un futur proche.</br>La création d’IBAN personnalisé et le système d’émission de carte de débit pour chaque compte est actuellement en cours de développement pour améliorer l’expérience des utilisateurs.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">A qui sont destinés les services que proposent UNEX ?</div>
									<div class="content">
										<p align="justify">La marque UNEX a été conçue pour servir tout le monde mais surtout les pays Africains qui en ont vraiment le plus besoin.</p>
									</div>
								</div>
								
							</div>
						</article>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInDown">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">TRANSFERT D’ARGENT</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Comment se passe les transferts de fonds ?</div>
									<div class="content">
										<p align="justify">Le transfert de fonds via UNEX peut se faire sous forme de transfert p2p entre compte UNEX, sous forme de virement SEPA, Wire Transfer pour la réception et l’envoi de fonds.</br>Il est aussi possible de déposer et de retirer de l’argent sur un compte UNEX via les mobiles money comme Mvola, Orange Money et Airtel Money.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">C’est quoi un transfert p2p ?</div>
									<div class="content">
										<p align="justify">Un transfert p2p (peer-to-peer) est un transfert vers d’autres comptes d’utilisateurs UNEX.</br>Grâce aux portefeuilles électroniques d’UNEX, vous pouvez envoyer rapidement et simplement de l’argent vers n’importe qui, possédant un compte UNEX mais aussi demander des paiements de salaires à votre employeur (en tant que salarié), de rémunération en retour de services ou de paiement suite à une vente de produit que vous avez proposé à des clients.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Qu’est-ce qu’un virement SEPA ?</div>
									<div class="content">
										<p align="justify" id="transfert_international">Un virement SEPA est un virement bancaire qui s’effectue à l’intérieur de la zone Euro et qui permet une rapidité des transactions (en moins de 24h).</br>Avec UNEX, vous pouvez recevoir et envoyer de l’argent par virement SEPA sans difficulté.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Comment se passe les transfers d’argent à l’international ?</div>
									<div class="content">
										<p align="justify">Pour pouvoir envoyer de l’argent vers une banque, les coordonnées bancaires du destinataire sont nécessaires pour assurer la réception de cet argent par celui-ci.</br>Ainsi avec UNEX, avec la connaissance des coordonnées bancaires du destinataire sont : nom complet du titulaire de compte, IBAN, SWIFT</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">les IBANS, les BIC, SEPA, les SWIFT et les ACH ?</div>
									<div class="content">
										<h5><i><b>IBAN : </i></b>International Bank Account Number</h5>
										<p align="justify">Le numéro de compte bancaire international est un identifiant unique qui aide les banques à traiter automatiquement les paiements d'une personne à une autre. L'IBAN contient toutes les informations nécessaires du propriétaire sur un compte bancaire tel que le numéro de compte, les informations bancaires et de succursale et le code du pays. Bien qu'aucune longueur uniforme n'ait été établie pour les pays SEPA, l'IBAN ne peut pas dépasser 34 caractères. Cependant, la plupart des pays ont des longueurs fixes différentes. Notre validateur détecte automatiquement le pays et la longueur de l'IBAN afin d'effectuer une validation précise.</p>
											</br>
										<h5><i><b>BIC : </i></b>Bank Identifier Code</h5>
										<p align="justify">Le Code d'Identification de Banque est un code international que les banques utilisent pour les transactions financières. Chaque banque a son propre BIC. Ainsi, les ordres de paiement européens et internationaux arrivent automatiquement à la bonne banque et à la bonne succursale. Le BIC est également appelé adresse SWIFT ou code SWIFT. Le code BIC peut comporter 8 ou 11 caractères, en fonction des informations sur les branches.</p>
											</br>
										<h5><i><b>SEPA : </i></b>Single Euro Payment Area</h5>
										<p align="justify">Cette zone unique de paiement en euros établit un marché européen intégré pour les instruments de paiement. L'objectif du SEPA est de faire en sorte que les paiements effectués en Europe se déroulent aussi simplement et efficacement que ceux effectués au sein d'un même pays.</p>
											</br>
										<h5><i><b>SWIFT : </i></b>Society for Worldwide Interbank Financial Telecommunication</h5>
										<p align="justify">Société pour la télécommunication financière interbancaire mondiale; Voir BIC</p>
											</br>
										<h5><i><b>ACH : </i></b>Automated Clearing House</h5>
										<p align="justify">L'ACH est un type de réseau de transfert électronique de fonds utilisé aux États-Unis. Tout comme SWIFT en Europe, l'ACH assure la compensation interbancaire des opérations de crédit et de débit. Le réseau électronique ACH aide les banques et les institutions financières à échanger des informations entre les deux.</p>
									</div>
								</div>
							</div>
						</article>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInDown">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">ENVOYER DE L’ARGENT</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Comment envoyer de l’argent via UNEX ?</div>
									<div class="content">
										<p align="justify">Pour envoyer de l’argent via UNEX, il suffit de saisir les coordonnées bancaires exactes du destinataire dans les champs à remplir durant la procédure d’envoi s’il est question de transfert bancaire et de saisir le bon numéro de compte s’il s’agit de transfert en interne (p2p).</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Quelles sont les pays où on peut envoyer de l’argent avec UNEX ?</div>
									<div class="content">
										<p>
											<ul>
												<li>Iles Aland</li>
												<li>Albanie</li>
												<li>Algérie</li>
												<li>Samoa américaines</li>
												<li>Andorre</li>
												<li>Angola</li>
												<li>Anguilla</li>
												<li>Antarctique</li>
												<li>Antigua-et-Barbuda</li>
												<li>Argentine</li>
												<li>Arménie</li>
												<li>Aruba</li>
												<li>Australie</li>
												<li>L'Autriche</li>
												<li>Azerbaïdjan</li>
												<li>Bahamas</li>
												<li>Bahreïn</li>
												<li>Bangladesh</li>
												<li>Barbade</li>
												<li>Biélorussie</li>
												<li>Belgique</li>
												<li>Belize</li>
												<li>Bénin</li>
												<li>Bermudes</li>
												<li>Bhoutan</li>
												<li>Bolivie</li>
												<li>Bonaire</li>
												<li>Bosnie Herzégovine</li>
												<li>Botswana</li>
												<li>Île Bouvet</li>
												<li>Brésil</li>
												<li>Territoire britannique de l'océan Indien</li>
												<li>Îles Vierges britanniques</li>
												<li>Brunei Darussalam</li>
												<li>Bulgarie</li>
												<li>Burkina Faso</li>
												<li>Cambodge</li>
												<li>Cameroun</li>
												<li>Canada</li>
												<li>Cap-Vert</li>
												<li>Îles Caïmans</li>
												<li>Chili</li>
												<li>Chine</li>
												<li>L'île de noël</li>
												<li>Îles Cocos (Keeling)</li>
												<li>Colombie</li>
												<li>Comores</li>
												<li>les Îles Cook</li>
												<li>Costa Rica</li>
												<li>Côte d'Ivoire</li>
												<li>Croatie</li>
												<li>Curacao</li>
												<li>Chypre</li>
												<li>République Tchèque</li>
												<li>Danemark</li>
												<li>Djibouti</li>
												<li>Dominique</li>
												<li>République Dominicaine</li>
												<li>Equateur</li>
												<li>Egypte</li>
												<li>Le Salvador</li>
												<li>Guinée Équatoriale</li>
												<li>Estonie</li>
												<li>Ethiopie</li>
												<li>les îles Falkland</li>
												<li>Îles Féroé</li>
												<li>Fidji</li>
												<li>Finlande</li>
												<li>France</li>
												<li>Guyane Française</li>
												<li>Polynésie française</li>
												<li>Terres australes françaises</li>
												<li>Gabon</li>
												<li>Gambie</li>
												<li>Géorgie</li>
												<li>Allemagne</li>
												<li>Ghana</li>
												<li>Gibraltar</li>
												<li>Grèce</li>
												<li>Groenland</li>
												<li>Grenade</li>
												<li>Guadeloupe</li>
												<li>Guatemala</li>
												<li>Guernesey</li>
												<li>Guinée</li>
												<li>Guinée-Bissau</li>
												<li>Guyane</li>
												<li>Haïti</li>
												<li>Honduras</li>
												<li>Hong Kong</li>
												<li>Hongrie</li>
												<li>Islande</li>
												<li>Inde</li>
												<li>Indonésie</li>
												<li>Irlande</li>
												<li>île de Man</li>
												<li>Israël</li>
												<li>Italie</li>
												<li>Jamaïque</li>
												<li>Japon</li>
												<li>Jersey</li>
												<li>Jordan</li>
												<li>Kazakhstan</li>
												<li>Kenya</li>
												<li>Kiribati</li>
												<li>Kosovo, République du</li>
												<li>Koweit</li>
												<li>Kirghizistan</li>
												<li>Laos</li>
												<li>Lettonie</li>
												<li>Liban</li>
												<li>Lesotho</li>
												<li>Libéria</li>
												<li>Liechtenstein</li>
												<li>Lituanie</li>
												<li>Luxembourg</li>
												<li>Macao</li>
												<li>Macédoine, ancienne République yougoslave de</li>
												<li>Madagascar</li>
												<li>Malawi</li>
												<li>Malaisie</li>
												<li>Maldives</li>
												<li>Mali</li>
												<li>Malte</li>
												<li>Iles Marshall</li>
												<li>Martinique</li>
												<li>Mauritanie</li>
												<li>Ile Maurice</li>
												<li>Mayotte</li>
												<li>Mexique</li>
												<li>Micronésie, États fédérés de</li>
												<li>Moldavie</li>
												<li>Monaco</li>
												<li>Mongolie</li>
												<li>Monténégro</li>
												<li>Montserrat</li>
												<li>Maroc</li>
												<li>Mozambique</li>
												<li>Myanmar</li>
												<li>Namibie</li>
												<li>Nauru</li>
												<li>Népal</li>
												<li>Pays-Bas</li>
												<li>Nouvelle Calédonie</li>
												<li>Nouvelle-Zélande</li>
												<li>Nicaragua</li>
												<li>Niger</li>
												<li>Nigeria</li>
												<li>Niue</li>
												<li>l'ile de Norfolk</li>
												<li>Norvège</li>
												<li>Oman</li>
												<li>Pakistan</li>
												<li>Palau</li>
												<li>Palestine</li>
												<li>Panama</li>
												<li>Papouasie Nouvelle Guinée</li>
												<li>Paraguay</li>
												<li>Pérou</li>
												<li>Philippines</li>
												<li>Îles Pitcairn</li>
												<li>Pologne</li>
												<li>le Portugal</li>
												<li>Porto Rico</li>
												<li>Qatar</li>
												<li>Réunion</li>
												<li>Roumanie</li>
												<li>Fédération Russe</li>
												<li>Rwanda</li>
												<li>Saint Barthélemy</li>
												<li>Sainte-Hélène</li>
												<li>Saint-Christophe-et-Niévès</li>
												<li>Sainte-Lucie</li>
												<li>Saint Martin (partie française)</li>
												<li>Saint-Pierre-et-Miquelon</li>
												<li>Saint-Vincent-et-les-Grenadines</li>
												<li>Samoa</li>
												<li>Saint Marin</li>
												<li>Sao Tomé et Principe</li>
												<li>Arabie Saoudite</li>
												<li>Sénégal</li>
												<li>Serbie</li>
												<li>les Seychelles</li>
												<li>Sierra Leone</li>
												<li>Singapour</li>
												<li>Sint Maarten (partie néerlandaise)</li>
												<li>Slovaquie</li>
												<li>Slovénie</li>
												<li>Les îles Salomon</li>
												<li>Afrique du Sud</li>
												<li>Géorgie du Sud et îles Sandwich du Sud</li>
												<li>Corée du Sud</li>
												<li>Espagne</li>
												<li>Sri Lanka</li>
												<li>Suriname</li>
												<li>Swaziland</li>
												<li>Suède</li>
												<li>Suisse</li>
												<li>Taïwan</li>
												<li>Tadjikistan</li>
												<li>Tanzanie</li>
												<li>Thaïlande</li>
												<li>Timor-Leste</li>
												<li>Aller</li>
												<li>Tokelau</li>
												<li>Tonga</li>
												<li>Trinité-et-Tobago</li>
												<li>Tunisie</li>
												<li>dinde</li>
												<li>Turkménistan</li>
												<li>îles Turques-et-Caïques</li>
												<li>Tuvalu</li>
												<li>Ouganda</li>
												<li>Ukraine</li>
												<li>Emirats Arabes Unis</li>
												<li>Royaume-Uni</li>
												<li>États Unis</li>
												<li>Uruguay</li>
												<li>Ouzbékistan</li>
												<li>Vanuatu</li>
												<li>Cité du Vatican</li>
												<li>Vietnam</li>
												<li>Wallis et Futuna</li>
												<li>Sahara occidental</li>
												<li>Zambie</li>
												<li>Zimbabwe</li>
											</ul>
										</p>
									</div>
								</div>
						</article>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInDown">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">COMMENT RECEVOIR DE L’ARGENT SUR UNEX ?</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Comment approvisionner mon compte UNEX ?</div>
									<div class="content">
										<p align="justify">Il y a plusieurs manières d’approvisionner son compte UNEX, soit par réception de fonds via transfert bancaire soit par dépôt via Mobile Money et soit par réception d’argent via d’autres comptes UNEX. </br>Il faut retenir que, chaque balance en devises (Euro, Dollar, Ariary) de votre compte UNEX possède chacun un numéro de compte de référencement que les personnes qui veulent  vous envoyer de l’argent doivent SAISIR EN MOTIF OU EN REFERENCE lors de la procédure d’envoi d’argent de leur côté.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Qui peut envoyer de l’argent sur mon compte UNEX ?</div>
									<div class="content">
										<p align="justify">Tout le monde peut vous envoyer de l’argent : employeur, proche, famille tant qu’ils connaissent vos coordonnées sur vos balance UNEX pour le transfert d’argent.</p>
									</div>
								</div>
							</div>
						</article>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInDown">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">RETIRER DE L’ARGENT EN MGA </h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Comment fonctionne les Mobiles Money ?</div>
									<div class="content">
										<p align="justify">Les mobiles money font partie des moyens de transfert d’argent les plus répondus à Madagascar et dans plusieurs pays notamment africains. Les mobiles money sont reliés à un numéro de téléphone et donc à un opérateur mobile.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Comment retirer de l’argent en MGA (Ariary) à partir d’UNEX ?</div>
									<div class="content">
										<p align="justify">Pour pouvoir retirer de l’argent à partir d’UNEX en MGA (Ariary), il suffit d’avoir un numéro de téléphone étant relié à un compte mobile money ou à un compte vanilla pay pour la réception de l’argent.</p>
									</div>
								</div>
							</div>
						</article>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInDown">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">ECHANGER DES DEVISES</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Comment se passe les échanges de devises avec UNEX ?</div>
									<div class="content">
										<p align="justify">La technologie et l’innovation chez UNEX vous permet de faire des échanges en devises en interne dans votre propre compte. </br>Vous pouvez faire des échanges Ariary to Euro, Ariary to dollar, Euro to dollar et dollar to Euro avec le taux de change le plus intéressant sur le marché et avec zéro frais sur ces derniers</p>
									</div>
								</div>
							</div>
						</article>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInDown">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">LES FRAIS ET COMMISSIONS </h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Pour les dépôts et réception d'argent sur le compte UNEX</div>
									<div class="content">
										<p align="justify">Pour les dépôts par virement bancaire, les frais s’élève à 1% + 1 €/$.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Pour les dépôts d'argent via Mobile Money et Vanilla Pay</div>
									<div class="content">
										<p align="justify">Pour les dépôts d'argent via Mobile Money et Vanilla Pay, les frais s’élève à 3%.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Pour le retrait d’argent en Ariary</div>
									<div class="content">
										<p align="justify">Pour le retrait d’argent en Ariary via Mobile money, nous ne prélevons pas de frais en plus. Cependant, les opérateurs mobiles peuvent avoir leur grille tarifaire sur le transfert d’argent que vous devrez prendre en compte.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Pour les virements SEPA</div>
									<div class="content">
										<p align="justify">Pour les virements SEPA quel que soit le montant du transfert, les frais sont de 1% + 1€.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Pour les virements internationaux (wire transfert)</div>
									<div class="content">
										<p align="justify">Pour les virements internationaux hors zone Euros, les frais de transfert sont de 3€.</p>
									</div>
								</div>
							</div>
						</article>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInDown">
                    <div class="inner-box">
                        <article>
							<div class="container">
								<h2 align="center">NOUS CONTACTER</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Contact</div>
									<div class="content">
										<p align="justify">Si vous avez besoin de détails sur nos services, ou si vous rencontrez des problèmes dans l’utilisation du portefeuille, n’hesitez pas à nous contacter par mail ou par téléphone.</br>
											Mail : <i><b>contact@unex.online</b></i></br>
											Numéro de téléphone : <i><b>+(261) 34 98 565 31 ou +(44) 20 7097 3573</b></i>
										</p>
									</div>
								</div>
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