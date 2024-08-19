<?php 

# iniciar sessão
session_start();

# Base de dados
include 'db.php';


#Cabeçalho
include 'header.php';

#conteudo da página

if (isset($_SESSION['login'])) {  // se o login existir
		if (isset($_GET['pagina'])){  //se a variavel pagina existir
		$pagina = $_GET['pagina']; //valida a pagina
	}
		else{
			$pagina = 'cursos';
		}
}
else{
	$pagina = 'home';
}




// @$pagina = $_GET['pagina'];   //@ ignora o erro

switch ($pagina) {
	case 'cursos':
		include 'views/cursos.php';
		break;
	case 'alunos':
		include 'views/alunos.php';
		break;
	case 'matriculas':
		include 'views/matriculas.php';
		break;
	case 'perfil':
		include 'views/perfil.php';
		break;
	case 'inserir_curso':
		include 'views/inserir_curso.php';
		break;
	case 'inserir_aluno':
		include 'views/inserir_aluno.php';
		break;
	case 'inserir_matricula':
		include 'views/inserir_matricula.php';
		break;
	default:
		include 'views/home.php';
		break;
}



#rodapé
include 'footer.php';


?>
