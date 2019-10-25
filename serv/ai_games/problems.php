<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <meta name="description" content="Página de problemas do site Free-Services" />
    <meta name="author" content="Jesimar da Silva Arantes" />
    
    <title>Free Services</title>

    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../lib/bootstrap/css/jumbotron.css" rel="stylesheet" />
  </head>
  <body>

  <?php

    session_start();
    $usuario = $_SESSION['emailuser'];
  
    if (!isset($usuario))
    {
      header('Location: login.php');
    }

  ?>

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
          <?php
            include '../connection.php';
            $sql = "SELECT * FROM `USER` WHERE `EMAIL_USER` = '$usuario'";
            $busca = mysqli_query($connection, $sql);
            $total = mysqli_num_rows($busca);
            if ($total == 1){
              $array = mysqli_fetch_array($busca);
              $photo = $array['PHOTO_USER'];
              if ($photo != null){
                echo '<img class="rounded-circle" height="40" src="data:image/jpeg;base64,'.base64_encode($photo).'"/>';
              }else{
                echo '<img src="../../img/users/man.svg" alt="" width="40" height="40" background="#777" color="#777" class="rounded-circle" />';  
              }
            }
          ?>
        </div>
      </div>
    </nav>
  </header>

  <main role="main">
    <div class="jumbotron" style="padding-top: 10px;">
      <div class="container" style="height: 0px;">
        <h1 class="display-5">Problemas!</h1>
      </div>
    </div>
    <div class="container">
      <hr>
      <p>1 - Desenvolva um programa que leia um número e diga se o mesmo é par ou ímpar.</p>
      <p>(a) Caso o número seja par imprima a mensagem: "numero par";</p>
      <p>(b) Caso o número seja ímpar imprima a mensagem: "numero impar".</p>

      <form class="form-signin align-middle" action="_upload_code.php" method="post" enctype="multipart/form-data">
        <label>Carregar Arquivo de Código</label>
        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="filecode" accept=".c, .java, .py">
            <label class="custom-file-label">Escolha o arquivo</label>
          </div>
        </div>
      <form>
      <?php
        $path = "../../challenges/problems/par-ou-impar/";
        $language = "python";
        $name_program = "26.py";
        $input = "7";
        $outEsperada = "numero impar";
      ?>
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Linguagem</th>
            <th scope="col">Tamanho (bytes)</th>
            <th scope="col">Tempo (ms)</th>
            <th scope="col">Resultado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Par ou Impar</th>
            <td> 
              <?php 
                echo $language;
              ?> 
            </td>
            <td>
              <?php 
                $size = filesize($path . $language . "/" . $name_program);
                echo $size;
              ?> 
            </td>
            <td>
              <?php
                $timeInit = microtime(true);
                exec("python " . $path . $language . "/" . $name_program . " " . $input, $outRun, $status);
                $timeFinal = microtime(true);
                $diffTime = $timeFinal - $timeInit;
                echo intval($diffTime * 1000);
              ?>
            </td>
            <td>
              <?php
                if ($outRun[0] == $outEsperada){
              ?>
                  <button class="btn btn-success btn-sm">
                    Aprovado
                  </button></td>
              <?php
                }else{
              ?>
                  <button class="btn btn-danger btn-sm">
                    Erro
                  </button></td>
              <?php
                }
              ?>
          </tr>
        </tbody>
      </table>
      <?php
        
        //echo "compilando codigo em c ";
        //exec("gcc "+path+"/c/par-ou-impar.c -o "+path+"/c/out", $outCompilation, $statusGCC);
        //echo "codigo em c ";
        //exec("../challenges/problems/c/par-ou-impar 5", $outRunC, $statusC);
        //echo $outRunC[0];
        //echo " codigo em python ";
      ?>
      <h5>Entrada do Caso de Teste</h5>
      <div class="alert alert-secondary" role="alert">
        <?php 
          echo $input; 
        ?>
      </div>
      <h5>Saída do Caso de Teste</h5>
      <div class="alert alert-success" role="alert">
        <?php
          echo $outEsperada;
        ?>
      </div>
      <h5>Saída Produzida</h5>
      <div class="alert alert-primary" role="alert">
        <?php 
          echo $outRun[0]; 
        ?>
      </div>
      <h5>Saída de Erro</h5>
      <div class="alert alert-danger" role="alert">
        <?php 
          echo $status[0];  
        ?>
      </div>
      <hr>      
      <hr>
    </div>

    <footer class="container">
      <p class="float-right"><a href="#">Volte para o Topo</a></p>
      
      <p>&copy; 2019-2019 Desenvolvido por Jesimar da Silva Arantes</p>

      <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
    </footer>
    </main>

  </body>
</html>
