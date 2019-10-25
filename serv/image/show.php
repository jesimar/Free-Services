<?php
	if (isset($_GET["search"])) { 
        $stringSearch  = $_GET["search"]; 
        $typeFilter = $_GET['typeFilter'];       //['All', 'Author', 'Name', 'Descrip']
	    $typeExtension = $_GET['typeExtension']; //['All', 'JPG', 'PNG', 'GIF']
	    $typeLicense = $_GET['typeLicense'];     //['All', 'Free', 'Close']
    } else { 
        $stringSearch = ''; 
        $typeFilter = 'All';       //['All', 'Author', 'Name', 'Descrip']
	    $typeExtension = 'All'; //['All', 'JPG', 'PNG', 'GIF']
	    $typeLicense = 'All';
    };
?>

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
		<link href="../../lib/bootstrap/css/album.css" rel="stylesheet" />

		<!-- permite o uso de recursos do site fontawesome -->
		<script src="https://kit.fontawesome.com/e018137ed5.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<header>
		    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		      <img src="../../img/icon/logo-up-free-img.svg" width="40" height="40">
		      <a class="navbar-brand" href="./index.php">&nbsp;&nbsp;&nbsp;Upload Free Images</a>
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
		        <form class="form-inline mt-2 mt-md-0" action="#" method="get">
		          <input class="form-control mr-sm-2" type="text" placeholder="Busca" aria-label="Search" name="search">
		          <div class="form-group">
				    <small><label style="color: #FFF;" for="exampleFormControlSelect1">Filtros &nbsp;</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="typeFilter">
				      <option>All</option>
				      <option>Author</option>
				      <option>Name</option>
				      <option>Descrip</option>
				    </select>
				    </small>
				  </div>
				  &nbsp;&nbsp;
		          <div class="form-group">
				    <small><label style="color: #FFF;" for="exampleFormControlSelect1">Extensão &nbsp;</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="typeExtension">
				      <option>All</option>
				      <option>JPG</option>
				      <option>PNG</option>
				      <option>GIF</option>
				    </select>
				    </small>
				  </div>
				  &nbsp;&nbsp;
				  <div class="form-group">
				    <small><label style="color: #FFF;" for="exampleFormControlSelect1">Licença &nbsp;</label>
				    <select class="form-control" id="exampleFormControlSelect2" name="typeLicense">
				      <option>All</option>
				      <option>Free</option>
				      <option>Close</option>
				    </select>
				    </small>
				  </div>
				  &nbsp;&nbsp;
		          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		        </form>
		      </div>
		    </nav>
		</header>

		<main role="main">
		  <div class="jumbotron text-center" style="padding-top: 70px; padding-bottom: 0px;">
		    <div class="container">
		      <img src="../../img/icon/logo-up-free-img.svg" width="80" height="80">
		      <p class="lead text-muted">Imagens distribuídas gratuitamente na internet.</p>
		    </div>
		  </div>

		  <div class="album py-5 bg-light">
		    <div class="container">
		      <div class="row">
		      	<?php
				  	include "../connection.php";

				  	$results_per_page = 15;
				    if (isset($_GET["page"])) { 
				        $page  = $_GET["page"]; 
				    } else { 
				        $page=1; 
				    };
				    $start_from = ($page - 1) * $results_per_page;

				    $condWhere = '';
				    if ($stringSearch != ''){
				    	if ($typeFilter == 'All'){
				    		$condWhere = " WHERE (`NAME_IMAGE` LIKE '%$stringSearch%' OR `DESCRIPTION_IMAGE` LIKE '%$stringSearch%' OR `AUTHOR_IMAGE` LIKE '%$stringSearch%') ";
				    	} else if ($typeFilter == 'Author'){
				    		$condWhere = " WHERE (`AUTHOR_IMAGE` LIKE '%$stringSearch%') ";
				    	} else if ($typeFilter == 'Name'){
				    		$condWhere = " WHERE (`NAME_IMAGE` LIKE '%$stringSearch%') ";
				    	} else if ($typeFilter == 'Descrip'){
				    		$condWhere = " WHERE (`DESCRIPTION_IMAGE` LIKE '%$stringSearch%') ";
				    	}
				    	if ($typeExtension == 'All'){
				    		//nao faz nada
				    	} else if ($typeExtension == 'JPG'){
				    		$condWhere = $condWhere . " AND (`TYPE_IMAGE` = 'jpg' OR `TYPE_IMAGE` = 'jpeg') ";
				    	} else if ($typeExtension == 'PNG'){
				    		$condWhere = $condWhere . " AND (`TYPE_IMAGE` = 'png') ";
				    	} else if ($typeExtension == 'GIF'){
							$condWhere = $condWhere . " AND (`TYPE_IMAGE` = 'gif') ";
				    	}
				    	if ($typeLicense == 'All'){
				    		//nao faz nada
				    	} else if ($typeLicense == 'Free'){
				    		$condWhere = $condWhere . " AND (`CATEGORY_IMAGE` = 'Free') ";
				    	} else if ($typeLicense == 'Close'){
				    		$condWhere = $condWhere . " AND (`CATEGORY_IMAGE` = 'Close') ";
				    	}
					}else {// a $stringSearch é vazia mas outros filtros foram aplicados
						if ($typeExtension == 'All'){
				    		$condWhere = $condWhere . " WHERE 1 ";
				    	} else if ($typeExtension == 'JPG'){
				    		$condWhere = $condWhere . " WHERE (`TYPE_IMAGE` = 'jpg' OR `TYPE_IMAGE` = 'jpeg') ";
				    	} else if ($typeExtension == 'PNG'){
				    		$condWhere = $condWhere . " WHERE (`TYPE_IMAGE` = 'png') ";
				    	} else if ($typeExtension == 'GIF'){
							$condWhere = $condWhere . " WHERE (`TYPE_IMAGE` = 'gif') ";
				    	}
				    	if ($typeLicense == 'All'){
				    		//nao faz nada
				    	} else if ($typeLicense == 'Free'){
				    		$condWhere = $condWhere . " AND (`CATEGORY_IMAGE` = 'Free') ";
				    	} else if ($typeLicense == 'Close'){
				    		$condWhere = $condWhere . " AND (`CATEGORY_IMAGE` = 'Close') ";
				    	}
					}
					$sql = "SELECT * FROM `IMAGE` $condWhere ORDER BY `ID_IMAGE` ASC LIMIT $start_from, " . $results_per_page;
			    	$sqlTotal = "SELECT COUNT(`ID_IMAGE`) AS total FROM `IMAGE` $condWhere";
				    
				    $busca = mysqli_query($connection, $sql);
		            $total = mysqli_num_rows($busca);
		            while ($array = mysqli_fetch_array($busca)){
		            	$id_image = $array['ID_IMAGE'];
		            	$file_image = $array['FILE_IMAGE'];
		            	$type_image = $array['TYPE_IMAGE'];
		            	$category_image = $array['CATEGORY_IMAGE'];
		            	$num_likes_image = $array['NUM_LIKES'];
		            	$date_create_image = $array['DATA_CREATE'];
		            	$name_image = $array['NAME_IMAGE'];
		            	$description_image = $array['DESCRIPTION_IMAGE'];
		            	$author_image = $array['AUTHOR_IMAGE'];
		            	$num_downloads_image = $array['NUM_DOWNLOADS'];
            	?>
		            	<div class="col-md-4">
				          <div class="card mb-4 shadow-sm">
				            <?php
				            	echo '<img class="img-thumbnail rounded" width="100%" height="255" src="data:image/jpeg;base64,'.base64_encode($file_image).'" />';
				            ?>

				            <div class="card-body" style="padding-top: -5px;">
				              <small class="text-muted"><i class="far fa-user"></i>&nbsp;Author: &nbsp;<?php echo $author_image ?></small>
				              <div style="padding-top: 1px;"></div>
				              <small class="text-muted"><i class="fas fa-quote-right"></i>&nbsp;Name: &nbsp;<?php echo $name_image ?></small>
				              <p class="card-text"> <?php echo $description_image ?></p>
				              <div class="d-flex justify-content-between align-items-center">
				                <small class="text-muted"><i class="far fa-file-image"></i>&nbsp;<?php echo $type_image ?></small>
				                <small class="text-muted"><i class="fab fa-linux"></i>&nbsp;<?php echo $category_image ?></small>
				                <small class="text-muted"><i class="far fa-thumbs-up"></i>&nbsp;<?php echo $num_likes_image ?></small>
				                <small class="text-muted"><i class="fas fa-download"></i>&nbsp;<?php echo $num_downloads_image ?></small>
				                <small class="text-muted"><i class="far fa-calendar-alt"></i>&nbsp;<?php echo $date_create_image ?></small>
				              </div>
				              <div style="padding-top: 7px;"></div>
				              <div class="d-flex justify-content-between align-items-center">
				                <div class="btn-group">
				                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="far fa-file-image"></i>&nbsp;View</button>
				                  <a class="btn btn-sm btn-outline-secondary" href="download.php?file_id=<?php echo $id_image ?>"><i class="fas fa-download"></i>&nbsp;Download</a>
				                  <a class="btn btn-sm btn-outline-secondary" href="like.php"><i class="far fa-thumbs-up"></i>&nbsp;Like</a>
				                </div>
			                  </div>

				            </div>
				          </div>
				        </div>
		        <?php
		            }
				?>
		      </div>
		      <center>
		      	<h5><span class="badge badge-secondary">Páginas: </span></h5>
				<?php 
					$result = mysqli_query($connection, $sqlTotal);
					$row = $result->fetch_assoc();
					$total_pages = ceil($row['total'] / $results_per_page);
					for ($i = 1; $i <= $total_pages; $i++) {
					    echo "<a href='show.php?page=" . $i . "'";
					    if ($i == $page){
					        echo " class='btn btn-primary'";
					    }
					    echo ">" . $i . "</a> &nbsp;  ";
					}
				?>
		   	  </center>
		    </div>
		  </div>		  

		</main>

		<footer class="mt-5 mb-3 text-center text-muted">
		  <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
		  <div class="container">
		    <p>&copy; 2019 - Desenvolvido por Jesimar da Silva Arantes</p>
		    <p class="float-right">
		      <a href="#">Volte para o topo</a>
		    </p>
		  </div>
		  
		</footer>
	</body>
</html>


