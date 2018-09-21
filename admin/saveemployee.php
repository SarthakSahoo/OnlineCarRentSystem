<?php
	session_start();
	if ($_SESSION["userid"]) {
        $userid = $_SESSION["userid"];
    } else {
        header('location:../page.html');
    }
    if(isset($_REQUEST["submit"]))
    {
    	include 'database.php';

    	$username = strip_tags($_REQUEST["name"]);
    	$address = strip_tags($_REQUEST["address"]);
    	$phone = strip_tags($_REQUEST["phone"]);
    	$email = strip_tags($_REQUEST["email"]);
    	$pincode = strip_tags($_REQUEST["pincode"]);
    	$city = strip_tags($_REQUEST["city"]);
    	$password = strip_tags($_REQUEST["password"]);
    	$emptype = strip_tags($_REQUEST["employeetype"]);
    	$state = strip_tags($_REQUEST["state"]);

    	$username = mysqli_real_escape_string($con, $username);
    	$address = mysqli_real_escape_string($con, $address);
    	$phone = mysqli_real_escape_string($con, $phone);
    	$email = mysqli_real_escape_string($con, $email);
    	$pincode = mysqli_real_escape_string($con, $pincode);
    	$city = mysqli_real_escape_string($con, $city);
    	$password = mysqli_real_escape_string($con, $password);
    	$emptype = mysqli_real_escape_string($con, $emptype);
    	$state = mysqli_real_escape_string($con, $state);

    	$sql = "insert into userinfo(fullname, password, email, phoneno, address, pincode, city, state, usertype) values('$username','$password', '$email', '$phone', '$address', '$pincode', '$city', '$state', '$emptype')";

        

    	$result = mysqli_query($con, $sql);
        if($emptype == 'driver')
        {
            $status = 0;
            $sql1 = "insert into driverstatus(email,status) values('$email', '$status')";
            mysqli_query($con,$sql1);
        }
    	if($result)
    	{
    		echo "Register Success";
    		//$message = 'Register Success';
			header('location:savesuccess.php');
    	}
    	else 
    	{
    		echo "Not Registered";
    		//$message = 'Registration Failed';
			header('location:savenot.php');
    	}
    }
?>