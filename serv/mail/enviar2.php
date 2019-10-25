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
		      <img src="../../img/icon/logo-go2url.svg" width="40" height="40">
		      <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;E-Mail</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		    </nav>
		  </header>

		<div class="container" style="margin-top: 200px;">
			<?php
				$name = $_POST['name'];
				$email = $_POST['email'];
				$subject = $_POST['subject'];
				$comments = $_POST['comments'];
				$to = 'jesimararantes@gmail.com';

				// The message
				//$message = "Line 1\nLine 2\nLine 3";

				// In case any of our lines are larger than 70 characters, we should use wordwrap()
				//$message = wordwrap($message, 70);

				$success = mail($to, $subject, $comments, 'From:' . $email);
				
				if (!$success) {
					$errorMessage = error_get_last()['message'];
					echo 'errorMessage: '  . $errorMessage;
				}
				echo '<br />success: '  . $success;
			?>
		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>

