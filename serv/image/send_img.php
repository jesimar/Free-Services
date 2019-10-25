<?php
	include "../connection.php";

	$category_image = 'Free';
	$num_likes = 0;
	$image_data_create = date("Y-m-d");
	$name_image = $_POST['nameimg'];
	$description_image = $_POST['descimg'];
	$author_image = $_POST['authorimg'];
	$num_downloads_image = 0;

	$path = $_FILES['fileimage']['tmp_name'];
	$size = $_FILES['fileimage']['size'];
	$imagetmp = addslashes(file_get_contents($path));

	//comandos para pegar a extensão de um arquivo de imagem.
	$inttype = exif_imagetype($path);	
	$type = image_type_to_mime_type($inttype);
	$extensao = explode('/', $type);
	$type_image = $extensao[1];

	$sql = "INSERT INTO `IMAGE`(`FILE_IMAGE`, `TYPE_IMAGE`, `CATEGORY_IMAGE`, `NUM_LIKES`, `DATA_CREATE`, `NAME_IMAGE`, `DESCRIPTION_IMAGE`, `AUTHOR_IMAGE`, `NUM_DOWNLOADS`) VALUES ('$imagetmp', '$type_image', '$category_image', $num_likes, '$image_data_create', '$name_image', '$description_image', '$author_image', $num_downloads_image)";

	mysqli_query($connection, $sql) or die('Erro de consulta na base de dados');

	mysqli_close($connection);
	
	header('Location: index.php');

?>
