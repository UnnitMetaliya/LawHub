<?php 
error_reporting(0);
require 'core.inc.php';
require 'connect.inc.php';

if (loggedin()) {
	# code...
	$usersname = getUserField('username');

	// echo 'You are logged in. '.$usersname.'.<a href="logout.php">Logout</a><br>';
	include 'afterlogin.inc.php';
}else{
	
	include 'loginform.inc.php';	
}




 ?>