<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php for ($i=0; $i<500; $i++) { ?>
		<div > 
			<?=$i?>Coucou 
		</div>
	<?php } ?>


	<?php 
		for ($i=0; $i<500; $i++) { 
			echo "<div > $i Coucou </div>";
		} 
	?>

<?php
	$a=2;

	echo $a;

	$b="a";

	echo $$b;
?>

</body>
</html>