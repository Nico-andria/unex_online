<?php
session_start();
	$bdd = new PDO("mysql:host=127.0.0.1;dbname=compta;charset=utf8","root","");
	

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Mvola</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/css/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron">
	  <h1>Suivi des transactions</h1>
	  <p>Vous trouverez ici le suivi de toutes les transactions faites :</p>
	</div>

	<div class="container">
		<form method="POST" action="">
			<div class="input-group mb-3">
		        <div class="input-group-append">
		        	<span class="input-group-text"><b>Libellé :</b></span>
		        </div>
		        <input type="text" class="form-control" placeholder="Entrez le libellé de" name="libelle">
		    </div>

			<div class="input-group mb-3">
		        <div class="input-group-append">
		        	<span class="input-group-text"><b>Choix :</b></span>
		        </div>
		        <select class="form-control" id="operation" name="choix">
				   	<option>Entrée</option>
				   	<option>Sortie</option>
				</select>
		    </div>

		    <div class="input-group mb-3">
		        <div class="input-group-append">
		        	<span class="input-group-text"><b>Montant :</b></span>
		        </div>
		        <input type="number" class="form-control" placeholder="Entrez le montant" name="montant">
		    </div>

		    <div class="input-group mb-3">
		        <div class="input-group-append">
		        	<span class="input-group-text"><b>Reste :</b></span>
		        </div>
		        <input type="number" class="form-control" placeholder="Entrez le solde restant" name="reste">
		    </div>

		    <div class="input-group mb-3">
		        <div class="input-group-append">
		        	<span class="input-group-text"><b>Nom :</b></span>
		        </div>
		        <input type="text" class="form-control" placeholder="Entrez le nom du client" name="nomClient">
		    </div>

		    <div class="input-group mb-3">
		        <div class="input-group-append">
		        	<span class="input-group-text"><b>Prénom :</b></span>
		        </div>
		        <input type="text" class="form-control" placeholder="Entrez le prénom du client" name="prenomClient">
		    </div>

		    <div class="input-group mb-3">
		        <div class="input-group-append">
		        	<span class="input-group-text"><b>Numéro de transaction :</b></span>
		        </div>
		        <input type="text" class="form-control" placeholder="Entrez le numéro de la transaction" name="numeroTransaction">
		    </div>

		    <input type="submit" class="btn btn-secondary btn-block" name="valider" value="Valider">
		   
		    <!-- <button type="button" class="btn btn-secondary btn-block" name="valider">Valider</button> -->
		</form>
		<form method="POST" action="suiviCrypto.php">
			<input type="submit" class="btn btn-secondary btn-block" name="liste" value="Liste">
		</form>
	</div>
	
	<?php

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
				}else{
					$requete = $bdd->prepare("INSERT INTO sortiemvola(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
					$requete->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
				}
			}
		}
	}

	?>
</body>
</html>