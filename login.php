<?php
	session_start();
	if(isset($_SESSION["userid"]))
	{
		header('location:page.html');
	}
	if(isset($_REQUEST["login"]))
	{
		include 'database.php';

		$userid = $_REQUEST["userid"];
		$password = $_REQUEST["password"];
		
		$result = mysqli_query($con, "select * from userinfo where email = '$userid' and password = '$password'");

		if($arr = mysqli_fetch_assoc($result))
		{
			if(($arr["email"] == $userid) && (($arr["usertype"] == 'superadministrator') || ($arr["usertype"] == 'administrator')))
			{
				$_SESSION["userid"] = $userid;
				header("location:admin/adminpanel.php");
			}
			else if(($arr["email"] == $userid) && ($arr["usertype"] == 'user'))
			{
				$_SESSION["userid"] = $userid;
				header("location:user/userpanel.php");
			}
			else
			{
				echo "Invalid Details";
			}
		}
		else
		{
			echo "Invalid Details";
		}
	}
?>