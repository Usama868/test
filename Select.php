<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
     
        
    
    
    
    
    <div class="head img-responsive">
           
            <img src="images/photog1.png" width="150px" height="auto"  style="max-width: 100%">
         
        </div>
</head>
<body class="background container" background="images/circles-light.png">
     
        
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
       
        
    
     
      
        <div class="col-md-12">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">User's Details</h2>
                        <a href="form.php" class="btn btn-success pull-right">Add New User</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "02DB-Connection.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM form";
                    if($result = mysqli_query($connect, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Father-Name</th>";
                                        echo "<th>Contact</th>";
                                        echo "<th>Cnic</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['Father-name'] . "</td>";
                                        echo "<td>" . $row['Contact'] . "</td>";
                                        echo "<td>" . $row['Cnic'] . "</td>";
                                       
                                       
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['ID'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='04Update.php?id=". $row['ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='03Remove.php?id=". $row['ID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($connect);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>