<?php
session_start();
include("conexao.php");
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$senhaconfirmar = mysqli_real_escape_string($conexao, $_POST['senhaconfirmar']);
$sql = "select count(*) as total from usuarios where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['email_existe'] = true;
	header('Location: registration.php');
	exit;
}

$sql = "INSERT INTO usuarios (nome, senha, email, data_cadastro) VALUES ('$nome', '$senha', '$email', NOW())";

if ($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: login.php');
exit;
?>