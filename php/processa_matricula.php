<?php 

include '../db.php';

$id_aluno = $_POST['escolha_aluno'];   // post referente ao campo name do formulário
$id_curso= $_POST['escolha_curso'];


/* verifica se está pegando os valores do formulário antes de enviar ao banco
echo $id_aluno;
echo $id_curso;
*/


$query = "INSERT INTO ALUNOS_CURSOS (id_aluno, id_cursos)
VALUES ($id_aluno, $id_curso)";


mysqli_query($conexao,$query);


header('location:../index.php?pagina=matriculas'); 
// redireciona após o processamento
