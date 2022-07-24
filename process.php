<?php
include 'db_con.php';

if(isset($_POST['submit'])){
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$city_name=$_POST['city_name'];
$email=$_POST['email'];

  $sql="INSERT INTO studentdetails (first_name, last_name, city_name, email)
        VALUES ('$first_name', '$last_name', '$city_name', '$email')";

        if(mysqli_query($conn,$sql)){
            echo"New record registered successfully";
            echo"<a href='./retrieve.php'>View all data</a>";
        }else{
            echo"ERROR:" . $sql . " 
            " . mysqli_error($conn);
        }
        mysqli_close($conn);
}


?>
