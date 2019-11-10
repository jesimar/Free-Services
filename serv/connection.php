<?php

	$testLocal = true; //trocar se for realizar experimentos no servidor web.

	if ($testLocal){
		$servername = "localhost";
		$username = "root";
		$database = "db_free_services";
		$password = "";
		$connection = mysqli_connect($servername, $username, $password, $database) or die('Erro de conexao ao banco de dados');
		$pathSite = "http://localhost:8000/";
	}else{
		$servername = "localhost";
		$username = "43518";
		$database = "43518";
		$password = "ramisej8891";
		$connection = mysqli_connect($servername, $username, $password, $database) or die('Erro de conexao ao banco de dados');
		$pathSite = "http://freeservices.orgfree.com/";
	}

?>

