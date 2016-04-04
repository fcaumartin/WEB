<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf8">
</head>
<body>
<?php 
	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	$requete = $db->query("select * from liens");
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
?>

<a href="ajout_form.html">Ajouter un lien</a>

	<table border="1">
	<?php foreach ($tableau as $ligne): ?>
		<tr>
			<td>
				<?=$ligne->id?>
			</td>
			<td>
				<?=$ligne->titre?>
			</td>
			<td>
				<?=$ligne->webmaster?>
			</td>
			<td>
				<a href="details.php?id=<?=$ligne->id?>">details</a>
				<!-- <form action="details.php" method="POST">
					<input type="hidden" name="id" value="<?=$ligne->id?>"></input>
					<input type="submit"></input>
				</form> -->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>




</body>
</html>