<html>
<head>
	<title>Favori</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<script language="javascript">
		window.location.refresh();
		</script>
	<?php
	$file="favori.txt";
		if(file_exists($file)){
			$contenu = file_get_contents("favori.txt");
			echo $contenu;
		}
	?>
	<a id="bouton" href="./creerfavori.php"><b>Créer/supprimer<br> un signet</b></a>
			
</body>
</html>