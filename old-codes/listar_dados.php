<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />		
		<meta name="description" content="Página principal do site Free-Services" />
		<meta name="author" content="Jesimar da Silva Arantes" />
		
		<title>Free Services</title>

		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container" style="margin-top: 40px">
			<h3>Listar de Dados</h3>
			<br>
			<table class="table">
			  <thead>
				<tr>
				  <th scope="col">Nome</th>
				  <th scope="col">Email</th>
				  <th scope="col">Escolaridade</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
					include "../connection.php";
					$sql = "SELECT * FROM `USUARIO`";
					$busca = mysqli_query($connection, $sql);
					while ($array = mysqli_fetch_array($busca)){
						$id_user = $array['ID_USER'];
						$name_user = $array['NAME_USER'];
						$email_user = $array['EMAIL_USER'];
						$escolaridade_user = $array['ESCOLARIDADE_USER'];
				?>
				<tr>				  
					<td><?php echo $name_user ?></td>
					<td><?php echo $email_user ?></td>
					<td><?php echo $escolaridade_user ?></td>
				</tr>
				
				<?php
					}
				?>
				
			  </tbody>
			</table>
		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>
