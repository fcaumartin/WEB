<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

<?php 
	$tab = array();

	$tab[1] = 12;


	$tab[5] = 12;

	$tab[] = 45;

	$tab[] = "coucou";

	$tab["nom"] = "toto";

	$a = "riri";

	echo "nom = {$tab["nom"]}";

	echo "nom = $a";

	//var_dump($tab);

 ?>



</body>
</html>