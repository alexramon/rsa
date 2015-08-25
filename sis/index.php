<?php 
session_start();
if(!isset($_SESSION['matricula']) && !isset($_SESSION['senha'])){
header("Location:login.php");
}
?>

<!DOCTYPE HTML>
<html lang="PT-BR">
<html>
<head>

	
	<title>TELA HOME</title>

	<meta charset=utf-8>
	<meta name=description content="">
	<link rel="stylesheet" href="style.css">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-them.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>

</head>
<body>

	<center>
  
		<div class="panel panel-default" id="centroPrincipal" >
			 <div class="panel panel-default" id="centro" >
				<div class="panel-body" id="linhaBordaInferior">

				<table>
					<td>
						<tr><img src="img/ico/usuario.jpg" class="imgUsuario"></tr><br>
						<tr >Matrícula: <?php echo $_SESSION['matricula']?></tr><br>
						<tr>Nome: <?php echo $_SESSION['nome']?></tr><br>
						<tr>Curso: <?php echo $_SESSION['curso']?></tr><br>
					</td>					

				</table>					
             		
             </div>

				  <div class="panel-body">
							<a href="#"><img src="img/ico/home.png" class="botaoPadrao"></a>
							<a href="#"><img src="img/ico/calendar.png" class="botaoPadrao"></a>
							<a href="#"><img src="img/ico/batepapo.png" class="botaoPadrao"></a>
				  </div>

				  <div class="panel-body">
							<a href="#"><img src="img/ico/maps.png" class="botaoPadrao"></a>
							<a href="#"><img src="img/ico/post.png" class="botaoPadrao"></a>
							<a href="#"><img src="img/ico/config.png" class="botaoPadrao"></a>
				  </div>

				  <div class="panel-body">
							<a href="#"><img src="img/ico/infor.png"class="botaoPadrao"></a>
							<a href="cadastro.php"><img src="img/ico/localiza.png" class="botaoPadrao"></a>
							<a href="deslogar.php"><img src="img/ico/sair.png" class="botaoPadrao"></a>
							
				   </div>
			 </div>
			 		<footer>
				<p>MonstrosSA © 2015 - Copyright</p>
			</footer>
		</div>

         
	</center>

</body>
</html>