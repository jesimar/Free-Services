<?php
	include "../connection.php";

	$url_full = $_POST['url'];
	$text = $_POST['text'];
	$url_num_access = 0;
	$url_data_create = date("Y-m-d");
	
	$sql = "SELECT `URL_BEAUTIFY` FROM `BEAUTIFY_URL` WHERE '$text' = `URL_BEAUTIFY`";
	$busca = mysqli_query($connection, $sql) or die('Erro de consulta na base de dados');
	$total = mysqli_num_rows($busca);
	
	if ($total == 0){
		$sql2 = "INSERT INTO `BEAUTIFY_URL`(`URL_FULL`, `URL_BEAUTIFY`, `URL_NUM_ACCESS`, `URL_DATA_CREATE`) VALUES ('$url_full', '$text', $url_num_access, '$url_data_create')";
		$insert = mysqli_query($connection, $sql2) or die('Erro de consulta na base de dados');
	}else if ($total > 0){
		header("Location: error2.php");
	}
	mysqli_close($connection);
	$site = $pathSite;
	$subsite = 'serv/beautify_url/go.php?l=';
	$url_short_final = $site . $subsite . $text;
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Página Beautify URL" />
		<meta name="author" content="Jesimar da Silva Arantes" />

		<title>Beautify URL</title>

		<!-- permite o uso de recursos do bootstrap -->
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../lib/bootstrap/css/floating-labels.css" rel="stylesheet" />

		<!-- permite o uso de recursos do site fontawesome -->
		<script src="https://kit.fontawesome.com/e018137ed5.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<header>
		    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		      <img src="../../img/icon/logo-beautify-url.svg" width="40" height="40">
		      <a class="navbar-brand" href="index.php">&nbsp;&nbsp;&nbsp;Beautify URL</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		    </nav>
		  </header>

		<div class="container">
			<form class="form-signin align-middle">
				<div class="text-center mb-4" >
					<img class="mb-4" src="../../img/icon/logo-beautify-url.svg" alt="" width="90" height="90">
					<h1 class="h3 mb-3 font-weight-normal">URL Personalizada</h1>
				</div>

				<div class="form-label-group">
					<div class="alert alert-success small" role="alert">
					  	<?php
							echo $url_short_final;
						?>
					</div>
				</div>

				<a href="<?php echo $url_short_final; ?>" class="btn btn-lg btn-success btn-block"><i class="fas fa-sign-in-alt"></i> &nbsp; Ir para Link</a>

				<a href="index.php" class="btn btn-lg btn-primary btn-block" type="submit" ><i class="fas fa-arrow-circle-left"></i> &nbsp; Voltar</a>

				<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
			</form>
		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>
