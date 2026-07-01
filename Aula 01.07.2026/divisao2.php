<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$numero1=$_GET['numero1'];
	$numero2=$_GET['numero2'];
	$divisao=$numero1/$numero2;
	$divisao=number_format($divisao,0,"",".");
	echo "<p>$numero1 &divide; $numero2 = $divisao</p>";
?>
<a href="divisao.php" class="submit1">Clique aqui para realizar um novo cálculo</a>
</section>
</body>
</html>