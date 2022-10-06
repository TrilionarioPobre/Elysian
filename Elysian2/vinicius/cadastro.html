<?php
session_start();
include("conexao.php");
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$senhaconfirmar = mysqli_real_escape_string($conexao, $_POST['senhaconfirmar']);
$sql = "select count(*) as total from usuarios where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['email_existe'] = true;
	header('Location: conta.php');
	exit;
}

$sql = "INSERT INTO usuarios (nome, sobrenome, senha, email, data_cadastro) VALUES ('$nome', '$sobrenome', '$senha', '$email', NOW())";

$conexao->close();

header('Location: conta.php');
exit;
?>