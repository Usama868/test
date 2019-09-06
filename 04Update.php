<?php
// Include config file
require_once "02DB-Connection.php";
 
// Define variables and initialize with empty values
$Name = $fathername = $contactno = $cnic = "";
$Name_err = $fathername_err = $contactno_err = $cnic_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["ID"]) && !empty($_POST["ID"])){
    // Get hidden input value
    $ID = $_POST["ID"];
    
    // Validate name
    $input_Name = trim($_POST["Name"]);
    if(empty($input_Name)){
        $Name_err = "Please enter a name.";
    } elseif(!filter_var($input_Name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Name_err = "Please enter a valid name.";
    } else{
        $Name = $input_Name;
    }
    
    // Validate father name
    $input_fathername = trim($_POST["fname"]);
    if(empty($input_fathername)){
        $address_err = "Please enter an fathername.";     
    } else{
        $fathername = $input_fathername;
    }
    
    // Validate contact no
    $input_contactno = trim($_POST["contactno"]);
    if(empty($input_contactno)){
        $contactno_err = "Please enter the contact no.";     
    } elseif(!ctype_digit($input_contactno)){
        $contactno_err = "Please enter a correct No.";
    } else{
        $contactno = $input_contactno;
    }
    // Validate cnic no
    $input_cnic = trim($_POST["cnic"]);
    if(empty($input_cnic)){
        $cnic_err = "Please enter the contact no.";     
    } elseif(!ctype_digit($input_cnic)){
        $cnic_err = "Please enter a correct cnic No.";
    } else{
        $cnic = $input_cnic;
    }
    
    // Check input errors before inserting in database
    if(empty($Name_err) && empty($fathername_err) && empty($contactno_err) && empty($cnic_err)){
        // Prepare an update statement
        $sql = "UPDATE form SET Name=?, Father-name=?, Contact=?, Cnic=? WHERE ID=?";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_Name, $param_fathername, $param_contactno, $param_cnic, $param_ID);
            
            // Set parameters
            $param_Name = $Name;
            $param_fathername = $fathername;
            $param_contactno = $contactno;
            $param_cnic = $cnic;
            $param_ID = $ID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: Select.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($connect);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM form WHERE ID = ?";
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_ID);
            
            // Set parameters
            $param_ID = $ID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $Name = $row["Name"];
                    $fathername = $row["Father-name"];
                    $contactno = $row["Contact"];
                    $cnic = $row["Cnic"];
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
        mysqli_close($connect);
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
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($Name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control" value="<?php echo $Name; ?>">
                            <span class="help-block"><?php echo $Name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($fathername_err)) ? 'has-error' : ''; ?>">
                            <label>Father-Name</label>
                            <textarea name="fname" class="form-control"><?php echo $fathername; ?></textarea>
                            <span class="help-block"><?php echo $fathername_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($contactno_err)) ? 'has-error' : ''; ?>">
                            <label>Contact</label>
                            <input type="text" name="contactno" class="form-control" value="<?php echo $contactno; ?>">
                            <span class="help-block"><?php echo $contactno_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($cnic_err)) ? 'has-error' : ''; ?>">
                            <label>Cnic</label>
                            <input type="text" name="cnic" class="form-control" value="<?php echo $cnic; ?>">
                            <span class="help-block"><?php echo $cnic_err;?></span>
                        </div>
                        <input type="hidden" name="ID" value="<?php echo $ID; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>