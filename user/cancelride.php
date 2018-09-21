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

    	$rideid = $_REQUEST["rideid"];

    	$sql = "delete from rideinfo where rideid = '$rideid'";
    	mysqli_query($con,$sql);

    	if(mysqli_affected_rows($con))
    	{
    		echo "Deleted...";
            header('location:cancelview.php');
    	}
    	else
    	{
    		echo "Not Deleted...";
            header('location:notcancel.php');
    	}
    }
?>