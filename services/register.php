<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
require 'dbConfig.php';

?>


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Swan Investment| Cutting Edge Strategy with Digital currencies</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
   <link href="img/swanlogo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link rel='stylesheet' type='text/css' href='register.css' >

  <!-- Google Fonts -->

<style>


</style>
</head>
<body>



<div class="row">

<div class="column">
  <img src='assets/img/login.jpeg'>
</div>







<div class="column">


<div class='form'>
	<a href='/index.php'><div class='swan_logo'><img src='img/swanlogo.png'></div></a>
  <br>

  <div id='head2'>Open up your Swan Investment</div>
  <div id='head2'>Account now</div>
  <div id='head3'>Already Signed Up?   <span id='sign'> <a href='login.php'>Log in</a> </span></div>
  <div id='password'><i class="bi bi-person" style='padding-top:11px;'></i> <input type='text' id='firstname'class='password' oninput='first()' name='firt_name' placeholder='  First name' onblur="this.placeholder=' First name'" onfocus="this.placeholder='' "></div>
   <span id='err_firstname'></span>

  <div id='password'> <i class="bi bi-person" style='padding-top:11px;'></i> <input type='text' id='lastname' class='password' name='last_name' oninput='last()' placeholder='  Last name' onblur="this.placeholder=' Last name'" onfocus="this.placeholder='' "></div>
    <span id='err_lastname'></span>

   <div id='email'><i class="bi bi-envelope" style="color:;  padding-top:11px;"></i> <input type='email' class='email' id='email2' oninput='fx()' name='email' placeholder=" Email address" onblur="this.placeholder='Email address'" onfocus="this.placeholder='' " > </div>
  <span id='searchresult'> </span>

  <div id='password'><i class="bi bi-key-fill" style="color:;  padding-top:11px;"></i> <input type='password' class='password' id='first' oninput = 'confirm2()' name='password' placeholder='  Password' onblur="this.placeholder=' Password'" onfocus="this.placeholder='' "></div>

  <div id='password'><i class="bi bi-key-fill" style="color:;  padding-top:11px;"></i> <input type='password' class='password' id='confirmp' oninput = 'confirm()' name='confirm_password' placeholder='  Confirm password' onblur="this.placeholder=' Confirm password'" onfocus="this.placeholder='' "></div>
  <span id='err_confirm_password'></span>

  <div id='submit'><i class="bi bi-box-arrow-in-right " style="color:white;  padding-top:11px;"style=' '></i> <input type='submit' style='color:white;'class='submit' onclick='sumit()' name='submit' value='Sign Up'></div>

  <div id='status'>
  </div>
  <!-- "status" confirmation of a successful registration via ajax request -->

</div>

</div>


</div>



<script>
//register email search function validation
function fx(){
	var search = document.getElementById('email2').value;
	var url = 'searchmail.php?n= '+search;


var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		document.getElementById('searchresult').innerHTML = xmlhttp.responseText;


				if (search.length < 1){

	document.getElementById('searchresult').innerHTML  = " ";

}
	}


}

	xmlhttp.open('GET', 'searchmail.php?n='+search, true);
	xmlhttp.send();

}



</script>

<script>



//registration function validation
//submission


function sumit(){
  //registration function validation
  //submission




	//alert('good');
	var first = document.getElementById('firstname').value;
	var lastname = document.getElementById('lastname').value;
	var firstp = document.getElementById('first').value;
	var confirmp = document.getElementById('confirmp').value;
	var result = document.getElementById('searchresult').innerHTML;
  //the return validation from ajax request on the mail


	//alert(result);
	var search = document.getElementById('email2').value;
  //value of the inputed mail


	if (first == ''){
		document.getElementById('err_firstname').innerHTML = 'empty field?';
	}

		if (lastname == ''){
		document.getElementById('err_lastname').innerHTML = 'empty field?';
	}

	if ((firstp != confirmp) || (firstp == '') || (confirmp == '')){
		document.getElementById('err_confirm_password').innerHTML = 'Password does not match';

	}

	if( (first != "") && (lastname != "") && (search ) && (result.length < 5) && (firstp == confirmp) ){
		//alert('good');



	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		document.getElementById('status').innerHTML = xmlhttp.responseText;
		
		
	document.getElementById('firstname').value = "";
	document.getElementById('lastname').value = "";
	document.getElementById('email2').value = "";
	document.getElementById('first').value = "";
	document.getElementById('confirmp').value = "";


	}


}

	xmlhttp.open('GET', 'registerlogs.php?email='+search+ "&firstname=" +first+ "&lastname=" +lastname+ "&password=" +confirmp, true);
	xmlhttp.send();






	}
}



</script>











<script>



function confirm2(){

	var firstp = document.getElementById('first').value;
	var confirmp = document.getElementById('confirmp').value;
	if (firstp != confirmp){

		//alert('not same');
		document.getElementById('err_confirm_password').innerHTML = 'Password does not match';
	document.getElementById('err_confirm_password').style.color='red';
	}

	else if(firstp == confirmp){

		document.getElementById('err_confirm_password').innerHTML = 'Password Confirmed';
		document.getElementById('err_confirm_password').style.color='blue';
	}
}









function confirm(){

	var firstp = document.getElementById('first').value;
	var confirmp = document.getElementById('confirmp').value;
	if (firstp != confirmp){

		//alert('not same');
		document.getElementById('err_confirm_password').innerHTML = 'Password does not match';
	document.getElementById('err_confirm_password').style.color='red';

	}

	else if(firstp == confirmp){

		document.getElementById('err_confirm_password').innerHTML = 'Password Confirmed';
		document.getElementById('err_confirm_password').style.color='blue';
	}
}




</script>

<script>
function first(){
	document.getElementById('err_firstname').innerHTML = '';
}
</script>

<script>
function last(){
	document.getElementById('err_lastname').innerHTML = '';
}
</script>






</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=tryresponsive_breakpoints by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:07:53 GMT -->
</html>
