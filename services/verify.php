<?php
session_start();
require 'dbConfig.php';

?>
<?php
//$update = "";

?>

<?php
//$con=mysqli_connect('127.0.0.1','blocmulr_crypt','encrypt2021','blocmulr_crypto_block_deck') or die ('sorry it cannot connect to database');
$con=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName ) or die ('sorry it cannot connect to database');

$vkey = $_GET['verifiedkey'];
if (isset($_GET['verifiedkey'])){
	
	$result = mysqli_query($con, "SELECT * FROM registration_client WHERE verifiedstatus = 0 LIMIT 1" );
	if (mysqli_num_rows($result)==1){
	$update = mysqli_query($con, "UPDATE registration_client SET verifiedstatus = 1 WHERE verifiedkey = '$vkey' LIMIT 1 ");
	
	}
	
	
	
}

if($update){
	$_SESSION['validated']= 'Your email has been verified, you can now successfully log in';
		header ("location:login.php");
		//echo 'your email has been verified';	
	}
	
	
else {
	
	$_SESSION['validated'] = 'This account is invalid or already verified';
	header ("location:login.php");
}


?>