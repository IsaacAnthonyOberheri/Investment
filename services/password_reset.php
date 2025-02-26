<?php
session_start();
require 'dbConfig.php';


$new_password = $_GET['new_password'];

$sql = mysqli_query($con, "SELECT * FROM registration_client WHERE email = '$_SESSION[new]' " );

$msg = "UPDATE registration_client SET confirm_password = '$new_password' where email = '$_SESSION[new]' ";
$update = mysqli_query($con, $msg);

if($_SESSION['new'] != 'casted'){
	$_SESSION['validated']= 'Your Password has successfully been changed, kindly login';

		echo $_SESSION['validated'];
	
}

else{
	echo 'something went wrong, try again';
}
?>



