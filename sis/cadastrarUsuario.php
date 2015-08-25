<?php
require_once "configurar.php";

$matricula = $_POST["matricula"];
$name = $_POST["name"];
$email = $_POST["email"];
$curso = $_POST["curso"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios (id,matricula,senha,nome,email,curso) 
	VALUES ('','$matricula', '$senha', '$name', '$email', '$curso')";

mysql_query($sql,$conexao); 
echo $sql;
mysql_close($conexao);
?>

