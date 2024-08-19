<?php if(!isset($_GET['editar'])){ 


 ?>
 <!-- se não existir o editar exibe a inserção -->

<h1>Inserir novo Aluno</h1>
<form method="post" action="php/processa_aluno.php">
	<br>
	<label class="badge badge-secondary">Nome Aluno</label> <br>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
	<br><br>
	<label class="badge badge-secondary">Data de nascimento</label> <br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento do aluno">
	<br><br>
	<input class="btn btn-success" type="submit" value="Inserir Aluno" name="Inserir Aluno">


</form>


<?php } else { ?> <!--se não exibe a edição -->
	<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>

		<?php if($linha['id_aluno'] == $_GET['editar']){ ?>

			<h1>Editar Aluno</h1>
			<form method="post" action="php/edita_aluno.php">
				<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
				<br>
				<label class="badge badge-secondary">Nome Aluno</label> <br>
				<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
				<br><br>
				<label class="badge badge-secondary">Data de nascimento</label> <br>
				<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento do aluno" value="<?php echo $linha['data_nascimento']; ?>">
				<br><br>
				<input class="btn btn-success" type="submit" value="Editar Aluno" name="Inserir Aluno">


			</form>
		<?php } ?> <!-- fecha o if -->
	<?php } ?> <!-- fecha o while -->
<?php } ?> <!-- fecha o else -->	