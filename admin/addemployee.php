<?php
    session_start();
    if ($_SESSION["userid"]) {
        $userid = $_SESSION["userid"];
    } else {
        header('location:../page.html');
    }
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web Generator Description">
  <title>Add Employee</title>
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
<section class="menu cid-qxEmMwFYVe" once="menu" id="menu1-29" data-rv-view="189">

    

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
            
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-7" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Log OUt</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="">bootstrap table</a></section><section class="features3 cid-qKc8EbLvNX" id="features3-2b" data-rv-view="191">

    <form method="post" action="saveemployee.php">
        <div style="padding-left: 500px">
            <label style="font-size: 30px">Name:</label>
            <input type="text" name="name" style="font-size: 19px; width: 300px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
            <label style="font-size: 30px">Address:</label><br>
            <textarea name="address" style="resize: none; font-size: 15px; width: 400px; border-radius: 5px 5px 5px 5px; border-width: 1px; border-style: solid"></textarea><br>
            <label style="font-size: 30px">Phone:</label>
            <input type="text" name="phone" style="font-size: 19px; width: 300px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
            <label style="font-size: 30px">E-mail:</label>
            <input type="text" name="email"  style="font-size: 19px; width: 300px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
            <label style="font-size: 30px">Pin Code:</label>
            <input type="text" name="pincode"  style="font-size: 19px; width: 300px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
            <label style="font-size: 30px">City:</label>
            <input type="text" name="city"  style="font-size: 19px; width: 300px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
            <label style="font-size: 30px">Password:</label>
            <input type="password" name="password"  style="font-size: 19px; width: 300px; border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid"></input><br>
            <label style="font-size: 30px">Employee Type:</label>
            <select name="employeetype" style="font-size: 19px;border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid">
                <option selected disabled hidden>Choose</option>
                <option value="administrator">Administrator</option>
                <option value="driver">Driver</option>
            </select><br>
            <label style="font-size: 30px">State:</label>
            <select style="font-size: 19px;border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid" name="state">
                <option selected disabled hidden>Choose Your State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="ArunaChal Pradesh">ArunaChal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chattisgarh">Chattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharastra">Maharastra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="TamilNadu">TamilNadu</option>
                <option value="Telengana">Telengana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="West Bengal">West Bengal</option>
            </select><br><br><br>
            <input type="Submit" name="submit" style="font-size: 30px;border-radius: 5px 5px 5px 5px;border-width: 1px;border-style: solid; background-color: green; cursor: pointer; color: white"></input>
        </div>
    </form>
</section>


<section once="" class="cid-qKc8Nb4x6m" id="footer6-2d" data-rv-view="197">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2017 Sks - All Rights Reserved
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
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>