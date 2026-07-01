<?php require_once 'cabecalho.php'; ?>
<form action="media2.php" method="GET">
	<h1>Média Final e Resultado</h1>
	<p>Digite o nome do aluno:</p>
	<p><input type="text" name="aluno" id="aluno"required></p>
	<p>Digite a média do 1º trimestre:</p>
	<p><input type="number" name="media1" step="0.1" min="0.0" max="10.0" required></p>
	<p>Digite a média do 2º trimestre:</p>
	<p><input type="number" name="media2" step="0.1" min="0.0" max="10.0" required></p>
	<p>Digite a média do 3º trimestre:</p>
	<p><input type="number" name="media3" step="0.1" min="0.0" max="10.0" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
</body>
</html>