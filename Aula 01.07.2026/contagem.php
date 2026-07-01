<?php require_once 'cabecalho.php'; ?>
<form action="contagem2.php" method="GET">
	<h1>Contagem Numérica</h1>
	<p>Digite o número inicial:</p>
	<p><input type="number" name="inicio" step="1" min="-1000" max="1000" required></p>
	<p>Digite o número final:</p>
	<p><input type="number" name="fim" step="1" min="-1000" max="1000" required></p>
	<p><input type="submit" name="botao" value="Realizar Contagem"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>