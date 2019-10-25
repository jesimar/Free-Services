<?php

include "connection.php";

$nameuser = $_POST['nameuser'];
$emailuser = $_POST['emailuser'];
$escolaridadeuser = $_POST['escolaridadeuser'];

$sql = "INSERT INTO `USUARIO`(`NAME_USER`, `EMAIL_USER`, `ESCOLARIDADE_USER`) VALUES ('$nameuser', '$emailuser','$escolaridadeuser')";

$inserir = mysqli_query($connection, $sql);

?>

<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<div class="container" style="width: 500px; margin-top: 20px">
	<center>
		Dados enviados com sucesso.
	</center>
	<div style="padding-top: 20px">
		<center>
			<a href="../index.php" role="button" class="btn btn-sm btn-primary">Enviar novos dados</a>
		</center>
	</div>
</div>
