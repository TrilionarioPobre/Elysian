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
	<link rel="stylesheet" href="css/styleconta.css">
</head>
<body>
  <form action="cadastro.php" method="post">
    <div class="login">
      <h1>Criar sua Conta da Elysian</h1>
    </div>
    <div class="container">
      <input class="Nome" type="text" name="nome" placeholder="Nome" style="width: 200px;">
      <input class="NomeUsuario" type="text" name="email" placeholder="Nome de Usuário" style="width: 425px;"><br>     
      <div class="sub1">
        Você pode usar letras, números e pontos finais
      </div>
      <input class="Senha" type="password" name="senha" style="width: 200px;" placeholder="Senha" style="width: 200px;">
      <input class="Senha2" type="password" name="senhaconfirmar" placeholder="Confirmar" style="width: 200px;"><br>
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
  <footer class="footerstyle">
    <a class="white-right" href="ajuda.php">Ajuda</a>
    <a class="white-right" href="privacidade.php">Privacidade</a>
    <a class="white" href="termos.php">Termos</a>
  </footer>
</body>
</html>
