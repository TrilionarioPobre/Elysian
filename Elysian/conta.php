<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elysian</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="img/img.css">
<style>
    body {
    background: #295872;
    font-family: 'Open Sans', sans-serif;
    padding: 10px 250px;
  }
  body {font-family: 'Open Sans', sans-serif;}
  form {border:2px solid gainsboro; background-color: white; border-radius: 12px;}
  .container {
    padding: 0px 50px; border-style: none;
  }
  .login {
    padding: 20px 50px;
  }
  input[type=text], input[type=password] {
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #357599;
    box-sizing: border-box;
  }
  .proximo{
    background-color: #357599;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    margin-top: 50px;
    border: none;
    cursor: pointer;
    width: 190px;
    font-size: 15px;
  }
  .proximo:hover{
    background-color: #1d5e82;
  }
  .fld{
    background-color: white;
    color: dodgerblue;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 215px;
    margin-right: 25px;
    margin-top: 30px;
    font-size: 15px;
  }
  .fld:hover{
    background-color: #f0f1f2;
    color: navy;
  }
  .sub1{
    font-size: 15px;
    color: gray;
    padding: 0px 52px;
  }
  .sub2{
    font-size: 15px;
    color: gray;
    padding: 0px 10px; 
    text-align: justify;
  }
  .Nome{
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #357599;
    box-sizing: border-box;
    margin-right: 20px;
    margin-bottom: 40px;
  }
  .Sobrenome{
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #357599;
    box-sizing: border-box;
    margin-bottom: 40px;
  }
  .NomeUsuario{
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #357599;
    box-sizing: border-box;
  }
  .Senha{
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #357599;
    box-sizing: border-box;
    margin-right: 20px;
    margin-top: 50px;
  }
  .Senha2{
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #357599;
    box-sizing: border-box;
    margin-top: 30px;
  }
  footer{
    text-align: right;
    padding: 15px 5px;
    color: black;
    font-size: 15px;
  }
</style>
<body>
	  <?php
      if($_SESSION['email_existe']); 
      ?>
      <div class="notificação">
      	<p>O usuario escolhido já existe. Informe outro e tente novamente.</p>
      </div>
      <?php
  		unset($_SESSION['email_existe']);
      ?> 
  <form action="cadastro.php" method="post">
    <div class="login">
      <h1>Criar sua Conta da Elysian</h1>
    </div>
    <div class="container">
      <input class="Nome" type="text" name="nome" placeholder="Nome" style="width: 200px;" required>        
      <input class="Sobrenome" type="text" name="sobrenome" placeholder="Sobrenome" style="width: 200px;" required><br>
      <input class="NomeUsuario" type="text" name="email" placeholder="Nome de Usuário" style="width: 425px;" required><br>       
      <div class="sub1">
        Você pode usar letras, números e pontos finais
      </div>
      <input class="Senha" type="password" name="senha" style="width: 200px;" placeholder="Senha" style="width: 200px;" required>
      <input class="Senha2" type="password" name="senhaconfirmar" placeholder="Confirmar" style="width: 200px;" required><br>
      <div class="sub2">
        Use oito ou mais caracteres com uma combinação de letras,<br> números e símbolos
      </div><br>
      <label>
      <input type="checkbox" name="mostrarsenha">Mostrar senha
      </label><br>
      <button class="fld"><b>Faça login em vez disso</b></button>
      <button type="submit" class="proximo"><b>Próximo</b></button>
    </div>
  </form>
  <footer>
    <a style="text-decoration: none; color: white; margin-right: 40px;" href="ajuda.php">Ajuda</a>
    <a style="text-decoration: none; color: white; margin-right: 40px;" href="privacidade.php">Privacidade</a>
    <a style="text-decoration: none;color: white;" href="termos.php">Termos</a>
  </footer>
</body>
</html>