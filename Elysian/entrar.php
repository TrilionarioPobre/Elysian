<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
	$email = $mysqli-> real_escape_string($_POST['email']);
	$senha = $mysqli-> real_escape_string($_POST['senha']);

	$sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
	$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL " . $mysqli->error);
	$quantidade = $sql_query->num_rows;

	if ($quantidade == 1) {
		$usuario = $sql_query->fetch_assoc();
		if(password_verify($senha, $usuario['senha'])){
			include('php.ini');
			$_SESSION['id'] = $usuario['id'];
			$_SESSION['nome'] = $usuario['nome'];
			$_SESSION['email'] = $usuario['email'];
			header("Location: acesso.php");
	} else {
			include('php.ini');
			$_SESSION['nao_autenticado'] = true;
			header('Location: login.php');
		}
	}
}
?>