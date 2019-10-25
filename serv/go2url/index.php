<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Página Go to URL" />
		<meta name="author" content="Jesimar da Silva Arantes" />

		<title>Go 2 URL - Encurtador de URLs</title>

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
		      <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;Go2URL - Encurtador de URLs</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		    </nav>
		  </header>

		<div class="container">
			<form class="form-signin align-middle" action="./encurtar_url.php" method="post">
				
				<div class="text-center mb-4">
					<img class="mb-4" src="../../img/icon/logo-go2url.svg" alt="" width="90" height="90">
					<h1 class="h3 mb-3 font-weight-normal">Go to URL</h1>
					<p>Entre com uma URL (link) que deseja encurtar:</p>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="URL a ser encurtada" required autofocus name="url">
					<label>URL a ser encurtada</label>
				</div>

				<button class="btn btn-lg btn-primary btn-block" type="submit" id="btn-encurtar"><i class="fas fa-sign-in-alt"></i> &nbsp; Encurtar</button>

				<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
			</form>

		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>

