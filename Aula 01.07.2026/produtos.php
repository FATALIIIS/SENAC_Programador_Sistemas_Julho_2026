<?php require_once 'cabecalho.php'; ?>
<form action="produtos2.php" method="get">
	<h1>Cálculo de Estoque de Produtos</h1>
	<p>Nome:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" required></p>
	<p>Valor (R$):</p>
	<p><input type="number" name="valor" step="0.01" min="0.01" max="999999.99" required></p>
	<p>Quantidade:</p>
	<p><input type="number" name="quantidade" step="1" min="1" max="50000" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
</body>
</html>