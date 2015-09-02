
<?php 

session_start();
/*
echo "Matrícula: "; 
echo $_SESSION["matricula"];
echo "Senha: "; 
echo $_SESSION["senha"];
echo "Nome: "; 
echo $_SESSION["nome"];
echo "Curso: "; 
echo $_SESSION["curso"];
*/
unset ($_SESSION['matricula']);
unset ($_SESSION['senha']);
unset ($_SESSION['nome']);
unset ($_SESSION['curso']);

header("Location: loginTemp.php");

?>