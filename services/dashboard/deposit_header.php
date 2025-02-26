<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel='stylesheet' type='text/css' href='header_deposit.css'>
<script src="jquery-3.3.1.min.js"> </script>
</head>
<style>

</style>
<div id='allhead'>

<ul id='firstnav'>
<div>
<li id='' class='menu'><span class='user'><i class="fas fa-user-circle fa-2x" ></i></span>
	<span class='menubar' id='menubar'>
	 <i class="fas fa-bars fa-2x"  onclick='show()'></i>
 </span> <span class='profile1'>
	<?php echo ucfirst( $_SESSION['firstname']).' '. ucfirst($_SESSION['lastname']); ?>


</span></li>

<li id='named1' class='logo'>Blockcryptdeck</li>

</li>
</ul>
</div>
<br>
<br>
<div id='secondnav2'>

<ul id='secondnav' style='color:grey; font-weight:bold;'>
<li id='firstlist'><div><span style='padding-right:5px; color:#106eea;'><i class="far fa-hotel"></i></span><a href='index.php'>Deposit Dashboard </a></div></li>
<li><div><span style='padding-right:9px; '><i class="far fa-wallet"></i></span><a href='deposit.php'>Deposit</a></div></li>
<li><div><span style='padding-right:9px;'><i class="fal fa-home-lg"></i></span><a href='withdraw.php'>Withdraw</a></div></li>
<li><div><span style='padding-right:9px;'><i class="fal fa-exchange"></i></span><a href='transactions.php'>Transactions</a></div></li>
<li><div><span style='padding-right:9px;'><i class="far fa-suitcase"></i></span><a href='myinvestments.php'>My Investments</a></div></li>
<li><div><span style='padding-right:9px;'><i class="far fa-chart-line"></i></span><a href='investments.php'>Investments</a></div></li>
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
