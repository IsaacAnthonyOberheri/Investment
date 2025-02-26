<?php
$name = mysqli_escape_string($con, $_POST['name_xp']);
$email = mysqli_escape_string($con, $_POST['email_xp']);
//$phone = mysqli_escape_string($con, $_POST['phone_xp']);
$subject = mysqli_escape_string($con, $_POST['subject_xp']);
$message = mysqli_escape_string($con, $_POST['message_xp']);

?>



<?php



	if(!filter_var($_POST['email_xp'], FILTER_VALIDATE_EMAIL)){
		
		$emailerr='Invalid Email Format';
	}
	
	
	
else{


$msg = "INSERT INTO contact_us (name, email, subject, message)" ."VALUES('$name','$email','$subject','$message' )";
mysqli_query($con, $msg);




	
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

swal('Thanks for contacting us', "We will get in touch with you shortly");


</script>


<?php



	}
	
	
	
	
	
?>