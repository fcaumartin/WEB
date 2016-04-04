<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2><?=$titre?></h2>

<div>
	<?php foreach ($liste->result() as $value) { ?>
		<div>
			<?=$value->titre?>
		</div>


	<?php } ?>

</div>
</body>
</html>