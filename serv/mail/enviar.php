<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Página Mail" />
		<meta name="author" content="Jesimar da Silva Arantes" />

		<title>E-Mail</title>

		<!-- permite o uso de recursos do bootstrap -->
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../lib/bootstrap/css/floating-labels.css" rel="stylesheet" />

		<!-- permite o uso de recursos do site fontawesome -->
		<script src="https://kit.fontawesome.com/e018137ed5.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<header>
		    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		      <img src="../../img/icon/logo-sendmail2.svg" width="40" height="40">
		      <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;E-Mail</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		    </nav>
		  </header>

		<div class="container" style="margin-top: 200px;">
			<?php
				 
				use PHPMailer\PHPMailer\PHPMailer;
				use PHPMailer\PHPMailer\SMTP;
				use PHPMailer\PHPMailer\Exception;

				require 'Exception.php';
				require 'PHPMailer.php';
				require 'SMTP.php';
			
				global $error;
				$mail = new PHPMailer();
				$mail->IsSMTP();		// Ativar SMTP
				$mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
				$mail->SMTPAuth = true;		// Autenticação ativada
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;	// SSL REQUERIDO pelo GMail
				$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
				$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
				$mail->Username = 'jesimar.arantes@gmail.com';
				$mail->Password = 'r@m1s3j8891';
				$mail->SetFrom('jesimar.arantes@gmail.com', 'jesimar');
				//$mail->addReplyTo('jesimar.arantes@gmail.com', 'First Last');
				$mail->Subject = 'Assunto';
				$mail->Body = 'Corpo';
				$mail->AddAddress('jesimar.arantes@gmail.com');
				if(!$mail->Send()) {
					$error = 'Mail error: '.$mail->ErrorInfo; 
					echo $error;
				} else {
					$error = 'Mensagem enviada!';
					Header("location:http://www.dominio.com.br/obrigado.html");
				}
				?>
		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>

