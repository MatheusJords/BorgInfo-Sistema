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
    <title>Sistema de Chamados - BorgInfo</title>
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
