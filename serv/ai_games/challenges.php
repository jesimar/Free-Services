<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <meta name="description" content="Página de desafios do site Free-Services" />
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
            <a class="nav-link" href="logged.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Desafios</a>
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
    <div class="jumbotron" style="padding-top: 30px;">
      <div class="container" style="height: 160px;">
        <h1 class="display-3">Desafios!</h1>
        <p>Esta plataforma web proporciona a você a chance de criar um bot utilizando inteligência artificial para um jovo, ou ainda, resolver alguns problemas de algoritmos.</p>
        <!--
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        -->
      </div>
    </div>
    <div class="container">
  
    <div class="row">
      <div class="col-md-4">
        <img class="mb-4" src="../../img/problems.png" alt="" width="140" height="140" background="#777" color="#777" class="rounded-circle">
        <h2>Problemas</h2>
        <p>Crie soluções utilizando algoritmos para um dos problemas existentes. </p>
        <p><a class="btn btn-secondary" href="problems.php" role="button">Veja detalhes &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <img class="mb-4" src="../../img/games.png" alt="" width="140" height="140" background="#777" color="#777" class="rounded-circle">
        <h2>Jogos - 1 Player</h2>
        <p>Crie algoritmos utilizando inteligência artificial para um dos jogos existentes com 1 player. </p>
        <p><a class="btn btn-secondary" href="#" role="button">Veja detalhes &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <img class="mb-4" src="../../img/games2.png" alt="" width="140" height="140" background="#777" color="#777" class="rounded-circle">
        <h2>Jogos - 2 Players</h2>
        <p>Crie algoritmos utilizando inteligência artificial para um dos jogos existentes com 2 player.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Veja detalhes &raquo;</a></p>
      </div>
    </div>
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
