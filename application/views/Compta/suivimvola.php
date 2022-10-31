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
      <a class="nav-link" href="<?php echo base_url(); ?>Compta/suivicrypto" style="color: #00ff00;"><span class="glyphicon glyphicon-btc"></span>Crypto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Compta/inscriptionAdmin"><span class="glyphicon glyphicon-signin"></span>S'inscrire</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Compta/deconnexion"><span class="glyphicon glyphicon-signout"></span>Se déconnecter</a>
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
					    <option>Sortie</option>
					    <option>Entrée</option>
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
							<td>Libelle</td>
							<td>Montant (Ariary)</td>
							<td>Reste (Ariary)</td>
							<td>Noms clients</td>
							<td>Prénoms clients</td>
							<td>Numéro transaction</td>
							<td>Opération</td>
						</tr>
					</thead>
					<?php
						if(isset($_POST['aller']) && $_POST['operation']==="Entrée"){
					?>
					<tbody>
						<?php
							
							$sql = $conn->query('SELECT * FROM entreemvola');
							while ($data = $sql->fetch_array()) {
								$id = $data['id'];
								$date = date_create($data['date']);
								echo 
								"<tr>
									<td>".date_format($date, 'd/m/Y')."</td>
									<td>".$data['libelle']."</td>
									<td>".number_format($data['montant'],2,'.'," ")."</td>
									<td>".number_format($data['reste'],2,'.'," ")."</td>
									<td>".strtoupper($data['nom_client'])."</td>
									<td>".$data['prenom_client']."</td>
									<td>".$data['numero_transaction']."</td>
									<td>"."<a href='modification_autres.php?id=$id'><span class='glyphicon glyphicon-edit'></span></a> | <a href='supprimer_element.php?id=$id'><span class='glyphicon glyphicon-trash'></span></a>"."</td>
								</tr>";
							}

						?>
					</tbody>
					<?php 
					}else{ 
					?>
					<tbody>
						<?php
							
							$sql = $conn->query('SELECT * FROM sortiemvola');
							while ($data = $sql->fetch_array()) {
								$id = $data['id'];
								$date = date_create($data['date']);
								echo 
								"<tr>
									<td>".date_format($date, 'd/m/Y')."</td>
									<td>".$data['libelle']."</td>
									<td>".number_format($data['montant'],2,'.'," ")."</td>
									<td>".number_format($data['reste'],2,'.'," ")."</td>
									<td>".strtoupper($data['nom_client'])."</td>
									<td>".$data['prenom_client']."</td>
									<td>".$data['numero_transaction']."</td>
									<td>"."<a href='modification_autres.php?id=$id'><span class='glyphicon glyphicon-edit'></span></a> | <a href='supprimer_element.php?id=$id'><span class='glyphicon glyphicon-trash'></span></a>"."</td>
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