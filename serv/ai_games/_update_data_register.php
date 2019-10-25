<?php

include "../connection.php";

session_start();
$usuario = $_SESSION['emailuser'];

//$email_user = $_POST['emailuser'];//campo não enviado, pois no form esta disabled.
$name_user = $_POST['nameuser'];
$nickname_user = $_POST['nicknameuser'];
$occupation_user = $_POST['occupationuser'];
$escolaridade_user = $_POST['escolaridadeuser'];
$country_user = $_POST['countryuser'];

$imagetmp = addslashes(file_get_contents($_FILES['photouser']['tmp_name']));

$sql = "UPDATE `USER` SET `NAME_USER`='$name_user',`NICKNAME_USER`='$nickname_user',`OCCUPATION_USER`='$occupation_user',`ESCOLARIDADE_USER`='$escolaridade_user',`COUNTRY_USER`='$country_user', `PHOTO_USER`='$imagetmp' WHERE `EMAIL_USER` = '$usuario'";

mysqli_query($connection, $sql);

?>

<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<div class="container" style="width: 500px; margin-top: 20px">
	<center>
		Usuário atualizado com sucesso.
	</center>
	<div style="padding-top: 20px">
		<center>
			<a href="logged.php" role="button" class="btn btn-lg btn-primary btn-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>
		</center>
	</div>
</div>