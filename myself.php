<html>
<head>
<h1>first program</h1>
<body>
 <?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="mydatabase";

   $conn=mysqli_connect($servername,$username,$password,$database);
    echo"Successfully connected to the database";
    if(!$conn){
        die('Could not connect to the database' .mysql_error());
    }
    ?>
    </body>
</html>