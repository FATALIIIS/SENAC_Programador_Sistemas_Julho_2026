<?php
if (isset($_COOKIE['cliente'])){
	require_once 'model/Cliente.php';
	/* logoffcliente */
	$cliente=new Cliente();
	$cliente->deslogar();
	header('location: index.php');
	exit();
}
?>