<?php
session_start();
require 'dbConfig.php';

?>


<?php
$email=$_GET['email'];
$testimony = $_GET['experience'];

	if(!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)){
		
		$emailerr='Invalid Email Format';
	}
	
	
	
else{


$msg = "INSERT INTO testimonials (email, testimonials)" ."VALUES('$email','$testimony')";
mysqli_query($con, $msg);




	
?>




<?php



	}
	
	
	
	
	
?>