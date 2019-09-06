<?php
// Check existence of id parameter before processing further
if(isset($_GET["ID"]) && !empty(trim($_GET["ID"]))){
    // Include config file
    require_once "02DB-Connection.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM form WHERE ID = ?";
    
    if($stmt = mysqli_prepare($connect, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_ID);
        
        // Set parameters
        $param_ID = trim($_GET["ID"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $ID = $row["ID"];
                $Name = $row["Name"];
                $fathername = $row["Father-name"];
                $contactno = $row["Contact"];
                $cnic = $row["Cnic"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
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
    mysqli_close($connect);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
     <nav class="col-md-6 navmargin">
            
            <div class="">
            <ul class="nav navbar-nav nav-pills">
                <li class="active"><a href="form.php" target="_self">Home</a></li>
                <li><a href="Select.php" target="_self">SELECT</a></li>
                <li><a href="04Update.php" target="_self">UPDATE</a></li>
                <li><a href="read.php" target="_self">READ</a></li>
                
            </ul>
        </div>
        </nav>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $row["Name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Father Name</label>
                        <p class="form-control-static"><?php echo $row["Father-name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <p class="form-control-static"><?php echo $row["Contact"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Cnic</label>
                        <p class="form-control-static"><?php echo $row["Cnic"]; ?></p>
                    </div>
                    <p><a href="Select.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>