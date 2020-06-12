<?php
// Check existence of id parameter before processing further
if(isset($_GET["ID"]) && !empty(trim($_GET["ID"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM reclamation WHERE ID = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["ID"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $Email = $row["Email"];
                $Probleme = $row["Probleme"];
                $Cause = $row["Cause"];
               
            } 
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reclamation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="page-header">
                        
                        <h1>Réclamation</h1>
                    </div>
                    <div class="form-group">
                        <label><i>Email:</i></label>
                        <p class="form-control-static"><?php echo $row["Email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label><i>Problème:</i></label>
                        <p class="form-control-static"><?php echo $row["Probleme"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label><i>Cause de réclamation:</i></label>
                        <p class="form-control-static"><?php echo $row["Cause"]; ?></p>
                    </div>
                   
                    
                    <p><a href="AfficherReclamation.php" class="btn btn-primary">Back</a>
                    <a href="AfficherReclamation.php" class="btn btn-success">Répondre</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>