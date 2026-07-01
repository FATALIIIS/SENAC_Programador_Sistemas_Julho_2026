<?php require_once 'cabecalho.php'; ?>
<form action="profissoes.php" method="GET">
	<h1>Profissões</h1>
	<p>Escolha uma profissão</p>
	<p><select name="profissao">
		<option>&nbsp;</option>
		<option value="Policial">Policial</option>
		<option value="Bombeiro">Bombeiro</option>
		<option value="Engenheiro">Engenheiro</option>
		<option value="Professor">Professor</option>
	</select></p>
		<p><input type="submit" name="botao" value="Escolher"></p>
		<button type="button" onclick="window.top.location.href='index.php';" class="voltar">Voltar</button>
</form>
<?php
	if(isset($_GET['botao'])){
		$profissao=$_GET['profissao'];
		echo "<section id='profissao' class='$profissao'>";
		echo "<h1>$profissao</h1>";
		if ($profissao=="Policial"){
			echo "<img src='img/policial.png' alt='Policial'>";
		}else if($profissao=="Bombeiro"){
			echo "<img src='img/bombeiro.png' alt='Bombeiro'>";
		}else if($profissao=="Engenheiro"){
			echo "<img src='img/engenheiro.png' alt='Engenheiro'>"; 
		}else if($profissao=="Professor"){
			echo "<img src='img/professor.png' alt='Professor'>";
		}else{
			echo "<p>Favor escolher uma opção.</p>";
		}
	}