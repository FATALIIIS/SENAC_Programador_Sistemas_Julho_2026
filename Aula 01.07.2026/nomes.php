<?php require_once 'cabecalho.php'; ?>
<form action="nomes.php" method="GET">
	<h1>Nomes (Array)</h1>
	<p>Quantos nomes você quer digitar?</p>
	<p><input type="number" name="quantidade" min="2" max="10" required></p>
	<p><input type="submit" name="botao" value="Confirmar"></p>
	<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
<?php
	if (isset($_GET['botao'])) {
		$quantidade=$_GET['quantidade'];
		echo "<form action='nomes.php' method='GET'>";
		echo "<h1>Digite os nomes</h1>";
		for ($i=1;$i<=$quantidade;$i++){
			echo "<p>Digite o $i&ordm;:</p>";
			echo "<p><input type='text' name='texto$i' size='40' maxlength='40' pattern='[A-Za-z\sçÇãÃÁáÊêÉéÓó]{2,40}' required></p>"; 
		}
			echo "<input type='hidden' name='quantidade' value='$quantidade'>";
			echo "<p><input type='submit' name='botao2' value='Enviar'></p>";
			echo "</form>"; 
	}else if(isset($_GET['botao2'])){
		$textos=[];
		$quantidade=$_GET['quantidade'];
		for ($i=1;$i<=$quantidade;$i++){
			$textos[]=$_GET["texto$i"];
		}
		$numeros=array_filter($textos,'is_numeric');
		natcasesort($textos);
		$menor=$textos[0];
		$maior=$textos[count($textos)-1];
		$reverso=array_reverse($textos);
		$iguais=count($textos)!=count(array_unique($textos)); 
		echo "<section class='resultado'>";
		if($iguais){
			echo "<p>Os nomes são iguais.</p>";
		}else{
			echo "<p>O primeiro nome da lista é: $menor;</p>";
			echo "<p>O último nome da lista é: $maior;</p>";
			echo "<p>A ordem alfabética é: ";
		foreach ($textos as $i=>$texto){
			if($i<(count($textos)-1)){
				echo "$texto,";
			}else{
				echo "$texto.";
			}
		}
		echo "</p>";
		echo "<p>A ordem alfabética inversa é: ";
		foreach ($reverso as $i=>$texto){
			if($i<(count($reverso)-1)){
				echo "$texto,";
			}else{
				echo "$texto.";
			}
		}
		echo "</p>";
	}
		echo "<a href='nomes.php' class='submit1'>Clique para verificar outros vetores</a>";
	}
?>