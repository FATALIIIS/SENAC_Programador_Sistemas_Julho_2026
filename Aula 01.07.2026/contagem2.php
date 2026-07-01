<?php require_once 'cabecalho.php'; ?>
<?php 
	if (isset($_GET['botao'])){
		$inicio=$_GET['inicio'];
		$fim=$_GET['fim'];
		echo "<section class='resultado'>";
		if($inicio<$fim){
			$i=$inicio;
			echo "<p>";
			while($i<=$fim){
				if($i==$fim){
					echo"$i.";				
				}else{
				echo "$i, ";
				}
				$i++;
			}
			echo "</p>";
		}else if($inicio>$fim){
			echo "<p>";
			for($i=$inicio; $i>=$fim ; $i--){
				if ($i==$fim){
					echo "$i. ";
				}else{
					echo "$i, ";
				}
			}
			echo "</p>";
		}else{
			echo "<p>Os números são iguais.</p>";
		}
	}
?>
<a href="contagem.php" class="submit1">Clique aqui para realizar uma nova contagem</a>
</section>
</body>
</html>