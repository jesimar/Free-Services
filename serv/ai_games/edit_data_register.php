<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />		
		<meta name="description" content="Página de edição de dados do usuário" />
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
	      <a class="navbar-brand" href="#">AI Games</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarCollapse">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
	        <ul class="navbar-nav">
	          <li class="nav-item active">
	            <a class="nav-link" href="edit_data_register.php">Editar Perfil</a>
	          </li>
	        </ul>
	        <div class="mt-2 mt-md-0">
	          <img src="../../img/users/man.svg" alt="" width="40" height="40" background="#777" color="#777" class="rounded-circle">
	        </div>

	        <!--<form class="form-inline mt-2 mt-md-0">
	          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
	          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	        </form>-->
	      </div>
	    </nav>
	  </header>

		<div class="container">
			<form class="form-signin align-middle" action="_update_data_register.php" method="post" enctype="multipart/form-data" style="max-height: 540px;">

				<?php
					include '../connection.php'; 

					session_start();
    			$usuario = $_SESSION['emailuser'];

					$sql = "SELECT * FROM `USER` WHERE `EMAIL_USER` = '$usuario'";

					$busca = mysqli_query($connection, $sql);
					while ($array = mysqli_fetch_array($busca)){
						$id_user = $array['ID_USER'];
						$name_user = $array['NAME_USER'];
						$email_user = $array['EMAIL_USER'];
						$nickname_user = $array['NICKNAME_USER'];
						$occupation_user = $array['OCCUPATION_USER'];
						$escolaridade_user = $array['ESCOLARIDADE_USER'];
						$country_user = $array['COUNTRY_USER'];
				?>

				<div class="text-center mb-4">
					<img class="mb-4" src="../img/icon/icon.svg" alt="" width="72" height="72">
					<h1 class="h3 mb-3 font-weight-normal">Editar Dados do Usuário</h1>
					<p>Altere as informações desejadas:</p>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" name="nameuser" value="<?php echo $name_user ?>">
					<label>Nome</label>
				</div>
				
				<div class="form-label-group">
					<input type="email" class="form-control" name="emailuser" value="<?php echo $email_user ?>" disabled>
					<label>Endereço de Email</label>
				</div>
				
				<div class="form-label-group">
					<input type="text" class="form-control" name="nicknameuser" value="<?php echo $nickname_user ?>">
					<label>Apelido</label>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" name="occupationuser" value="<?php echo $occupation_user ?>">
					<label>Profissão</label>
				</div>

				<label>Escolaridade</label>
				<div class="form-label-group">
					<select class="form-control" name="escolaridadeuser" >
						<option></option>
						<option>Ensino Fundamental</option>
						<option>Ensino Médio</option>
						<option>Ensino Superior</option>
						<option>Mestrado</option>
						<option>Doutorado</option>
					</select>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" name="countryuser" value="<?php echo $country_user ?>">
					<label>País</label>
				</div>

				<!-- Carregar foto com pré-visualização -->
				<label>Foto</label>
				<div class="input-group mb-3">
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" name="photouser" accept="image/*" onchange="preview_image(event)">
				    <label class="custom-file-label">Escolha o arquivo</label>
				  </div>
				  <img id="output_image" style="max-width:40px; margin-left: 10px; " />
				</div>
				
				<!--
				<div class="form-label-group">
					<input type="password" class="form-control" name="passworduser">
					<label>Senha</label>
				</div>
				-->

				<button class="btn btn-lg btn-warning btn-block" style="color: #fff;" type="submit" id="btn-alterar"> <i class="fas fa-edit"></i>&nbsp; Enviar</button>
				
				<a href="logged.php" role="button" class="btn btn-lg btn-primary btn-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Voltar</a>
				
				<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>

				<?php } ?>
			</form>
		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>

			<script type='text/javascript'>
				function preview_image(event) 
				{
				  var reader = new FileReader();
				  reader.onload = function()
				  {
				    var output = document.getElementById('output_image');
				    output.src = reader.result;
				  }
				  reader.readAsDataURL(event.target.files[0]);
				}
			</script>

		</footer>
	</body>
</html>




