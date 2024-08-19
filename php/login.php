<?php 

include '../db.php';

$usuario = addslashes($_POST['usuario']); // adiciona uma barra invertida quando observa um caractere php
$senha = md5($_POST['senha']);

/*
print($senha);

exit();*/


$query= "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND SENHA = '$senha'";


$consulta = mysqli_query($conexao, $query); 

if (mysqli_num_rows($consulta) == 1) {
	//echo 'login feito com sucesso';
	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	header('location:../index.php');
}
else{
	//echo 'Usuário e/ou senha inválido';
	header('location:../index.php?erro=1');
}


 ?>