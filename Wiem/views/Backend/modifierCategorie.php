<?php
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\components\components.php'
;
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php';
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\categorieC.php'
;
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Entities\Categorie.php';


if (isset($_POST['modifier'])){
    $categorieC=new categorieC();
    $cat=new Categorie($_POST['id_cat'],$_POST['description_cat']);
    $categorieC->modifiercategorie($cat,$_POST['id_c_ini']);

    header('Location: AfficherCategorie.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Melodyo </title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
 
<link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>
<body id="page-top">


    <!-- Sidebar -->
    

       <?php components::sidebar(); ?> 

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       
        <!-- partial -->





        <?PHP


        if (isset($_GET['id_cat'])){
        $categorieC=new categorieC();
        $result=$categorieC->recuperercategorie($_GET['id_cat']);
        $categorie=$result[0];


        ?>
        
           <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 m-auto grid-margin">
                        <div class="card">
                            <div class="row">
                                <div class="col-10 ml-lg-4 ">
                                    <form class="forms-sample" method="post">
                                        <div class="form-group">

                                            <label for="exampleInputName1">ID categorie</label>
                                            <input type="text" required name="id_cat" value="<?PHP echo $categorie['id_cat'];?>"  class="form-control" id="id_cat" placeholder="Name">
                                            <input type="text" required hidden name="id_c_ini" value="<?PHP echo $categorie['id_cat'];?>"  class="form-control" id="id_cat" placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleTextarea1">description</label>
                                            <textarea required class="form-control" name="description_cat" id="description" rows="4"><?PHP echo $categorie['nom_cat'];?></textarea>
                                        </div>

                                        <button type="submit" name="modifier" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                        <form>
                                            <!-- main-panel ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
            <?PHP

        }

        ?>

    </div>

    <!-- container-scroller -->
    <!-- container-scroller -->
    <!-- plugins:js -->
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
t>
    <!-- End custom js for this page-->
    
</body>

</html>
