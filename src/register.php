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
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Registrar</h4>
              </div>

              <div class="card-body">
                <form method="POST">
                  <div class="form-group">
                    <label for="name">Nome</label>
                    <input id="name" type="name" class="form-control" name="name">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="username">Nome de usuário</label>
                      <input id="username" type="text" class="form-control" name="username" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="phone_number">Número de telefone</label>
                      <input id="phone_number" type="tel" class="form-control" name="phone_number">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Palavra-passe</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Confirme sua palavra-passe</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>



                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">Eu concordo com os termos e condições</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Já tem uma conta?
              <a href="index.php">Faça login</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>