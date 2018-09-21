<?php
	session_start();
	if($_SESSION["userid"]) {
		$userid = $_SESSION["userid"];
	} else {
		header('location:../page.html');
	}
	if($_REQUEST["submit"])
	{
		include 'database.php';
		$email = $_REQUEST["email"];

		$sql = "select * from userinfo where email='$email'";
		$result = mysqli_query($con, $sql);
		if($arr = mysqli_fetch_assoc($result))
        {
            $name = $arr['fullname'];
            $email = $arr['email'];
            $phoneno = $arr['phoneno'];
            $address = $arr['address'];
            $pin = $arr['pincode'];
            $city = $arr['city'];
            $state = $arr['state'];
            $usertype = $arr['usertype'];
        }
        if($usertype == 'superadministrator')
        {
            $message = "You Can't Do this......This will be reported to Super Administrator now and action will be taken against you";
            $_SESSION["message"] = $message;
        }
        else if($usertype == 'driver')
        {
            $sql1 = "insert into firedemp(fullname, email, phoneno, address, pincode, city, state, usertype) values('$name','$email','$phoneno','$address','$pin','$city','$state','$usertype')";
            $result = mysqli_query($con, $sql1);

            $sql2 = "delete from userinfo where email='$email'";
            $sql3 = "delete from driverstatus where email='$email'";
            mysqli_query($con,$sql2);
            mysqli_query($con,$sql3);

            if(mysqli_affected_rows($con))
            {
                $message = "Fired....";
                $_SESSION["message"] = $message;
      
            }
            else
            {
                $message = "Sorry...There is a problem...Try again with Correct data..";
                $_SESSION["message"] = $message;
            }   
        }
        else
        {
            $sql1 = "insert into firedemp(fullname, email, phoneno, address, pincode, city, state, usertype) values('$name','$email','$phoneno','$address','$pin','$city','$state','$usertype')";
            $result = mysqli_query($con, $sql1);

            $sql2 = "delete from userinfo where email='$email'";
            mysqli_query($con,$sql2);

            if(mysqli_affected_rows($con))
            {
            	$message = "Fired....";
        		$_SESSION["message"] = $message;
      
            }
            else
            {
            	$message = "Sorry...There is a problem...Try again with Correct data..";
        		$_SESSION["message"] = $message;
            }
        }
        header('location:displaymsg.php');
	}
?>