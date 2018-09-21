<?php
	session_start();
	$uid = $_SESSION['userid'];
	if ($_SESSION["userid"]) {
		$userid = $_SESSION["userid"];
	} else {
		header('location:page.html');
	}

	if(isset($_REQUEST["submit"]))
	{
		include 'database.php';

		$address = strip_tags($_REQUEST["address"]);
		$city = strip_tags($_REQUEST["city"]);
		$state = strip_tags($_REQUEST["state"]);
		$zipcode = strip_tags($_REQUEST["zipcode"]);

		$address = mysqli_real_escape_string($con, $address);
		$city = mysqli_real_escape_string($con, $city);
		$state = mysqli_real_escape_string($con, $state);
		$zipcode = mysqli_real_escape_string($con, $zipcode);


		$sql = "update userinfo set address='$address', pincode='$zipcode', city='$city', state='$state' where email='$uid'";

		$result = mysqli_query($con, $sql);

		if($result)
		{
			echo "Register Success";
			header("location:user/userpanel.php");
		}
		else
		{
			echo "Try Again..";
		}
	}

?>