<!DOCTYPE html>
<html>
<head>
	<title>Equity</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="css/bootstrap/dist/js/bootstrap.min.js"></script>
	<!--*****cdn***-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
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
   
  <script type = "text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script type="text/javascript"  src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.js')?>"></script>
	<style type="text/css">



		.carousel-inner img {
		    width: 100%;
		    height: 100%;
		  }
		section{
			padding: 50px;
			background-image: url("img/imgSection2.jpg");
			background-size: cover;
			height: 500px;
			color: white;
			text-align: center; 
		}
		footer{
			background-color: #00ccff;
			padding: 30px;
			border-top: 5px solid black;
		}
		#ft2{
			background-color: black;
			padding: 30px;
			text-align: center;
			color: #d6d6c2;
		}
		@keyframes slider {
			0%{
				background-image: url('<?php echo base_url('assets/img/imgSection1.jpeg') ?>');
			}
			20%{
				background-image: url('<?php echo base_url('assets/img/imgSection1.jpeg') ?>');
			}
			20.01%{
				background-image: url('<?php echo base_url('assets/img/imgSection2.jpeg') ?>');
			}
			40%{
				background-image: url('<?php echo base_url('assets/img/imgSection2.jpeg') ?>');
			}
			40.01%{
				background-image: url('<?php echo base_url('assets/img/avatar3.jpeg') ?>');
			}
			60%{
				background-image: url('<?php echo base_url('assets/img/avatar3.jpeg') ?>');
			}
			60.01%{
				background-image: url('<?php echo base_url('assets/img/xm.jpeg') ?>');
			}
			80%{
				background-image: url('<?php echo base_url('assets/img/xm.jpg') ?>');
			}
			80.01%
			{
				background-image: url('<?php echo base_url('assets/img/pepperstone.jpeg') ?>');
			}
			100%{
				background-image: url('<?php echo base_url('assets/img/pepperstone.jpeg') ?>');
			}
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Accueil</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Nos formations
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Comment ça marche
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Performances</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Equity</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: #00ff00;">Achat Crypto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="connexion.php"><i class="fas fa-sign-in"></i>Se connecter</a>
    </li>
  </ul>
</nav>
	<!--carousel avec text fixe-->
	<div class="slider">
		<div class="load"></div>
		<div class="content">
			<div class="principal">
				<h1>WEBSITE</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<!--carousel-->
	<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/imgSection1.jpg" alt="Los Angeles" width="1100" height="500">
	      <div class="carousel-caption" id="sld">
	        <h1>Formation trading en ligne</h1>
			<p>Equity est aussi un établissement de formation pour le métier de trader particulier à Madagascar</p>
			<!-- <img src="img/imgSection2.jpg" alt="essai" width="100%"> -->
			<button type="button" class="btn btn-primary">J'adhère aux formations</button>
			<button type="button" class="btn btn-primary">Je suis déjà membre</button>
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src="img/imgSection2.jpg" alt="Chicago" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1>Formation trading en ligne</h1>
			<p>Equity est aussi un établissement de formation pour le métier de trader particulier à Madagascar</p>
			<!-- <img src="img/imgSection2.jpg" alt="essai" width="100%"> -->
			<button type="button" class="btn btn-primary">J'adhère aux formations</button>
			<button type="button" class="btn btn-primary">Je suis déjà membre</button>
	      </div>   
	    </div>
	  </div>
	</div>
	<!--**********section 1************-->
	<!-- <section>
		<h1>Formation trading en ligne</h1>
		<p>Equity est aussi un établissement de formation pour le métier de trader particulier à Madagascar</p>
		<img src="img/imgSection2.jpg" alt="essai" width="100%">
		<button type="button" class="btn btn-primary">J'adhère aux formations</button>
		<button type="button" class="btn btn-primary">Je suis déjà membre</button>
	</section> -->

		<h2 style="text-align: center;">LES GENS EN PARLENT</h2>
	<article class="container-fluid" style="text-align: center;">
		<div class="container">
		  <div class="row">
		    <div class="col-sm-3" id="trading">
		    	<h2>Trading en ligne</h2>
				<p>Le marché est ouvert du lundi au vendredi. Vous pouvez spéuler selon vos disponibilités que vous soyez salariés, entrepreneurs ou étudiants</p>
		    </div>
		    <div class="col-sm-3" id="formations">
		    	<h2>Formations</h2>
				<p>Le trading est un métier délicat et necessite une formation bien developpée et complète pour être rentable sur les marchés. Nous vous accompagnons tout au long de votre apprentissage pour que vous puissez faire de cet activité une source de revenu complémentaire</p>
		    </div>
		    <div class="col-sm-3" id="choix">
		    	<h2>Choix variés</h2>
				<p>Les marchés offrent une large éventail de produits qui ont des spécificités différents et donc des opporunités différentes</p>
		    </div>
		  </div>
		</div>
	</article>


	<!-- <article>
		<div id="trading">
			<h2>Trading en ligne</h2>
			<p>Le marché est ouvert du lundi au vendredi. Vous pouvez spéuler selon vos disponibilités que vous soyez salariés, entrepreneurs ou étudiants</p>
		</div>

		<div id="formations">
			<h2>Formations</h2>
			<p>Le trading est un métier délicat et necessite une formation bien developpée et complète pour être rentable sur les marchés. Nous vous accompagnons tout au long de votre apprentissage pour que vous puissez faire de cet activité une source de revenu complémentaire</p>
		</div>

		<div id="choix">
			<h2>Choix variés</h2>
			<p>Les marchés offrent une large éventail de produits qui ont des spécificités différents et donc des opporunités différentes</p>
		</div>


	</article> -->

	<aside>
		<h2>QUI SOMMES-NOUS?</h2>
		<div id="identite">
			<img src="img/imgSection2.jpg" width="30%">
			<p style="padding-left: 30px;">Equity est spécialisé dans le domaine du trading en ligne sur les marchés financiers, notamment dans les formations et gestion de portefeuille d'investissement.</br>
			Notre mission est de promouvoir l'intégration de ce domaine à Madagascar pour qu'elle puissed être accessible aux particuliers et investisseurs malgaches en proposant des investissements à risques limités mais aves des bons rendements.</p>
		</div>

		<div id="nosFormation">
			<div id="vague">
				<h2>1 Vagues de Formations</h2>
				<p>Laissez-vous guider par nos formateurs expérimentés lors des séances de cours présentiels en salle dans nos locaux et par groupes de 10 à 20 personnes. les formations en groupe chez Equity se font notamment par vagues. Pour connaître la disponibilité des prochaines vagues de formations (Dates, horaires et fréquences), veuillez nous contacter directement.</p>
				<button type="button" class="btn btn-primary">En savoir plus</button>
			</div>

			<div id="online">
				<h2>2 Formation en ligne</h2>
				<p>Souhaitez-vous faire du trading votre métier?<br>
					Mais vous n'avez pas le temps d'assister aux formations présentielles en salle?<br>
				Notre cursus de formation spécialisé sera adaptée à vos disponibilités et selon votre rythme grâce à nos formations de vidéos en ligne et à travers une assistance à distance</p>
				<button type="button" class="btn btn-primary">En savoir plus</button>
			</div>

			<div id="groupe">
				<h2>3 Formation en groupe</h2>
				<table class="table">
					<th>Formation en groupe<br>200.000 Ar</th>
					<tr><td>Durée : 1 mois</td></tr>
					<tr><td>Planning : Mercredi 14h à 17h</td></tr>
					<tr><td>Samedi 9h à 11h30</td></tr>
					<tr><td>Avantages : <br>
						<ul>
							<li>Suivi et coahing en direct tous les jours durant et après la formation</li>
							<li>Ouverture de compte de trading chez nos courtiers</li>
							<li>Méthode de paiement (déppôt et retrait d'argent)</li>
							<li>Accès à nos vidéos de formations et support de cours</li>
						</ul>
					</td></tr>
				</table>
				<button type="button" class="btn btn-primary">En savoir plus</button>
			</div>
		</div> 
	</aside>

	<div id="commentCaMarche">
		<h2>COMMENT CA MARCHE ?</h2>
		<div>
			<img src="">
			<div id="desc">
				<p>Vous pouvez apprendre gratuitement sur notre site quelques notions de bases du trading. <br>
					Pour avoir une formation complète, vous pouvez vous souscrir à nos <a href="#">Formations en salle</a> ou <a href="#">Formations en ligne</a> selon votre disponibilité.</p>
				<div id="plus">
					<button type="button" class="btn btn-primary">En savoir plus</button>
				</div>
			</div>
		</div>

		<div class="container-fluid" style="text-align: center; padding: 50px;">
		  <h2>Nos modes de paiement</h2>
		  <div class="row" style="padding: 50px;">
		    <div class="col-sm-2"><img src="<?php echo base_url('assets/img/skrill.jpg') ?>" width="100%"></div>
		    <div class="col-sm-2"><img src='<?php echo base_url('assets/img/virement.png') ?>' width="100%"></div>
		    <div class="col-sm-2"><img src='<?php echo base_url('assets/img/mvola.jpg') ?>' width="100%"></div>
		    <div class="col-sm-2"><img src='<?php echo base_url('assets/img/visa.png') ?>' width="100%"></div>
		    <div class="col-sm-2"><img src='<?php echo base_url('assets/img/mastercard.png') ?>' width="100%"></div>
		  </div>
		</div>
		<!-- <div id="modePaiement">
			<h2>Nos modes de paiement</h2>
			<div id="paye">
				<img src="img/skrill.png" width="10%">
				<img src="img/virement.png" width="10%">
				<img src="img/mvola.jpg" width="10%">
				<img src="img/visa.png" width="10%">
				<img src="img/mastercard.png" width="10%">
			</div>
		</div> -->
	</div>

	<div id="contact">
		<div id="formulaire">
			<form action="#">
			  <div class="form-group">
			    <label for="nom">NOM *:</label>
			    <input type="text" class="form-control" placeholder="Entrer nom" id="nom">
			  </div>
			  <div class="form-group">
			    <label for="prenom">PRENOM *:</label>
			    <input type="text" class="form-control" placeholder="Entrer prenom" id="prenom">
			  </div>
			  <div class="form-group">
			    <label for="mail">EMAIL *:</label>
			    <input type="text" class="form-control" placeholder="Entrer adresse email" id="mail">
			  </div>
			  <div class="form-group">
			    <label for="prenom">MESSAGE *:</label>
			    <textarea class="form-control" placeholder="Au moins 50 caractères" id="message"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">ENVOYER VOTRE MESSAGE</button>
			</form>
		</div>
		<div id="details">
			<table class="table">
				<th>Détails</th>
				<tr><td>Lot VI 22 Ambatoroka, en face Choco o'milk, 20 mètres avant Eglise FJKM</td></tr>
				<tr><td>contact@equity-funds.net</td></tr>
				<tr><td>+261346270639 / +261342576352</td></tr>
				<tr><td>Du lundi au vendredi de 9h à 12h et 13h30 à 17h</td>
				</tr>
			</table>			
		</div>
	</div>

	<div class="container-fluid" id="feedback" style=" padding: 50px;">
		<h2 style="text-align: center;">NOS COURTIERS PARTENAIRES</h2>
		<div class="container">
		  <div class="row">
		    <div class="col-sm-4">
		    	<img src="img/pepperstone.jpg">
				<p>Courtier Australien régulé par la FCA (Financial Conduct Authority) United Kingdom. Licensé par l'ASIC (Australian Securities and Investiment) avec l'AFSL (Australian Financial Services License</p>
		    </div>
		    <div class="col-sm-4">
		    	<img src="img/tickmill.jpg">
				<p>Courtier USA & Seychelles régulé par la FCA (Financial Conduct Authority) United Kingdom.</p>
		    </div>
		    <div class="col-sm-4">
		    	<img src="img/xm.jpg">
				<p>Réégulation :
					<ul>
						<li>+ IFSC (International Financial Services Commission) Belize</li>
						<li>+ FCA (Financial Conduct Authority) United Kingdom</li>
						<li>+ CySec (Cyprus Securities and Exchange Commission) Cyprus</li>
						<li>+ASIC (Australian Securities and Investments Commission) Australia</li>
					</ul>
				</p>
		    </div>
		  </div>
		</div>
	</div>

	<div class="container-fluid" id="feedback" style="text-align: center; padding: 50px;">
		<h2 style="text-align: center;">LES GENS EN PARLENT</h2>
		<div class="container">
		  <div class="row">
		    <div class="col-sm-4">
		    	<img src="img/avatar1.jpg" class="rounded" width="100px">
				<p><i>"Amiko manokana raha ny fahitako azy dia somary mbola zava-baovao ho an'ny vahoaka malagasy ilay tena potentialité anatin'ilay tontolo. Kanefa dia tsy mahasakana ireo mpandraharaha toa ahy sy ireo mpianatra na mpiasa na olon-tsotra iantsehatra izany. Naka risika aho kanefa ankehitriny itako misy ny vokatra azo tsapain-tànana na dia niahotra sy natahotra ihany ary aho tamin'ny voalohany. Mankasitraka ary mirary soa."</i><br>
				<b>ANDRISOA AVOTRA</b></p>
		    </div>
		    <div class="col-sm-4">
		    	<img src="img/avatar2.jpg" class="rounded" width="100px">
				<p><i>"Au début, je ne connaissais rien du trading en ligne mais j'ai découvert un nouveau monde exceptionnel grâce à Equity. J'ai appris de nombreuses techniques en trading, j'ai aussi reçu une bonne éducation financière mais surtout ma vision concernant les investissements et les placements financières a beaucoup changé"</i><br>
				<b>ANTONIO JOANE</b></p>
		    </div>
		    <div class="col-sm-4">
		    	<img src="img/avatar3.jpg" class="rounded" width="100px">
				<p><i>"Etant médecin généraliste diplômé de l'université d'Ankatso, je suis aussi à la fois client investisseur chez Equity. Je suis satisfaite de leurs performances malgré l'existence d'un mois négatif mais les objectifs en termes de profits ont été atteintes durant la première vague de fonds communs d'investissement. Je considère ce choix comme un placement financier à long terme."</i><br>
				<b>ANDO RABE</b></p>
		    </div>
		  </div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="container">
		  <div class="row">
		    <div class="col-sm-6">
		    	<h3>A propose de nous</h3>
					<p>Equity est une société de consultance dans le domaine des marchés financiers. Nous promouvons le métier du trader indépendant et/ou professionnel grâce à nos formations dédiées à cela.<br>
					<b>EQUITY MG LTD</b> est une société immatriculée au Companies Houses du Royaume-Unie sous le numéro 12277150 et se trouve à l'adresse 71-75, Shelton Street, London, Greater London, WC2H 9JQ, UNITED KINGDOM<br>
					<b>EQUITY</b> est une filiale de EQUITY MG LTD enregistrée au centre fiscale malgache sous le Numéro d'Identificatoin Fiscale (NIF): 4003547241 Numéro Statistique (STAT): 74908112019006309</p>
		    </div>
		    <div class="col-sm-3">
		    	<h3>Liens rapides</h3>
					<ul>
						<li><a href="#">Accueil</a></li>
						<li><a href="#">Nos formations</a></li>
						<li><a href="#">Comment ça marche</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Achat Bitcoin</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Investir dans le Forex</a></li>
					</ul>
		    </div>
		    <div class="col-sm-3">
		    	<h3>Pages utiles</h3>
					<p><a href="#">Espace membre</a></p>
		    </div>
		  </div>
		</div>
	</footer>
	
	<div id="ft2" class="container-fluid">
			<div id="socialMedia"></div>
			<div id="copyright">
				<p>Copyright <b><a href="#">equity-funds.tech</a></b>. 2020 Tous droits réservés</p>
			</div>
		</div>

    <!--===============================================================================================-->
  <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/bootstrap/js/popper.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/main.js"></script>
</body>
</html>