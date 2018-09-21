<?php
	$con = mysqli_connect("localhost","root","sarthak123","rentalcar");
	if(mysqli_errno($con))
	{
		die("connection failed:".mysqli_error($con));
	}
?>