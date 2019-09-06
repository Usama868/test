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
       
       $name = $_POST['name'];
        $fathername = $_POST['fathername'];
       $contact = $_POST['contact'];
       $cnic = $_POST['cnic'];
       
       $sql = "INSERT INTO `form` (`id`, `name`, `fathername`, `contact`, `cnic`) VALUES (NULL,'$name' , '$fathername' , '$contact' , '$cnic')";
       if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
      
       
        ?>
           </body>
</html>
