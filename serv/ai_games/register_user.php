<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />		
		<meta name="description" content="Página de cadastrar usuário" />
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

		<div class="container">
			<form class="form-signin align-middle" action="_insert_data_register.php" method="post" style="padding-top: 500px;">

				<div class="text-center mb-4">
					<img class="mb-4" src="../../img/icon/icon.svg" alt="" width="72" height="72">
					<h1 class="h3 mb-3 font-weight-normal">Cadastrar Usuário</h1>
					<p>Preencha as seguintes informações:</p>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Nome Completo" autocomplete="off" required autofocus name="nameuser">
					<label>Nome</label>
				</div>

				<div class="form-label-group">
					<input type="email" class="form-control" placeholder="Endereço de Email" autocomplete="off" required autofocus name="emailuser">
					<label>Endereço de Email</label>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Apelido" autocomplete="off" required autofocus name="nicknameuser">
					<label>Apelido</label>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Profissão" autocomplete="off" required autofocus name="occupationuser">
					<label>Profissão</label>
				</div>

				<label>Escolaridade</label>
				<div class="form-label-group">
					<select class="form-control" name="escolaridadeuser">
						<option></option>
						<option>Ensino Fundamental</option>
						<option>Ensino Médio</option>
						<option>Ensino Superior</option>
						<option>Mestrado</option>
						<option>Doutorado</option>
					</select>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="País" autocomplete="off" required autofocus name="countryuser">
					<label>País</label>
				</div>
				
				<div class="form-label-group">
					<input id="senha" type="password" class="form-control" placeholder="Senha" autocomplete="off" required name="passworduser">
					<label>Senha</label>
				</div>
				
				<div class="form-label-group">
					<input type="password" class="form-control" placeholder="Confirmar Senha" autocomplete="off" required name="passworduser2" oninput="validaSenha(this)">
					<label>Confirmar Senha</label>
					<small>Precisa ser igual a senha digitada acima.</small>
				</div>

				<button class="btn btn-lg btn-primary btn-block" type="submit" id="btn-cadastar"><i class="fas fa-user"></i>&nbsp; Cadastrar</button>
				
				<a href="index.php" role="button" class="btn btn-lg btn-primary btn-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>
				
				<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
			</form>
		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
			<script>
				function validaSenha(input){
					if (input.value != document.getElementById('senha').value){
						input.setCustomValidity('Repita a senha corretamente');
					}else{
						input.setCustomValidity('');
					}
				}
			</script>
		</footer>
	</body>
</html>

