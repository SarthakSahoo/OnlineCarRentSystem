<?php
	session_start();
	
    if ($_SESSION["userid"]) {
        $userid = $_SESSION["userid"];
        $rideid = $_SESSION["rideid"];
    } else {
        header('location:../page.html');
    }   

    include 'database.php';

    $sql = "select * from rideinfo where rideid='$rideid'";

    $result = mysqli_query($con, $sql);

    if($arr = mysqli_fetch_assoc($result))
    {
    	$rideid = $arr["rideid"];
    	$name = $arr["username"];
    	$phone = $arr["phone"];
    	$car = $arr["car"];
    } 


    
?>

<body style="background-color: #e6e6e6">
	<center>
		<h2>
			Thank you for booking your ride from RentACar.com....Please take the screenshot of this page to remember your RideID
		</h2>
		<h2>Ride ID: <?php echo $rideid; ?> </h2>
		<h2>User Name: <?php echo $name; ?> </h2>
		<h2>Phone : <?php echo $phone; ?> </h2>
		<h2>Car: <?php echo $car; ?> </h2>

		<a href="userpanel.php">Ok, Take Me to the home Page</a><br>
		<a href="logout.php">Log Out</a>

	</center>	
</body>