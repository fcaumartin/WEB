<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf8">
</head>
<body>

<a href="ajout_form.html">Ajouter un lien</a>

	<table border="1">
	<?php foreach ($model as $ligne): ?>
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
			</td>
		</tr>
	<?php endforeach; ?>
	</table>




</body>
</html>