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
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/home">Home</a>
                                        
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/wallet">Wallet</a></li>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/crypto">Crypto</a></li>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/card#our_card">Card</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/pricing">Pricing</a></li>
                                    <li class="dropdown"><a href="#">Language</a>
                                        <ul>
                                            <li><a href="#">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/guide">FR</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/faq">FAQ</a>
                                    	<li><a href="<?php echo base_url(); ?>EN/Unex/tuto">Tutorial</a>
                                    <li class="current"><a href="<?php echo base_url(); ?>EN/Unex/guide">Guide</a>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/contacte">Contact Us</a>
                                </ul>
                            </div>
                        </nav>
                        
                        <!-- btn box -->
                        <div class="btn-box">
                            <!-- <a href="contacte.php" class="theme-btn btn-style-one">Contact Us</a> -->
                            <a href="http://client.unex.online" class="theme-btn btn-style-one"><span class="fa fa-sign-in"></span> Sign in</a>
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
								<h2 align="center">WHAT IS UNEX ?</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Why UNEX ?</div>
									<div class="content">
										<p align="justify">UNEX is an e-Wallet brand owned by Equity MG Ltd, a limited company registered at Companies House in the United Kingdom under number 12277150 at: 71-75, Shelton Street, London, Greater London, WC2H 9JQ, UNITED KINGDOM.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">What solutions does UNEX offer ?</div>
									<div class="content">
										<p align="justify">UNEX solves the problem of the Malagasy and several countries where the use of electronic wallets like Paypal and Skrill is restricted, and where international money transfers through banking institutions are subject to very high fees.
										UNEX is a multi-currency electronic wallet (Euro, dollar, Ariary) that facilitates the sending of money internationally and the receipt in MGA (Ariary) of funds from abroad.</br>You will even be able to buy BTC with the UNEX wallet in the near future.</br>The creation of personalized IBAN and the debit card issuance system for each account is currently under development to improve the experience of users.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">For who are the services offered by UNEX ?</div>
									<div class="content">
										<p align="justify">
										The UNEX brand was designed to serve everyone but especially the African countries which really need it the most.</p>
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
								<h2 align="center">MONEY TRANSFER</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">How are the funds transfers ?</div>
									<div class="content">
										<p align="justify">The transfer of funds via UNEX can be done as a p2p transfer between UNEX account, as a SEPA transfer, Wire Transfer for receiving and sending funds.</br>It is also possible to deposit and withdraw money from a UNEX account via mobile money such as Mvola, Orange Money and Airtel Money.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">What is a p2p transfer ?</div>
									<div class="content">
										<p align="justify">A p2p (peer-to-peer) transfer is a transfer to other UNEX user accounts.</br>Thanks to UNEX's electronic wallets, you can send money quickly and easily to anyone with a UNEX account as well as request payment of wages from your employer (as an employee), remuneration in return for services or payment following the sale of a product that you have offered to customers.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">What is a SEPA transfer?</div>
									<div class="content">
										<p align="justify">A SEPA transfer is a bank transfer that takes place within the Euro zone and which allows rapid transactions (in less than 24 hours).</br>With UNEX, you can receive and send money by SEPA transfer easily</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">How are international money transfers going ?</div>
									<div class="content">
										<p align="justify">To be able to send money to a bank, the recipient's bank details are required to ensure receipt of the money by the recipient.</br>Thus with UNEX, with knowledge of the recipient's bank details (full name of the account holder, IBAN, SWIFT</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">IBANS, BIC, SEPA, SWIFT and ACH?</div>
									<div class="content">
										<h5><i><b>IBAN : </i></b>International Bank Account Number</h5>
										<p align="justify">The international bank account number is a unique identifier that helps banks process payments from one person to another automatically. The IBAN contains all the necessary information of the owner though a bank account such as account number, bank and branch information and country code. Although no uniform length has been established for SEPA countries, the IBAN cannot exceed 34 characters. However, most countries have different fixed lengths. Our validator automatically detects the country and the length of the IBAN in order to perform an accurate validation.</p>
											</br>
										<h5><i><b>BIC : </i></b>Bank Identifier Code</h5>
										<p align="justify">The Bank Identification Code is an international code that banks use for financial transactions. Each bank has its own BIC. In this way, European and international payment orders automatically arrive at the right bank and at the right branch. The BIC is also called a SWIFT address or a SWIFT code. The BIC code can be 8 or 11 characters long, depending on the branch information.</p>
											</br>
										<h5><i><b>SEPA : </i></b>Single Euro Payment Area</h5>
										<p align="justify">This single euro payment area establishes an integrated European market for payment instruments. The aim of SEPA is to make payments made in Europe as simple and efficient as those made within the same country.</p>
											</br>
										<h5><i><b>SWIFT : </i></b>Society for Worldwide Interbank Financial Telecommunication</h5>
										<p align="justify">Society for Global Interbank Financial Telecommunications; See BIC</p>
											</br>
										<h5><i><b>ACH : </i></b>Automated Clearing House</h5>
										<p align="justify">ACH is a type of electronic funds transfer network used in the United States. Like SWIFT in Europe, ACH provides interbank clearing for credit and debit transactions. The ACH electronic network helps banks and financial institutions exchange information between the two.</p>
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
								<h2 align="center">SENDING MONEY</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">How do I send money via UNEX ?</div>
									<div class="content">
										<p align="justify">To send money via UNEX, all you have to do is enter the exact bank details of the recipient in the fields to be filled in during the sending procedure if it is a question of bank transfer and enter the correct account number if it is required. 'acts of internal transfer (p2p).</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Which countries can I send money to with UNEX ?</div>
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
								<h2 align="center">HOW TO RECEIVE MONEY ON UNEX ?</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">How do I fund my UNEX account?</div>
									<div class="content">
										<p align="justify">There are several ways to fund your UNEX account, either by receiving funds via wire transfer or depositing via Mobile Money and receiving money via other UNEX accounts. </br>It should be remembered that, each balance in currencies (Euro, Dollar, Ariary) of your UNEX account each has a referencing account number that people who want to send you money must ENTER AS A REASON OR REFERENCE during the procedure. sending money from their side.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">Who can send money to my UNEX account ?</div>
									<div class="content">
										<p align="justify">Anyone can send you money: employer, relative, family as long as they know your details on your UNEX scales for the money transfer.</p>
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
								<h2 align="center">WITHDRAW MONEY IN MGA </h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">How does Mobile Money work ?</div>
									<div class="content">
										<p align="justify">Mobile money is one of the most popular means of money transfer in Madagascar and in several countries, particularly in Africa. Mobile money is linked to a telephone number and therefore to a mobile operator.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">How to withdraw money in MGA (Ariary) from UNEX ?</div>
									<div class="content">
										<p align="justify">To be able to withdraw money from UNEX in MGA (Ariary), all you need to do is have a phone number linked to a mobile money account or a vanilla pay account to receive the money.</p>
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
								<h2 align="center">EXCHANGE CURRENCIES</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">How is currency exchange with UNEX ?</div>
									<div class="content">
										<p align="justify">Technology and innovation at UNEX allows you to trade forex internally in your own account. </br> You can trade Ariary to Euro, Ariary to dollar, Euro to dollar and dollar to Euro with the most interesting exchange rate on the market and with zero fees on them</p>
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
								<h2 align="center">FEES AND COMMISSIONS </h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">For deposit funds to the UNEX account</div>
									<div class="content">
										<p align="justify">For deposits by bank transfer, the fee is €1 / $1.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">For withdrawing money in Ariary</div>
									<div class="content">
										<p align="justify">For withdrawing money in Ariary via Mobile money, we do not charge any additional fees. However, mobile operators may have their money transfer fee schedule that you will need to consider.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">For SEPA transfers</div>
									<div class="content">
										<p align="justify">For SEPA transfers regardless of the transfer amount, the fees are 1.5 €.</p>
									</div>
								</div>
								<div class="contentBx">
									<div class="label">For international transfers (wire transfer)</div>
									<div class="content">
										<p align="justify">For international transfers outside the Euro zone, the transfer fees are €4.</p>
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
								<h2 align="center">CONTACT US</h2>
								<div class="accordion">
								<div class="contentBx">
									<div class="label">Contact</div>
									<div class="content">
										<p align="justify">If you need more details about our services, or if you have any problems using the wallet, please do not hesitate to contact us by email or phone.</br>
											Mail : <i><b>contact@unex.online</b></i></br>
											Phone number : <i><b>+(261) 34 98 565 31 or  +(44) 20 7097 3573</b></i>
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