<?php 
	$id = $_POST["id"];

	$db = new PDO("mysql:host=localhost; dbname=sites; charset=utf8", "root", "");

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$requete = $db->prepare("delete from liens where id=:id");
	$requete->bindParam(":id", $id);
	$requete->execute();

	header("Location: liste.php");
?>