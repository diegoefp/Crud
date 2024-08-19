<?php 

//echo $_GET['id_aluno']; //verifica se está pegando a id corretamente

include '../db.php';

$id_aluno_curso = $_GET['id_aluno_curso'];


$query = "DELETE FROM ALUNOS_CURSOS WHERE id_aluno_curso = $id_aluno_curso";

mysqli_query($conexao,$query);


header('location:../index.php?pagina=matriculas')

?>