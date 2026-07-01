<?php require_once 'cabecalho.php'; ?>
	<?php
	if (isset($_GET['botao'])) { //teste do envio do formulário 
		$nome=$_GET['nome'];
		$peso=$_GET['peso'];
		$altura=$_GET['altura'];
		$imc=$peso/($altura*$altura);
		echo "<section class='resultado'>";
		if ($imc<18.5){
			echo "<p>Você está com um IMC abaixo de 18.5, isso indica um Índice de Massa Corporal 'Magreza'.</p>";
		}else if ($imc>=18.5&&$imc<=24.9){
			echo "<p>Você está com um IMC entre 18.5 e 24.9, isso indica um Índice de Massa Corporal 'Normal'.</p>";
		}else if ($imc>=25.0&&$imc<=29.9){
			echo "<p>Você está com um IMC entre 25.0 e 29.9, isso indica um Índice de Massa Corporal 'Sobrepeso (Obesidade Grau I)'.</p>";
		}else if ($imc>=30.0&&$imc<=39.9){
			echo "<p>Você está com um IMC entre 30.0 e 39.9, isso indica um Índice de Massa Corporal 'Obesidade (Obesidade Grau II)'.</p>";
		}else{
			echo "<p>Você está com um IMC de 40.0 ou superior, isso indica um Índice de Massa Corporal 'Obesidade Grave (Obesidade Grau III)'.</p>";
		}
}
?>
<a href="imc.php" class="submit1">Clique aqui verificar novamente.</a>