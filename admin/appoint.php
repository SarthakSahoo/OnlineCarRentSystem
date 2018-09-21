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

		$rideid = $_REQUEST["rideid"];
		$drivermail = $_REQUEST["drivermail"];

		$sql = "insert into ride(rideid,driverid) values('$rideid','$drivermail')";
		$sql1 = "update driverstatus set status=1 where email='$drivermail'";
		$sql2 = "update rideinfo set given='1' where rideid='$rideid'";

		$result = mysqli_query($con,$sql);
		$result1 = mysqli_query($con, $sql1);
		$result2 = mysqli_query($con, $sql2);

		if($result)
		{
			$message = "Successfully assigned...";
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