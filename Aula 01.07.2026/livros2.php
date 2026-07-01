<?php require_once 'cabecalho.php'; ?>
	<?php
	if (isset($_GET['botao'])) { //teste do envio do formulário 
		$autor1=$_GET['autor1'];
		$titulo1=$_GET['titulo1'];
		$pagina1=$_GET['pagina1'];
		$autor2=$_GET['autor2'];
		$titulo2=$_GET['titulo2'];
		$pagina2=$_GET['pagina2'];
		echo "<section class='resultado'>";
		if ($pagina1>$pagina2) {
			echo "<p>O livro do autor $autor1, com o título $titulo1 possui um maior número páginas.</p>";
			echo "<p>O livro com título '$titulo1' possui um total de $pagina1 páginas, enquanto o livro '$titulo2' possui $pagina2 páginas.</p>";
		}else if($pagina2>$pagina1){
			echo "<p>O livro do autor $autor2, com o título $titulo2 possui um maior número páginas.</p>";
			echo "<p>O livro com título '$titulo2' possui um total de $pagina2 páginas, enquanto o livro '$titulo1' possui $pagina1 páginas.</p>";
		}
		else{
			echo "<p>Ambos os livros possuem o mesmo número de páginas.</p>";
		}
}
?>
<a href="livros.php" class="submit1">Clique aqui para comparar novamente.</a>