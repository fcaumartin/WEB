<?php 
	$titre = $_POST["titre"];
	$url = $_POST["url"];
	$description = $_POST["description"];

	$db = new PDO("mysql:host=localhost; dbname=sites; charset=utf8", "root", "");

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$requete = $db->prepare("insert into liens (titre, url, description) values (:t, :u, :d)");
	$requete->bindParam(":t", $titre);
	$requete->bindParam(":u", $url);
	$requete->bindParam(":d", $description);
	$requete->execute();

	header("Location: liste.php");
?>