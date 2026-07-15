<?php require_once 'menu.php'; ?>
<form action="cadastrarcliente.php" method="POST" id="form">
	<div id="loader">
		<img src="img/loader.gif">
	</div>
	<h1>Cadastro de Cliente</h1>
	<p>Digite seu nome:</p>
	<p><input type="text" name="nome" size="40" maxlength="40" pattern="[a-zA-Z\sçÇãÃéÉíÍóÓúÚ]{2,40}" title="Somente letras, sem caracteres especiais." required></p>
	<p>Digite seu CPF:</p>
	<p><input type="number" name="cpf" min="00000000000" max="99999999999" pattern="[0-9]{11}" title="Somente números." required></p>
	<p>Digite sua data de nascimento:</p>
	<?php
	$data_atual=new DateTime(date('Y-m-d'));
	$data_antiga=date_modify($data_atual,"-110 years")->format('Y-m-d');
	?>
	<p><input type="date" name="data_nasci" min="<?= $data_antiga ?>" max="<?= date('Y-m-d') ?>" required></p>
	<p>Digite seu endereço:</p>
	<p><input type="text" name="endereco" size="50" maxlength="50" pattern="[0-9a-zA-Z\s,.,çÇãÃéÉíÍóÓúÚ]{6,50}" required></p>
</form>