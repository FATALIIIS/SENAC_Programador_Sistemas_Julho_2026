<?php require_once 'menu.php'; ?>
<form action="cadastrarcliente.php" method="POST" id="form">
	<div id="loader" style="display: none;"> 
		<img src="img/loader.gif">
	</div>
	<h1>Cadastro de Cliente</h1>
	<p>Digite seu nome:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" pattern="[a-zA-Z\sçÇãÃéÉíÍóÓúÚ]{2,40}" title="Somente letras, sem caracteres especiais." required></p>
	<p>Digite seu CPF:</p>
	<p><input type="number" name="cpf" min="00000000000" max="99999999999" pattern="[0-9]{11}" title="Somente números." required></p>
	<p>Digite sua data de nascimento:</p>
	<?php
	$data_atual=new DateTime(date('Y-m-d'));
	$data_antiga=date_modify($data_atual,"-110 years")->format('Y-m-d');
	?>
	<p><input type="date" name="data_nasci" min="<?= $data_antiga ?>" max="<?= date('Y-m-d') ?>" required></p>
	<p>Digite seu endereço:</p>
	<p><input type="text" name="endereco" size="50" maxlength="50" pattern="[0-9a-zA-Z\s,.,çÇãÃéÉíÍóÓúÚ]{6,50}" required></p>
	<p>Digite seu telefone:</p>
	<p><input type="text" name="telefone" id="telefone" size="14" maxlength="14" placeholder="(DDD)00000-0000" title="Formato (XX)XXXXX-XXXX" 
	pattern="\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}" required></p>
	<p>Login:</p>
	<p><input type="text" name="login" size="20" maxlength="20" pattern="[a-zA-Z0-9@-_]{5,20}" title="5 a 20 caracteres, letras e números, @,_,-." required></p>
	<p>Senha:</p>
	<p><input type="password" name="senha" size="10" maxlength="10" pattern="[a-zA-Z0-9@-_]{8,20}" title="8 a 20 caracteres, letras e números, @,_,-." required></p>
	<p>Redigite a senha:</p>
	<p><input type="password" name="validar" size="10" maxlength="10" pattern="[a-zA-Z0-9@-_]{8,20}" title="8 a 20 caracteres, letras e números, @,_,-." required></p>
	<p><input type="submit" name="botao" value="Cadastrar"></p>
</form>
<?php 
	if (isset($_POST['botao'])) {
		require_once 'model/Cliente.php';
		$cliente=new Cliente();
		$cliente->setSenha($_POST['senha']);
		if ($cliente->getSenha()!=$_POST['validar']) {
			echo "<h2>As senham não condizem.</h2>";
		}else{
			require_once 'persistence/ClientePA.php';
			$clientepa=new ClientePA();
			$cliente->setCpf($_POST['cpf']);
			$cliente->setLogin($_POST['login']);
			if(!$clientepa->verificar('cpf',$cliente->getCpf())){
				echo "<h2>Esse CPF já está cadastrado.</h2>";
			}else{
				if(!$clientepa->verificar('login',$cliente->getLogin())){
					echo "<h2>Esse login já está cadastrado, escolha outro.</h2>";
				}else{
					$cliente->criptografar();
					$cliente->setNome($_POST['nome']);
					$cliente->setDataNasci($_POST['data_nasci']);
					$cliente->setEndereco($_POST['endereco']);
					$cliente->setTelefone($_POST['telefone']);
					if($clientepa->cadastrar($cliente)){
						echo "<h2>Cliente cadastrado com sucesso!</h2>";
					}else{
						echo "<h2>Erro na tentiva de cadastrar.</h2>";
					}
				}
			}
		}
	}
?>
<script src="js/loader.js"></script>