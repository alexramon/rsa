<?php
require_once "configurar.php";

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$curso = $_POST["curso"];
$senha = $_POST["senha"];

	$sql = "INSERT INTO usuarios (id,matricula,senha,nome,email,curso) 
	VALUES ('','$matricula', '$senha', '$nome', '$email', '$curso')";

	mysql_query($sql,$conexao);

	echo '<script type="text/javascript">
        if(confirm("Cadastro realizado com sucesso!\n\n Deseja realizar um novo cadastro?")){
		window.location="cadastro.php";
	} else{
		window.location="https://www.google.com.br/";
	}
	</script>';
	
	require "cadastro.php";
	mysql_close(@$conexao);

?>


