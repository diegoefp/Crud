<?php 

include '../db.php';

$usuario = $_POST['usuario'];   // post referente ao campo name do formulário
$senha = md5($_POST['senha']);
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$imagem = $_FILES['imagem'];




function validarCPF(&$cpf) { //passando a variavel por referencia para que ela mude
    // Remove caracteres não numéricos
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Verifica se o CPF possui 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}

// Função para validar se o CPF é único no banco de dados
function cpfUnico($cpf, $conexao) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf); // Remove caracteres não numéricos

    // Consulta SQL para verificar se o CPF já existe
    $sql = "SELECT COUNT(*) FROM USUARIOS WHERE cpf = '$cpf'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $quantidade = mysqli_fetch_row($resultado)[0];
        return $quantidade === '0'; // Retorna true se o CPF for único
    } else {
        
        return false;
    }
}

if (validarCPF($cpf)) {
    if (cpfUnico($cpf, $conexao)) {


        if($imagem != NULL) { // Verifica se a variavel imagem não é nula. 
            $nomeFinal = time().'.jpg'; //  atribui a variavel um nome de arquivo baseado no timestamp atual com a extensão .jpg
            $caminho_destino = "../uploads/"; // define o caminho de upload de imagem relativo a este arquivo.
            if (move_uploaded_file($imagem['tmp_name'], $caminho_destino . $nomeFinal)) {
                $tamanhoImg = filesize($caminho_destino . $nomeFinal); // retorna o tamanho do arquivo em bytes
                $tamanhoMB;
                $mysqlImg = addslashes(fread(fopen($caminho_destino . $nomeFinal, "r"), $tamanhoImg)); // abre o arquivo e o lê de forma binária além de remover caracteres especiais.

                $query = "INSERT INTO USUARIOS (usuario, senha, nome, cpf, email, telefone, endereco, imagem)
                VALUES ('$usuario', '$senha', '$nome','$cpf', '$email', '$telefone', '$endereco', '$mysqlImg')";

                mysqli_query($conexao,$query);

                unlink($nomeFinal);

                header('location:../index.php?sucesso'); 
            }
        }
    	
   } else {
        header('location:../index.php?errocpfunico');
    }
} else {
    header('location:../index.php?errocpf');
}



mysqli_close($conexao)








 ?>