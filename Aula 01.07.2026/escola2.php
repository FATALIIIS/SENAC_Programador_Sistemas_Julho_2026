<?php require_once 'cabecalho.php'; ?>
<?php
	if (isset($_GET['botao'])) { //teste do envio do formulário 
		$escola=$_GET['escola'];
		echo "<section class='resultado'>";
		if(strtolower($escola)=="senac"){
			echo "<p>Parabéns, ótima escolha!</p>";
		}else{
			echo "<p>Péssima escolha...</p>";
		}
		}
?>
<a href="escola.php" class="submit1">Clique aqui para verificar novamente</a>
</section>
</body>
</html>