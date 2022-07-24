  <?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="nccl5";

   $conn=mysqli_connect($servername,$username,$password,$database);
    //echo"Successfully connected to the database";
    if(!$conn){
        die('Could not connect to the database' .mysql_error());
    }
    ?>