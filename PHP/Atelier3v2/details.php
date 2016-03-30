<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$id = $_GET["id"];
	
	require ("connexion.php");
	
	$ligne = details_liens($id);
?>


	
		<div><?=$ligne->id?></div>
		<div><?=$ligne->titre?></div>
		<div><?=$ligne->webmaster?></div>
		<div><?=$ligne->description?></div>
		<div><?=$ligne->url?></div>
		<div><?=$ligne->date?></div>
		<div><?=$ligne->theme?></div>


<a href="liste.php">retour à la liste</a>

</body>
</html>