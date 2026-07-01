<?php require_once 'cabecalho.php'; ?>
<form action="triangulo2.php" method="get">
	<h1>Cálculo da Área do Triângulo △</h1>
	<p>Digite a base:</p>
	<p><input type="number" name="base" step="0.01" min="0.01" max=1000000 required></p>
	<p>Digite a altura:</p>
	<p><input type="number" name="altura" step="0.01" min="0.01" max=1000000 required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
</body>
</html>