<?php
	include "../connection.php";

	$url_short = $_GET['l'];
	
	$sql = "SELECT * FROM `SHORT_URL` WHERE '$url_short' = `URL_SHORT`";
	$busca = mysqli_query($connection, $sql) or die('Erro de consulta na base de dados');
	$total = mysqli_num_rows($busca);
	if ($total == 1){
		$array = mysqli_fetch_array($busca);
		$url_num_access = $array['URL_NUM_ACCESS'] + 1;
		$sqlInc = "UPDATE `SHORT_URL` SET `URL_NUM_ACCESS`=$url_num_access WHERE '$url_short' = `URL_SHORT`";
		$busca = mysqli_query($connection, $sqlInc) or die('Erro de consulta na base de dados');
		mysqli_close($connection);
		header("Location: " . $array['URL_FULL']);
	}else{
		header("Location: error.php");
	}
?>
