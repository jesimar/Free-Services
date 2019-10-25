<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />		
		<meta name="description" content="Página principal do site Free-Services" />
		<meta name="author" content="Jesimar da Silva Arantes" />
		
		<title>Free Services</title>

		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="lib/bootstrap/css/floating-labels.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<form class="form-signin align-middle" action="pages/inserir_dados.php" method="post">
				<div class="text-center mb-4">
					<img class="mb-4" src="img/icon/icon.svg" alt="" width="72" height="72">
					<h1 class="h3 mb-3 font-weight-normal">Entrada de Dados</h1>
					<p>Entre com as seguintes informações abaixo:</p>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Nome Completo" required autofocus name="nameuser">
					<label>Nome</label>
				</div>
				<div class="form-label-group">
					<input type="email" class="form-control" placeholder="Endereço" required autofocus name="emailuser">
					<label>Endereço de Email</label>
				</div>
				<label>Escolaridade</label>
				<div class="form-label-group">
					
					<select class="form-control" name="escolaridadeuser">
						<option></option>
						<option>Ensino Fundamental</option>
						<option>Ensino Médio</option>
						<option>Ensino Superior</option>
					</select>
					
				</div>
				<!--
				<div class="form-label-group">
					<input type="password" class="form-control" placeholder="Senha" required>
					<label>Senha</label>
				</div>
				
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Lembrar-me
					</label>
				</div>
				-->
				
				<button class="btn btn-lg btn-primary btn-block" type="submit" id="botao-submit">Enviar Dados</button>
				
				<a href="pages/listar_dados.php" role="button" class="btn btn-lg btn-primary btn-block">Listar Dados</a>
				
				<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
			</form>
		</div>
		<footer>
			<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>

