<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$nome=$_POST['nome'];
	$datanasci=new DateTime($_POST['datanasci']);
	$dataatual=new DateTime(date('Y-m-d'));
	$idade=$dataatual->diff($datanasci)->y;
	echo "<p>Caro $nome,a sua idade é $idade.</p>";
?>
<a href="idade.php" class="submit1">Clique aqui para calcular a sua idade novamente</a>
</section>
</body>
</html>