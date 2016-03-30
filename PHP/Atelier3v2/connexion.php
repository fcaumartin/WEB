<?php 

function connexion() {
	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	return $db;
}

function liste_liens() {
	
	$db = connexion();
	$requete = $db->query("select * from liens");
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	return $tableau;
}

function details_liens($id) {
	
	$db = connexion();
	$requete = $db->prepare("select * from liens where id=:id");
	$requete->bindParam(":id", $id);
	$requete->execute();
	$ligne = $requete->fetch(PDO::FETCH_OBJ);
	return $ligne;
}

 ?>