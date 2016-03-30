<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$mdp_crypte = "940c0f26fd5a30775bb1cbd1f6840398d39bb813";

$secret = sha1("motdepasse");

if ($mdp_crypte == $secret)
	echo "OK";
else 
	echo "NOK";

 ?>
</body>
</html>