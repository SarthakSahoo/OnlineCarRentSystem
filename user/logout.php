<?php
	session_start();
	session_destroy($_SESSION["userid"]);
	session_unset($_SESSION["userid"]);
	header('location:../page.html');
?>