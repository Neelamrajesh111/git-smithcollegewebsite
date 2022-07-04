<?php

include "inc/db.php";

//echo "ummy";

if(isset($_POST['submit']))
{

	$fname =$_POST['fname'];
	$email =$_POST['email'];
	$pnumber =$_POST['pnumber'];
	$message =$_POST['message'];

//echo "ummy";

	if(!empty($fname) && !empty($email) && !empty($pnumber) && !empty($message))
	{
		$sql ="insert into contacts(fname,email,pnumber,message) 
		values('".$fname."','".$email."','".$pnumber."','".$message."')";

		$con->query($sql);

		if($con)
		{
			header('location:home.html');
		}

	}
	else
	{
		header('location:contact.html');
		//echo "ummy";
	}

}

?>