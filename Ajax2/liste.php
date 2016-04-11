
<?php 
	$db = new PDO("mysql:host=localhost;dbname=sites", "root", "");
	if (isset($_GET["query"])) {
		$query = $_GET["query"];
		$requete = $db->query("select * from liens where titre like '%$query%'");
	}
	else {
		$requete = $db->query("select * from liens");
	}
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
				<a class="btn_detail" data-id="<?=$ligne->id?>">details</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

<script>
	$(".btn_detail").click(function() {
		
		var id = $(this).data("id");
		console.log(id);
		$("#label2").load("detail.php?id="+id);
		$("#label2").dialog();
		//$.post("detail.php", "id="+id, function(data) {});
	});
</script>