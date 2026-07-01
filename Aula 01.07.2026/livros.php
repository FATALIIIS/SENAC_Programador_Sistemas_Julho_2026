<?php require_once 'cabecalho.php'; ?>
<form action="livros2.php" method="GET">
	<h1>Qual livro tem mais páginas ?</h1>
	<p>Digite o autor do 1º livro:</p>
	<p><input type="text" name="autor1" required></p>
	<p>Digite o título do 1º livro:</p>
	<p><input type="text" name="titulo1" required></p>
	<p>Digite o número de páginas do 1º livro:</p>
	<p><input type="number" name="pagina1" min="1" required></p>
	<p>Digite o autor do 2º livro:</p>
	<p><input type="text" name="autor2" required></p>
	<p>Digite o título do 2º livro:</p>
	<p><input type="text" name="titulo2" required></p>
	<p>Digite o número de páginas do 2º livro:</p>
	<p><input type="number" name="pagina2" min="1" required></p>
	<p><input type="submit" name="botao" value="Comparar livros"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
</body>
</html>