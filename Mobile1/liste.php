<?php 
	$db = new PDO("mysql:host=localhost;dbname=sites;charset=utf8", "root", "");

	$requete = $db->query("select * from liens");
	
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);

	//var_dump($tableau);
	echo json_encode($tableau);

?>
