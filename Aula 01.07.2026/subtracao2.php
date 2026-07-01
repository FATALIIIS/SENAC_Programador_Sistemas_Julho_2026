<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$numero1=$_GET['numero1'];
	$numero2=$_GET['numero2'];
	$subtracao=$numero1-$numero2;
	$subtracao=number_format($subtracao,2,",",".");
	echo "<p>$numero1 - $numero2 = $subtracao</p>";
?>
<a href="subtracao.php" class="submit1">Clique aqui para realizar um novo cálculo</a>
</section>
</body>
</html>