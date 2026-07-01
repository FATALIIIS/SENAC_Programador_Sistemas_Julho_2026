<?php require_once 'cabecalho.php'; ?>
<form action="fatorial2.php" method="GET">
	<h1>Cálculo do Fatorial</h1>
	<p>Digite um número:</p>
	<p><input type="number" name="numero" step="1" min="2" max="50" required></p>
	<p><input type="submit" name="botao" value="Calcule"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
