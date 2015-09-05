
<?php 

session_start();
unset ($_SESSION['matricula']);
unset ($_SESSION['senha']);
unset ($_SESSION['nome']);
unset ($_SESSION['curso']);
header("Location: login.php");

?>