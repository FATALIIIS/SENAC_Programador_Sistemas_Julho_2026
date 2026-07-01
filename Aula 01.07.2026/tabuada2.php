<?php require_once 'cabecalho.php'; ?>
<?php 
	if (isset($_GET['botao'])){
		$numero=$_GET['numero'];
		echo "<section class='resultado'>";
		echo "<div id='tabuada'>";
		for ($i=1; $i<=10; $i++){
			$resultado=$numero*$i;
			echo "<p>$numero &times; $i = $resultado</p>";	
		}
		echo "</div>";
	}
?>
<a href="tabuada.php" class="submit1">Clique aqui para ver uma nova tabuada.</a>
</section>
</body>
</html>