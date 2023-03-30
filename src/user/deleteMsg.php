<!DOCTYPE html>
<html lang="en">

<?php
include_once __DIR__ . '/../MySQL.php';

// HEAD BEGIN
$TITLE = 'Stisla';
$PUBLIC_URI = './../';
include_once __DIR__ . '/../head.php'
// HEAD END
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
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h3 class="m-0">Eliminar de Usuario</h3>
                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->


                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">

                        <!-- INICIO -->


                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Usuario Eliminado com sucessso.
                        </div>
                        <div class="text-center">
                            <a href="user/">
                                <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i>
                                    Voltar
                                </button>
                            </a>
                        </div>
                        <!-- FIM -->

                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
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