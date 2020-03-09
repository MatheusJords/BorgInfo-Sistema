<?php require "classes/conexao.php";?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Matheus Jordan">
    <title>Sistema de Chamados - BorgInfo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form class="form-signin" action="classes/autentica_usuario.php" method="post">
              <div class="text-center mb-4">
                  <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                  <h1 class="h3 mb-3 font-weight-normal">BorgInfo</h1>
              </div>

              <div class="form-label-group">
                  <label for="inputEmail">Usuário:</label>
                  <input type="name" name="usuario" id="inputEmail" class="form-control" placeholder="Usuário:" required autofocus>
              </div>

              <div class="form-label-group">
                  <label for="inputPassword">Senha:</label>
                  <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha:" required>
              </div>

              <div class="checkbox mb-3">
                  <label>
                  <input type="checkbox" value="remember-me"> Lembrar Me
                  </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
              <p class="mt-5 mb-3 text-muted text-center">&copy;BorgInfo - Todos os direitos reservados 2020</p>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>