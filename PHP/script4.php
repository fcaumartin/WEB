<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php 

	$couleur = array();

	$couleur["rouge"]="red";
	$couleur["bleu"]="blue";
	$couleur["blanc"]="white";
	$couleur[]="black";

	$a = "2";

	if($a==2) {

	}

?>


	<pre>
	<?=var_dump ($couleur); ?>
	</pre>

	<?php foreach ($couleur as $cle => $valeur) { ?>
		<div > 
			<?= $cle  ?> = <?php echo $valeur ?> 
		</div>
	<?php } ?>

	<?php foreach ($couleur as $valeur) { ?>
		<div > 
			<?php echo $valeur ?> 
		</div>
	<?php } ?>


	<?php foreach ($couleur as $cle => $valeur): ?>
		<?= $cle ?> = <?= $valeur ?> <br>
	<?php endforeach; ?>

	<?php echo $_SERVER["SERVER_ADDR"]; ?>
	<?php echo $_SERVER["REQUEST_URI"]; ?>

</body>
</html>