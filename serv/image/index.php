<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Página Upload Free Images" />
		<meta name="author" content="Jesimar da Silva Arantes" />

		<title>Upload Free Images</title>

		<!-- permite o uso de recursos do bootstrap -->
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../lib/bootstrap/css/floating-labels.css" rel="stylesheet" />

		<!-- permite o uso de recursos do site fontawesome -->
		<script src="https://kit.fontawesome.com/e018137ed5.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<header>
		    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		      <img src="../../img/icon/logo-up-free-img.svg" width="40" height="40">
		      <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;Upload Free Images</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarCollapse">
		        <ul class="navbar-nav mr-auto">
		          <li class="nav-item">
		            <a class="nav-link" href="index.php">Upload</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="show.php">Show</a>
		          </li>
		        </ul>
		      </div>
		    </nav>
		  </header>

		<div class="container" style="padding-top: 150px;">
			<form class="form-signin align-middle" action="./send_img.php" method="post" enctype="multipart/form-data">
				
				<div class="text-center mb-4">
					<img class="mb-4" src="../../img/icon/logo-up-free-img.svg" alt="" width="120" height="120">
					<h1 class="h3 mb-3 font-weight-normal">Upload Free Images</h1>
					<p>Envie uma imagem que deseja armazenar de forma livre:</p>
				</div>

				<div class="input-group mb-3">
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" name="fileimage" accept="image/*" onchange="preview_image(event)">
				    <label class="custom-file-label">Escolha o arquivo</label>
				  </div>
				  <img id="output_image" style="max-width:40px; margin-left: 10px; " />
				</div>
				
				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Autor da Imagem" autocomplete="off" autofocus name="authorimg">
					<label>Autor da Imagem</label>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Nome da Imagem" autocomplete="off" autofocus name="nameimg">
					<label>Nome da Imagem</label>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Descrição da Imagem" autocomplete="off" autofocus name="descimg">
					<label>Descrição da Imagem</label>
				</div>

				<button class="btn btn-lg btn-primary btn-block" type="submit" id="btn-enviar"><i class="fas fa-sign-in-alt"></i> &nbsp; Enviar</button>

				<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
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

