<?php
	if (isset($_COOKIE['funcionario'])) {
		require_once 'model/Funcionario.php';
		Funcionario::deslogar();
		header('Location:index.php');
		exit();
	}
?>
