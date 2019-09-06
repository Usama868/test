<?php
// Include config file
require_once "02DB-Connection.php";
 
// Define variables and initialize with empty values
$name = $fathername = $contactno = $cnic = "";
$name_err = $fathername_err = $contact_err = $cnic_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $ID = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate father name
    $input_fathername = trim($_POST["fathername"]);
    if(empty($input_fathername)){
        $address_err = "Please enter an fathername.";     
    } else{
        $fathername = $input_fathername;
    }
    
    // Validate contact no
    $input_contact = trim($_POST["contact"]);
    if(empty($input_contact)){
        $contact_err = "Please enter the contact no.";     
    } elseif(!ctype_digit($input_contact)){
        $contact_err = "Please enter a correct No.";
    } else{
        $contact = $input_contact;
    }
    // Validate cnic no
    $input_cnic = trim($_POST["cnic"]);
    if(empty($input_cnic)){
        $cnic_err = "Please enter the cnic.";     
    } elseif(!ctype_digit($input_cnic)){
        $cnic_err = "Please enter a correct cnic No.";
    } else{
        $cnic = $input_cnic;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($fathername_err) && empty($contact_err) && empty($cnic_err)){
        // Prepare an update statement
        $sql = "UPDATE form SET name=?, fathername=?, contact=?, cnic=? WHERE id=?";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssii", $param_name, $param_fathername, $param_contact, $param_cnic, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_fathername = $fathername;
            $param_contact = $contact;
            $param_cnic = $cnic;
            $param_id = $id;
            
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
    if(isset($_POST["id"]) && !empty(trim($_POST["id"]))){
        // Get URL parameter
        $ID =  trim($_POST["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM form WHERE id = ?";
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                    $fathername = $row["fathername"];
                    $contactno = $row["contact"];
                    $cnic = $row["cnic"];
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
        $mysqli_stmt_close = mysqli_stmt_close($stmt);
        
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
                     
                        
                         <div class="form-group">
                <label class="col-md-2" for=Name">Name</label>
                         </div>
                <div class="col-md-4 <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                    <input name="name" type="text" id="focusedInput" class="form-control"   placeholder="enter name" value="<?php echo $name; ?>">
                    <span class="help-block"><?php echo $name_err;?></span>
                </div>
                        
                        <Div> <label class="col-md-2" for="fname">Father Name</label></div>
                <div class="col-md-4 <?php echo (!empty($fathername_err)) ? 'has-error' : ''; ?>">
                    <input name="fname" type="text" id="focusedInput" class="form-control"  placeholder="enter father name" value="<?php echo $fathername; ?>">
                     <span class="help-block"><?php echo $fathername_err;?></span>
                </div>
                        <div><label class="col-md-2" for="contact">Contact</label></div>
                <div class="col-md-4 <?php echo (!empty($contact_err)) ? 'has-error' : ''; ?>">
                    <input name="contactno" type="text" id="focusedInput" class="form-control"  placeholder="enter phone no" value="<?php echo $contact; ?>">
                      <span class="help-block"><?php echo $contactno_err;?></span>
                </div>
                        <div><label class="col-md-2" for="cnic">CNIC No</label></div>
                <div class="col-md-4 <?php echo (!empty($cnic_err)) ? 'has-error' : ''; ?>">
                    <input name="cnic" type="text" id="focusedInput"  placeholder="enter cnic no" class="form-control" value="<?php echo $cnic; ?>">
                    <span class="help-block"><?php echo $cnic_err;?></span>
                 </div>
               
                </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>