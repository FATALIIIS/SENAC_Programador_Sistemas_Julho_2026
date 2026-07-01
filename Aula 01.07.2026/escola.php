<?php require_once 'cabecalho.php'; ?>
<form action="escola2.php" method="GET">
	<h1>Sua instituição é boa ?</h1>
	<p>Digite sua instituição:</p>
	<p><input type="text" name="escola" step="1" min="1" required></p>
	<p><input type="submit" name="botao" value="Verificar"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>