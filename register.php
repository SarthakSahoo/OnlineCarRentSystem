<?php
	session_start();
	if ($_SESSION["userid"]) {
		$userid = $_SESSION["userid"];
	} else {
		header('location:page.html');
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body style="background-color: #E6E6E6">
	<form action="register1.php" method="post">
		<center>
			<h1>Please Fill This Form for Better Service</h3>
			<br><br><br><br><br><br>
			<textarea style="resize: none; height: 60px; width: 325px; font-size: 20px" placeholder="Address" name="address"></textarea><br><br>
			<input type="text" name="city" style="height: 60px; width: 200px; font-size: 20px" placeholder="City"></input>
			<input type="text" name="zipcode" style="height: 60px; width: 200px; font-size: 20px" placeholder="Zip Code"></input><br><br>
			<select style="height: 60px; width: 200px; font-size: 20px" name="state">
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
			<input type="submit" name="submit" style="height: 60px; width: 100px; font-size: 20px; background-color: green;font-family: verdana;
		font-size: 18px;
		color: white;
		border-radius: 5px 5px 5px 5px;
		border-width: 1px;
		border-style: solid;
		border-color: gray;
		cursor: pointer;
		outline: none;"></input>
		</center>
	</form>
</body>
</html>