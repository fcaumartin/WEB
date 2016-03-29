<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
try {
 	$db = new PDO('mysql:host=127.0.0.1;dbname=hotel', "root", "");
 	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 	$requete = $db->prepare('SELECT * FROM client');
	$requete->execute();

	while ($ligne = $requete->fetch()) {
		echo $ligne["cli_nom"] . "<br>";
	}

	// while ($ligne = $requete->fetch(PDO::FETCH_OBJ)) {
	// 	echo $ligne->cli_nom . "<br>";
	// }

	// $tableau = $requete->fetchAll();

	// foreach ($tableau as $value) {
	// 	echo "<pre>";
	// 	var_dump ($value);
	// 	echo "</pre>";

	// }

} catch (PDOException $e) {
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();
}
 ?>
</body>
</html>