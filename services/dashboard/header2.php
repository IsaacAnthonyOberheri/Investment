<!doctype html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body{background-color:#dce4db;}
#allhead{position:fixed; margin:0 auto;  width:100%; }
ul{ margin:0 auto;  padding-bottom:20px;   }
#named{float:right; }
#named1{float:left;}
li{float:left; padding-right:65px;  list-style-type:none;}
#firstnav { width:90%; color:white; height:50px;  }
#firstnav2{background-color:#106eea; width:100%;}
#firstnav li{ height:30px; margin-top:30px;}

.logo{font-size:30px; font-weight:bold; font-family:"Poppins",sans-serif;}
#firstnav .logo{margin-top:20px;}

#secondnav{width:90%; height:20px; margin-top:0px;}
#secondnav2{background-color:white;width:100%; }

#secondnav ul{}
#secondnav li{height:20px;  margin-top:10px;}
.menu{display:none;}


@media screen and (max-width: 700px){
	#named{float:right; }
   #allhead{position:fixed;  }
    li {float: none; display:block; }
	#firstnav {background-color:#106eea; margin-left:-20px; height:50px; margin-top:0px; }
	#secondnav{background-color:white; margin-left:-20px;  display:none; height:220px; margin-top:-10px;}
	.logo{font-size:25px; font-weight:bold; font-family:"Poppins",sans-serif;}

	#secondnav li{padding-top:10px;}
	#named{margin-top:-220px; margin-right:-30px;}
	.menu{display:block;}
}
</style>
<body id='allhead'>
<div id='firstnav2'>
<ul id='firstnav'>
<div>
<li id='named1' class='logo'>Blockcryptdeck</li>
<li id='named' class='menu' onclick='menu()'><i class="fad fa-bell"></i></li>
<li id='named' class='profile'>profile2</li><br>
</div>
</ul>
</div>
<div id='secondnav2'>
<ul id='secondnav'>
<li><div>Dashboard</div></li>
<li><div>Deposit</div></li>
<li><div>Withdraw</div></li>
<li><div>Transactions</div></li>
<li><div>My Investments</div></li>
<li><div>Investments</div></li>
</ul>
</div>
<script>
function menu(){
document.getElementById('secondnav').style.display = 'block';
}
</script>
</body>





</html>