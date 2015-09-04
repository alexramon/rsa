
<?php 

session_start();
<<<<<<< HEAD
=======
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
>>>>>>> eb1517ef85a78b4c1247b2318159fb89d027fc3a
unset ($_SESSION['matricula']);
unset ($_SESSION['senha']);
unset ($_SESSION['nome']);
unset ($_SESSION['curso']);
<<<<<<< HEAD
header("Location: login.php");
=======

header("Location: loginTemp.php");
>>>>>>> eb1517ef85a78b4c1247b2318159fb89d027fc3a

?>