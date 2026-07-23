<?php require_once 'menu.php'; ?>
<form action="buscarcliente.php" method="GET" id="form">
	<div id="loader" style="display: none;">
		<img src="img/loader.gif">
	</div>
	<h1>Buscar</h1>
	<p><input type="search" name="termo" size="40" maxlength="50" pattern="[0-9a-zA-Z\sçÇãÃéÉíÍóÓúÚ,-]{1,50}" required></p>
	<p>Que é um...</p>
	<p>
       <input type="radio" name="tipo" value="cod_cli" required>Código
       <input type="radio" name="tipo" value="nome" required>Nome
       <input type="radio" name="tipo" value="endereco" required>Endereço
       <input type="radio" name="tipo" value="telefone" required>Telefone
       <input type="radio" name="tipo" value="CPF" required>CPF
    </p>
    <p><input type="submit" name="botao" value="Buscar"></p>
</form>
<?php
	if (isset($_GET['termo'])) {
		require_once 'persistence/ClientePA.php';
		$clientepa=new ClientePA();
		$consulta=$clientepa->buscar($_GET['termo'],$_GET['tipo']);
	if (!$consulta) {
		echo "<h2>Nenhum resultado correspondente.</h2>";
	}else{
		require_once 'model/Cliente.php';
		$cliente=new Cliente();

		echo "<table>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Código</th>";
		echo "<th>Nome</th>";
		echo "<th>Endereco</th>";
		echo "<th>Telefone</th>";
		echo "<th>CPF</th>";
		echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		while($linha=$consulta->fetch_assoc()){
			$cliente->setCodCli($linha['cod_cli']);
			$cliente->setNome($linha['nome']);
			$cliente->setEndereco($linha['endereco']);
			$cliente->setTelefone($linha['telefone']);
			$cliente->setCpf($linha['cpf']);

			echo "<tr>";
			echo "<td>".$cliente->getCodCLi()."</td>";
			echo "<td>".$cliente->getNome()."</td>";
			echo "<td>".$cliente->getEndereco()."</td>";
			echo "<td>".$cliente->getTelefone()."</td>";
			echo "<td>".$cliente->getCpf()."</td>";
		}
		echo "</tbody>";
		echo "</table>";
	}
}
?>
<script src="js/loader.js"></script>
</body>
</html>