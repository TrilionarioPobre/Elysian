<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro - Elysian</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/icon.png" rel="icon" >
    <link href="assets/css/registration.css" rel="stylesheet">
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
        var myInput = document.getElementById("InputPassword");
        var letra = document.getElementById("letra");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        myInput.onfocus = function(){
          document.getElementById("mensagem").style.display = "block";
        }
        myInput.onblur = function(){
          document.getElementById("mensagem").style.display = "none";
        }
        myInput.onkeyup = function() {
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {
            
        } else {
          letra.classList.remove("valid");
          letra.classList.add("invalid");
        }
          }
    </script>
    <style>
      #mensagem {
        color: white;
      }
      .valid {
        color: green;
      }

      .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
      }

      .invalid {
        color: red;
      }

      .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
      }
    </style>
  </head>
  <body>
    <header>
      <header>
        <div class="container-fluid px-0">
          <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a href="index.php">
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
                  <a class="nav-link" href="login.php">LOGIN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="download.php">GET ELYSIAN</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <div class="banner jumbotron jumbotron-fluid">
        <div class="login container">
          <h1 class="bg-create text-center">Criar uma conta</h1>
          <form action="cadastro.php" method="post" class="cadn" autocomplete="off">
            <div class="form-group">
            <div class="cad form-group">
              <h5 class="titulo" name="text" for="InputUsername">Nome</h5>
              <input name="nome" type="text" class="form-control" id="InputUsername" required>
            </div>
              <h5 class="titulo" name="email" for="InputEmail">Email</h5>
              <input name="email" type="email" class="form-control" id="InputEmail" required>
            </div>
            <div class="cad form-group">
              <h5 class="titulo" name="senha" for="InputPassword">Senha</h5>
              <input name="senha" type="password" class="form-control" id="InputPassword" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$])[a-zA-Z0-9@#$]{8,50}$" required>
            </div>
            <div class="cad form-check">
              <input type="checkbox" class="form-check-input" id="Check" onclick="mostrar_senha()">
              <h5 class="titulo" for="Check">Mostrar Senha</p>
            </div>
            <button type="submit" class="cad btn btn-primary">Enviar</button>
            <div id="mensagem">
              <h3>Senha deve ter</h3>
              <p id="letra" class="">Uma letra minúscula</p>
              <p id="maiuscula" class="">Uma letra maiúscula</p>
              <p id="numero" class="">Um número</p>
              <p id="caracteres" class="">8 caracteres</p>
              <p id="carespercial">1 caractere especial</p>
            </div>
          </form>
        </div>
      </div>
      <h3 class="star text-center">Que a Força esteja com você!</h3>
      <footer class="final fixed-bottom">
        <h6 class="text-center">Copyright © 2022 Elysian Inc. All rights reserved.</h6>
      </footer>
  </body>
</html>
