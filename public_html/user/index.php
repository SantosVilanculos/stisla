<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <base href="./../">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">

      <!-- Navbar -->
      <?php include_once __DIR__ . '/../../php/template/navbar.php' ?>
      <!-- /Navbar -->

      <!-- Sidebar -->
      <?php include_once __DIR__ . '/../../php/template/sidebar.php' ?>
      <!-- /Sidebar -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Usuário</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item">Usuário</div>
            </div>
          </div>
          <div class="row">
            <div class="w-100">
              <div class="card">
                <div class="card-header">
                  <h4>Lista de usuários</h4>
                  <div class="card-header-action d-flex">
                    <form class="mx-2">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                    <a href="user/add.php" class="btn btn-primary ">Adicionar</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Nome de usuário</th>
                          <th>Email</th>
                          <th>Número de telefone</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Jhon Doe
                          </td>
                          <td>
                            jhondoe
                          </td>
                          <td>
                            jhondoe@mail.com
                          </td>
                          <td>
                            869909209
                          </td>
                          <td>
                            <a href="user/reset-password.php" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Reset Password"><i class="fas fa-lock"></i></a>
                            <a href="user/edit.php" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Jhon Doe
                          </td>
                          <td>
                            jhondoe
                          </td>
                          <td>
                            jhondoe@mail.com
                          </td>
                          <td>
                            869909209
                          </td>
                          <td>
                            <a href="user/reset-password.php" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Reset Password"><i class="fas fa-lock"></i></a>
                            <a href="user/edit.php" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                      </li>
                      <li class="page-item active"><a class="page-link">1 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item">
                        <a class="page-link">2</a>
                      </li>
                      <li class="page-item"><a class="page-link">3</a></li>
                      <li class="page-item">
                        <a class="page-link"><i class="fas fa-chevron-right"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- /Main Content -->

      <!-- Footer -->
      <?php include_once __DIR__ . '/../../php/template/footer.php' ?>
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
  <!-- /Template JS File -->
</body>

</html>