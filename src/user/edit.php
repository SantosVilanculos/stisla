<!DOCTYPE html>
<html lang="en">

<?php
$TITLE = 'Stisla';
$PUBLIC_URI = './../';
include_once __DIR__ . '/../head.php'
?>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">

      <!-- Navbar -->
      <?php include_once __DIR__ . '/../navbar.php' ?>
      <!-- /Navbar -->

      <!-- Sidebar -->
      <?php include_once __DIR__ . '/../sidebar.php' ?>
      <!-- /Sidebar -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Editar</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="user/">Usuário</a></div>
              <div class="breadcrumb-item">Editar</div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
              <div class="card card-primary">
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

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Guardar
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- /Main Content -->

      <!-- Footer -->
      <?php include_once __DIR__ . '/../footer.php' ?>
      <!-- /Footer -->
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  <!-- /General JS Scripts -->

  <!-- JS Libraies -->
  <script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  <script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <!-- /JS Libraies -->

  <!-- Page Specific JS File -->
  <script src="assets/js/page/index-0.js"></script>
  <!-- /Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  <!--  JS File -->
</body>

</html>