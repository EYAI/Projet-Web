<?php
// Include config file

include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\components\components.php'
;

require_once "config.php";
 
// Define variables and initialize with empty values
$id_produit = $id_client = $nb_etoile = $commentaire = "";
$id_produit_err = $id_client_err =$nb_etoile_err =$commentaire_err = "";
 
// Processing form data when form is submitted

if(isset($_POST["id_avis"]) && !empty($_POST["id_avis"])){
    // Get hidden input value
    $id_avis = $_POST["id_avis"];

    
    // id avis
    //auto increment?
    /* elseif(!filter_var($input_id_avis, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name."; }*/ 

    //produit
    $input_id_produit = trim($_POST["id_produit"]);
    if(empty($input_id_produit)){
        $id_produit_err = "Please enter a product id.";
    }
        elseif(!ctype_digit($input_id_produit)){
            $id_produit_err = "Please enter a positive integer value.";
        }else{
        $id_produit = $input_id_produit;
    }
    
    // client
    $input_id_client = trim($_POST["id_client"]);
    if(empty($input_id_client)){
        $id_client_err = "Please enter a client id.";
    }
        elseif(!ctype_digit($input_id_client)){
            $id_client_err = "Please enter a positive integer value.";
        }else{
        $id_client = $input_id_client;
    }
//nb etoile
    $input_nb_etoile = trim($_POST["nb_etoile"]);
    if(empty($input_nb_etoile)){
        $nb_etoile_err = "Please enter a number of stars.";
    }
        elseif(!ctype_digit($input_nb_etoile)){
            $nb_etoile_err = "Please enter a positive integer value.";
        }else{
        $nb_etoile = $input_nb_etoile;
    }
//commentaire
    $input_commentaire = trim($_POST["commentaire"]);
    if(empty($input_commentaire)){
        $commentaire_err = "Please enter a comment.";
    }
       else{
        $commentaire = $input_commentaire;
    }

    // Check input errors before inserting in database
    if(empty($id_produit_err) && empty($id_client_err)&& empty($nb_etoile_err)&& empty($commentaire_err)){
        // Prepare an update statement
        $sql = "UPDATE avis_client SET id_produit=?, id_client=?, nb_etoile=?, commentaire=? WHERE id_avis=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iiisi", $param_id_produit, $param_id_client,$param_nb_etoile,$param_commentaire, $param_id_avis);
            
            // Set parameters
            $param_id_produit = $id_produit;
            $param_id_client = $id_client;
            $param_nb_etoile = $nb_etoile;
            $param_commentaire = $commentaire;
            $param_id_avis = $id_avis;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index	Avis.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id_avis"]) && !empty(trim($_GET["id_avis"]))){
        // Get URL parameter
        $id_avis =  trim($_GET["id_avis"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM avis_client WHERE id_avis = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id_avis);
            
            // Set parameters
            $param_id_avis = $id_avis;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $id_produit = $row["id_produit"];
                    $id_client = $row["id_client"];
                    $nb_etoile = $row["nb_etoile"];
                    $commentaire = $row["commentaire"];
                    
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
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

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
 
<link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 
   
</head>
<body id="page-top">
    <div id="wrapper">

    <!-- Sidebar -->
    <?php components::sidebar(); ?> 

    
        <!-- Begin Page Content -->
        <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">
    <!-- Content Wrapper -->
   
   
     <div class="card shadow-lg m-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Modification d'un Avis</h6>
          </div>
          <div class="card-body">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Modifier Avis Client</h2>
                    </div>
                   
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($id_produit_err)) ? 'has-error' : ''; ?>">
                            <label>id_produit</label>
                            <textarea name="id_produit" class="form-control"><?php echo $id_produit; ?></textarea>
                            <span class="help-block"><?php echo $id_produit_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($id_client_err)) ? 'has-error' : ''; ?>">
                            <label>id_client</label>
                            <input type="text" name="id_client" class="form-control" value="<?php echo $id_client; ?>">
                            <span class="help-block"><?php echo $id_client_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($nb_etoile_err)) ? 'has-error' : ''; ?>">
                            <label>nb_etoile</label>
                            <input type="text" name="nb_etoile" class="form-control" value="<?php echo $nb_etoile; ?>">
                            <span class="help-block"><?php echo $nb_etoile_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($commentaire_err)) ? 'has-error' : ''; ?>">
                            <label>commentaire</label>
                            <input type="text" name="commentaire" class="form-control" value="<?php echo $commentaire; ?>">
                            <span class="help-block"><?php echo $commentaire_err;?></span>
                        </div>
                        <input type="hidden" name="id_avis" value="<?php echo $id_avis; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="indexAvis.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
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