<?php require_once 'cabecalho.php';?>
<section class="topo">
	<div id="logo">
		<a href="index.php">
			<img src="img/logo.png">
		</a>
	</div>
	<div id="menu">
		<ul class="nav">
		<?php
			if (!isset($_COOKIE['funcionario'])&&!isset($_COOKIE['cliente'])){
				//não está logado
		?>
			<li><a href="cadastrarcliente.php">Cadastrar</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="administracao.php"><div id="ico"><img src="img/icone.png"></div>Administração</a></li>
		<?php
			}else if (isset($_COOKIE['cliente'])) {
		?>	
			<li>Pet
				<ol>
					<li><a href="cadastrarpet.php">Cadastrar</a></li>
					<li><a href="listarpet.php">Listar</a></li>
				</ol>
			</li>
			<li><a href="alterarcliente.php">Meus Dados</a></li>
			<li><a href="agendar.php">Agendar</a></li>
			<li><a href="logoffcliente.php">Sair</a></li>
		<?php
			}else if (isset($_COOKIE['funcionario'])&&$_COOKIE['nivel']==1){
		?>
			<li>Cliente
				<ol>
					<li><a href="listarcliente.php">Listar</a></li>
					<li><a href="buscarcliente.php">Buscar</a></li>
				</ol>
			</li>
			<li>Funcionários
				<ol>
					<li><a href="cadastrarfunc.php">Cadastrar</a></li>
					<li><a href="listarfunc.php">Listar</a></li>
				</ol>
			</li>
			<li>Serviços
				<ol>
					<li><a href="listarserv.php">Listar</a></li>
					<li><a href="buscarserv.php">Buscar</a></li>
				</ol>
			</li>
			<li><a href="logofffunc.php">Sair</a></li>
		<?php
			}
		?>
		</ul>
	</div>
</section>