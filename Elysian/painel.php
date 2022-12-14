<?php
include('protect.php');
header("refresh: 1200");
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <title>Elysian</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="assets/img/icon.png" rel="icon" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/fontawesome.js"></script>
  </head >

  <body>
    <header>
      <div class="container-fluid px-0">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
          <div class="container-fluid">
            <a href="index.html">
              <img class="navbar-brand" src="assets/img/icon.png" width="30px" />
            </a>
            <button class="navbar-toggler" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" data-bs-toggle="collapse" type="button" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="paineldownload.php">GET ELYSIAN</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="logout.php">SAIR</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <div class="banner jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="bg-welcome text-center">Bem Vindo ao</h1>
            <h1 class="bg-elysian text-center">Elysian!</h1>
            <div class="text-center">
              <a href="paineldownload.php">
                <button type="button" class="butao btn btn-success btn-lg mt-2">
                  GET ELYSIAN
                </button>
              </a>
            </div>
          </div>
    </header>

    <div class="about container">
      <h3 class="sobre text-center">Sobre n??s</h3>
      <div class="about-content text-center">
        <p>
        Elysian ?? pensado e feito para quebrar o status quo, nascendo do fogo
        ardente dos desenvolvedores de encontrar um solu????o para a grande
        falta de ingl??s do brasileiro m??dio, que o deixa amarrado ao mercado
        nacional, deixando-o para tr??s da concorr??ncia, seu objetivo ?? simples
        mais claro, ENSINAR INGL??S!
        </p>
        <p>
        Nosso pr??posito ?? elevar a qualidade de vida da sociedade atrav??s do
        conhecimento, permanece incontest??vel e se manter?? assim!
        </p>
        <p>
        N??o ?? apenas um jogo muito menos um mero projeto, ?? ELYSIAN, vindo e
        forjado do suor e dedica????o de todos os envolvidos, estar?? HOJE,
        AMANH?? E PARA SEMPRE!
        </p>
      </div>
    </div>

    <div class="cv jumbotron jumbotron-fluid">
      <h3 class="sn text-center">SIGA O ELYSIAN</h3>
      <div class="text-center">
        <a class="link" href="https://discord.gg/PVDn3mmNYT"><i class="fa-brands display-5 fa-discord"></i></a>
        <a class="link" href="https://github.com/TrilionarioPobre/Elysian"><i class="fa-brands display-5 fa-github"></i></a>
        <a class="link" href="https://www.reddit.com/r/theelysian/"><i class="fa-brands display-5 fa-reddit"></i></a>
      </div>
    </div>

    <footer class="final">
      <h6 class="text-center">
        Copyright ?? 2022 Elysian Inc. All rights reserved.
      </h6>
    </footer>

  </body>

</html>
