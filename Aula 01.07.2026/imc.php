<?php require_once 'cabecalho.php'; ?>
<form action="imc2.php" method="GET">
	<h1>I.M.C</h1>
	<p>Digite o seu nome:</p>
	<p><input type="text" name="nome" id="aluno"required></p>
	<p>Digite o seu peso:</p>
	<p><input type="number" name="peso" step="0.1" min="10.0" max="500.0" required></p>
	<p>Digite a sua altura:</p>
	<p><input type="number" name="altura" step="0.1" min="1.3" max="2.5" required></p>
	<p><input type="submit" name="botao" value="Verificar"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
</body>
</html>