<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
  <link rel="icon" href="<?php echo base_url('assets/Nico/logo.jpg') ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.css')?>">
     
      <script type = "text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
      <script type="text/javascript"  src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.js')?>"></script>
  <style type="text/css">
  	.contenu{
      padding: 100px;
      border-radius: 5px;
      border: 5px solid silver;
      box-shadow: 5px 5px 5px silver;
    }
  </style>
</head>
<body>
    
	<div class="contenu">
    <h2>Inscrivez-vous</h2>

    <form class="form-horizontal" method="POST" action="ajouter">

      <div class="form-group">
        <label class="col-sm-2 control-label">Nom :</label>
        <div class="col-sm-10">
          <input class="form-control" id="focusedInput" type="text" name="nom">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Prenoms :</label>
        <div class="col-sm-10">
          <input class="form-control" id="focusedInput" type="text" name="prenom">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Adresse Email :</label>
        <div class="col-sm-10">
          <input class="form-control" id="focusedInput" type="email" name="mail">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Confirmation Adresse Email :</label>
        <div class="col-sm-10">
          <input class="form-control" id="focusedInput" type="email" name="mailConfirm">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Mot de passe :</label>
        <div class="col-sm-10">
          <input class="form-control" id="focusedInput" type="password" name="mdp">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Confirmation Mot de passe :</label>
        <div class="col-sm-10">
          <input class="form-control" id="focusedInput" type="password" name="mdpConfirm">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="sinscrire"><span class="glyphicon glyphicon-hand-edit"> S'inscrire</span></button>
        </div>
      </div>
    </form>
      </div>
</body>
</html>