<?php

	$bdd = new PDO('mysql:host=127.0.0.1;dbname=compta;charset=utf8','root','');

	if (isset($_POST['inscription'])) {
		$nom = htmlspecialchars($_POST['nom']);
			$prenom = htmlspecialchars($_POST['prenom']);
			$email = htmlspecialchars($_POST['email']);
			$emailConfirme = htmlspecialchars($_POST['emailConfirme']);
			$mdp = sha1($_POST['mdp']);
			$mdpConfirme = sha1($_POST['mdpConfirme']);
		if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['emailConfirme']) AND !empty($_POST['mdp']) AND !empty($_POST['mdpConfirme'])) {
			
			if ($email == $emailConfirme) {
				//on vérifie le mail
				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					//on vérifie si le mail n'existe pas déjà dans la bdd
					$reqmail = $bdd->prepare("SELECT * FROM admin WHERE mail = ?");
					$reqmail->execute(array($email));
					$mailExist = $reqmail->rowCount();
					if ($mailExist==0) {
						if ($mdp == $mdpConfirme) {
							$insertMembre = $bdd->prepare("INSERT INTO admin(nom,prenom,mail,mdp) VALUES(?,?,?,?)");
							$insertMembre->execute(array($nom,$prenom,$email,$mdp));
							$erreur = "Votre compte a bien été enregistré <a href='connexion.php'>Se connecter</a>";
						}else{
							$erreur = "Vos mots de passe ne correspondent pas";
						}
					}else{
						$erreur = "Cette adresse email est déjà utilisée, veuillez en mettre une nouvelle!";
					}
				}else{
					$erreur = "Veuillez entrer une adresse email valide";
				}
			}else{
				$erreur = "Vos adresses email ne correspondent pas";
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/dist/css/glyphicon.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/css/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="container">
			<h1>Inscription</h1>
		</div>
		<form method="POST" action="">
			<div class="input-group mb-3">
			    <div class="input-group-prepend">
			      <span class="input-group-text"><span class="glyphicon glyphicon-user"></span></span>
			    </div>
			    <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom">
		  </div>
			<div class="input-group mb-3">
			    <div class="input-group-prepend">
			      <span class="input-group-text"><span class="glyphicon glyphicon-user"></span></span>
			    </div>
			    <input type="text" class="form-control" placeholder="Entrez votre prénom" name="prenom">
		  </div>
			<div class="input-group mb-3">
			    <div class="input-group-prepend">
			      <span class="input-group-text"><span class="glyphicon glyphicon-envelope"></span></span>
			    </div>
			    <input type="mail" class="form-control" placeholder="Entrez votre adresse email" name="email">
		  </div>
			<div class="input-group mb-3">
			    <div class="input-group-prepend">
			      <span class="input-group-text"><span class="glyphicon glyphicon-envelope"></span></span>
			    </div>
			    <input type="mail" class="form-control" placeholder="Veuillez confirmer votre adresse email" name="emailConfirme">
		  </div>
			<div class="input-group mb-3">
			    <div class="input-group-prepend">
			      <span class="input-group-text"><span class="glyphicon glyphicon-lock"></span></span>
			    </div>
			    <input type="password" class="form-control" placeholder="Entrez votre mot de passe" name="mdp">
		  </div>
			<div class="input-group mb-3">
			    <div class="input-group-prepend">
			      <span class="input-group-text"><span class="glyphicon glyphicon-lock"></span></span>
			    </div>
			    <input type="password" class="form-control" placeholder="veuillez confirmer votre mot de passe" name="mdpConfirme">
		  </div>
		  <button class="btn btn-success" type="submit" name="inscription" value="S'inscrire">S'inscrire</button>
		</form>
		<div>
		<?php
			if (isset($erreur)) {
				echo "<p style='color: red;'>".$erreur."</p>";
			}
		?>
		</div>
	</div>
</body>
</html>