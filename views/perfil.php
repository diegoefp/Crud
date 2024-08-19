<h1 class="text-center">Bem vindo <?php echo "$user"; ?>  </h1> 





<section class="perfil">
<div class="card text-center border-success mb-3" style="width: 60%;">
   <div class="card-body">
    <h5 class="card-title">Informações do perfil</h5>
  </div>
  <ul class="list-group list-group-flush">
  	<?php
  		while($linha = mysqli_fetch_array($consulta_usuario)){

  		$imagem_codificada = base64_encode($linha['imagem']);
		echo '<img class="img-avatar" src="data:image/jpeg;base64,' . $imagem_codificada . '" alt="Imagem do usuário">'; 	

  		echo '<li class="list-group-item"> <span class="itemPerfil" >Nome: </span>'.$linha['nome'].'</li>';
  		echo '<li class="list-group-item"> <span class="itemPerfil" >E-mail: </span>'.$linha['email'].'</li>';
  		echo '<li class="list-group-item"><span class="itemPerfil" >Telefone: </span>'.$linha['telefone'].'</li>';
  		echo '<li class="list-group-item"><span class="itemPerfil" >CPF: </span>'.$linha['cpf'].'</li>';	
  		echo '<li class="list-group-item"><span class="itemPerfil" >Endereço: </span>'.$linha['endereco'].'</li>';		
  		}

?>
  </ul>
  <div class="card-body">
    <a href="?pagina=editar_pefil&editar=<?php echo $linha['id_aluno']; ?>" class="btn btn-primary">Editar</a>
    <a href="#" class="btn btn-danger">Excluir</a>
  </div>
</div>
</section>

























