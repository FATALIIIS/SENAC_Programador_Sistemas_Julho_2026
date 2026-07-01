<?php require_once 'cabecalho.php'; ?>
<form action="parimpar2.php" method="GET">
	<h1>Par ou ímpar</h1>
	<p>Digite um número:</p>
	<p><input type="number" name="numero" step="1" min="1" required></p>
	<p><input type="submit" name="botao" value="Verificar"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
