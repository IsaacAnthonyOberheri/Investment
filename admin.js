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
	
	xmlhttp.open('GET', 'update_edit.php', true);
	xmlhttp.send();

