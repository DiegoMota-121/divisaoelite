<html>
  <head>
    <meta charset="utf-8" />
    <title>Cadastro - inicio</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Cadastro
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <label>Nome</label>
                  <input name="nome" type="email" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <label>Senha</label>
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <div class="form-group">
                  <label>Confirmar senha</label>
                  <input name="confirmar_senha" type="password" class="form-control" placeholder="Confirmar Senha">
                </div>

                <div class="create-account">
                  <p>Já possui uma conta? <a href="login_aluno.php">Entrar</a></p>
                </div>

                <button class="btn btn-lg btn-info btn-block" type="submit">Criar conta</button>
              </form>
            </div>
          </div>
        </div> 
    </div>
  </body>
</html>