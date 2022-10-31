<?php
	//$conn = new PDO("mysql:host=127.0.0.1;dbname=teste;charset=utf8","root","");
	$conn = new mysqli('127.0.0.1','root','','compta');
	/*if (isset($_GET['id']) AND $_GET['id'] > 0) {

		$getid = intval($_GET['id']);
		$requser = $bdd->prepare("SELECT * FROM admin WHERE id=?");
		$requser->execute(array($getid));
		$userinfo = $requser->fetch();//chercher les info

		if (isset($_SESSION['id'])) {*/
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Suivis</title>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.png">
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap/dist/css/glyphicon.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
	
</head>
<body>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/logo.png" width="50px"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Accueil</a>
    </li>

    <!-- Dropdown -->
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Compta/choixTransaction">Choix transaction</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Compta/suivimvola" style="color: #00ff00;">Mvola</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Compta/inscriptionAdmin"><span class='glyphicon glyphicon-sign-in'></span>S'inscrire</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Compta/deconnexion"><span class='glyphicon glyphicon-sign-out'></span>Se déconnecter</a>
    </li>
  </ul>
</nav>

	<div class="jumbotron">
	  <h1>Liste des transactions</h1>
	  <p>Vous trouverez ici le suivi de toutes les transactions faites :</p>
	</div>
	
	<div class="d-flex">
		<div class="p-2 flex-fill"></div>

		<div class="p-2 flex-fill">
		  	<label for="tri">Choisissez les éléments à afficher : </label>
				<form action="" method="POST">
				<div class="input-group mb-3">
					<select class="form-control" id="operation" name="operation">
					    <option>Withdraw</option>
					    <option>Deposit</option>
					</select>
				<div class="input-group-append">
					<button class="btn btn-dark" type="submit" name="aller">Valider</button>
				</div>
					
				</div>
				</form>
		  </div>

		  <div class="p-2 flex-fill"></div>

	</div>

	<!--les résultats commencent ici-->
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover" id="mytable">
					<thead class="thead-dark">
						<tr>
							<td>Date</td>
							<td>Nom de la cryptomonnaie</td>
							<td>Montant crypto</td>
							<td>Montant dollars</td>
							<td>Cours du jour ($)</td>
							<td>Cours Equity (Ariary)</td>
							<td>Noms clients</td>
							<td>Prénoms clients</td>
							<td>Description</td>
							<td>TXID</td>
							<td>Opération</td>
						</tr>
					</thead>
					<?php
						if(isset($_POST['aller']) && $_POST['operation']=="Deposit"){
					?>
					<tbody>
						<?php
							
							$sql = $conn->query('SELECT * FROM deposit');
							while ($data = $sql->fetch_array()) {
								$date = date_create($data['date_ajd']);
								$id = $data['id'];
								echo 
								"<tr>
									<td>".date_format($date, 'd/m/Y')."</td>
									<td>".$data['nom_crypto']."</td>
									<td>".$data['montant_crypto']."</td>
									<td>".number_format($data['montant_dollars'],2,'.',' ')."</td>
									<td>".number_format($data['cours_jour'],2,'.',' ')."</td>
									<td>".$data['cours_equity']."</td>
									<td>".strtoupper($data['nom_client'])."</td>
									<td>".$data['prenom_client']."</td>
									<td>".$data['description']."</td>
									<td>".$data['txid']."</td>
									<td>"."<a href='modification_element.php?id=$id'><span class='glyphicon glyphicon-edit'></span>Modifier</a> | <a href='supprimer_element.php?id=$id'><span class='glyphicon glyphicon-trash'></span></a>"."</td>
								</tr>";
							}

						?>
					</tbody>
					<?php 
					}else{ 
					?>
					<tbody>
						<?php
							
							$sql = $conn->query('SELECT * FROM withdraw');
							while ($data = $sql->fetch_array()) {
								$date = date_create($data['date_ajd']);
								$id = $data['id'];
								echo 
								"<tr>
									<td>".date_format($date, 'd/m/Y')."</td>
									<td>".$data['nom_crypto']."</td>
									<td>".$data['montant_crypto']."</td>
									<td>".number_format($data['montant_dollars'],2,'.',' ')."</td>
									<td>".number_format($data['cours_jour'],2,'.',' ')."</td>
									<td>".$data['cours_equity']."</td>
									<td>".strtoupper($data['nom_client'])."</td>
									<td>".$data['prenom_client']."</td>
									<td>".$data['description']."</td>
									<td>".$data['txid']."</td>
									<td>"."<a href='modification_element.php?id=$id'><span class='glyphicon glyphicon-edit'></span></a> | <a href='supprimer_element.php?id=$id'><span class='glyphicon glyphicon-trash'></span></a>"."</td>
								</tr>";
							}

						?>
					</tbody>
					<?php 
					} 
					?>
				</table>
				
		</div>
	</div>


</body>
</html>
<?php
	/*}
	}else{
		header('Location:connexion.php');
		exit();
	}*/
?>
<script>
	$(document).ready(function(){
		$('#mytable').DataTable();
	});
</script>