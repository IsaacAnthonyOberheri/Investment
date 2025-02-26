<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
require 'header.php';
?>


<style>
/* Create two equal columns that floats next to each other */
.column {
	font-family:times-new-roman;
    float: left;
    width: 28.5%;

margin-right:10px;
margin-right:10px;
	margin-top:10px;
}
.row{display:flex; justify-content:center;}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


.row #dashboard{font-weight:bold; font-size:20px; color:#3a352d; font-family:arial;}
#balance,#deposit,#bonus{margin-left:20px; color:#3a352d; position:absolute; margin-top:25px; font-size: 20px; font-weight:bold;}
#balance2{float:right; padding-right:15px;  margin-top:100px; color:#3a352d;   font-size: 4vh; font-weight:bold;}
#deposit2{float:right; padding-right:15px;  margin-top:90px; color:#3a352d;   font-size: 4vh; font-weight:bold;}
#percent{background-color:#52d444; font-family:arial; color:#ffff; border-radius:10px; display:flex; justify-content:center; height:19px; font-size:13px; font-weight:bold; padding-top:3px; width:66px; position:absolute; }
#secondcolumn #percent{margin-top:110px; margin-left:20px;}
#line{width:25.5%;margin-left:1.4%;   margin-top:170px; background-color:#52d444; height:5.5px; border-radius:4px;  position:absolute; }


#bonus2{float:right; padding-right:10px;  margin-top:100px; color:#3a352d;   font-size: 4vh; font-weight:bold;}
#available1{float:left; margin-left:-67px;  margin-top:45px; color:#686156;  position:absolute; font-size: 2vh; font-weight:;}
#dashboard{margin-top:80px;}
body{background-color:#efebf8;}
#firstcolumn,#secondcolumn,#thirdcolumn{

	background-color:#fff;  height:200px;
}


#about1{float:right; padding-left:40px; text-align:;}
#about2{float:right; padding-left:40px; text-align:center;}
#about3{float:right; padding-right:10px; text-align:center;}


#secondrow{
	background-color:#fff; width:87%;margin-top:40px; height:50px;
	text-align:center; padding-top:30px; color:#3a352d; font-weight:bold;
}


#tablerow{
	background-color:#fff; width:87%;margin-top:40px; height:75%;
	text-align:center; padding-top:30px; color:#3a352d; font-weight:bold;
}


table, td, th {
    border-top: 1px solid #c9c7c4;
}

table {
	font-family:arial;
	margin:0 auto;
    border-collapse: collapse;
    width: 95%;
}

th {
    height: 40px; font-weight:bold;
	text-align:left; font-size:16px;
	color:#5a5854;
}
caption{
	padding-bottom:20px; font-size:2.5vh;
}

#status{background-color:#52d444; font-size:12px; padding:2.5px; color:white; border-radius:4px;  text-align:center;}
#obj:hover{background-color:#ebe7e1;}
td{
	text-align:left;
	height:50px;
	font-size:14px;
	color:grey;
}

 #year{color:#817e79; font-size:14px; margin-left:6%; font-weight:bold;}
 #about3{color:#817e79; font-size:14px; margin-left:10%; font-weight:bold;}
 #about3 a{color:#817e79; font-size:14px; text-decoration:none; font-weight:bold;}
 #about3 a:hover{color:#a8a5a0;}








@media screen and (max-width:800px) {
	#dashboard{margin-top:30px;}
	#year{text-align:center;}

	 #year{color:#817e79; font-size:14px; margin-left:1%; font-weight:bold;}
	#about3{color:#817e79; font-size:14px; margin-left:0%; font-weight:bold;}

th{font-size:14px;}
td{font-size:12px;}
table{width:900px;}


	#secondrow{width:94%;}
	#tablerow{width:94%;  margin-top:0px; margin-bottom:270px;}
	#line{width:89%; }
.row{display:block;}

    .column {
        width:94%;
		margin-left:10px;
    }


	#about3{}

}






@media screen and (max-width:500px) {
	#dashboard{margin-top:30px;}

	#secondrow{width:94%;}
	#tablerow{width:94%; margin-bottom:270px; margin-top:0px;}
	#line{width:89%; }
.row{display:block;}

    .column {


        width:94%;
		margin-left:10px;
    }


	 #year{color:#817e79; font-size:14px; margin-left:2%; font-weight:bold;}
	#about3{color:#817e79; font-size:14px; margin-left:0%; font-weight:bold;}
	#about3 a{color:#817e79; text-decoration:none;}

}

</style>

</head>

<br>

<body style=''>
<div class='row'>

<div class='column' id='dashboard' >
My Investments
</div>
<br>
<br>
<br>


<div class='column' id='' >
</div>


<div class='column' id='' >
</div>


</div>



<div class='row'>
<div class='column' id='tablerow'  style="overflow-x:auto; ">

<table>

  <tr>
    <th>Amount</th>
    <th>Return</th>
    <th>Min expected</th>
    <th>Max expected</th>
    <th>Expected Profit</th>
    <th>Start date</th>
    <th>End date</th>
    <th>Status</th>
  </tr>
  <?php
$email = $_SESSION['email'];
$select = "SELECT * FROM my_investment WHERE email = '$email' ";
$result =  mysqli_query($con, $select);
while($user = mysqli_fetch_array($result)){
	echo "
  <tr id='obj'>
    <td>$$user[amount]</td>
    <td>$user[returns]</td>
    <td>$$user[min_expected]</td>
    <td>$$user[max_expected]</td>
    <td>$$user[profit_returned]</td>
    <td>$user[start_date]</td>
    <td>$user[end_date]</td>
    <td><span id='status'>$user[status]</span></td>
  </tr >

";

}





?>

</table>
<br><br>
</div>

</div>

<div class='row' style='margin-top:24%; background-color:#e4e2e8; height:12%; padding-bottom:10px; padding-top:9px;' >
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


</div>

</body>








</html>
