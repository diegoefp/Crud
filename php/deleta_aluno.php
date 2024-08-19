<?php 

//echo $_GET['id_aluno']; //verifica se está pegando a id corretamente

include '../db.php';

$id_aluno = $_GET['id_aluno'];


$query = "DELETE FROM ALUNOS WHERE id_aluno = $id_aluno";

mysqli_query($conexao,$query);


header('location:../index.php?pagina=alunos')

?>