<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	

	<title>Cursos PHP&MYSQL</title>
</head>
<body>
	<header>
		<div class="container">
			<a  href="?pagina=home"><img class="logo" src="img/logo.png" title="Logo" alt="Logo"></a>
			<div id="menu">
				 <a href="?pagina=cursos">Cursos</a>
				 <a href="?pagina=alunos">Alunos</a>
				 <a href="?pagina=matriculas">Matriculas</a>
				 <?php if (isset($_SESSION['login'])) { ?>
				 	<a href="?pagina=perfil"> Perfil <?php echo $_SESSION['usuario']; ?></a>
				 <?php } ?> 
				 <?php if (isset($_SESSION['login'])) { ?>
				 	<a href="php/logout.php"> Sair </a>
				 <?php } ?>  
				 
			</div>
		</div>

	</header>

	<div id="conteudo" class="container">


