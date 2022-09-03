
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Elysium</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="img/img.css">
<style>
    body {
    background: #295872;
    font-family: 'Open Sans', sans-serif;
    padding: 10px;
  }
    body {font-family: 'Open Sans', sans-serif;}
    form {border:3px solid black;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  display: inline-block;
  border: 1px solid #357599;
  box-sizing: border-box;
}

button {
  background-color: #357599;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.imgcontainer {
  text-align: center;
  position: center;
}


.login {
  padding: 12px 20px;
}

img.avatar {
  width: 200px;
  border-radius: 300px;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding: 10px 18px;
  width: auto;
}

.modal {
	display: none;
	position: fixed;
	z-index: 1;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	padding-top: 60px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
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
		<label for="email"><b>Conta Elysium (E-mail)</b></label>
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