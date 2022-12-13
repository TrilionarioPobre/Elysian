<?php
define('HOST', 'localhost');
define('USUARIO', 'id19695346_vini');
define('SENHA', 'Vi76913031g_');
define('DB', 'id19695346_elysian');

$mysqli = new mysqli(HOST, USUARIO, SENHA, DB);

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar ao banco de dados');