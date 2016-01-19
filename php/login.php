<?php

// establishing the MySQLi connection

 

$con = mysqli_connect("localhost","root","","registration");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established:".mysqli_connect_error();

}

// checking the user

if(isset($_POST['login'])){

$email = mysqli_real_escape_string($con,$_POST['email']);

$password = mysqli_real_escape_string($con,$_POST['password']);

$sel_user = "select * from 'register' where email='$email' AND password='$password'";


if ($_POST['email'] == $email) {
	# code...
	echo "Success..!!";
}

else {

echo "<script>alert(‘Email or password is not correct, try again!’)</script>";

}

}

?>