<?php
	session_start();
	$uid = $_SESSION["userid"];
    if ($_SESSION["userid"]) {
        $userid = $_SESSION["userid"];
    } else {
        header('location:../page.html');
    }
    if(isset($_REQUEST["submit"]))
    {
    	include 'database.php';

    	$email = $uid;
    	$rideid = uniqid();
    	$name = strip_tags($_REQUEST["name"]);
    	$address = strip_tags($_REQUEST["address"]);
    	$phone = strip_tags($_REQUEST["phone"]);
    	$fromdate = strip_tags($_REQUEST["fromdate"]);
    	$todate = strip_tags($_REQUEST["todate"]);
    	$driver = strip_tags($_REQUEST["driver"]);
    	$car = strip_tags($_REQUEST["car"]);

    	$name = mysqli_real_escape_string($con, $name);
    	$address = mysqli_real_escape_string($con, $address);
    	$phone = mysqli_real_escape_string($con, $phone);
    	$fromdate = mysqli_real_escape_string($con, $fromdate);
    	$todate = mysqli_real_escape_string($con, $todate);
    	$driver = mysqli_real_escape_string($con, $driver);
    	$car = mysqli_real_escape_string($con, $car);

        if($driver == '0')
        {
            $given = 'NULL';
        }
        else
        {
            $given = 0;
        }

    	$sql = "insert into rideinfo(fromdate, todate, address, username, email, phone, driverstatus, rideid, car,given) values('$fromdate','$todate','$address','$name','$email','$phone','$driver', '$rideid', '$car','$given')";

    	mysqli_query($con, $sql);
    	if(mysqli_affected_rows($con))
		{
			echo "Register Success";
			header("location:rideview.php");
		}
		else
		{
			echo "Try Again..";
		}
        $_SESSION["rideid"] = $rideid;
    }
?>