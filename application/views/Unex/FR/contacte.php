<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
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
</head>
<body>

	

	<div class="bg-container-contact100" style="background-image: url(<?php echo base_url('assets/images/bg-01.jpg') ?>);">
		<div class="contact100-header flex-sb-m">
			<div class="pull-left logo-box">
                    	<div class="logo"><a href="<?php echo base_url(); ?>FR/Unex/home"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" title="" width="70px"></a></div>
                    </div>

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
									<li><a href="home.php">Accueil</a>
										
									</li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/wallet">Portefeuille</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/card#our_card">Cartes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/pricing">Tarification</a></li>
                                    <li class="dropdown"><a href="#">Langues</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/contacte">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/contacte">FR</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>FR/Unex/faq">FAQ</a>
                                    <li class="current"><a href="<?php echo base_url(); ?>FR/Unex/contacte">Contact</a>
								</ul>
							</div>
						</nav>
						
						<!-- btn box --> 

						<button class="btn-show-contact100 theme-btn btn-style-one" href="https://client.unex.online">
							Se connecter
						</button>

						</div>
						<!--Outer Box-->
						<div class="outer-box">
	                        <!-- Nav Toggler -->
	                        <div class="nav-toggler">
		                        <button class="nav-btn"><span class="icon flaticon-arrows"></span></button>
		                    </div>
						</div>

				<div>
				
			</div>
		</div>
	</div> 

	<div class="container-contact100">
		<div class="wrap-contact100">
			<button class="btn-hide-contact100">
				<a href="<?php echo base_url(); ?>FR/Unex/home" class="zmdi zmdi-close"></a>
			</button>

			<div class="contact100-form-title" style="background-image: url(<?php echo base_url('assets/images/bg-02.jpg') ?>);">
				<span>Contactez-nous</span>
			</div>

			<form class="contact100-form validate-form" method="POST" action="<?php echo base_url(); ?>FR/Unex/mail">
				<div class="wrap-input100 validate-input">
					<input id="name" class="input100" type="text" name="name" placeholder="Entrez votre nom">
					<span class="focus-input100"></span>
					<label class="label-input100" for="name">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="email" name="email" placeholder="Ex. example@email.com">
					<span class="focus-input100"></span>
					<label class="label-input100" for="email">
						<span class="lnr lnr-envelope m-b-5"></span>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<input id="subject" class="input100" type="text" name="subject" placeholder="Entrez le sujet de votre message">
					<span class="focus-input100"></span>
					<label class="label-input100" for="subject">
						<span class="lnr lnr-file-empty m-b-2"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Ex. +44 12 34 567 89">
					<span class="focus-input100"></span>
					<label class="label-input100" for="phone">
						<span class="lnr lnr-smartphone m-b-2"></span>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<textarea id="message" class="input100" name="message" placeholder="Votre message..."></textarea>
					<span class="focus-input100"></span>
					<label class="label-input100 rs1" for="message">
						<span class="lnr lnr-bubble"></span>
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<input class="contact100-form-btn" type="submit" name="send" value="Envoyer">
						<!-- Send Now
					</button> -->
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>