<?php 


//check if all the data is filled

if (isset($_POST['submit'])) {
	
	$dbLink = new mysqli('localhost','root','','missing');

	if (mysqli_connect_errno()) {
		
		die("MySQL connection failed".mysqli_connect_errno());
	}

	//Gathering all required data

	$mname = $dbLink->real_escape_string($_POST['m_name']);
	$yname = $dbLink->real_escape_string($_POST['y_name']);
	$relation = $dbLink->real_escape_string($_POST['relation']);
	$age = $dbLink->real_escape_string($_POST['age']);
	$height = $dbLink->real_escape_string($_POST['height']);
	$lastseen = $dbLink->real_escape_string($_POST['lastseen']);
	$phone_number = $dbLink->real_escape_string($_POST['phone_number']);
	

	//SQL Query

	$query = "INSERT INTO `missing_person`(`name`,`y_name`,`relation`,`age`,`height`,`lastseen`,`phone_number`) VALUES('{$mname}','{$yname}','{$relation}','{$age}','{$height}','{$lastseen}','{$phone_number}')";

	//execute the query

	$result = $dbLink->query($query);

	//check if details has been sent to the database

		if ($result) {
		# code...
		echo "Your details has been sent..!";
	}
	else{
		echo 'Error'."<pre>{$dbLink->error}</pre>";
	}

	$dbLink->close();
}

 ?>