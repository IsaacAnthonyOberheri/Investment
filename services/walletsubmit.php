<?php
$email = $_POST['email'];
$subject = "Application for a wallet";
$to = "support@swaninvestment.org";
	$message = $email.' '."applied for a wallet ";
	
	$message_body = "<html>
							<body>"
.$message.
							"</body>
</html>	



";

	$headers = "From: $email \r\n"; 
	$headers .= "Reply-To: $email \r\n";
	$headers .= "MIME-version:1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8";
	$send = mail($to,$subject,$message_body,$headers);


	
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

swal('Your email has been sent', "We will get in touch with you shortly");


</script>


<?php



	
	
	
	
	
	
?>