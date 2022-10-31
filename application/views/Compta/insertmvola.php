<?php
session_start();
	$bdd = new PDO("mysql:host=127.0.0.1;dbname=compta;charset=utf8","root","");
	$erreur = null;
	$success = null;

	if (isset($_POST['valider'])) {
		$libelle = htmlspecialchars($_POST['libelle']);
		$montant = htmlspecialchars($_POST['montant']);
		$reste = htmlspecialchars($_POST['reste']);
		$nomClient = htmlspecialchars($_POST['nomClient']);
		$prenomClient = htmlspecialchars($_POST['prenomClient']);
		$numeroTransaction = htmlspecialchars($_POST['numeroTransaction']);
		if(isset($libelle) AND isset($_POST['choix']) AND isset($montant) AND isset($reste) AND isset($nomClient) AND isset($prenomClient) AND isset($numeroTransaction)){

			if (isset($_POST['libelle']) AND isset($_POST['montant']) AND isset($_POST['reste']) AND  isset($_POST['nomClient']) AND isset($_POST['prenomClient']) AND isset($_POST['numeroTransaction'])) {
				
				if($_POST['choix']=="Entrée"){
					$requete = $bdd->prepare("INSERT INTO entreemvola(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
					$requete->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
					$requeteMonnaie = $bdd->prepare("INSERT INTO monnaie(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
					$requeteMonnaie->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
					$success = "Informations bien enregistrées!";
				}else{
					$requete = $bdd->prepare("INSERT INTO sortiemvola(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
					$requete->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
					$requeteMonnaie = $bdd->prepare("INSERT INTO monnaie(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
					$requeteMonnaie->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
					$success = "Informations bien enregistrées!";
				}
			}
		}
	}
	/*if(isset($_SESSION['id'])){*/

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Gestion cryptomonnaies</title>
	<link rel="icon" href="img/logo.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.jpg">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/css/bootstrap/dist/js/bootstrap.min.js"></script>

	<!--******template******-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
</head>
<body>
	
	<!--*****************template******************-->
	<div class="bg-contact3" style="background-image: url('<?php echo base_url(); ?>assets/img/autres.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="post" action="">
					<span class="contact3-form-title">
						Insertion d'autres modes de transaction
					</span>

					<?php if($erreur): ?>
						<div class="alert alert-danger">
							<?= $erreur ?>
						</div>
					<?php endif ?>

					<?php if($success): ?>
						<div class="alert alert-successS">
							<?= $success ?>
						</div>
					<?php endif ?>

					<div class="wrap-input3 validate-input" data-validate="Le nom du mode de transaction est requis">
						<input class="input3" type="text" name="libelle" placeholder="Mettez le nom du mode de paiement">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choix" value="entree" checked="checked">
							<label class="label-radio3" for="radio1">
								Entrée
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choix" value="sortie">
							<label class="label-radio3" for="radio2">
								Sortie
							</label>
						</div>
					</div>


					<div class="wrap-input3 validate-input" data-validate="Le montant de la Cryptomonnaie est requis">
						<input class="input3" type="number" name="montant" placeholder="Entrez le montant de la transaction">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Le montant en dollars est requis">
						<input class="input3" type="number" name="reste" placeholder="Entrez le solde restant">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Le nom du client est requis">
						<input class="input3" type="text" name="nomClient" placeholder="Entrez le nom du client">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Le prénom du client est requis">
						<input class="input3" type="text" name="prenomClient" placeholder="Entrez le prénom du client">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Une description est requise">
						<input class="input3" type="text" name="numeroTransaction" placeholder="Numéro de la transaction">
						<span class="focus-input3"></span>
					</div>

					<!-- <div class="container-contact3-form-btn">
						<div class="col-sm-4 col-mg-4 col-lg-12">
							
							<button class="contact3-form-btn" name="valider">
								Insérer
							</button>
						</div>

						<div class="col-sm-4 col-mg-4 col-lg-12"></div>

						<div class="col-sm-4 col-mg-4 col-lg-12">
							<button class="contact3-form-btn" name="liste">
								Liste
							</button>
						</div>

					</div> -->

					<div class="auto-container">
		            <div class="row">
		                <div class="client-logo col-lg-4 col-md-6 col-sm-12">
		                    <button class="contact3-form-btn" name="valider">
								Insérer
							</button>
		                </div>

		                <div class="client-logo col-lg-4 col-md-6 col-sm-12">                   
		                </div>
		                
		                <div class="client-logo col-lg-4 col-md-6 col-sm-12">
		                    <button class="contact3-form-btn" name="liste">
								<a href="<?php echo base_url(); ?>Compta/suivimvola">Liste</a>
							</button>
		                </div>
		            </div>
		        </div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	
</body>
</html>