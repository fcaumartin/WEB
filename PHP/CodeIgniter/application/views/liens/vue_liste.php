
<div class="container">
	<h1>Liste de liens</h1>

	<a href="liens/ajout">Ajouter</a>

	<table class="table">
	<?php foreach ($liste->result() as $row): ?>
		<tr>
			<td><?php echo $row->titre; ?></td>
			<td><?php echo $row->description; ?></td>
			<td><?php echo $row->url; ?></td>
			<td>
				<a href="liens/modif/<?php echo $row->id; ?>">
					Modifier
				</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

</div>

