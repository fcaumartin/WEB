<?php if ($_SERVER['REQUEST_METHOD']== "GET") {?>

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
<form action="" method="POST">
	<input type="hidden" name="id" value="<?=$lien->id?>"/> 
	<input type="text" name="titre" value="<?=$lien->titre?>"/> <br />
	<input type="text" name="url" value="<?=$lien->url?>"/> <br />
	<textarea name="description"><?=$lien->description?></textarea> <br />
	<input type="submit" />
</form>
</body>
</html>

<?php } else { ?>

<?php 
	$titre = $_POST["titre"];
	$url = $_POST["url"];
	$description = $_POST["description"];
	$id = $_POST["id"];

	$db = new PDO("mysql:host=localhost; dbname=sites; charset=utf8", "root", "");

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$requete = $db->prepare("
			update liens 
			set titre=:t, url=:u, description=:d 
			where id=:id
	");
	$requete->bindParam(":t", $titre);
	$requete->bindParam(":u", $url);
	$requete->bindParam(":d", $description);
	$requete->bindParam(":id", $id);
	$requete->execute();

	header("Location: liste.php");
?>


<?php } ?>