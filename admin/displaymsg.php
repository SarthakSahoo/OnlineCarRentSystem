<?php
    session_start();
    if ($_SESSION["userid"]) {
        $userid = $_SESSION["userid"];
    } else {
        header('location:../page.html');
    }
    $msg = $_SESSION["message"];
?>


<body style="background-color: #e6e6e6">
	<center>
		<h2><?php echo $msg; ?></h2><br>
		<a href="adminpanel.php">Ok, Take Me back to Home Page</a><br>
		<a href="logout.php">Log Out</a>
	</center>
</body>