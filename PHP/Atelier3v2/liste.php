<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	require ("connexion.php");

	$tableau = liste_liens();

?>


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
			</td>
		</tr>
	<?php endforeach; ?>
	</table>




</body>
</html>