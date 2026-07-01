<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
	<h1>Demonstração</h1>
	<h2>Demonstração de Soma, Subtração, Divisão, Multiplicação e Potenciação.</h2>
<?php
	$numero1=10;
	$numero2=5;
	$soma=$numero1+$numero2;
	echo "<p>$numero1 + $numero2 = $soma</p>";
	$subtracao=$numero1-$numero2;
	echo "<p>$numero1 - $numero2 = $subtracao</p>";
	$divisao=$numero1/$numero2;
	echo "<p>$numero1 &divide; $numero2 = $divisao</p>";
	$multiplicacao=$numero1*$numero2;
	echo "<p>$numero1 &times; $numero2 = $multiplicacao</p>";
	$potenciacao=pow($numero1, $numero2);
	echo "<p>$numero1<sup>$numero2</sup> = $potenciacao</p>";
?>
<a href="home.php" class="submit2">Voltar</a>
</section>