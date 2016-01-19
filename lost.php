<?php 

// chekc if all the data is filled

if (isset($_POST['submit'])) {
	# code...

	$dbLink = new mysqli('localhost','root','','lostandfound');

	if (mysqli_connect_errno()) {
		
		die("MySQL connection failed".mysqli_connect_errno());
	}


	// GAthering all required data

	$lname = $dbLink->real_escape_string($_POST['l_name']);
	$lemail = $dbLink->real_escape_string($_POST['l_email']);
	$lcontact = $dbLink->real_escape_string($_POST['l_contact']);
	$laadhar = $dbLink->real_escape_string($_POST['l_aadhar']);
	$itemname = $dbLink->real_escape_string($_POST['itemname']);
	$itemdescription = $dbLink->real_escape_string($_POST['itemdescription']);
	$itemlocation = $dbLink->real_escape_string($_POST['itemlocation']);
	$itemlastseen = $dbLink->real_escape_string($_POST['itemlastseen']);



	//SQL Query

	$query = "INSERT INTO `found`(`l_name`,`l_email`,`l_contact`,`l_aadhar`,`itemname`,`itemlocation`,`itemlastseen`,`itemdescription`) VALUES ('{$lname}','{$lemail}','{$lcontact}','{$laadhar}','{$itemname}','{$itemlocation}','{$itemlastseen}','{$itemdescription}')";

	// Execute a Query

	$result = $dbLink->query($query);

	//checking if details has been sent to the database

	if ($result) {
		# code...

		echo "Details sent !";
	}

	else{

		echo 'Error'."<pre>{$dbLink->error}</pre>";
	}

	$dbLink->close();

}

 ?>