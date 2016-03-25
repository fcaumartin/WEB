<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Résultat du formulaire
<hr>
nom= <?php echo $_POST["nom"] ?> <br>
prenom= <?php echo $_POST["prenom"] ?><br>
ville= <?php echo $_POST["ville"] ?>

<?php 
	$fp = fopen("contacts2.txt","a"); 
	fputs($fp,$_POST["nom"] . "\t" . $_POST["prenom"] . "\t" . $_POST["ville"] . "\r\n" );
	fclose($fp);
 ?>
</body>
</html>