<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Cadastro - Usuario</title>
	<link rel="stylesheet" type="text/css" href="css.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<img src="img/logoTopo.jpg" id="imgTopo">
		<header><h2>Cadastro de Usuário</h2></header>
	
	<div  class="container">
		<div  class="container">

			<form method="post" action="cadastrarUsuario.php">

				<input type="text" name="name" placeholder="Nome"/><br/><br/>
				<input type="text" name="matricula" placeholder="Matrícula"/><br/><br/>
				<input type="email" name="email" placeholder="E-mail"/><br/><br/>
				<input type="text" name="curso" placeholder="Curso"/> <br/><br/>
				<input type="password" name="senha" placeholder="Senha"/><br/><br/>

<!--<input type="submit" value="Entrar"/>-->

				<ul class="nav nav-pills nav-stacked" >
					<li role="presentation" class="active"><button class="btn btn-default" type="submit">Cadastrar</button></li>		  
				</ul>
				
			

			</form>

		</div>
	</div>
	</center>

</body>
</html>