<?php

include "../connection.php";
include "../../scripts/password.php";

$nameuser = $_POST['nameuser'];
$emailuser = $_POST['emailuser'];
$nicknameuser = $_POST['nicknameuser'];
$occupationuser = $_POST['occupationuser'];
$escolaridadeuser = $_POST['escolaridadeuser'];
$countryuser = $_POST['countryuser'];
$passworduser = $_POST['passworduser'];

$sql = "SELECT EMAIL_USER FROM `USER` WHERE `EMAIL_USER` = '$emailuser'";

$buscar = mysqli_query($connection, $sql);

$total = mysqli_num_rows($buscar);

if ($total == 0){
	//impede de visualizar a senha do usuario usando algoritmo SHA1. Se quiser pode usar md5
	$sql2 = "INSERT INTO `USER`(`NAME_USER`, `EMAIL_USER`, `NICKNAME_USER`, `OCCUPATION_USER`, `ESCOLARIDADE_USER`, `COUNTRY_USER`, `PASSWORD_USER`) VALUES ('$nameuser', '$emailuser','$nicknameuser', '$occupationuser', '$escolaridadeuser', '$countryuser', sha1('$passworduser'))";

	//caso queira-se ver a senha do usuário use a linha abaixo
	//$sql = "INSERT INTO `USER`(`NAME_USER`, `EMAIL_USER`, `NICKNAME_USER`, `OCCUPATION_USER`, `ESCOLARIDADE_USER`, `COUNTRY_USER`, `PASSWORD_USER`) VALUES ('$nameuser', '$emailuser','$nicknameuser', '$occupationuser', '$escolaridadeuser', '$countryuser', sha1('$passworduser'))";

	$inserir = mysqli_query($connection, $sql2);

	header('Location: logged.php');

}else{
	?>

	<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<div class="container" style="width: 500px; margin-top: 20px">
		<center>
			Email já cadastrado no sistema.
		</center>
		<div style="padding-top: 20px">
			<center>
				<a href="register_user.php" role="button" class="btn btn-lg btn-primary btn-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>
			</center>
		</div>
	</div>

	<?php
}

?>


