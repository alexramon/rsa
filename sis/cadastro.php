<?php 
session_start();
if(!isset($_SESSION['matricula']) && !isset($_SESSION['senha'])){
header("Location:login.php");
}
?>
<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Cadastro - Usuario</title>
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
	<center>
			 <div class="panel panel-default" id="centro" >
		
		<header><h2>Cadastro de Usuário</h2></header>
	
	<div  class="container">
		<div  class="container">

			<form method="post" action="cadastrarUsuario.php">
				<!-- Campo -->
				<div class="input-group"  class="container">
					 <span class="input-group-addon" class="redimencionar">Nome</span>
					 <input type="text" class="form-control" name="nome" 
					 aria-describedby="basic-addon1" required>
				</div>
				<br/>
				<div class="input-group"  class="container">
					 <span class="input-group-addon" class="redimencionar">E-mail</span>
					 <input type="text" class="form-control" name="email" 
					 aria-describedby="basic-addon1" required>
				</div>
				<br/>
				<select class="form-control" name="curso">
    <option value="Curso">Curso</option>
    <option value="Administração">Administração</option> 
    <option value="Análise de Sistemas">Análise de Sistemas</option>
    <option value="Ciências Contábeis">Ciências Contábeis</option>
    <option value="Educação Física">Educação Física</option>
    <option value="Enfermagem">Enfermagem</option>
    <option value="Psicologia">Psicologia</option>
    <option value="Serviço Social">Serviço Social</option>
</select>
				<br/>
				<div class="input-group"  class="container">
					 <span class="input-group-addon" class="redimencionar">Matrícula</span>
					 <input type="text" class="form-control" name="matricula" 
					 aria-describedby="basic-addon1" pattern="[0-9]+$" required>
				</div>
				<br/>
				<!-- Campo -->
				<div class="input-group"  class="container">
					 <span class="input-group-addon" class="redimencionar">Senha</span>
					 <input type="password" class="form-control" placeholder="Senha" name="senha"
					  aria-describedby="basic-addon1" required>
				</div>
				<br/>

				<!-- Botão -->
				<div class="bt">			
				<ul class="nav nav-pills nav-stacked" >
					<li role="presentation" class="active"><button class="btn btn-default" 
						type="submit" name="entrar">Cadastrar</button></li>
					<input type="hidden" name="hash" value="cadastrar">
						<br>

					<li role="presentation" class="active"><button class="btn btn-default" 
						type="reset" name="cancelar">Limpar</button></li>
						<br>

					<li role="presentation" class="active"><button class="btn btn-default" 
						 input type="hidden" name="cancelar" onclick="location.href='index.php'">Voltar</button></li>
						 <br>								  
				</ul>
				</div>
			


			</form>

			

		</div>
	</div>
	</div>
	<footer>
				<p>MonstrosSA © 2015 - Copyright</p>
			</footer>


</center>
</body>
</html>