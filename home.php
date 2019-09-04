<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
     $dbconnect = mysqli_connect("localhost","root","","admission")or die("unable to connect");
       echo"connected Successfully";
       
       $Name = $_GET['name'];
       $fathername = $_GET['fname'];
       $contactno = $_GET['contactno'];
       $cnic = $_GET['cnic'];
       
       $sql = "INSERT INTO `form` (`ID`, `Name`, `Father-name`, `Contact`, `Cnic`) VALUES (NULL,'$Name' , '$fathername' , '$contactno' , '$cnic')";
       if ($dbconnect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

$dbconnect->close();
      
       
        ?>
    </body>
</html>
