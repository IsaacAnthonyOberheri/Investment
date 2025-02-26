<?php
session_start();
require 'dbConfig.php';

?>


<?php
$pin_checked = $_GET['pin'];

$sql = mysqli_query($con, "SELECT * FROM registration_client WHERE pin_reset_new = '$pin_checked' " );
$_SESSION['new'] ="";
	while($user = mysqli_fetch_array ($sql, MYSQLI_ASSOC)){
	$email_pin_checked = array($user['email']);
	$email_pin_checked2 = array($_SESSION['pin_email']);
	$result_email = array_intersect($email_pin_checked, $email_pin_checked2);
	
	$_SESSION['new'] .= implode(',', $result_email);

	//print_r($email_pin_checked);
	//echo $_SESSION['new'];
}

	
//echo $_SESSION['new'];
	


if($_SESSION['new'] != ""){
//echo 'Pin valid';
}




else{
	echo 'invalid pin, visit your email';
	$_SESSION['new'] = 'casted';
}
?>