<?php
	session_start();
	if ($_SESSION["userid"]) {
        $userid = $_SESSION["userid"];
    } else {
        header('location:../page.html');
    }
    if($_REQUEST["submit"])
    {
    	include 'database.php';

    	$carno = strip_tags($_REQUEST["carno"]);
    	$cartype = strip_tags($_REQUEST["cartype"]);
    	$carname = strip_tags($_REQUEST["carname"]);

    	$carno = mysqli_real_escape_string($con, $carno);
    	$cartype = mysqli_real_escape_string($con, $cartype);
    	$carname = mysqli_real_escape_string($con, $carname);

    	$sql = "insert into carinfo(carnumber, cartype, carname) values('$carno','$cartype','$carname')";

    	$result = mysqli_query($con, $sql);

    	if($result)
    	{
    		echo "Car Added Successfully..";
    		header('location:successcar.php');
    	}
    	else
    	{
    		echo "Not Successfull";
    		header('location:unsuccesscar.php');
    	}
    }
    if($_REQUEST["submit1"])
    {
    	include 'database.php';

    	$carno = strip_tags($_REQUEST["carno"]);
    	$carno = mysqli_real_escape_string($con, $carno);

    	$sql = "delete from carinfo where carnumber = '$carno'";

    	mysqli_query($con, $sql);

    	if(mysqli_affected_rows($con))
    	{
    		$message = "The Car is removed Successfully";
    		$_SESSION["message"] = $message;
    	}
    	else
    	{
    		$message = "Sorry...There is some problem right now..so try again";
    		$_SESSION["message"] = $message;
    	}
    	header('location:displaymsg.php');
    }
?>