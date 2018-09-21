<?php
	session_start();
	if($_SESSION["userid"]) {
		$userid = $_SESSION["userid"];
	} else {
		header('location:../page.html');
	}
	if($_REQUEST["submit"])
	{
		include 'database.php';

		$drivermail = $_REQUEST["drivermail"];
		$sql1 = "update driverstatus set status=0 where email='$drivermail'";
		$result = mysqli_query($con, $sql1);

		if($result)
		{
			$message = "Successfully Changed...";
			$_SESSION["message"] = $message;
		}
		else
		{
			$message = "Not Success...Try again";
			$_SESSION["message"] = $message;
		}
		header('location:displaymsg.php');
	}
?>