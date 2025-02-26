<?php
require 'header_services.php';

?>



    <!-- Services -->
    <section id ="services" class="services">
      <div class="container" style=' font-style:arial;  line-height:35px;' >

<link rel='stylesheet' href='digitalasset.css' type='text/css' >



<!-- added value -->
<div class="row">
   <div class="middle" ><p><h1>Digital Asset Management</h1>
     <span class='future'>
   <h4>Get Your Unique Wallet</h4></span></p>
  <p>
  <span class='future1'></span>
  </p>


<p>
A Comprehensive approach to investment in <a href='digitalassets.php' style='text-decoration:underline;'>digital assets </a> starts with the knowledge of what <a href='cryptowallet.php' style='text-decoration:underline;'>crypto wallets </a> are.
This is an integral part of using cryptocurrency as they are one of the basic infrastructure that makes it possible to store, send and receive funds through blockchain networks. Each wallet type has its advantages and disadvantages, so it is crucial to understand how they work before moving your funds.
</p>
<p>
  You can earn cryptocurrency without having to put down money for it. Bitcoin miners receive Bitcoin through their mining wallets as a reward for completing "blocks" of verified transactions which are added to the blockchain.

</p>

<div id="button-new" class ="button-new">
<button type='button' style=' font-size:14px; ' id='getwallet' onclick='getwallet()'> Get Wallet</button>
 </div>

 <br>
 <?php
 if(isset($_POST['email']) && !empty($_POST['email'])){

require 'walletsubmit.php';
 }

 ?>



 <script>
function getwallet(){
	document.getElementById("button-new").innerHTML = '<div id="email" style="height:40px; width:288px;    background-color:white; box-shadow:0px 15px 10px #e3dcdc;"><form method="POST"><i class="bi bi-envelope"></i><input type="email" onchange="myenable()" style="width:200px; outline:none; border:none; height:40px;" class="email" name="email"  placeholder=" Enter your email address" onblur="this.placeholder=\' Enter your email address\'" onfocus="this.placeholder=\'\' " /> <input type="submit" class="submit" name="submit" style="background-color:#106eea; border:none; position:absolute; width:70px; height:40px; outline:none; border-radius:0px 5px 5px 0px;"  value="Submit"> </form> </div>';

 document.getElementsByTagName("input").style.boxShadow ='0px 15px 10px #e3dcdc';
}

</script>

<iframe width="100%" height="534" src="https://www.youtube.com/embed/FIUlNHyEOzE?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br><br><br><br>






<h3> Digital Asset Trading</h3>
<h5>Expert Guidance</h5>

<p><a href='digitalassettrading.php' style='text-decoration:underline;'>Learn to trade bitcoin</a> and other cryptocurrencies for profit - day trade or swing trade crypto!

Our clients are our number one priority, and our services prove just how committed we are to their success. Contact our experts today to
learn more about how you can earn money from trading cryptocurrency.
</p>


<div class="button-new">
<a href="https://binance.com" target='_blank' ><button type='button' style=' font-size:14px; width:120px;'>Start Trading</button> </a>
 </div>
 <br><br>
  <iframe width="100%" height="534" src="https://www.youtube.com/embed/8jEMLsLA9_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <br><br><br><br>






<h3> OTC Trade Desk</h3>
<h5>Personalized Trading Service</h5>

<p>The Over-the-counter (OTC) desk is ideal for clients who wish to conduct large orders and do not want to place them on the public exchange causing price disruption. By using the OTC desk, clients can directly interact with Traders and facilitate specific transaction prices and details.
 We offer deeper liquidity and a private, more personalized service to institutions and high net-worth individuals needing to conduct large orders. Whether you are trading blocks of $100,000, $1,000,000 or 2,000 Bitcoin, the OTC desk will provide you with execution and settlement services that are discrete, secure and ultra-competitive.  Our team of experienced traders are strategically located around the globe and are available 24 hours per day, seven days per week. We can ensure you that you will receive excellent service, prompt settlement, and high levels of professionalism from our entire team.
</p>
 <br>
 <div class='otc'><img src='cryptocoins.jpeg'  width='100%' height='534'> </div>
<br>
<div class="button-new">
<a href="/contactus.php" target='_blank' ><button type='button' style=' font-size:14px; width:120px;'>Get a quote</button> </a>
 </div>


 <br><br><br><br>
 </div>





 <div class="middle" ><h3>    </h3>

 <p>
 <span class='future1'></span>
 </p>


 <p>
 </p>












      </div>
    </section><!-- End Services Section -->


<?php

require 'footer2.php';

?>