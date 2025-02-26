<link rel='stylesheet' type='text/css' href='footer/footer2.css'>

<meta content="width=device-width, initial-scale=1.0" name="viewport">


<!--beginning of newsletter-->

<div class='newsletter'>

<div class='newsletter_join'>
  Join Our Newsletter

</div>

<div class='news_input'>
 <input type='text' id='email_news' placeholder=' Enter email' class='input_text'><button type='button' onclick='subscribeletter()'>Subscribe</button>

</div>

</div>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
   <script> 
   //testimonial javascript validation and ajax testimonial form submission  
   
   function subscribeletter(){
	   
		var email_news = document.getElementById('email_news').value;
		var date_news = new Date();
	  
			if (email_news != "")
			{
		
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		document.getElementById('status').innerHTML = xmlhttp.responseText;
		//alert('good');
		
		document.getElementById('email_news').value = "";
		
		
		
		swal('Thanks for subscribing', "");
		


	}


}

	xmlhttp.open('GET', 'subscribe_newsletter.php?email='+email_news+ "&date=" +date_news, true);
	xmlhttp.send();






			}
		
		
	
   }
   
   
   </script>
  
  
















<!--end of footer Newsletter-->



<div class='row'>

<div class='column'>

<div class='left_column'>

<div class='left_column1'>

<div class='company_name'>
Swan Investment
</div>
<div class='address'>
Tower 42, Old Broad Street,<br>
London, EC2N 1HN, <br>
United Kingdom.<br>


</div>
<div class='email_title'>Email</div>
<div class='email'>
support@swaninvestment.org
</div>

</div>



<div class='left_column2'>

<div class='useful_links'>
Useful Links
</div>
<div class='home'><a href='index.php'>Home</a></div>
<div class='services'><a href='#investment' id='invt'> Investment Plan </a></div>
<div class='testimonials'><a href='#testimonials' id='testu'>Testimonials</a></div>

</div>





</div>

</div >

<div class='column'>

<div class='right_column'>

<div class='right_column1'>

<div class='company'>
Company
</div>
<div class='about_us'><a href='about.php'>About Us</a></div>
<div class='about_us'><a href='contactus.php'>Contact</a></div>



</div>



<div class='right_column2'>

<div class='useful_links'>
Privacy Policy
</div>
<div class='home'><a href='terms.php'>Terms of Services</a></div>
<div class='about_us'><a href='privacy.php'>Privacy Policy</a></div>
</div>









</div>

</div>



</div>
<div class='copyright'>
<p>@Copyright <span>Swan Investments</span>. All Rights Reserved</p>
</div>

