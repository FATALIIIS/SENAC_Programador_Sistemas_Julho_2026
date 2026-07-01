<?php require_once 'cabecalho.php'; ?>
<?php
	if (isset($_GET['botao'])) { //teste do envio do formulário 
		$aluno=str_split($_GET['aluno']);
		$aluno[0]=strtoupper($aluno[0]);
		$j=0;
		for ($i=1; $i < count($aluno) ; $i++) { 
			if(is_null($aluno[$i])||$aluno[$i]==" "){
				$j=$i+1;
				$aluno[$j]=strtoupper($aluno[$j]);
			}else if($i!=$j){
				$aluno[$i]=strtolower($aluno[$i]);
			}
		}
		$nome="";
		foreach ($aluno as $a) {
			$nome=$nome.$a;
		}
		$media1=$_GET['media1'];
		$media2=$_GET['media2'];
		$media3=$_GET['media3'];
		$media=($media1+$media2+$media3)/3;
		echo "<section class='resultado'>";
		if ($media>=6) {
			$media=number_format($media,1,",",".");
			echo "<p>Caro $nome, sua média final é $media e você foi aprovado(a)!</p>";
		}else{
			$media=number_format($media,1,",",".");
			echo "<p>Caro $nome, sua média final é $media e você foi reprovado(a).</p>";
		}
	}
?>
<a href="media.php" class="submit1">Clique aqui verificar novamente.</a>