<?php 

include '../db.php';

$nome_aluno = $_POST['nome_aluno'];   // post referente ao campo name do formulário
$data_nascimento = $_POST['data_nascimento'];


/* verifica se está pegando os valores do formulário antes de enviar ao banco
echo $nome_aluno;
echo $data_nascimento;
*/


$query = "INSERT INTO ALUNOS (nome_aluno, data_nascimento)
VALUES ('$nome_aluno', '$data_nascimento')";


mysqli_query($conexao,$query);


header('location:../index.php?pagina=alunos'); 
// redireciona após o processamento
