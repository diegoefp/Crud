<?php 

// echo $_GET['id_curso']; verifica se está pegando a id corretamente


include '../db.php';

$id_curso = $_GET['id_curso'];

$query = "DELETE FROM CURSOS WHERE id_curso = $id_curso ";

mysqli_query($conexao,$query);


header('location:../index.php?pagina=cursos');




 ?>