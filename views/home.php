<h1 style="text-align: center;">Bem vindos a Loop Cursos</h1>


<form method="post" action="php/login.php">

	<label class="badge badge-secondary">Usuário:</label>
	<input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
	<br>
	<label class="badge badge-secondary">Senha:</label>
	<div class="password-container">
		<input id="senha" type="password" name="senha" placeholder="Digite a senha" class="form-control">
		 <span class="eye-icon" onclick="togglePasswordVisibility1()">
	        <i class="fa-regular fa-eye"></i> <!-- Ícone de olho -->
	    </span>
    </div>
	<br>
	<input type="submit" value="Entrar" class="btn btn-success" name="">



</form>
<br>

<?php if (isset($_GET['erro'])) { ?>
	<div class="alert alert-danger" role="alert">
		Usuário e/ou senha inválidos.
	</div>
<?php } ?>

<?php if (isset($_GET['errocpf'])) { ?>
	<div class="alert alert-danger" role="alert">
		CPF inválido.
	</div>
<?php } ?>

<?php if (isset($_GET['errocpfunico'])) { ?>
	<div class="alert alert-danger" role="alert">
		CPF já cadastrado.
	</div>
<?php } ?>

<?php if (isset($_GET['sucesso'])) { ?>
	<div class="alert alert-success" role="alert">
		Cadastro realizado com sucesso - Faça Login.
	</div>
<?php } ?>


<h3 style="text-align: center;">Não possui uma conta? <button class="btn btn-primary" onclick="mostrarFormulario()">Clique para se cadastrar</button></h1>




	<form id="formularioCadastro" method="post" action="php/cadastro.php" enctype="multipart/form-data">

	<label class="badge badge-secondary">Usuário:</label>
	<input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
	<br>
	<label class="badge badge-secondary">Senha:</label>
	<div class="password-container">
		<input id="senha2" type="password" name="senha" placeholder="Digite a senha" class="form-control">
		 <span class="eye-icon" onclick="togglePasswordVisibility2()">
	        <i class="fa-regular fa-eye"></i> <!-- Ícone de olho -->
	    </span>
    </div>
    <br>
	<label class="badge badge-secondary">Nome:</label>
	<input type="text" name="nome" placeholder="Digite seu nome completo" class="form-control">
	<br>
	<label class="badge badge-secondary">CPF:</label>
	<input type="text" name="cpf" placeholder="Digite seu CPF" class="form-control">
	<br>
	<label class="badge badge-secondary">E-mail:</label>
	<input type="email" name="email" placeholder="Digite seu e-mail" class="form-control">
	<br>
	<label class="badge badge-secondary">Telefone:</label>
	<input type="text" name="telefone" placeholder="Digite seu telefone" class="form-control">
	<br>
	<label class="badge badge-secondary">Endereço:</label>
	<input type="text" name="endereco" placeholder="Digite seu Endereço completo" class="form-control">
	<br>
	<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
	<label class="badge badge-secondary">Foto:</label>
	<input accept="image/*"  type="file" name="imagem" class="form-control">
	


	<br>
	<input type="submit" value="Cadastrar" class="btn btn-success" name="CadastrarUsuario">



</form>

<script>
function mostrarFormulario() {
    var x = document.getElementById("formularioCadastro");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}


function togglePasswordVisibility1() {
            const senhaInput = document.getElementById('senha');
            if (senhaInput.type === 'password') {
                senhaInput.type = 'text'; // Mostra a senha
            } else {
                senhaInput.type = 'password'; // Oculta a senha
            }
        }

function togglePasswordVisibility2() {
            const senhaInput = document.getElementById('senha2');
            if (senhaInput.type === 'password') {
                senhaInput.type = 'text'; // Mostra a senha
            } else {
                senhaInput.type = 'password'; // Oculta a senha
            }
        }

</script>



