<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf8">
</head>
<body>
<?php 
	$id = $_GET["id"];
	
	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	$requete = $db->prepare("select * from liens where id=:id");
	$requete->bindParam(":id", $id);
	$requete->execute();
	$ligne = $requete->fetch(PDO::FETCH_OBJ);
?>


	
		<div><?=$ligne->id?></div>
		<div><?=$ligne->titre?></div>
		<div><?=$ligne->webmaster?></div>
		<div><?=$ligne->description?></div>
		<div><?=$ligne->url?></div>
		<div><?=$ligne->date?></div>
		<div><?=$ligne->theme?></div>

<a href="modif_form.php?id=<?=$ligne->id?>">modifier</a>

<a href="delete_form.php?id=<?=$ligne->id?>">supprimer</a>

<a href="liste.php">retour à la liste</a>


</body>
</html>