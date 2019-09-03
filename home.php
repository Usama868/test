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
     $connect = mysqli_connect("localhost","root","","admission")or die("unable to connect");
       echo"connected Successfully";
       $sql = "INSERT INTO 'form'(Name,Father-name,contact,cnic)values(null,'".$_REQUEST['name']."' , '".$_REQUEST['fname']."' , '".$_REQUEST['contactno']."' , '".$_REQUEST['cnic']."')";
       
       mysqli_query($sql,$connect);
       
        ?>
    </body>
</html>
