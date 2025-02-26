<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' type='text/css' href='popup.css'>
<link rel='stylesheet' type='text/css' href='deposit.css'>



<style>

</style>

</head>
<?php
//require 'header.php';
?>
<br>

<body style=''>
<div class='row'>

<div class='column' id='dashboard' >
Deposit
</div>

<br>
<br>
<br>


</div>


<div class='row'>

<div class='column' id='firstcolumn'>
<div id='all'>

<div id='current1'>
<span id='current2'>Current available deposit method is via bitcoins, thank you.
</span>
</div>

<div id='add1'>
<span id='add2'>Select Plan</span>

<span id=''>
<select id='select_plan' onchange='select_plan()'>
<option id='' >Select</option>
<option id='starter' style='padding-left:13px;'>Starter</option>
<option id='bronze' style='padding-left:13px;'>Bronze</option>
<option id='silver' style='padding-left:13px;'>Silver</option>
<option id='gold' style='padding-left:13px;'>Gold</option>
</select>
</span><br>


<span id='add2'>Amount ($)</span>

<span id=''>
<select id='amount_plan' disabled>
<option id='select_val'  >Select</option>
<option id='starter' style='padding-left:13px;'>2,500</option>
<option id='bronze' style='padding-left:13px;'>5,000</option>
<option id='silver' style='padding-left:13px;'>10,000</option>
<option id='gold' style='padding-left:13px;'>30,000</option>
</select>
</span>





<div id='deposit1'>
<button type='button' id='depositbutton' disabled >Deposit </button>
</div>

</div>
</div>


</div>



<script>
function select_plan(){
var select_plan = document.getElementById('select_plan');

var i = select_plan.selectedIndex;

var select_plan_name = select_plan.options.item(i).text;
//alert (i);
var amount_plan = document.getElementById('amount_plan');
var plan = amount_plan.options.item(i).text;
document.getElementById('select_val').innerHTML = plan;


//beginning of pop up value
document.getElementById('plan_value').innerHTML = '$'+plan;
document.getElementById('plan_name').innerHTML = select_plan_name+' '+ "investment plan";
//end of popup value



//button button enabled after onchange event;
document.getElementById('depositbutton').disabled=false;

}

</script>


<script>
document.getElementById("depositbutton").addEventListener("click", function() {
var btn = document.getElementsByClassName('popup_all')[0];
//var blur = document.getElementsByTagName('body')[0];
//blur.classList.add('active');

var blur = document.getElementById('blur');
blur.classList.toggle('active');

blur.classList.add('activated');




});






</script>







<div  class='popup_all' id='blur'>

	<div class='popup_body'>
	
		<div class='popup_content'>
		
		<div class='payment_process'>
		
		<div class ='payment_header'>Payment procedure:</div>
		<div id='bt_addr'><span id='wallet_addr'>bc1qvae68ew7ezmedc64cnkqea</span><span id='second_hf_adr'>mhrtha2gc3883qxz</span> <button type='button' onclick='copy_addr()' id='copy_button'><i class="fas fa-copy" ></i>Copy</button></div>
		
		
		
		<!--script to copy to div innerHTML value to clipboard-->

<script>

    function copy_addr(){


 var copy_icon = document.getElementById('copy_button');
    copy_icon.style.backgroundColor = '#106eea';
    copy_icon.style.color = '#ffffff';
    copy_icon.style.borderStyle='none';
    copy_icon.style.boxShadow='4px 4px 10px black';
    
    str = document.getElementById('wallet_addr').innerHTML;
    str += document.getElementById('second_hf_adr').innerHTML;
    const el = document.createElement('textarea');
    el.value = str;
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    //alert(el.value+' '+'has been copied');
    
		//alert('c');
		
    }
</script>


<!--end script to copy to div innerHTML value to clipboard-->
<div class='all_steps'> 
<p>1. Copy the bitcoin wallet address using the copy icon.</p>
<p>2. Make a deposit of <span id='plan_value'></span> worth of bitcoin for a <span id='plan_name'></span>.</p>
<p>3. Send a screen shot, jpg, png or pdf format to support@swaninvestment.org using your registered email on our platform
along with your full name as it is registered on our platform.</p>
<p>4. After submission, it will take a maximum of 24hrs to validate your deposit, then your investment account 
will be created.</p>

<div class='close_button'>
<button onclick ='crep()'> Close </button>
</div>


</div>


		</div>

	</div>
</div>

</div>



<script>

function crep(){
	
var blur = document.getElementById('blur');
	
	blur.classList.toggle('active');
}



</script>









</div>

<div











<!--footer region-->

<div class='row' style='margin-top:25%; width:100%; padding:0px; background-color:#e4e2e8; height:12%; padding-bottom:10px; padding-top:9px;' >
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

</div>

</body>








</html>
