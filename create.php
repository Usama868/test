<?php
// Include config file
require_once "02DB-Connection.php";
 
// Define variables and initialize with empty values
$name= $fathername= $contactno = $cnic = "";
$name_err = $fathername_err = $contactno_err = $cnic_err =  "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_fathername = trim($_POST["fname"]);
    if(empty($input_address)){
        $fathername_err = "Please enter an father Name.";     
    } else{
        $fathername = $input_fathername;
    }
    
    // Validate salary
    $input_contactno = trim($_POST["contactno"]);
    if(empty($input_contactno)){
        $contactno_err = "Please enter the Correct no.";     
    } elseif(!ctype_digit($input_contactno)){
        $contactno_err = "Please enter a correct format.";
    } else{
        $contactno = $input_contactno;
        //cnic no 
    $input_cnic = trim($_POST["cnic"]);
    if(empty($input_contactno)){
        $cnic_err = "Please enter the Correct cnic no.";     
    } elseif(!ctype_digit($input_contactno)){
        $cnic_err = "Please enter a correct format.";
    } else{
      $cnic = $input_cnic;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($fathername)) ? 'has-error' : ''; ?>">
                            <label>Father Name</label>
                            <textarea name="fname" class="form-control"><?php echo $fathername; ?></textarea>
                            <span class="help-block"><?php echo $fathername_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($contactno_err)) ? 'has-error' : ''; ?>">
                            <label>Contact#</label>
                            <input type="text" name="contactno" class="form-control" value="<?php echo $contactno; ?>">
                            <span class="help-block"><?php echo $contactno_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($cnic_err)) ? 'has-error' : ''; ?>">
                            <label>Cnic#</label>
                            <input type="text" name="cnic" class="form-control" value="<?php echo $cnic; ?>">
                            <span class="help-block"><?php echo $cnic_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>