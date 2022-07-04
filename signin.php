<?php

include "inc/db.php";

echo "ummy";

if(isset($_POST['submit']))
{

	$email =$_POST['email'];
	$pass =$_POST['password'];

	if(!empty($email) && !empty($pass))
	{

		$sql = "select * from user where email ='".$email."' and password ='".$pass."'";

		$res =$con->query($sql);

		if($res->num_rows>0)
		{
			header('location:home.html');
		}
		else
		{
			header('location:login.html');
		}
	}
	else
	{
		header('location:login.html');
	}
}




?>