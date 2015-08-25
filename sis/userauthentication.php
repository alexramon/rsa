<?php

require_once "configurar.php";

session_start();
$matricula = $_POST["matricula"];
$senha = $_POST["senha"];

$sql = ("SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'") or die(mysql_error());

$result = mysql_query($sql, $conexao);

$dados = mysql_fetch_array($result);

if(!strcmp($senha, $dados["senha"]))
{
	$_SESSION["matricula"]== $dados["matricula"]; 
	$_SESSION["senha"]== $dados["senha"]; 

	header("Location: https://google.com.br"); 
	exit;
}
else 
{ 
	//echo "Dados Invalidos!"; 
	echo '<script type="text/javascript">
	alert("Dados Inválidos!");
	
	</script>';

}

?>

