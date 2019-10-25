<?php
	include "../connection.php";

	$url_beautify = $_GET['l'];
	
	$sql = "SELECT * FROM `BEAUTIFY_URL` WHERE '$url_beautify' = `URL_BEAUTIFY`";
	$busca = mysqli_query($connection, $sql) or die('Erro de consulta na base de dados');
	$total = mysqli_num_rows($busca);
	if ($total == 1){
		$array = mysqli_fetch_array($busca);
		$url_num_access = $array['URL_NUM_ACCESS'] + 1;
		$sqlInc = "UPDATE `BEAUTIFY_URL` SET `URL_NUM_ACCESS`=$url_num_access WHERE '$url_beautify' = `URL_BEAUTIFY`";
		$busca = mysqli_query($connection, $sqlInc) or die('Erro de consulta na base de dados');
		header("Location: " . $array['URL_FULL']);
	}else{
		header("Location: error.php");
	}
	mysqli_close($connection);
?>
