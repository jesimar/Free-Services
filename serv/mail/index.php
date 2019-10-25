<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Página Send Mail to *" />
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
		      <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;Send Mail to *</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		    </nav>
		  </header>

		<div class="container" style="margin-top: 200px;">
			<form class="form-signin align-middle" action="./enviar.php" method="post">
				
				<div class="text-center mb-4">
					<img class="mb-4" src="../../img/icon/logo-sendmail2.svg" alt="" width="90" height="90">
					<h1 class="h3 mb-3 font-weight-normal">Send Mail to *</h1>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Nome" required autofocus name="name">
					<label>Nome</label>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Email" required autofocus name="email">
					<label>Email</label>
				</div>

				<div class="form-label-group">
					<input type="text" class="form-control" placeholder="Assunto" required autofocus name="subject">
					<label>Assunto</label>
				</div>
                
                <div class="form-label-group">
					<textarea class="form-control" placeholder="Comentários" required autofocus rows="6" cols="47" name="comments"></textarea>
				</div>
                
                <div>
					<button class="btn btn-lg btn-primary" type="submit" id="btn-enviar"><i class="fas fa-sign-in-alt"></i> &nbsp; Enviar</button>
					<button class="btn btn-lg btn-warning" type="reset" id="btn-apagar"><i class="fas fa-eraser"></i> &nbsp; Apagar</button>
				</div>
				<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
			</form>

		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>

