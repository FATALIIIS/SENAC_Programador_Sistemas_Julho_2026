<?php require_once 'cabecalho.php'; ?>
<?php 
	if (isset($_GET['botao'])){
		$numero=$_GET['numero'];
		$fatorial=1;
		echo "<section class='resultado'>";
		echo "<p>$numero!=";
		for ($i=$numero; $i>=1; $i--){
			if($i==1){
				echo " $i ";
			}else{
				echo " $i &times";
			}
			$fatorial=$fatorial*$i;		
		}
		echo "= $fatorial</p>";	
		}
?>
<a href="fatorial.php" class="submit1">Clique aqui para calcular novamente.</a>
</section>
</body>
</html>