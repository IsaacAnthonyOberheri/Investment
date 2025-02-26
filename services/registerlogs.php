<?php
session_start();
require 'dbConfig.php';


$con=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName ) or die ('sorry it cannot connect to database');

//$con=mysqli_connect('127.0.0.1','root','','crypto_block_deck') or die ('sorry it cannot connect to database');
$email = $_GET['email'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$password = $_GET['password'];
$verifiedkey = md5 (time().$password);
$verifiedstatus = 0;
$datecreated = date("h:i:s A,").' '.date("Y-m-d.");
$referral_link = 'https://swaninvestment.org/?ref='.rand(0, 100).md5(time().$firstname.$lastname);


 $select = "SELECT * FROM registration_client WHERE email = '$email' ";
 $result = mysqli_query($con, $select ) or die ($mysqli->error());



	$headers = "From: support@swaninvestment.org\r\n";
	$headers .= "Reply-To: support@swaninvestment.org\r\n";
	$headers .= "MIME-version:1.0\r\n";
	$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";

	$to = $email;
	$subject = "Email Verificaton";
	$message_body = "<html>
	
							<body>

  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
<div style='background-color:#f5b5fc;width:80%; height:340px; margin-left:auto;margin-right:auto;



'>

<div style='background-color:#071A52; width:100%; height:100px; display:flex; justify-content:center;align-items:center;'>
<img src='https://swaninvestment.org/services/img/swanlogo2.png' style='
width:100px; height:70px; margin-left:auto; margin-right:auto; margin-top:10px;



' >
</div>

<div style='width:70%; margin-left:auto; margin-right:auto; font-family:roboto; margin-bottom:15px;'>
<p style='font-weight:bold; font-size:15px;'>Hi $firstname,</p>
<p style='display:flex; width:100%;line-height:20px;font-family:roboto; font-size:13px; justify-content:center; margin-left:auto; margin-right:auto;'>
Welcome to Swan Investment,
Kindly click on the verification button to validate your email.
</p>

<div style='width:100%; background-color:; display:flex; justify-content:center; height:30px; margin-left:auto; margin-right:auto;'>

<a href='https://swaninvestment.org/services/verify.php?verifiedkey=$verifiedkey'><button type='button' style='width:200px;word-spacing:5px; border-style:none; box-shadow:3px 4px 10px black; background-color:#106eea; color:white; font-size:15px; font-family:roboto; height:40px;'>Verify Email</button></a>

</div>

</div>



</div>


</body>


							
							
							
							

</html>
";

	$send = mail($to,$subject,$message_body,$headers);


  $sql = "INSERT INTO registration_client (id, email, firstname_xp, lastname_xp, confirm_password, verifiedkey, verifiedstatus, datecreated)"
	."VALUES('','$email','$firstname','$lastname','$password','$verifiedkey','$verifiedstatus','$datecreated')";


  $sql_dashboard = "INSERT INTO dashboard (id, email, first_name, last_name, balance, active_deposit, bonus, referral_link)"
	."VALUES('','$email','$firstname','$lastname', 0, 0, 0,'$referral_link')";


	mysqli_query($con, $sql);
  mysqli_query($con, $sql_dashboard);




	$message = "Hi $firstname, a verification link has
	been sent to your mail, kindly visit your inbox or spam folder and click on the
	verification link to validate your email, Thank you";
	echo $message;









?>
