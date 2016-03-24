<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	for ($i=1; $i < 150; $i+=2) { 
				
					echo $i . "<br>";
				
	}

?>


<?php for ($i=1; $i < 150; $i+=2) { ?>
			<div >
				<?=$i?>  <br> 
			</div>
<?php } ?>


<?php for ($i=1; $i < 150; $i+=2): ?>
			<div >
				<?=$i?>  <br> 
			</div>
<?php endfor; ?>

</body>
</html>