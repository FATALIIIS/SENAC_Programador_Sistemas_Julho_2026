<?php require_once 'menu.php'; ?>
<form action="login.php" method="POST" id="form">
	<div id="loader" style="display: none;">
		<img src="img/loader.gif">
 	</div>
 	<h1>Login</h1>
	<p>Digite o login:</p>
	<p><input type="text" name="login" size="20" maxlength="20" pattern="[a-zA-Z0-9@-_]{5,20}" title="5 a 20 caracteres, letras e números, @,_,-." required></p>
	<p>Senha:</p>
	<p><input type="password" name="senha" size="10" maxlength="10" pattern="[a-zA-Z0-9@-_]{8,20}" title="8 a 20 caracteres, letras e números, @,_,-." required></p>
	<p><input type="submit" name="botao" value="Logar"></p>
</form>
<?php
	if (isset($_POST['botao'])) {
		require_once 'model/Cliente.php';
		require_once 'persistence/ClientePA.php';
		$cliente=new Cliente();
		$clientepa=new ClientePA();
		$cliente->setLogin($_POST['login']);
		$cliente->setSenha($_POST['senha']);
		$codigo=$clientepa->logar($cliente->getLogin(),$cliente->getSenha());
	if (!$codigo) {
		echo "<h2>Login ou senha incorretos!</h2>";
	}else{
		$cliente->logar($codigo);
		echo "<meta http-equiv='refresh' content='2;url=index.php'>";
		echo "<h2>Login com sucesso!</h2>";
	}
}
?>
<script src="js/loader.js"></script>
</body>
</html>