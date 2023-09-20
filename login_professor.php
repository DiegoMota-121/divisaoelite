<html>
  <head>
    <meta charset="utf-8" />
    <title>Login - inicio</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <label>Senha</label>
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <div class="custom-btn">
                  <a href="login_aluno.php">
                    Sou aluno
                  </a> 
                  
                  <a href="" class="selected">
                    Sou Professor
                  </a>
                </div>

                <div class="create-account">
                  <p>Não possui uma conta? <a href="cadastro.php">Registrar-se</a></p>
                </div>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div> 
    </div>
  </body>
</html>