<?php
	$con = mysqli_connect("localhost","root","password","rentalcar");
	if(mysqli_errno($con))
	{
		die("connection failed:".mysqli_error($con));
	}
?>