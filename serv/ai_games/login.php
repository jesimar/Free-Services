<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Página de login" />
		<meta name="author" content="Jesimar da Silva Arantes" />

		<title>AI Games</title>

		<!-- permite o uso de recursos do bootstrap -->
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../lib/bootstrap/css/floating-labels.css" rel="stylesheet" />

		<!-- permite o uso de recursos do site fontawesome -->
		<script src="https://kit.fontawesome.com/e018137ed5.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<header>
		    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		      <a class="navbar-brand" href="index.php">AI Games</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarCollapse">
		        <ul class="navbar-nav mr-auto">
		          <li class="nav-item active">
		            <a class="nav-link" href="index.php">Home</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="challenges.php">Desafios</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="login.php">Login</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="register_user.php">Cadastrar</a>
		          </li>
		        </ul>
		      </div>
		    </nav>
		  </header>

		<div class="container" style="padding-top: 70px">
			<form class="form-signin align-middle" action="_insert_data_login.php" method="post">
				
				<div class="text-center mb-4">
					<img class="mb-4" src="../../img/icon/icon.svg" alt="" width="72" height="72">
					<h1 class="h3 mb-3 font-weight-normal">Login</h1>
					<p>Para logar entre com as seguintes informações:</p>
				</div>

				<div class="form-label-group">
					<input type="email" class="form-control" placeholder="Endereço de Email" required autofocus name="emailuser">
					<label>Endereço de Email</label>
				</div>

				<div class="form-label-group">
					<input type="password" class="form-control" placeholder="Senha" required name="passworduser">
					<label>Senha</label>
				</div>

				<!--
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Lembrar-me
					</label>
				</div>
				-->

				<button class="btn btn-lg btn-primary btn-block" type="submit" id="btn-logar"><i class="fas fa-sign-in-alt"></i> &nbsp; Logar</button>

				<a href="index.php" role="button" class="btn btn-lg btn-primary btn-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>

				<center>
				<small> Você não possui cadastro? Clique <a href="register_user.php">aqui</a> </small>
				</center>

				<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
			</form>

		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>

