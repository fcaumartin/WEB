


<?php foreach ($tableau as $ligne):?>
<div>
	<?=$ligne->titre?>
	<a href="liens/detail/<?=$ligne->id?>">detail</a>
</div>
<?php endforeach; ?>