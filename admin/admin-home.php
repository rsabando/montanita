
 <?php
 include('session.php');
 include("../base/conexion.php");
 session_start();

 $sql = "SELECT * FROM bannerhome bannerhome WHERE nombre = 'reserva1'";
 $sql2 = "SELECT * FROM bannerhome WHERE nombre = 'reserva2'";
 $sql3 = "SELECT * FROM bannerhome WHERE nombre = 'reserva3'";

 $result=mysqli_query($db, $sql);
 $result2=mysqli_query($db, $sql2);
 $result3=mysqli_query($db, $sql3);

 $row = $result->fetch_assoc();
 $row2 = $result2->fetch_assoc();
 $row3 = $result3->fetch_assoc();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Montañita View Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Admin: <?php echo $login_session; ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <span>Páginas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <!-- <i class="fas fa-fw fa-cog"></i> -->
          <span>Hoteles</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="admin-home.php">Home</a>
            <a class="collapse-item" href="admin-hotelbob.php">Hotel Bob Esponja</a>
            <a class="collapse-item" href="admin-complejo.php">Complejo Hotelero</a>
            <a class="collapse-item" href="admin-buseco.php">Bus Ecológico</a>
            <a class="collapse-item" href="admin-gampling.php">Gampling</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <span>Lotes</span>
        </a>
      </li>

      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <a style="color:#fff; padding-left:10px;" href="logout.php"><span>Salir</span></a>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
<br>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tablero</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>


          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

            </div>

            <div class="container">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Home</h6>
                </div>
                	<form  action="editarhome.php" enctype="multipart/form-data" method="post">
                <div class="card-body">
                  <div class="text-center">
                    <h6>banner1</h6>
                    <img class="img-fluid px-3 px-sm-12 mt-3 mb-4" style="width: 100%;" src="<?php echo $row["url"]  ?>" alt="">

                    <div class="container">
                      <input class="btn" id="label-login" type="file" name="imagen">
                      <!-- <a href="#" class="btn btn-primary">cambiar</a> -->
                    </div>
                    <hr>

                    <h6>banner2</h6>
                    <img class="img-fluid px-3 px-sm-12 mt-3 mb-4" style="width: 100%;" src="<?php echo $row2["url"]  ?>" alt="">

                    <div class="container">
                      <input class="btn" id="label-login" type="file" name="imagen">
                      <!-- <a href="#" class="btn btn-primary">cambiar</a> -->
                    </div>
                    <hr>
                    <h6>banner3</h6>
                    <img class="img-fluid px-3 px-sm-12 mt-3 mb-4" style="width: 100%;" src="<?php echo $row3["url"]  ?>" alt="">

                    <div class="container">
                      <input class="btn" id="label-login" type="file" name="imagen">
                      <!-- <a href="#" class="btn btn-primary">cambiar</a> -->
                    </div>
                    <hr>
                      <br>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">

      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/sb-admin-2.min.js"></script>

  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- <script src="js/demo/chart-area-demo.js"></script> -->
  <!-- <script src="js/demo/chart-pie-demo.js"></script> -->

</body>

</html>
