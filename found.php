<?php 

// chekc if all the data is filled

if (isset($_POST['submit'])) {
	# code...

	$dbLink = new mysqli('localhost','root','','lostandfound');

	if (mysqli_connect_errno()) {
		
		die("MySQL connection failed".mysqli_connect_errno());
	}


	// GAthering all required data

	$foundername = $dbLink->real_escape_string($_POST['f_name']);
	$founderemail = $dbLink->real_escape_string($_POST['f_email']);
	$foundercontact = $dbLink->real_escape_string($_POST['f_contactnumber']);
	$founderaadhar = $dbLink->real_escape_string($_POST['f_aadharnumber']);
	$itemname = $dbLink->real_escape_string($_POST['item_name']);
	$itemdescription = $dbLink->real_escape_string($_POST['item_description']);
	$itemlocation = $dbLink->real_escape_string($_POST['item_location']);


	//SQL Query

	$query = "INSERT INTO `lost`(`founder_name`,`founder_email`,`contact_no`,`aadhar_no`,`item_name`,`item_description`,`location`) VALUES ('{$foundername}','{$founderemail}','{$foundercontact}','{$founderaadhar}','{$itemname}','{$itemdescription}','{$itemlocation}')";

	// Execute a Query

	$result = $dbLink->query($query);

	//checking if details has been sent to the database

	if ($result) {
		# code...

		echo "your details has been sent";
	}

	else{

		echo 'Error'."<pre>{$dbLink->error}</pre>";
	}

	$dbLink->close();

}

 ?>