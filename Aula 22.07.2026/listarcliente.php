<?php require_once 'menu.php'; require_once 'persistence/ClientePA.php';

	$clientepa=new ClientePA();
	$total=$clientepa->contar();
	if ($total<=0){
		echo "<h2>Não há clientes cadastrados!</h2>";
	}else{
		if (isset($_GET['pagina'])) {
			$pagina=$_GET['pagina'];
		}else{
			$pagina=1;
		}
		$limite=2;
		$offset=($pagina-1)*$limite;
		$consulta=$clientepa->listar($limite,$offset);
		require_once 'model/Cliente.php';
		$cliente=new Cliente();
			echo "<table>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Código</th>";
			echo "<th>Nome</th>";
			echo "<th>Endereco</th>";
			echo "<th>CPF</th>";
			echo "<th>Nascimento</th>";
			echo "<th>Telefone</th>";
			echo "</tr>";
			echo "</thead>"; 

			echo "<tbody>";
			while($linha=$consulta->fetch_assoc()){
				$cliente->setCodCli($linha['cod_cli']);
				$cliente->setNome($linha['nome']);
				$cliente->setEndereco($linha['endereco']);
				$cliente->setCpf($linha['cpf']);
				$cliente->setDataNasci($linha['data_nasci']);
				$cliente->setTelefone($linha['telefone']);

			echo "<tr>";
			echo "<td>".$cliente->getCodCli()."</td>";
			echo "<td>".$cliente->getNome()."</td>";
			echo "<td>".$cliente->getEndereco()."</td>";
			echo "<td>".$cliente->getCpf()."</td>";
			$databr=new DateTime($cliente->getDataNasci());
			echo "<td>".$databr->format('d/m/Y')."</td>";
			echo "<td>".$cliente->getTelefone()."</td>";
			}

			echo "</tbody>";
			echo "</table>";

			echo "<section>";
			//Paginação

			if($pagina>1){
				$anterior=$pagina-1;
				echo "<a href='listarcliente.php?pagina=$anterior'>&lt;&lt;</a>";
			}
				echo "$pagina ";
				$num_pag=ceil($total/$limite);
			if($pagina<$num_pag){
				$proximo=$pagina+1;
				echo "<a href='listarcliente.php?pagina=$proximo'>&gt;&gt;</a>";
			}
				echo "</section>";
		}
?>
</body>
</html>