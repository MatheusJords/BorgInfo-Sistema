<?php require "classes/conexao.php";
  session_start();
  if(!$_SESSION["nome_usuario"]){
    header("Location:login.php");
  }
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Olá Usuario</title>
  </head>
  <body>
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="index.php">BorgInfo</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Status</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Mensagens</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cadastro.php">Cadastrar</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <a class="nav-link" href="classes/logout.php">Sair</a>
                </form>
              </div>
          </nav>
        </div>
        <div class="col-md-3">
          <nav>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Chamados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Resolvidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Em Aberto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Em andamento</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>