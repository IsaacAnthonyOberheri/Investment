<!doctype html>
<html>

<head>


  <title>Swan Investment | Cutting Edge Strategy with Digital currencies</title>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <script src="https://kit.fontawesome.com/7c1792080b.js" crossorigin="anonymous"></script>

  <link rel='stylesheet' href='headercss/style.css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <script src="jquery-3.3.1.min.js"> </script>

  <link href="img/swanlogo.png" rel="icon">
</head>
<div class='all_header_bar'>


  <!--first_line -->
  <div class='first_line'>

    <div class='header_logo2'>
      <a href='index.php'><img src='img/swanlogo2.png'></a>

    </div>

    <div id='menu_bar'>
      <span id='menu_click'><i class="fa fa-bars fa-1g" style="margin-top:-26px;  color:white; font-size:24px;"></i></span>
    </div>

    <ul>

      <li id='login'><a href='services/login.php'>Login</a></li>
      <li id='reg'><a href='services/register.php'>Register</a></li>

      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({
            pageLanguage: 'en'
          }, 'google_translate_element');
        }
      </script>

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <span class='translated'>
        <li class='translate' id="google_translate_element"> </li>
      </span>


    </ul>
  </div>
  <br>

  <!--end of first_line-->


  <!--second line with white background-color-->
  <div class='second_line'>

    <div class='nav_login'>
      <span class='profile_icon'><a href='services/login.php'><i class="fas fa-user-alt"></i></a></span><span class='login_button'><a href='services/login.php'>Login</a></span><span class='register_button'><a href='services/register.php'>Register</a></span>
    </div>

    <span class='header_logo'>
      <a href='/index.php'><img src='img/swanlogo.png'></a>

    </span>
    <ul>

      <li id='home'><a href='index.php'>Home</a></li>
      <li id='contact'><a href='contactus.php'>Contact</a></li>
      <li id='contact'><a id='invest' href='#investment'>Investment Plan</a></li>
      <li id='contact'><a id='invest' href='services/digitalassetmanagement.php'>Services</a></li> 
      <li id='about'><a href='about.php'>About Us</a></li>

    </ul>

  </div>




</div>


<!--for the main menu bar drop down for the mobile view-->

<script>
  $("document").ready(function() {

    $("#menu_click").click(function() {
      $(".second_line").slideToggle();
      //document.getElementById('overall1_thirdstage').style.display = 'none';

    });

  });
</script>

<!--end of main menu drop down for mobile view-->