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
        require_once "02DB-Connection.php";
       
       $Name = $_POST['name'];
       $fathername = $_POST['fname'];
       $contactno = $_POST['contactno'];
       $cnic = $_POST['cnic'];
       
       $sql = "INSERT INTO `form` (`ID`, `Name`, `Father-name`, `Contact`, `Cnic`) VALUES (NULL,'$Name' , '$fathername' , '$contactno' , '$cnic')";
       if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
      
       
        ?>
           </body>
</html>
