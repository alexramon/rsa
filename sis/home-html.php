<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Cadastro de usuários</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Cadastro de usuário</h2>

        <label class="sr-only">Nome</label>
        <input type="nome" id="inputNome" class="form-control" placeholder="Nome" required="" autofocus="">

        <label class="sr-only">Sobrenome</label>
        <input type="name" id="inputSobrenome" class="form-control" placeholder="Sobrenome" required="" autofocus="">

        <label class="sr-only">Matricula</label>
        <input type="nome" id="inputMatricula" class="form-control" placeholder="Matricula" required="" autofocus="">

        <label class="sr-only">Curso</label>
        <input type="nome" id="inputCurso" class="form-control" placeholder="Curso" required="" autofocus="">

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        
        
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>