<!DOCTYPE html>
<html lang="en">

<?php
$TITLE = 'Stisla';
$PUBLIC_URI = './';
include_once __DIR__ . '/head.php'
?>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle" />
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="dashboard.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email ou nome de usuário</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus />
                    <div class="invalid-feedback">
                      Por favor, preencha seu e-mail ou nome de usuário
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Palavra-passe</label>
                      <div class="float-right">
                        <a href="forgot-password.php" class="text-small">
                          Esqueci a senha?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required />
                    <div class="invalid-feedback">
                      Por favor, preencha sua palavra-passe
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" />
                      <label class="custom-control-label" for="remember-me">Guardar login</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Não tem uma conta?
              <a href="register.php">Crie uma</a>
            </div>
            <div class="simple-footer">Copyright &copy; Stisla 2023</div>
          </div>
        </div>
      </div>
    </section>
</div>
</body>

</html>