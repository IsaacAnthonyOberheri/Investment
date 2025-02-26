<?php



?><?php
$name = mysqli_escape_string($con, $_POST['name']);
$email = mysqli_escape_string($con, $_POST['email']);
//$phone = mysqli_escape_string($con, $_POST['phone_xp']);
$subject = mysqli_escape_string($con, $_POST['subject']);
$message = mysqli_escape_string($con, $_POST['message']);

?>



<?php



	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		
		$emailerr='Invalid Email Format';
	}
	
	
	
else{


$msg = "INSERT INTO email_list (name, email, subject, message)" ."VALUES('$name','$email','$subject','$message' )";
mysqli_query($con, $msg);




	
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

swal("Congratulations","You have successfully Subscribed to our Newsletter","success");


</script>

<?php



	}
	
	
	
	
	
?>