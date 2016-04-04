<?php 
	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	$requete = $db->query("select * from liens");
	$model = $requete->fetchAll(PDO::FETCH_OBJ);
?>