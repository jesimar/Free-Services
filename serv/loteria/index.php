<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Página Loteria" />
		<meta name="author" content="Jesimar da Silva Arantes" />

		<title>Loteria</title>

		<!-- permite o uso de recursos do bootstrap -->
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../lib/bootstrap/css/floating-labels.css" rel="stylesheet" />

		<!-- permite o uso de recursos do site fontawesome -->
		<script src="https://kit.fontawesome.com/e018137ed5.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<header>
		    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		      <img src="../../img/icon/logo-loteria.svg" width="40" height="40">
		      <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;Loteria</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		    </nav>
		  </header>

		<div class="container" style="padding-top: 700px">
			<div class="text-center mb-4">
				<img class="mb-4" src="../../img/icon/logo-loteria.svg" alt="" width="90" height="90">
			</div>

			<div class="form-label-group">
				<center>
				<?php
					//$listQuina1 = [10, 13, 25, 67, 80];
					//$listMega1 = [4, 19, 24, 27, 30, 50];

					exec("python loteria.py", $outRun, $status);

					$saidaMega = str_replace(',', '', $outRun[0]);
					$saidaMega = str_replace("'", '', $saidaMega);
					$saidaMega = str_replace(']', '', $saidaMega);
					$saidaMega = str_replace('[', '', $saidaMega);
					//$listSaidaMega = explode('  ', $saidaMega);
					//echo var_dump($listMega1) . '<br>';
					/*echo var_dump($listSaidaMega) . '<br>';
					$intersectMega = array_intersect($listSaidaMega, $listMega1);
					for ($i = 0; $i < count($listSaidaMega); $i++){
						echo $listSaidaMega[$i] . ' ';
					}
					echo '<br>';
					for ($i = 0; $i < count($listMega1); $i++){
						echo $listMega1[$i] . ' ';
					}
					echo '<br>';
					for ($i = 0; $i < count($intersectMega); $i++){
						echo $intersectMega[$i] . ' ';
					}*/

					$saidaQuina = str_replace(',', '', $outRun[3]);
					$saidaQuina = str_replace("'", '', $saidaQuina);
					$saidaQuina = str_replace('[', '', $saidaQuina);
					$saidaQuina = str_replace(']', '', $saidaQuina);

					$saidaLotomania = str_replace(',', ' ', $outRun[6]);
					$saidaLotomania = str_replace("'", '', $saidaLotomania);
					$saidaLotomania = str_replace('[', '', $saidaLotomania);
					$saidaLotomania = str_replace(']', '', $saidaLotomania);

					$saidaLoto[0] = substr($saidaLotomania, 0, 24);
					$saidaLoto[1] = substr($saidaLotomania, 25, 24);
					$saidaLoto[2] = substr($saidaLotomania, 50, 24);
					$saidaLoto[3] = substr($saidaLotomania, 75, 24);

					$saidaLotofacil = str_replace(',', ' ', $outRun[9]);
					$saidaLotofacil = str_replace("'", '', $saidaLotofacil);
					$saidaLotofacil = str_replace('[', '', $saidaLotofacil);
					$saidaLotofacil = str_replace(']', '', $saidaLotofacil);

					$saidaLotoF[0] = substr($saidaLotofacil, 0, 24);
					$saidaLotoF[1] = substr($saidaLotofacil, 25, 24);
					$saidaLotoF[2] = substr($saidaLotofacil, 50, 24);
					
					echo '<hr>';
					echo '<img class="mb-4" src="../../img/logo-megasena.svg" alt="" height="30">';
					echo '<h3 style="color:#009e4cff">' . $saidaMega . '</h3>';
					echo '<h3 style="color:blue">' . $outRun[1] . '</h3>';
					echo $outRun[2];
					echo '<hr>';

					echo '<img class="mb-4" src="../../img/logo-quina.svg" alt="" height="30">';
					echo '<h3 style="color:#42338bff">' . $saidaQuina . '</h3>';
					echo '<h3 style="color:blue">' . $outRun[4] . '</h3>';
					echo $outRun[5];
					echo '<hr>';

					echo '<img class="mb-4" src="../../img/logo-lotomania.svg" alt="" height="30">';
					echo '<h3 style="color:#f39323ff">' . $saidaLoto[0] . '</h3>';
					echo '<h3 style="color:#f39323ff">' . $saidaLoto[1] . '</h3>';
					echo '<h3 style="color:#f39323ff">' . $saidaLoto[2] . '</h3>';
					echo '<h3 style="color:#f39323ff">' . $saidaLoto[3] . '</h3>';
					echo '<h3 style="color:blue">' . $outRun[7] . '</h3>';
					echo $outRun[8];
					echo '<hr>';

					echo '<img class="mb-4" src="../../img/logo-lotofacil.svg" alt="" height="30">';
					echo '<h3 style="color:#a7348bff">' . $saidaLotoF[0] . '</h3>';
					echo '<h3 style="color:#a7348bff">' . $saidaLotoF[1] . '</h3>';
					echo '<h3 style="color:#a7348bff">' . $saidaLotoF[2] . '</h3>';
					echo '<h3 style="color:blue">' . $outRun[10] . '</h3>';
					echo $outRun[11];
					echo '<hr>';
				?>
				</center>
			</div>

			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
		</div>
		<footer>
			<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		</footer>
	</body>
</html>

