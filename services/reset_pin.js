function show_next(){
	 //alert('go');
	
var input_header = document.getElementById('input_reset_header');	
input_header.innerHTML = 'Please enter the PIN we just sent to your email';

var input_field = document.getElementById('input_field');
//input_field.setAttribute('type', 'number');


input_field.style.width = '100px';




 



var circle = document.getElementsByClassName('circle')[1];
circle.style.border = '3px dashed #106eea';

var pseudo = document.getElementsByClassName('reset2')[0];

pseudo.classList.add('res2','res22');




//fetching first data out and sending to php script for emailing

var first_value = document.getElementById('input_field').value;

//alert(first_value);



	
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		
		//alert('food');
		


	}


}

	//xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
	
	xmlhttp.open('GET', 'submit_reset.php?email='+first_value, true);
	xmlhttp.send();



input_field.value='';



	


//end of fetching first data out


document.getElementById('show_next').setAttribute('onclick', 'show_next1()');


	//alert('ok');


	 
 }
















function show_next1(){
	
	
	
	
 var pseudo = document.getElementsByClassName('reset3')[0];
	 pseudo.classList.add('res3');

	
var circle = document.getElementsByClassName('circle')[2];
circle.style.border = '3px dashed #106eea';





		 
var input_header = document.getElementById('input_reset_header');	
input_header.innerHTML = 'Enter new password';

//password and confirm password section
var input_field = document.getElementById('input_field');
input_field.setAttribute('type', 'password');
input_field.setAttribute('oninput', 'pcheck()');

var new_field_password = input_field.classList.add('new_password');

input_field.style.width = '80%';


var confirm_password = document.getElementById('input_field2');
confirm_password.setAttribute('oninput', 'pcheck()')

var new_field_confirmpassword = confirm_password.classList.add('new_confirm_password');


confirm_password_header.style.display = 'block';

var confirm_password = document.getElementById('confirm_password');
confirm_password.style.display = 'block';

//end of password and confirm password section

var reset_input_all = document.getElementsByClassName('reset_input_all')[0];
reset_input_all.style.height = '290px';
	



document.getElementById('show_next').setAttribute('onclick', 'show_next3()');
document.getElementById('show_next').innerHTML = 'Submit';







//fetching pin data out and sending to php script for emailing

var input_field = document.getElementById('input_field');

input_field.classList.add('pin_value');


var pin_value = document.getElementsByClassName('pin_value')[0];

var pin_reset = pin_value.value;
//alert(pin_reset);



	
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		
		document.getElementById('searchresult').innerHTML = xmlhttp.responseText;
		//alert('food');
		


	}


}

	//xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
	
	xmlhttp.open('GET', 'pin_reset.php?pin='+pin_reset, true);
	xmlhttp.send();






	


//end of fetching first data out
























		 
}
	
	
	
	











function pcheck(){
	document.getElementById('searchresult').style.display = 'none';
	
	
var firstp = document.getElementsByClassName('new_password')[0].value;
	var confirmp = document.getElementsByClassName('new_confirm_password')[0].value;
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





	
function show_next3(){
	
	document.getElementById('err_confirm_password').style.display = 'none';
	
var password1 = document.getElementsByClassName('new_password')[0].value;
var password2 = document.getElementsByClassName('new_confirm_password')[0].value;
	
	//password2.style.border = '2px solid red';
	
	if (password1 == password2){
		//alert('go');
		
		
		
		
		
			
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		
		document.getElementById('searchresult_change').innerHTML = xmlhttp.responseText;
		//alert('food');
		


	}


}

	//xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
	
	xmlhttp.open('GET', 'password_reset.php?new_password='+password1, true);
	xmlhttp.send();



	}
	



		 
}
	
	
	
	
