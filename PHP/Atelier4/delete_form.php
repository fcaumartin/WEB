<?php 
	$id = $_GET["id"];
	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	$requete = $db->prepare("select * from liens where id=:id");
	$requete->bindParam(":id", $id);
	$requete->execute();
	$lien = $requete->fetch(PDO::FETCH_OBJ);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf8">
</head>
<body>
<form action="delete_script.php" method="POST">
	<input type="hidden" name="id" value="<?=$lien->id?>"/> 
	<input type="text" name="titre" value="<?=$lien->titre?>"/> <br />
	<input type="text" name="url" value="<?=$lien->url?>"/> <br />
	<textarea name="description"><?=$lien->description?></textarea> <br />
	<input type="submit" />
</form>
</body>
</html>