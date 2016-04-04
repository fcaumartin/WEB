
<?php 
	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	$requete = $db->query("select * from liens");
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
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

