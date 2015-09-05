<?php

require_once "configurar.php";

session_start();
$matricula = $_POST["matricula"];
$senha = $_POST["senha"];

$sql = ("SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'") or die(mysql_error());

$result = mysql_query($sql, $conexao);
$dados = mysql_fetch_array($result);

if(mysql_num_rows ($result) > 0)
  {
	$_SESSION['matricula'] = $matricula; 
	$_SESSION['senha'] = $senha;
	$_SESSION['nome']= $dados["nome"];
	$_SESSION['curso']= $dados["curso"];
	header("Location: index.php"); 
  }
   else 
  { 
	echo '<script type="text/javascript">
	alert("Dados Inválidos!");
	window.location="login.php";	
	</script>';
  }
?>

