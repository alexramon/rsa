<!doctype html>
<html lang="PT-BR">
<head>
	<title>TELA HOME</title>

	<meta charset="UTF-8">
	<meta name=description content="">
	<link rel="stylesheet" href="style.css">

	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-them.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>

</head>
<body >


	<center>	

		<div class="panel panel-default" id="centro">

				<img src="img/logoRsa.jpg" id="imgLogo">

				

				<form method="post" action="userauthentication.php" id="form" class="container">

					<div class="input-group"  class="container">
					  <span class="input-group-addon" class="redimencionar">Matrícula</span>
					  <input type="text" class="form-control" placeholder="Matrícula" name="matricula" aria-describedby="basic-addon1" pattern="[0-9]+$" name="matricula" required>
					</div>
					<br/>
					<div class="input-group"  class="container">
					  <span class="input-group-addon" class="redimencionar">Senha</span>
					  <input type="password" class="form-control" placeholder="Senha" name="senha" required>
					</div>					
					<br/>
					<ul class="nav nav-pills nav-stacked">
						<li role="presentation" class="active"><button class="btn btn-default" type="submit">Entrar</button></li>		  
					</ul>	
					<a href="https://www.google.com.br" id="esqSenha">Esqueci minha senha</a> <br>		
				</form>
		</div>
		<footer>
				<p>MonstrosSA © 2015 - Copyright</p>
			</footer>	
         
	</center>
</body>
</html>