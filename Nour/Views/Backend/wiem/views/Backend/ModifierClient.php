﻿<?php
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\components\components.php';
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\ClientOps.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Melodyo </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/custom_styles.css">
  <script src="js/formvalidators/valider.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
     <?php components::sidebar(); ?> 
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">

        <div class="card shadow-lg m-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Modification d'un Client</h6>
          </div>
          <div class="card-body">
            
            <form action="ModiClient.php" method="POST" onsubmit="return validate_formcat();">
                <div class="form-inline">
                  
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control w-100 mt-2 mb-2" name="Nom" id="Nom" placeholder="Nom" value="<?PHP echo $ID ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control w-100 mt-2 mb-2" name="Prenom" id="Prenom" placeholder="Prenom" value="<?PHP echo $Prenom ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control w-100 mt-2 mb-2" name="Telephone" id="Telephone" placeholder="telephone" value="<?PHP echo $Telephone ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="Email" class="form-control w-100 mt-2 mb-2" name="Email" id="Email"  value="<?PHP echo $Email ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="password" class="form-control w-100 mt-2 mb-2" name="Mdp" id="Mdp" placeholder="Mot de Passe">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="password" class="form-control w-100 mt-2 mb-2" name="mapclient" id="map" placeholder="Mot de Passe" required>
                  </div>
                  <input type="hidden" name="id_ini" value="<?PHP echo $_GET['id_client'];?>">
                <button type="submit" name="modifier" value="modifier" class="btn btn-success mt-2 mb-2">Modifier </button>
                 <button  type="button" value="Retour" onclick="history.go(-1)" class="btn btn-success mt-2 mb-2">Retour</button>
            </form>

          </div>
        </div>

        <!-- Topbar -->
        <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        <!-- Begin Page Content -->
        <div class="container-fluid">

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Melodyo 2020</span>
          </div>
        </div>
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
          <a class="btn btn-success" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
