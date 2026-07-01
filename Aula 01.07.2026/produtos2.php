<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$nome=$_GET['nome'];
	$numero1=$_GET['valor'];
	$numero2=$_GET['quantidade'];
	$multiplicacao=$numero1*$numero2;
	$multiplicacao=number_format($multiplicacao,2,",",".");
	echo "<p>Quantidade do produto: $nome</p>";
	echo "<p>$numero1 &times $numero2 = $multiplicacao</p>";
?>
<a href="produtos.php" class="submit1">Clique aqui para realizar o cálculo de um novo produto</a>
</section>
</body>
</html>