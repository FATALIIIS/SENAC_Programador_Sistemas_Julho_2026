<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$base=$_GET['base'];
	$altura=$_GET['altura'];
	$area=($base*$altura)/2;
	$area=number_format($area,0,"",".");
	echo "<p>A área do triângulo é $base&times$altura&divide2 = $area.</p>";
?>
<a href="triangulo.php" class="submit1">Clique aqui para realizar um novo cálculo</a>
</section>
</body>
</html>