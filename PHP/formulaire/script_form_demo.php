<?php 

	$nom = $_POST["nom"];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Résultat du formulaire
<hr>
nom= <?php echo $nom ?> <br>
prenom= <?php echo $_POST["prenom"] ?><br>
actif= <?php 

	// if (isset($_POST["actif"]))
	// 	echo  $_POST["actif"];
	// else 
	// 	echo "rien";

	echo  $_POST["actif"];

?><br>

civ= <?php echo $_POST["civ"] ?><br>

comment= <pre><?php echo $_POST["comment"] ?><br></pre>


element= <?php echo $_POST["element"] ?><br>

</body>
</html>