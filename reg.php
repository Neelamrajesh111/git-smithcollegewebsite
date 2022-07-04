<?php

include "inc/db.php";
echo "ummy";

if(isset($_POST['submit']))
{

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpass = $_POST['confirm_password'];

	echo "ummy";

	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($cpass))
	{
		$sql ="insert into user(fname,lname,email,password) 
		values('".$fname."','".$lname."','".$email."','".$password."')";

		$con->query($sql);

		if($con)
		{
			header('location:login.html');
		}

	}
	else
	{
		header('location:index.html');
		//echo "ummy";
	}

}

?>