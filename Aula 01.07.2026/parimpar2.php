<?php require_once 'cabecalho.php'; ?>
<?php
	if (isset($_GET['botao'])) { //teste do envio do formulário 
		$numero=$_GET['numero'];
		echo "<section class='resultado'>";
		if ($numero%2==0) {
			$numero=number_format($numero,0,"",".");
			echo "<p>O número $numero é par!</p>";
		}else{
			$numero=number_format($numero,0,"",".");
			echo "<p>O número $numero é ímpar!</p>";
		}
	}
?>
<a href="parimpar.php" class="submit1">Clique aqui para verificar novamente</a>
</section>
</body>
</html>