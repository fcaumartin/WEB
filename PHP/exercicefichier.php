<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$liens = file("listeliens.txt");

// foreach ($liens as $l) {
// 	echo "<a href='" . $l . "'>" . $l . "</a><br>";
// }

 ?>

<?php foreach($liens as $l): ?>
	<a href="<?=$l?>"><?=$l?></a><br>
<?php endforeach; ?>


</body>
</html>