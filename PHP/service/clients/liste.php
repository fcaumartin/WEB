<?php 
	
	$db = new PDO("mysql:host=127.0.0.1;dbname=hotel", "root", "");

	
	$requete = $db->query("select * from client");

	$lignes = $requete->fetchAll(PDO::FETCH_OBJ);

	echo json_encode($lignes);


 ?>