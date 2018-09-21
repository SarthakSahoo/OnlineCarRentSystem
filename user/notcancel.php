<?php
    session_start();
    if ($_SESSION["userid"]) {
        $userid = $_SESSION["userid"];
    } else {
        header('location:../page.html');
    }
?>

<body style="background-color: #e6e6e6">
	<center>
		<h2>
			We can't Cancel your Ride. May be These are the following reason..
		</h2>
		<h2>1. May be you have inputted wrong RideID</h2>
		<h2>2. May be you have Cancelled your Ride before.</h2>
		<a href="userpanel.php">Ok, Take Me to the home Page</a><br>
		<a href="logout.php">Log Out</a>
	</center>	
</body>