<?php 

include '../db.php';

$nome_curso = $_POST['nome_curso'];   // post referente ao campo name do formulário
$carga_horaria = $_POST['carga_horaria'];


/* verifica se está pegando os valores do formulário antes de enviar ao banco
echo $nome_curso;
echo $carga_horaria;
*/

$query = "INSERT INTO CURSOS (nome_curso, carga_horaria)
VALUES ('$nome_curso', $carga_horaria)";


mysqli_query($conexao,$query);


header('location:../index.php?pagina=cursos');
// redireciona após o processamento

 ?>