<?php require_once 'cabecalho.php'; ?>
<form action="tabuada2.php" method="GET">
	<h1>Tabuada</h1>
	<p>Digite um número:</p>
	<p><input type="number" name="numero" step="1" min="1" required></p>
	<p><input type="submit" name="botao" value="Mostrar Tabuada"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
