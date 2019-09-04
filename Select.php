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
       $connect = mysqli_connect('localhost','root','','admission') or die('unable to connect');
       
       $sql = "SELECT ID, Name,contact   FROM form";
       $result = mysqli_query($connect,$sql);
       if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID:".$row['ID']. "Name;". $row['Name']. "<br>";
    }
} else {
    echo '0 results';
}
mysqli_close($connect);
        ?>
    </body>
</html>
