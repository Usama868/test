<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Css/style.css">
        <link rel="stylesheet" type="text/css" href="Css/colors.css">
        <link href = "bootstrap/bootstrapCSS.css" rel = "stylesheet">
        <script src="script/script.js" type="text/javascript"></script>
           <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                  <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
         <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
          <meta charset="UTF-8">
       
        <title>Registration Completed</title>
    </head>
     
    <body class="container" background="images/circles-light.png">
          <?php
           $dbconnect = mysqli_connect("localhost","root","","admission")or die("unable to connect");
       echo"connected Successfully";
          
     $Name = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['Name']);
     $fname = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['fname']);
     $userid = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['user_id']);
     $idpassword = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['id_password']);
     $emailid = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['email_id']);
     $Address = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['Address']);
     $contactno = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['contact_no']);
     $country = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['country']);
     $gender = mysqli_real_escape_string($dbconnect, INPUT_REQUEST['gender']);
    
     
    $sql = "INSERT INTO `applicant` ('ID' , 'Name' , 'Father-name' ,'User-name' , 'Password' , 'Email' , 'Address' , 'Contact#' , 'Country', 'Gender')
            VALUES (NULL ,'$Name' , '$fname' , '$userid' , '$idpassword','$emailid','$Address','$contactno','$country','$gender')";
       if ($dbconnect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

$dbconnect->close();

       
        
            ?>
        
         <div class="head">
        
             <img src="images/photog1.png" width="150px" height="auto"  style="max-width: 100%">
         
        </div>
        
         <div>
        <nav>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php" target="_self">Home</a></li>
                <li><a href="about.php" target="_self">About</a></li>
                <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown">
                     Project's
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="24-7-19bootstrap.php" target="_blank">24-7-19</a></li>
                        <li><a href="25-7-19.php" target="_blank">25-7-19</a></li>
                        <li><a href="bootstrap.php" target="_self">26-7-19</a></li>
                        <li><a href="#" target="_self">232131</a></li>
                          
                    </ul>
                </li>
            </ul>
        </div>
        </nav>
        </div>

        <br/>
       
     
        <div class="bold">
       
        <h1 align=center> Your   Registration     is   Completed   Successfully!.............</h1>
        </div>
        <br/>
        <br/>
        <div align="center" class="">
            <h3>Press OK Button to Redirect to Registration form page</h3>
            <a href="index.php" target="_self"/>
            <input class="ok" type="submit" name="ok" value="OK" class="impact"/>
        </a>
        </div>
      
            <br/>
            <br/>
          <div  align="center">
              <footer class="Lucida Console"><u>©Copyright 
                         The Islamia University of Bahawalpur Pakistan. All rights reserved.</u></footer> 
                        </div>
    </body>
   
</html>
