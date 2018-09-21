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

        $email = strip_tags($_REQUEST["email"]);
        $email = mysqli_real_escape_string($con, $email);

        $sql = "select * from userinfo where email = '$email'";

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
    }
?>
<body style="background-color: #e6e6e6">
  <center>
      <h2>Name: <?php echo $name; ?></h2>
      <h2>Email: <?php echo $email; ?></h2>
      <h2>Phone: <?php echo $phoneno; ?></h2>
      <h2>Address: <?php echo $address; ?></h2>
      <h2>Zip Code: <?php echo $pin; ?></h2>
      <h2>City: <?php echo $city; ?></h2>
      <h2>State: <?php echo $state; ?></h2>
      <h2>User: <?php echo $usertype; ?></h2>

  <a href="adminpanel.php">Ok, Take Me to Home Page</a><br>
  <a href="logout.php">Log Out</a>
  </center>
</body>  
