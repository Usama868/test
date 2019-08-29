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
     $Name = INPUT_POST["Name"];
     $fname = INPUT_POST["fname"];
     $userid = INPUT_POST["user_id"];
     $idpassword = INPUT_POST["id_password"];
     $emailid = INPUT_POST["email_id"];
     $Address = INPUT_POST["Address"];
     $contactno = INPUT_POST["contact_no"];
     $country = INPUT_POST["country"];
     $gender = INPUT_POST["gender"];
    //database connection
     $connect = mysqli_connect("localhost","root","","admission");
     if($connect->connect_error){
         die("connection Failed :".$connect->connect_error);
     } else {
     $stmt = $connect->prepare("INSERT INTO admission_applicant(Name,fname,user_id,id_password,email_id,Address,contact_no,country,gender)values(?,?,?,?,?,?,?,?,?)");
     $stmt->bind_param("ssssssiss",$Name,$fname,$userid,$idpassword,$emailid,$Address,$contact_no,$country,$gender);
     $stmt->execute();
     echo"Registered Successfully...";
     $stmt->close();
     $stmt->close();
}
       
        
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
