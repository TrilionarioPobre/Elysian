<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Elysian</title>
	<link rel="stylesheet" href="css/stylelogin.css">
  <link rel="stylesheet" href="img/img.css">
</head>
<body>
    	<img style="width: 100%; height: 400px;" src="img/banner.jpeg">
<nav id="menu-h">
        <ul>
            <li style="float: left;"><a href="index.html">Início</a></li>
            <li style="float: left;"><a href="Download.html">Download</a></li>
            <li style="float: left;"><a href="Atualizações.html">Atualizações</a></li>
            <li style="float: left;"><a href="Feedback.html">Feedback</a></li>
            <li class="active" style="float: right;"><a href="login.html">Login</a></li>
        </ul>
    </nav>
<form action="" method="post" style="background-color: white;">
	
	<div class="login">
		<h1>Iniciar Sessão</h1>
	</div>
	<div class="imgcontainer">
		<img src="img/avatar.png" alt="Avatar" class="avatar">
	</div>
	<div class="container">
		<label for="email"><b>Conta Elysian (E-mail)</b></label>
		<input type="text" placeholder="Nome de Usuário"name="email" required>
	    <label for="senha"><b>Senha:</b></label><br>
    	<input type="password" placeholder="Senha" name="senha" required>
    	<button type="submit">Login</button>
    	<label>
      		<input type="checkbox" name="remember"> Lembrar de mim
    	</label>
    	<span class="psw"><a href="Esqueceu.html">Esqueceu a senha?</a></span>
      <p>Não tem uma conta?<a href="conta.html">Crie aqui!</a></p>
  </div>
</form>
</body>
</html>
