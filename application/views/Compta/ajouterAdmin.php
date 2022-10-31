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
		</div>
	</div>
</body>
</html>