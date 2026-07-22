<?php require_once 'menu.php'; ?>
<form action="administracao.php" method="POST" id="form">
	<div id="loader" style="display: none;"> 
		<img src="img/loader.gif">
	</div>
	<h1>Login</h1>
	<p>Digite o login:</p>
	<p><input type="text" name="login" size="20" maxlength="20" pattern="[a-zA-Z0-9@-_]{5,20}" title="5 a 20 caracteres, letras e números, @,_,-." required></p>
	<p>Senha:</p>
	<p><input type="password" name="senha" size="10" maxlength="10" pattern="[a-zA-Z0-9@-_]{5,20}" title="8 a 20 caracteres, letras e números, @,_,-." required></p>
	<p><input type="submit" name="botao" value="Logar"></p>
</form>
<?php
	if (isset($_POST['botao'])){
		require_once 'model/Funcionario.php';
		require_once 'persistence/FuncionarioPA.php';
		$funcionario=new Funcionario();
		$funcionariopa=new FuncionarioPA();
		$funcionario->setLogin($_POST['login']);
		$funcionario->setSenha($_POST['senha']);
		$vetor=$funcionariopa->logar($funcionario->getLogin(),$funcionario->getSenha());
		if (!$vetor) {
			echo "<h2>Login ou senha incorretos!</h2>";
		}else{
			$funcionario->logar($vetor[0],$vetor[1]);
			echo "<h2>Login com sucesso!</h2>";
			echo "<meta http-equiv='refresh' content='2; url=index.php'>";
		}
	}
?>
<script src="js/loader.js"></script>
</body>
</html>