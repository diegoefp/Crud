
<a class="btn btn-success" href="?pagina=inserir_curso">Adicionar novo curso</a>


<br><br>
<table class="table table-hover table-striped" id="cursos">
	<thead>	<tr>
		<th>Nome Curso</th><th>Carga Horária</th><th>Editar</th><th>Deletar</th>
	</tr>
	</thead>
	<tbody>
	<?php
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<tr><td>'.$linha['nome_curso'].'</td>';
			echo '<td>'.$linha['carga_horaria'].'</td>';
	?>
			<td><a id="editar" href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>"><i class="fas fa-edit"></i></a></td>

			<td><a id="deletar" href="php/deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>"><i class="far fa-trash-alt"></i></a></td></tr>
	<?php



		}

	?>
	</tbody>
</table>