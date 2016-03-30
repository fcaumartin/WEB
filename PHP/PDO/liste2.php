<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$ville = "LA";
	$db = new PDO("mysql:host=127.0.0.1;dbname=hotel", "root", "");

	// $requete = $db->query("select * from client");

	// while ($ligne = $requete->fetch()) {	

	// 	echo $ligne["cli_nom"] . "<br>";
	// }

	// $requete = $db->prepare("select * from client where cli_ville=:ville");
	// $requete->bindParam(":ville", $ville);
	// $requete->execute();

	// while ($ligne = $requete->fetch()) {	

	// 	echo $ligne["cli_nom"] . "<br>";
	// }


	// $requete = $db->query("select * from client");

	// while ($ligne = $requete->fetch(PDO::FETCH_OBJ)) {	

	// 	echo $ligne->cli_nom . "<br>";
	// }


	$requete = $db->query("select * from client");

	$lignes = $requete->fetchAll(PDO::FETCH_OBJ);

	foreach ($lignes as $li) {
		echo $li->cli_nom . "<br>";
	}

	


 ?>
</body>
</html>