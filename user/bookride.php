<?php
    session_start();
    if ($_SESSION["userid"]) {
        $userid = $_SESSION["userid"];
    } else {
        header('location:../page.html');
    }
    include 'database.php';

    $sql = "select * from driverstatus where status=0";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);

    if($num == 0)
      $message = "Sorry...There is no driver available at this moment...please try after sometime....";
    else
      $message = " ";
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.0,  -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web Site Builder Description">
  <title>Book A Ride</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qxEmMwFYVe" once="menu" id="menu1-2e" data-rv-view="47">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-warning display-5" href="">RentACar.com</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-7" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Log Out</a></div>
        </div>
    </nav>
</section>


<section class="features3 cid-qKcDL4VHFd" id="features3-2g" data-rv-view="61">
	<form method="post" action="saveride.php">
		<div style="padding-left: 500px">
			<label style="font-size: 30px">Name:</label>
			<input type="text" name="name" style="font-size: 19px; width: 300px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
			<label style="font-size: 30px">Address:</label><br>
			<textarea name="address" style="resize: none; font-size: 15px; width: 400px; border-radius: 5px 5px 5px 5px; border-width: 1px; border-style: solid"></textarea><br>
			<label style="font-size: 30px">Phone:</label>
			<input type="text" name="phone" style="font-size: 19px; width: 300px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
			<label style="font-size: 30px">From Date:</label>
			<input type="text" name="fromdate" placeholder="yyyy-mm-dd" style="font-size: 19px; width: 200px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
			<label style="font-size: 30px">To Date:</label>
			<input type="text" name="todate" placeholder="yyyy-mm-dd" style="font-size: 19px; width: 200px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
			<label style="font-size: 30px">Driver Requirement:</label>
			<select name="driver" style="font-size: 19px;border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid">
				<option selected disabled hidden>Choose</option>
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select><?php echo $message; ?><br>
			<label style="font-size: 30px">Car:</label>
			<select name="car" style="font-size: 19px;border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid">
				<option selected disabled hidden>Choose Your Car</option>
				<option value="Toyota Innova">Toyota Innova</option>
				<option value="Suzuki Dzire">Suzuki Dzire</option>
				<option value="Hyundai I10">Hyundai I10</option>
				<option value="Renault Duster">Renault Duster</option>
			</select><br>
			<input type="Submit" name="submit" style="font-size: 30px;border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid; background-color: green; cursor: pointer; color: white"></input>
		</div>
	</form>
</section>

<section once="" class="cid-qKcDNpQd8B" id="footer6-2h" data-rv-view="64">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2017 sks - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  
  
</body>
</html>