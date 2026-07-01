<?php require_once 'cabecalho.php'; ?>
<form action="telausuario.php" method="POST">
	<h1>Cadastro de Perfil de Usuário</h1>
	<p>Digite seu nome:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" pattern="[a-zA-Z\sçÇãÃáÁéÉíÍóÓúÚêÊ]{2,40}" required></p>
	<p>Data de Nascimento:</p>
	<p><input type="date" name="data_nasc" min="1906-01-01" max="<?= date('Y-m-d')?>" required></p>
	<p>Cor do texto:</p>
	<p><input type="color" name="cor_texto" value="#000000" required></p>
	<p>Cor do fundo:</p>
	<p><input type="color" name="cor_fundo" value="#FFFFFF" required></p>
	<p><input type="submit" name="botao" value="Cadastrar"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
<?php 
	if (isset($_POST['botao'])) {
		require_once 'model/Usuario.php';
		$usuario=new Usuario();
		$usuario->setNome($_POST['nome']);
		$usuario->setDataNasc($_POST['data_nasc']);
		$usuario->setCorTexto($_POST['cor_texto']);
		$usuario->setCorFundo($_POST['cor_fundo']);

		echo "<section class='resultado' style='background-color:".$usuario->getCorFundo().";color:".$usuario->getCorTexto()."'>";
		echo "<h1 style='color:".$usuario->getCorTexto().";text-shadow:none'>" .$usuario->getNome(). "</h1>";
		$data_bra=new DateTime($usuario->getDataNasc());
		echo "<p>Aniversário: ".$data_bra->format('d/m/Y')."</p>";
		echo "</section>";
	}
?>
</body>
</html>