<?php 

#conexão com o banco de dados mysql ***************

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

/*
if($conexao){
	echo "Conectado com sucesso <br>";
}
else{
	echo "Erro ao conectar <br>";
}*/

$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT alunos.nome_aluno, cursos.nome_curso, alunos_cursos.id_aluno_curso
		FROM alunos, cursos, alunos_cursos
		WHERE alunos_cursos.id_aluno = alunos.id_aluno
		AND alunos_cursos.id_cursos = cursos.id_curso";

$consulta_matriculas = mysqli_query($conexao, $query);


if (isset($_SESSION['usuario'])) {
    $user = $_SESSION['usuario'];

$query = "SELECT * FROM USUARIOS WHERE usuarios.usuario = '$user'";

$consulta_usuario = mysqli_query($conexao, $query);
 }







 ?>