<?php 


//check if all the data is filled

if (isset($_POST['submit'])) {
	
	$dbLink = new mysqli('localhost','root','','registration');

	if (mysqli_connect_errno()) {
		
		die("MySQL connection failed".mysqli_connect_errno());
	}

	//Gathering all required data

	$name = $dbLink->real_escape_string($_POST['name']);
	$email = $dbLink->real_escape_string($_POST['email']);
	$password = $dbLink->real_escape_string($_POST['password']);
	$confirm_password = $dbLink->real_escape_string($_POST['confirm_password']);
	$phone_number = $dbLink->real_escape_string($_POST['phone_number']);

	//SQL Query

	$query = "INSERT INTO `register`(`name`,`email`,`password`,`confirm_password`,`phone_number`) VALUES('{$name}','{$email}','{$password}','{$confirm_password}','{$phone_number}')";

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