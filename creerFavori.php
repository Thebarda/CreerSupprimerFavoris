<html>
<head>
	<title>Favori</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<?php
		if((empty($_POST["url"]))&&(empty($_FILES["img"]))&&(empty($_POST["nom"]))){
	?>
	<form method="post" action="#" enctype="multipart/form-data">
		<label>Url : </label><input type="text" cols="50" name="url"><br>
		<label>Images (Dimensionner l'image en 89 * 89) : </label><input type="file" cols="30" name="img"><br>
		<label>Nom du site : </label><input type="text" cols="20" name="nom"><br>
		<input type="submit" value="Valider" name="ok">
	</form>
	<?php
		}else{
			$file="C:\\xampp\\htdocs\\favori.txt";
			$image = $_FILES['img']['name'];
			$resultat = move_uploaded_file($_FILES['img']['tmp_name'],'C:\\xampp\\htdocs\\images\\'.$image);
			if($resultat){
				list($width, $height) = getimagesize($filename);
				$new_width = 89;
				$new_height = 89;
				$image_p = imagecreatetruecolor($new_width, $new_height);
				if($_FILES["img"]['type']=='image/png'){
					$src = imagecreatefrompng($filename);
				}else{
					$src = imagecreatefromjpeg($filename);
				}
				imagecopyresampled($image_p, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
				$ligne = '<li><a href="'.$_POST["url"].'"><img src="./images/'.$image.'" alt="'.$_POST["nom"].'"></a></li>';
				$resultat = file_put_contents($file, $ligne, FILE_APPEND);
			}
			echo "<p> Redirection vers la page des signets dans 2 secondes";
			sleep(2);
			header("Location: index.php");
		}
	?>
	<hr>
	<?php if(empty($_POST["motcle"])){ ?>
	<form method="post" action="#">
		<label> mot clé du signet à supprimer : </label><input type="text" cols="20" name="motcle">
	</form>
	<?php
		}else{
			$file = fopen("C:\\xampp\\htdocs\\favori.txt", "r");
			$contenu = fread($file, filesize("C:\\xampp\\htdocs\\favori.txt"));
			fclose($file);
			$contenu = explode(PHP_EOL, $contenu);
			foreach($contenu as $line => $key){
				if(preg_match("#".$_POST["motcle"]."#", $contenu[$line])){
					str_replace($contenu[$line], $contenu[$line], "");
				}
			}
			$contenu = implode(PHP_EOL, $contenu);
			$ptr = fopen("C:\\xampp\\htdocs\\favori.txt", "w");
			fwrite($ptr, $contenu);
			echo "<p> Redirection vers la page des signets dans 2 secondes";
			sleep(2);
			header("Location: index.php");
		}
	?>
</body>
</html>