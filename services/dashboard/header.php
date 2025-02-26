<?php
session_start();
?>
<?php
require 'dbConfig.php';
?>



 <?php

 if ($_SESSION['email'] && $_SESSION['password'] && $_SESSION['status']==1 ){

 }

 else{

 	header("location:/services/index.php");
 }

 ?>
<?php
//$val = 2;

//script that controls the input
 $userid = $_SESSION['email'];
$result = mysqli_query($con, "SELECT * FROM dashboard WHERE email = '$userid'" );
while(	$user= mysqli_fetch_assoc($result)){
  $_SESSION['id'] = $user['id'];
  $_SESSION['firstname'] = ucfirst($user['first_name']);
  $_SESSION['lastname'] = $user['last_name'];
  $_SESSION['balance_value'] = $user['starter'] + $user['bronze'] + $user['silver'] + $user['gold'];
  $_SESSION['active_value_deposit'] = $_SESSION['balance_value'];
  $_SESSION['bonus_value'] = $user['bonus'];
  $_SESSION['ref_link'] = $user['referral_link'];



}


?>

<!doctype html>
<html>
<head>
	
  <title>Swan Investment| Cutting Edge Strategy with Digital currencies</title>
  <link href="img/swanlogo.png" rel="icon">
  
  <link rel='stylesheet' type='text/css' href='header.css'>

  
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="jquery-3.3.1.min.js"> </script>
</head>
<style>
</style>
<div id='allhead'>

<ul id='firstnav'>



<div>
<li id='' class='menu'>

	<span class='user'>
		<i class="fas fa-user-circle fa-2x" ></i>
		
		</span>
		
		
		
	<span class='menubar' id='menubar'>
		<i class="fas fa-bars fa-2x"  onclick='show()'></i>
		</span> 
		
		
		
<span class='drop-down'>

<i class="fas fa-sort-down fa-x"></i>

</span>
 
 
 <span class='profile1'>
 
	<?php echo $_SESSION['firstname']; ?>
	
	


</span>

<!--yet to be touched...-->


		<span class='drop-down'>
		<div> a </div>
		<div> b </div>
		</span>
		
		
		

</li>

<span class='logout' style=''>

<a href='logout.php'><i class="fas fa-sign-out-alt fa-x"></i> <span class='log_out'>Logout</span></a>


</span>




<li id='named1' class='logo'><a href='index.php'><img src='img/swanlogo2.png'></a></li>

</li>
</ul>
</div>
<br>
<br>
<div id='secondnav2'>

<ul id='secondnav' style='color:#000000; font-weight:bold;'>
<li id='firstlist'><div><span style='padding-right:5px; color:;'><i class="far fa-hotel"></i></span><a href='index.php'>Deposit Dashboard </a></div></li>
<li><div><span style='padding-right:9px;'><i class="far fa-chart-line"></i></span><a href='investments.php'>Investments</a></div></li>
<li><div><span style='padding-right:9px; '><i class="far fa-wallet"></i></span><a href='deposit.php'>Deposit</a></div></li>
<li><div><span style='padding-right:9px;'><i class="fal fa-home-lg"></i></span><a href='withdraw.php'>Withdraw</a></div></li>
<!--<li><div><span style='padding-right:9px;'><i class="fal fa-exchange"></i></span><a href='transactions.php'>Transactions</a></div></li>-->
<li><div><span style='padding-right:9px;'><i class="far fa-suitcase"></i></span><a href='myinvestments.php'>My Investments</a></div></li>

</ul>
</div>

<script>

$("document").ready(function(){

$("#menubar").click(function(){
	$("#secondnav").slideToggle();
});

});
</script>




</div>





</html>
