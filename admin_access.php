<?php
session_start();
require 'dbConfig.php';

?>
<!doctype html>
<head>
<link rel='stylesheet' type='text/css' href='admin.css'>
 <title>Swan Investment | Cutting Edge Strategy with Digital currencies</title>
   <link href="img/swanlogo.png" rel="icon">
   <link rel='stylesheet' type='text/css' href='login.css'>
   
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src='admin.js'></script>

</head>

<body>
<section class='header'>
<div class='header_one'>
<div class='logo'><img src='img/swanlogo2.png'></div>
<div class='all_investors'> All investors </div>

</div>

</section>

<section class='greet'>
<div id='greetings' class='greetings'> </div>

</section>


<script>



const time = new Date().getHours();
let greeting;
if (time < 8) {
  greeting = "Good morning";
} else if (time < 13) {
  greeting = "Good day";
} else {
  greeting = "Good evening";
}
//alert(time);
document.getElementById("greetings").innerHTML = greeting;
</script>




<section class='search'>
<div class='search_investor'>
<input type='text' id='user_id' placeholder='Enter Investor Email'><button type='button' onclick='search()'>Enter</button>
</div>



</section>


<section class='investors_title'>

<div class='investors_header'>

<button type='button'>Potential Investors </button>

</div>


</section>

<section class='deposit_confirmation'>

<div class='deposit_confirm'>
Deposit was successful
</div>


</section>


<section class='control_buttons'>
<button type='button' id='edit' onclick='edit()' disabled>Edit</button>
<button type='button' id='update' onclick='update()' disabled>Deposit</button>

<script>
function edit(){
	document.getElementById('update').disabled = false;
	document.getElementById('amount_deposit').style.display = 'block';
	document.getElementById('amount_plan').style.display = 'none';
	var investment_balance = document.getElementsByClassName('investment_balance')[0];
	var investment_plans = document.getElementsByClassName('investment_plans')[0];
	investment_balance.innerHTML = 'New Deposit';
	investment_plans.innerHTML = 'Choose Investment Plans';
	
	//alert('edit');
	
	
	
}

</script>




<script>
function update(){
	
	//alert('go');
	var select_plans = document.getElementsByClassName('select_plans')[0];
	var i = select_plans.selectedIndex;
	//alert(i);
	var select_plans_value = select_plans.options.item(i).value;
	//alert(select_plans_value);
	
	var amount_deposit = document.getElementById('amount_deposit');
	var amount_deposit_value = amount_deposit.value;
	//alert(amount_deposit_value);
	
	var email_value = document.getElementsByClassName('email_value')[0];
	var email_value_value = email_value.innerHTML;
	//alert(email_value_value);
	
	//var search = document.getElementById('user_id').value;
	//alert(search);
	
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		var response = JSON.parse(xmlhttp.responseText);
		var starter = response.deposit.starter;
		var bronze = response.deposit.bronze;
		var silver = response.deposit.silver;
		var gold = response.deposit.gold;
		var total = starter - -bronze - -silver - -gold;
		//document.getElementById('updated').innerHTML = total;
		document.getElementsByClassName('sum_value')[0].innerHTML = total;		




	}


}

	//xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
	
	xmlhttp.open('GET', 'admin_deposit.php?email='+email_value_value+ "&plan=" +select_plans_value+ "&deposit_amount=" +amount_deposit_value, true);
	xmlhttp.send();


var deposit_confirm = document.getElementsByClassName('deposit_confirmation')[0];

deposit_confirm.style.transition = 'all 1s';
deposit_confirm.style.visiblity = 'visible';
deposit_confirm.style.opacity = '1';

	document.getElementById('amount_deposit').style.display = '';
	
	document.getElementById('update').disabled = true;

var deposit_confirm_disappear = setTimeout(disappear, 3000);

function disappear(){
	
var deposit_confirm = document.getElementsByClassName('deposit_confirmation')[0];

	deposit_confirm.style.visibility = 'hidden';
	deposit_confirm.style.transition = 'all 3s';
	
}

if(deposit_confirm_disappear = true){
	 //clearTimeout(disappear);
	
}






}

</script>












</section>


<div class='row'>

<div class='column'>

<div class='column_left'>

<div id='updated'></div>

<div class='left_column1'>
<div class='email_header'>Investor Email</div>

<div class='email_value' id='email_value'> </div>




</div>

<div class='left_column2'>

<div class='investment_plans'> Investment Plans</div>
<div class='select_p'>

<select class='select_plans' onchange='select_plans()'>
<option>Select</option>
<option id='starter'>starter</option>
<option id='bronze'>bronze</option>
<option id='silver'>silver</option>
<option id='gold'>gold</option>

</select>

</div>

</div>

</div>


</div>








<div class='column'>

<div class='column_right'>

<div class='right_column1'>


<div class='investment_balance'> Investment Balance($)</div>


<div class='balance_value' id='balance_value'>
<input type='number' id='amount_deposit'>

<select id='amount_plan' disabled>
<option id='select_val'  > </option>
<option id='starter_amount' style='padding-left:13px;'> </option>
<option id='bronze_amount' style='padding-left:13px;'> </option>
<option id='silver_amount' style='padding-left:13px;'> </option>
<option id='gold_amount' style='padding-left:13px;'> </option>
</select>
 </div>

</div>


<script>
function search(){
	var search = document.getElementById('user_id').value;
	//alert(search);
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		var response = JSON.parse(xmlhttp.responseText);
		
		//alert('food');
		var email = response.list.email;
		var firstname = response.list.firstname;
		var lastname = response.list.lastname;
		var starter = response.list.starter;
		var bronze = response.list.bronze;
		var silver = response.list.silver;
		var gold = response.list.gold;
		var activedeposit = response.list.activedeposit;
		var balance = response.list.balance;
		
		document.getElementById('email_value').innerHTML = email;
		document.getElementById('starter_amount').innerHTML = starter;
		document.getElementById('bronze_amount').innerHTML = bronze;
		document.getElementById('silver_amount').innerHTML = silver;
		document.getElementById('gold_amount').innerHTML = gold;
		var sum_val = [starter,bronze,silver,gold];
		document.getElementsByClassName('sum_value')[0].innerHTML = sum_val.reduce(myfunc);
		
		function myfunc(total, num){
			return total - -num;
		}

	}


}

	//xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
	
	xmlhttp.open('GET', 'update_edit.php?email='+search, true);
	xmlhttp.send();

document.getElementById('edit').disabled = false;

}


</script>




<div class='right_column2'>



<div class='investment_balance'> Sum balance for all investments($)</div>


<div class='sum_value'> </div>

</div>


<script>

function select_plans(){
	
	var select_plans = document.getElementsByClassName('select_plans')[0];
	var i = select_plans.selectedIndex;
	//alert(i);
	
	var select_plans_amount = document.getElementById('amount_plan');
	var plan = select_plans_amount.options.item(i).text;
	
	document.getElementById('select_val').innerHTML = plan;
}

</script>


</div>

</div>




<script>



</script>


</body>

</html>