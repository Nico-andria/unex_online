<?php
session_start();
	$bdd = new PDO("mysql:host=127.0.0.1;dbname=compta;charset=utf8","root","");
	$erreur = null;
	$success = null;

	if (isset($_POST['valider'])) {
		$choix = htmlspecialchars($_POST['choix']);
		$nomCrypto = htmlspecialchars($_POST['nomCrypto']);
		$montantCrypto = htmlspecialchars($_POST['montantCrypto']);
		$montantDollars = htmlspecialchars($_POST['montantDollars']);
		$nomClient = htmlspecialchars($_POST['nomClient']);
		$prenomClient = htmlspecialchars($_POST['prenomClient']);
		$description = htmlspecialchars($_POST['description']);

		if (!empty($nomCrypto) && !empty($montantCrypto) && !empty($montantDollars) && !empty($nomClient) && !empty($prenomClient) && !empty($description)) {
			
			if (!empty($nomCrypto)) {
				if (!empty($montantCrypto)) {
					if (!empty($montantDollars)) {
						if (!empty($nomClient)) {
							if (!empty($prenomClient)) {
								if (!empty($description)) {
									
									if(isset($choix) AND isset($nomCrypto) AND isset($montantCrypto) AND isset($montantDollars) AND isset($nomClient) AND isset($prenomClient) AND isset($description)){

										if (isset($_POST['choix']) AND isset($_POST['nomCrypto']) AND isset($_POST['montantCrypto']) AND isset($_POST['montantDollars']) AND isset($_POST['coursJour']) AND isset($_POST['coursEquity']) AND isset($_POST['nomClient']) AND isset($_POST['prenomClient']) AND isset($_POST['description']) AND isset($_POST['txid'])) {

											if ($_POST['choix']=="Withdraw") {
												$requete = $bdd->prepare("INSERT INTO withdraw(nom_crypto,montant_crypto,montant_dollars,cours_jour,cours_equity,nom_client,prenom_client,description,txid) VALUES(?,?,?,?,?,?,?,?,?)");
												$requetemvola = $bdd->prepare("INSERT INTO entreemvola(libelle,montant,nom_client,prenom_client) VALUES(?,?,?,?)");
												$requete->execute(array(strtoupper($_POST['nomCrypto']),$_POST['montantCrypto'],$_POST['montantDollars'],$_POST['coursJour'],$_POST['coursEquity'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['description'],$_POST['txid']));
												$requetemvola->execute(array($_POST['nomCrypto'],$_POST['montantDollars'],$_POST['nomClient'],$_POST['prenomClient']));
												$success = "Informations bien enregistrées!";
											} else {
												$requete = $bdd->prepare("INSERT INTO deposit(nom_crypto,montant_crypto,montant_dollars,cours_jour,cours_equity,nom_client,prenom_client,description,txid) VALUES(?,?,?,?,?,?,?,?,?)");
												$requetemvola = $bdd->prepare("INSERT INTO sortiemvola(libelle,montant,nom_client,prenom_client) VALUES(?,?,?,?)");
												$requete->execute(array(strtoupper($_POST['nomCrypto']),$_POST['montantCrypto'],$_POST['montantDollars'],$_POST['coursJour'],$_POST['coursEquity'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['description'],$_POST['txid']));
												$requetemvola->execute(array($_POST['nomCrypto'],$_POST['montantDollars'],$_POST['nomClient'],$_POST['prenomClient']));
												$success = "Informations bien enregistrées!";
											}
												
										}
									}

								} else {
									$erreur = "Veuillez entrer une description pour la transaction";
								}
								
							} else {
								$erreur = "Veuillez entrer le prénom du client";
							}
							
						} else {
							$erreur = "Veuillez entrer le nom du client";
						}
						
					} else {
						$erreur = "Veuillez entrer le montant en Dollars";
					}
					
				} else {
					$erreur = "Veuillez entrer le montant en Cryptomonnaie";
				}
				
			} else {
				$erreur = "Veuillez entrer le nom de la Cryptomonnaie";
			}

		} else {
			$erreur = "Veuillez remplir tous les champs";
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
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/bg-noir.jpg">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/css/bootstrap/dist/js/bootstrap.min.js"></script>

	<!--******template******-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--=============================================<?php echo base_url(); ?>assets/==================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
	<div class="bg-contact3" style="background-image: url('<?php echo base_url(); ?>assets/img/btc.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="POST" action="">
					<span class="contact3-form-title">
						Insertion des cryptomonnaies
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

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choix" value="deposit" checked="checked">
							<label class="label-radio3" for="radio1">
								Deposit
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choix" value="withdraw">
							<label class="label-radio3" for="radio2">
								Withdraw
							</label>
						</div>
					</div>


					<div class="wrap-input3 validate-input" data-validate="Le nom de la cryptomonnaie est requis">
						<input class="input3" type="text" name="nomCrypto" placeholder="Mettez le nom de la cryptomonnaie">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Le montant de la Cryptomonnaie est requis">
						<input class="input3" type="number" name="montantCrypto" placeholder="Entrez le montant en Cryptomonnaie">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Le montant en dollars est requis">
						<input class="input3" type="number" name="montantDollars" placeholder="Entrez le montant en Dollars">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Le cours du jour est requis">
						<input class="input3" type="number" name="coursJour" placeholder="Entrez le cours du jour">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Le cours de Equity est requis">
						<input class="input3" type="number" name="coursEquity" placeholder="Entrez le cours de Equity">
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
						<input class="input3" type="text" name="description" placeholder="Description">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Le TXID est requis">
						<input class="input3" type="text" name="txid" placeholder="TXID">
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
								<a href="<?php echo base_url(); ?>Compta/suivicrypto">Liste</a>
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