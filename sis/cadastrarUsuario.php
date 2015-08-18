<?php

require_once "configurar.php";

$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];

$sql = "INSERT INTO usuarios (id,nome,email,senha) VALUES ('','$nome', '$email', '$senha')";

mysql_query($sql,$conexao); 

echo $sql;

//mysql_close($conexao);

?>

