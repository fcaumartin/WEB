<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?=base_url("/css/style.css")?>">
</head>
<body>
<h1><?php echo $titredelapage ?></h1>

<a href="<?=site_url("liens/ajout")?>">Ajouter</a>

<?php foreach ($liste as $lien) { ?>

	<div><?=$lien->titre?></div>


<?php } ?>



</body>
</html>