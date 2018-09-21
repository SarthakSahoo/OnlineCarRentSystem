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
			Your Ride has been cancelled. You can Check that in View Ride Details Options also. If You Change Your Mind then we are still there for you. We will be happy if you book ride from us.
		</h2>

		<a href="userpanel.php">Ok, Take Me to the home Page</a><br>
		<a href="logout.php">Log Out</a>

	</center>	
</body>