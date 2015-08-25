<?php

$host= "localhost";
$user="root";
$pass="";
$banco="rsa";

@$conexao = mysql_connect($host, $user, $pass) or print (mysql_error());
mysql_select_db($banco,$conexao) or print (mysql_error());

?>