<?php
session_start();
require 'dbConfig.php';

?>


<?php

$name=$_GET['name'];
$email=$_GET['email'];
$subject=$_GET['subject'];
$message=$_GET['message'];
$date=$_GET['date'];




$to = "support@swaninvestment.org";
	
	$message_body = 'Name of Client,'.' '.$name.'<br>'.$message;

	$headers = "From: $email \r\n"; 
	$headers .= "Reply-To: $email \r\n";
	$headers .= "MIME-version:1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8";
	$send = mail($to,$subject,$message_body,$headers);





    
$msg = "INSERT INTO contact_us (name, email, subject, message, date)" ."VALUES('$name','$email','$subject','$message','$date')";
mysqli_query($con, $msg);
?>


