<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$numero1=$_GET['numero1'];
	$numero2=$_GET['numero2'];
	$potenciacao=pow($numero1, $numero2);
	$potenciacao=number_format($potenciacao,0,"",".");
	echo "<p>$numero1<sup>$numero2</sup> = $potenciacao</p>";
?>
<a href="potenciacao.php" class="submit1">Clique aqui para realizar um novo cálculo</a>
</section>
</body>
</html>