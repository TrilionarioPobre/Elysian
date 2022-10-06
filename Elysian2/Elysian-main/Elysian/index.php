<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysian</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="img/img.css">
<style>

@media screen and (max-width: 800px) {
  #leftcolumn, #rightcolumn {
    width: 100%;
    padding: 0;
  }
}

@media screen and (max-width: 400px) {
  #menu-h ul li a {
    float: none;
    width: 100%;
  }
}

	body {
		background: #295872;
		font-family: 'Open Sans', sans-serif;
		padding: 10px;
	}
</style>
</head>
<body>
	<div id="header">
    	<h1>Elysium</h1>
    </div>
    <nav id="menu-h">
        <ul>
            <li class="active" style="float: left;"><a href="index.php">Início</a></li>
            <li style="float: left;"><a href="download.php">Download</a></li>
            <li style="float: left;"><a href="atualizacoes.php">Atualizações</a></li>
            <li style="float: left;"><a href="feedback.php">Feedback</a></li>
            <li style="float: right;"><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <div id="row">
    	<div id="leftcolumn">
    		<div id="card">
    			<h2>O que é Elysium?</h2>
    			<div id="fakeimg" style="height: 200px;">Imagem</div>
    			<p>Elysium é um jogo que tem como objetivo, ensinar a gramática do inglês para brasileiros.</p>
    			<h2>Gameplay</h2>
    			<div id="fakeimg" style="height: 200px;">Gameplay</div>
    		</div>
    	</div>
    	<div id="rightcolumn">
    		<div id="card">
    			<h2>Sobre nós</h2>
    			<h1>Vinícius</h1>
    			<div id="fakeimg" style="height: 200px;">Imagem</div>
    			<h1>Lucas</h1>
    			<div id="fakeimg" style="height: 200px;">Imagem</div>
    			<h1>Gabriel</h1>
    			<div id="fakeimg" style="height: 200px;">Imagem</div>
    			<h1>João</h1>
    			<div id="fakeimg" style="height: 200px;">Imagem</div>
    			<h1>Gustavo</h1>
    			<div id="fakeimg" style="height: 200px;">Imagem</div>
    		</div>
    	</div>
    </div>
    <div id="footer">
    	<h1>TCC</h1>
    </div>
</body>
</html>