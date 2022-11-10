<?php
include('php.ini');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login - Elysian</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/icon.png" rel="icon" >
    <link href="assets/css/login.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet"
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
    <script>
      function mostrar_senha(){
        var x = document.getElementById("InputPassword");
        var y = document.getElementById("AltPassword");
        if (x.type === "password"){
          x.type = "text";
        } else {
          x.type = "password";
        }
        if (y.type === "password"){
          y.type = "text";
        } else {
          y.type = "password";
        }
      }
    </script>
  </head>
  <body>
    <header>
      <header>
        <div class="container-fluid px-0">
          <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a href="index.html">
                <img class="navbar-brand" src="assets/img/icon.png"
                width="30px">
              </a>
              <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="download.php">GET ELYSIAN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registration.php">REGISTRAR</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

      </header>

      <div class="login jumbotron jumbotron-fluid">
        <div class="login container">
          <h1 class="titulo text-center">Login</h1>
          <form action="entrar.php" method="post" class="cadn container" autocomplete="off">
            <?php
            if(isset($_SESSION['nao_autenticado'])){
              echo('<div>
              <h1>Falha ao logar! Email ou senha incorretos.</h1>
            </div>');
            }
            unset($_SESSION['nao_autenticado']);
            ?>
            <div class="cad form-group">
              <h4 class="mano" for="InputEmail">Email</h4>
              <input name="email" type="email" class="form-control" id="eInputEmail" aria-describedby="emailHelp" placeholder="Digite seu Email" required>
            </div>

            <div class="cad form-group">
              <h4 class="mano" for="InputPassword">Senha</h4>
              <input name="senha" type="password" class="form-control" id="InputPassword" placeholder="Digite sua Senha" required>
            </div>
            <div class="cad form-group">
            <div class="cad form-check">
              <input type="checkbox" class="form-check-input" id="Check" onclick="mostrar_senha()">
              <h4 class="mano" for="Check">Mostrar Senha</h6>
            </div>
            <div>
              <h4 class="mano"><a href="esqueceu.php">Esqueceu a senha?</a></h4>
              <h4 class="mano">Não tem uma conta?<a href="registration.php">Crie aqui!</a></h4>
            </div>
          </div>
              <div class="cad">
                <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
              </div>
          </form>
        </div>
      </div>
      <h3 class="star text-center">Boas vindas ao Inferno!</h3>
      <footer class="fixed-bottom final">
        <h6 class="text-center">Copyright © 2022 Elysian Inc. All rights reserved.</h6>
      </footer>
  </body>
</html>
