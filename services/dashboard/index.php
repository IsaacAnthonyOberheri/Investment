<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' type='text/css' href='index.css'>



<style>

</style>

</head>

<?php
require 'header.php';
?>








<br>

<body style=''>
<div class='row'>

<div class='column' id='dashboard' >
Dashboard
</div>
<br>
<br>
<br>

<div class='column' >


</div><div class='column' >

</div>
</div>




<div class='row'>

<div class='column' id='firstcolumn'>
<span id='balance'>Balance</span>
<div id='balance2'><?php echo '$'.$_SESSION['balance_value'].'.00'; ?>
<span id='available1'>Available</span>



</div>
</div>






<div class='column' id= 'secondcolumn'>
<span id='deposit'>Equity Balance</span>
<span id='percent'><span id='percentage_change' style='visibility:;'> </span>%  .<i class="far fa-chart-line"></i></span>
<div id='deposit2'><span id='percentage_change' style='visibility:;'> </span> <span id='equity_value'> </span> 
<span id='available1'>Available</span>
</div>

<span id='line'></span>


</div>
<script>


  let url;
    	let query = "/api/v1/ticker/24hr";
      query += '?symbol=BTCUSDT';
    	url = "https://api.binance.com" + query;


    var xmlhtt;
    	xmlhtt = new XMLHttpRequest();


      xmlhtt.onreadystatechange = function(){

    	if(xmlhtt.readyState==4 && xmlhtt.status==200){

          var priceChangePercent = JSON.parse(xmlhtt.responseText).priceChangePercent;
		  document.getElementById('percentage_change').innerHTML = priceChangePercent;
  }


    }

    	xmlhtt.open('GET', url, true);
    	xmlhtt.send();

//end of bitcoin




</script>

<script>

function opeb(){
 var xmlhttp;
 var valeu = 2;
 var xp = document.getElementById('percentage_change').innerHTML;
		
	xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		var response = xmlhttp.responseText;
		document.getElementById('equity_value').innerHTML = response;
		

		



	}

}
	
	//xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);


xmlhttp.open('GET', 'testvalue.php?per='+xp, true);
	xmlhttp.send();

}

setInterval(opeb, 3000);


</script>






<div class='column' id='thirdcolumn'>
<span id='bonus'>Bonus</span>
<div id='bonus2'><?php echo '$'.$_SESSION['bonus_value'].'.00'; ?>
<span id='available1'>Available</span></div>


</div>



</div>

<?php
//fetching data from tables array_count_values
//$request = mysqli_query($con, "SELECT FROM * dashboard  WHERE  ")





?>



<div class='row'>
<div class='column' id='secondrow'>
<span id='middletext'> Your referral link is <span style='margin-left:5px; color:#071A52; ' class='referral'><?php echo $_SESSION['ref_link'] ?></span> </span>
</div>

</div>


<div class='row'>
<div class='column' id='tablerow'  style="overflow-x:auto; ">

<table>
  <caption style='text-align:left;'>Latest Transaction</caption>
  <tr>
    <th>Date</th>
    <th>Type</th>
    <th>Amount</th>
    <th>Status</th>
  </tr>
  <?php

  $userid = $_SESSION['email'];
 $result = mysqli_query($con, "SELECT * FROM latest_transaction WHERE email = '$userid'" );
 if (mysqli_num_rows($result) < 1){

   echo "

   <tr id='obj'>
     <td></td>
     <td>You have no transactions yet</td>
     <td></td>
     <td></td>
   </tr >

   ";
 }
 else{

 while(	$user= mysqli_fetch_assoc($result)){

  echo "
  <tr id='obj'>
    <td>$user[date]</td>
    <td>Deposit</td>
    <td>$$user[amount].00 </td>
    <td><span id='status'>Completed</span></td>
  </tr >

";

}


}
?>

</table>


<br><br>
</div>

</div>

<div class='row' style='margin-top:40px; background-color:#e4e2e8; height:12%; padding-bottom:10px; padding-top:9px;' >
<div class='column' id='year'>
@Copyright Swan Investments. All Rights Reserved

</div>

<div class='column'>
<span ></span>

</div>

<div class='column' id='about3'>

<span style=''> <a href="/#about">About Us </a></span>
<span style='padding-left:20px;'><a href="/#contact"> Contact Us</a> </span>
<span style='padding-left:20px;'><a href="/services/digitalassetmanagement.php"> Services </a> </span>


</div>




</div>




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/615be4a9d326717cb684c340/1fh7fae1g';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>








</html>
