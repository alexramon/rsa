<?php

require_once "configurar.php";

session_start();
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = ("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die(mysql_error());

$result = mysql_query($sql, $conexao);


$dados = mysql_fetch_array($result);

if(!strcmp($senha, $dados["senha"]))

{
$_SESSION["email"]= $dados["email"]; 
$_SESSION["senha"]= $dados["senha"]; 

echo "Dados Validos!"; 
exit;
}
else 
{ 
echo "Dados Invalidos!"; 
}

?>

