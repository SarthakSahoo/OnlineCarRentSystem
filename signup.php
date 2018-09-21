<?php
	session_start();
	if(isset($_SESSION["userid"]))
	{
		header('location:page.html');
	}
	if(isset($_REQUEST["login"]))
	{
		include 'database.php';

		$fullname = strip_tags($_REQUEST["fullname"]);
		$email = strip_tags($_REQUEST["email"]);
		$password = strip_tags($_REQUEST["password"]);
		$phone = strip_tags($_REQUEST["phone"]);
		$usertype = "user";

		$fullname = mysqli_real_escape_string($con, $fullname);
		$email = mysqli_real_escape_string($con, $email);
		$password = mysqli_real_escape_string($con, $password);
		$phone = mysqli_real_escape_string($con, $phone);
		$usertype = mysqli_real_escape_string($con, $usertype);

		mysqli_query($con, "insert into userinfo(fullname,email,password,phoneno,usertype) values('$fullname','$email','$password','$phone','$usertype')");

		if(mysqli_affected_rows($con))
		{
			echo "Register Success";
			$_SESSION["userid"] = $email;
			header("location:register.php");
		}
		else
		{
			echo "Try Again..";
		}
	}
?>