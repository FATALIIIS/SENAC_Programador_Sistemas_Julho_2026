<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$numero1=$_GET['numero1'];
	$numero2=$_GET['numero2'];
	$soma=$numero1+$numero2;
	$soma=number_format($soma,2,",",".");
	echo "<p>$numero1 + $numero2 = $soma</p>";
?>
<a href="soma.php" class="submit1">Clique aqui para realizar um novo cálculo</a>
</section>
</body>
</html>