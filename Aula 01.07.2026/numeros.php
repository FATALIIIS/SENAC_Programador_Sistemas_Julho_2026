<?php require_once 'cabecalho.php'; ?>
<form action="numeros.php" method="GET">
	<h1>Contagem de Pares e Ímpares</h1>
	<p>Quantos nomes você quer digitar?</p>
	<p><input type="number" name="quantidade" min="2" max="10" required></p>
	<p><input type="submit" name="botao" value="Confirmar"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
<?php
	if (isset($_GET['botao'])) {
		$quantidade=$_GET['quantidade'];
		echo "<form action='numeros.php' method='GET'>";
		echo "<h1>Digite os números</h1>";
		for ($i=1;$i<=$quantidade;$i++){
			echo "<p>Digite o $i&ordm;:</p>";
			echo "<p><input type='number' name='texto$i' required></p>"; 
		}
			echo "<input type='hidden' name='quantidade' value='$quantidade'>";
			echo "<p><input type='submit' name='botao2' value='Enviar'></p>";
			echo "</form>"; 
	}else if(isset($_GET['botao2'])){
		$numeros=[];
		$quantidade=$_GET['quantidade'];
		for ($i=1;$i<=$quantidade;$i++){
			$numeros[]=$_GET["texto$i"];
		}
		$par=0;
		$impar=0;
		echo "<section class='resultado'>";
		foreach ($numeros as $numero){
			if (bcmod($numero, "2")==0) {
				$par++;
			}else{
				$impar++;
			}
		}
		echo "<p>Temos $par pares e $impar ímpares.";
		echo "</p>";
		echo "<a href='numeros.php' class='submit1'>Clique para verificar novamente</a>";
	}
?>