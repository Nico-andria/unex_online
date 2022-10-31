<?php
session_start();
	//$bdd = new PDO("mysql:host=127.0.0.1;dbname=suivi;charset=utf8","root","");
	$bdd = new mysqli('127.0.0.1','root','','compta');
	$erreur = null;
	$success = null;
	if (isset($_POST['liste'])) {
		header("Location:suivicrypto.php");
	}

	if (isset($_POST['modifier']) AND isset($_GET['id'])) {
		$choix = htmlspecialchars($_POST['choix']);
		$libelleModif = htmlspecialchars($_POST['libelleModif']);
		$montantModif = htmlspecialchars($_POST['montantModif']);
		$resteModif = htmlspecialchars($_POST['resteModif']);
		$nomClientModif = htmlspecialchars($_POST['nomClientModif']);
		$prenomClientModif = htmlspecialchars($_POST['prenomClientModif']);
		$descriptionModif = htmlspecialchars($_POST['descriptionModif']);

		if (isset($_POST['choix']) || isset($_POST['libelle']) || isset($_POST['montant']) || isset($_POST['reste']) || isset($_POST['nomClient']) || isset($_POST['prenomClient']) || isset($_POST['numero_transaction'])) {

			if ($_POST['choix']=="Entrée") {
				$modif = "UPDATE entreemvola SET
					date='".$_POST['dateModif']."',
					libelle='".strtoupper($libelleModif)."',
					montant=".$montantModif.",
					reste=".$resteModif.",
					nom_client='".$nomClientModif."',
					prenom_client='".$prenomClientModif."',
					numero_transaction='".$numerTransactionModif."'
				WHERE id=".$_GET['id'];

				$resultat = mysqli_query($bdd, $modif);
				//$modif->execute(array());
				if (!$resultat) {
					$erreur = "Erreur dans l'exécution de la requête<br>Le message d'erreur est :".mysqli_error($bdd);
				}else{
					$success = "Modification terminée!";
				}
			} else {
				$modif = "UPDATE sortiemvola SET
					date='".$_POST['dateModif']."',
					libelle='".strtoupper($libelleModif)."',
					montant=".$montantModif.",
					reste=".$resteModif.",
					nom_client='".$nomClientModif."',
					prenom_client='".$prenomClientModif."',
					numero_transaction='".$numeroTransactionModif."'
				WHERE id=".$_GET['id'];
				$resultat = mysqli_query($bdd, $modif);
				/*$modif->execute();*/
				if (!$resultat) {
					$erreur = "Erreur dans l'exécution de la requête<br>Le message d'erreur est :".mysqli_error($bdd);
				}else{
					$success = "Modification terminée!";
				}
			}
												
		}					
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion cryptomonnaies</title>
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/logo.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<?php if($erreur): ?>
					<div class="alert alert-danger">
						<?= $erreur ?>
					</div>
				<?php endif ?>

				<?php if($success): ?>
					<div class="alert alert-success">
						<?= $success ?>
					</div>
				<?php endif ?>

				<?php
				 if(isset($_GET['id'])){ 
				//récupération de tous les enregistrements de la table
				$resultat = $bdd->query('SELECT * FROM entreemvola WHERE id='.$_GET["id"]);
				if($resultat){
					while ($data = $resultat->fetch_array()) {
						$date = date_create($data['date']);
						$id = $data['id'];
						
					?>
					<form class="contact3-form validate-form" method="POST">
						<span class="contact3-form-title">
							Modification des autres transactions
						</span>

						<div class="wrap-contact3-form-radio">
							<div class="contact3-form-radio m-r-42">
								<input class="input-radio3" id="radio1" type="radio" name="choix" value="Sortie" checked="checked">
								<label class="label-radio3" for="radio1">
									Sortie
								</label>
							</div>

							<div class="contact3-form-radio">
								<input class="input-radio3" id="radio2" type="radio" name="choix" value="Entrée">
								<label class="label-radio3" for="radio2">
									Entrée
								</label>
							</div>
						</div>


						<div class="wrap-input3 validate-input" data-validate="La date est requise">
							<input class="input3" type="date" placeholder="Entrez la date" name="dateModif" value="<?php echo $data['date_ajd']; ?>">
							<span class="focus-input3"></span>
						</div>

						<div class="wrap-input3 validate-input" data-validate="Le nom de la cryptomonnaie est requis">
							<input class="input3" type="text" placeholder="Entrez la date" name="libelleModif" value="<?php echo $data['libelle']; ?>">
							<span class="focus-input3"></span>
						</div>

						<div class="wrap-input3 validate-input" data-validate="Le montant de la Cryptomonnaie est requis">
							<input class="input3" type="text" placeholder="Entrez la date" name="montantModif" value="<?php echo $data['montant']; ?>">
							<span class="focus-input3"></span>
						</div>

						<div class="wrap-input3 validate-input" data-validate="Le montant en dollars est requis">
							<input class="input3" type="text" placeholder="Entrez la date" name="resteModif" value="<?php echo $data['reste']; ?>">
							<span class="focus-input3"></span>
						</div>


						<div class="wrap-input3 validate-input" data-validate="Le nom du client est requis">
							<input class="input3" type="text" placeholder="Entrez la date" name="nomClientModif" value="<?php echo $data['nom_client']; ?>">
							<span class="focus-input3"></span>
						</div>

						<div class="wrap-input3 validate-input" data-validate="Le prénom du client est requis">
							<input class="input3" type="text" placeholder="Entrez la date" name="prenomClientModif" value="<?php echo $data['prenom_client']; ?>">
							<span class="focus-input3"></span>
						</div>

						<div class="wrap-input3 validate-input" data-validate = "Le numero_transaction est requis">
							<input class="input3" type="text" placeholder="Entrez le numero_transaction" name="numeroTransactionModif" value="<?php echo $data['numero_transaction']; ?>">
							<span class="focus-input3"></span>
						</div>


						<div class="auto-container">
			            <div class="row">
			                <div class="client-logo col-lg-4 col-md-6 col-sm-12">
			                    <button class="contact3-form-btn" name="modifier">
									Modifier
								</button>
			                </div>

			                <div class="client-logo col-lg-4 col-md-6 col-sm-12">                   
			                </div>
			                
			                <div class="client-logo col-lg-4 col-md-6 col-sm-12">
			                    <button class="contact3-form-btn" name="liste">
									Liste
								</button>
			                </div>
			            </div>
			        </div>
					</form>
				<?php

							}
						}
					}
				?>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	
</body>
</html>