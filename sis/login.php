<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<title>Autenticação - LOGIN</title>

</head>
<body > 
	<center>
		<div  class="container">
			<div  class="container">

				<img src="img/logoRsa.jpg" id="imgLogo">

				<form method="post" action="userauthentication.php" id="form">

					<div class="input-group"  class="container">
					  <span class="input-group-addon" id="redimencionar"></span>
					  <input type="text" class="form-control" placeholder="Matrícula" name="matricula" aria-describedby="basic-addon1" pattern="[0-9]+$" name="matricula" required>
					</div>
					<br/>

					<div class="input-group"  class="container">
					  <span class="input-group-addon" id="redimencionar"></span>
					  <input type="password" class="form-control" placeholder="Senha" name="senha" required>
					</div>
					<br/>
					<ul class="nav nav-pills nav-stacked">
						<li role="presentation" class="active"><button class="btn btn-default" type="submit">Entrar</button></li>		  
					</ul>	
					<a href="https://www.google.com.br" id="esqSenha">Esqueci minha senha</a> <br>
					

			
				</form>
			</div>
		</div>
	</center>
</body>
</html>