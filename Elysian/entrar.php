<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
$email = $mysqli-> real_escape_string($_POST['email']);
$senha = $mysqli-> real_escape_string($_POST['senha']);

$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL " . $mysqli->error);

$quantidade = $sql_query->num_rows;

if ($quantidade == 1) {
	
	$usuario = $sql_query->fetch_assoc();

	include('php.ini');

	$_SESSION['id'] = $usuario['id'];
	$_SESSION['nome'] = $usuario['nome'];

	header("Location: painel.php");
} else {
	include('php.ini');
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
		}
	}
?>