<?php
session_start();
require 'dbConfig.php';

?>

<?php
$_SESSION['pin'] = rand(0, 10000);

$_SESSION['pin_email']=$_GET['email'];



//$msg = "INSERT INTO contact_us (name,email,subject,message,date)" ."VALUES('$name','$email','$subject','$message','$date')";
$msg = "UPDATE registration_client SET pin_reset_new = '$_SESSION[pin]' where email = '$_SESSION[pin_email]' ";
$update = mysqli_query($con, $msg);


$sql = mysqli_query($con, "SELECT * FROM registration_client WHERE email = '$_SESSION[pin_email]' ORDER BY id DESC" );

$user = mysqli_fetch_array($sql, MYSQLI_ASSOC);
	$email_checked = array($user['email']);
	$firstname = $user['firstname_xp'];




if($update){


	$headers = "From: support@swaninvestment.org\r\n";
	$headers .= "Reply-To: support@swaninvestment.org\r\n";
	$headers .= "MIME-version:1.0\r\n";
	$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";

	$to = $_SESSION['pin_email'];
	$subject = "Email Verificaton";
	$message_body = "<html>
	
							<body>

  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
<div style='background-color:#f5b5fc;width:80%; height:260px; margin-left:auto;margin-right:auto;



'>

<div style='background-color:#071A52; width:100%; height:100px; display:flex; justify-content:center;align-items:center;'>
<img src='https://swaninvestment.org/services/img/swanlogo2.png' style='
width:100px; height:70px; margin-left:auto; margin-right:auto; margin-top:10px;



' >
</div>

<div style='width:70%; margin-left:auto; margin-right:auto; font-family:roboto; margin-bottom:15px;'>
<p style='font-weight:bold; font-size:15px;'>Hi $firstname,</p>
<p style='display:flex; width:100%;line-height:20px;font-family:roboto; font-size:14px; justify-content:center; margin-left:auto; margin-right:auto;'>
Welcome to Swan Investment,
This is your reset PIN, $_SESSION[pin]
</p>

<div style='width:100%; background-color:; display:flex; justify-content:center; height:30px; margin-left:auto; margin-right:auto;'>


</div>

</div>



</div>


</body>


							
							
							
							

</html>
";

	$send = mail($to,$subject,$message_body,$headers);






}
















?>