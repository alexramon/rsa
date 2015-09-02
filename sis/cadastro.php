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
				<!-- Campo -->
				<div class="input-group"  class="container">
					 <span class="input-group-addon" id="redimencionar"></span>
					 <input type="text" class="form-control" placeholder="Nome" name="nome" 
					 aria-describedby="basic-addon1" required>
				</div>
				<br/>
				<!-- Campo -->
				<div class="input-group"  class="container">
					 <span class="input-group-addon" id="redimencionar"></span>
					 <input type="text" class="form-control" placeholder="Matrícula" name="matricula" 
					 aria-describedby="basic-addon1" pattern="[0-9]+$" required>
				</div>
				<br/>
				<!-- Campo -->
				<div class="input-group"  class="container">
					 <span class="input-group-addon" id="redimencionar"></span>
					 <input type="text" class="form-control" placeholder="E-mail" name="email" 
					 aria-describedby="basic-addon1" required>
				</div>
				<br/>
				<!-- Campo -->
				<div class="input-group"  class="container">
					 <span class="input-group-addon" id="redimencionar"></span>
					 <input type="text" class="form-control" placeholder="Curso" name="curso" 
					 aria-describedby="basic-addon1" required>
				</div>
				<br/>
				<!-- Campo -->
				<div class="input-group"  class="container">
					 <span class="input-group-addon" id="redimencionar"></span>
					 <input type="password" class="form-control" placeholder="Senha" name="senha"
					  aria-describedby="basic-addon1" required>
				</div>
				<br/>
				<!-- Botão -->
				<ul class="nav nav-pills nav-stacked" >
					<li role="presentation" class="active"><button class="btn btn-default" 
						type="submit" name="entrar">Cadastrar</button></li>
						<input type="hidden" name="hash" value="cadastrar">
						<br>

					<li role="presentation" class="active"><button class="btn btn-default" 
						type="submit" name="cancelar">Cancelar</button></li>
								  
				</ul>

			</form>

		</div>
	</div>
	</center>

</body>
</html>