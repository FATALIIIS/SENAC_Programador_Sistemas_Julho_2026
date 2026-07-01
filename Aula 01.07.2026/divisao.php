<?php require_once 'cabecalho.php'; ?>
<form action="divisao2.php" method="get">
	<h1>Cálculo de Divisão (&divide;)</h1>
	<p>Digite um número:</p>
	<p><input type="number" name="numero1" step="0.01" min="0.01" max=100000000 required></p>
	<p>Digite outro número:</p>
	<p><input type="number" name="numero2" step="0.01" min="0.01" max=100000000 required></p>
	<p><input type="submit" name="botao" value="Dividir"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
</body>
</html>