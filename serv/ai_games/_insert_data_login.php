<?php

include "../connection.php";
include "../../scripts/password.php";

$emailuser = $_POST['emailuser'];
$passworduser = $_POST['passworduser'];

$sql = "SELECT EMAIL_USER, PASSWORD_USER FROM `USER` WHERE `EMAIL_USER` = '$emailuser'";

$buscar = mysqli_query($connection, $sql);

$total = mysqli_num_rows($buscar);

if ($total > 0){
	$test = false;
	while ($array = mysqli_fetch_array($buscar)){
		$senha = $array['PASSWORD_USER'];
		$senha_codificada = sha1($passworduser);
		if ($senha == $senha_codificada){
			$test = true;
			session_start();
			$_SESSION['emailuser'] = $emailuser;
					header('Location: logged.php');
		}
	}
	if (!$test){
		?>
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<div class="container" style="width: 500px; margin-top: 20px">
			<center>
				ERRO<br>
				Senha incorreta.
			</center>
			<div style="padding-top: 20px">
				<center>
					<a href="login.php" role="button" class="btn btn-lg btn-primary btn-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>
				</center>
			</div>
		</div>

		<?php
	}
}else{
	?>

	<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<div class="container" style="width: 500px; margin-top: 20px">
		<center>
			ERRO<br>
			Você não possui cadastro.
		</center>
		<div style="padding-top: 20px">
			<center>
				<a href="login.php" role="button" class="btn btn-lg btn-primary btn-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>
			</center>
		</div>
	</div>

	<?php
}

?>
