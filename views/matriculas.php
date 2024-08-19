<a  class="btn btn-success" href="?pagina=inserir_matricula">Adicionar nova Matricula</a>

<br><br>


<table class="table table-hover table-striped" id="matriculas">
	<thead>
	<tr>
		<th>Nome Aluno</th><th>Nome Curso</th><th>Deletar</th>
	</tr>
	</thead>
	<tbody>

	<?php
		while($linha = mysqli_fetch_array($consulta_matriculas)){
			echo '<tr><td>'.$linha['nome_aluno'].'</td>';
			echo '<td>'.$linha['nome_curso'].'</td>';
	?>

		<td><a id="deletar" href="php/deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>"><i class="far fa-trash-alt"></i></a></td></tr>

	<?php 
	

		}

	?>
	</tbody>
</table>