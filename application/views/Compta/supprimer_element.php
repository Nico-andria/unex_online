<?php
session_start();
	$bdd = new PDO("mysql:host=127.0.0.1;dbname=compta;charset=utf8","root","");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "DELETE FROM withdraw where id=$id";
		$bdd->exec($query);
		header("Location:suivicrypto");
	} else {
		header("Location:insertCrypto");
	}
	
?>