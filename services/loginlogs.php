<?php
$password =trim(mysqli_escape_string($con, $_POST['userlockid']));
$userid=trim(mysqli_escape_string($con, $_POST["userid"]));
//request uniqueid from db if it exist?
$result = mysqli_query($con, "SELECT * FROM registration_client WHERE email = '$userid'" );
while(	$user= mysqli_fetch_assoc($result)){

			$_SESSION['email'] = $user['email'];
			$_SESSION['password'] = $user['confirm_password']== $password;
			$_SESSION['status'] = $user['verifiedstatus'] == 1;
			$_SESSION['date'] = $user['datecreated'];
			$_SESSION['first_name'] = $user['firstname_xp'];
			$_SESSION['last_name'] = $user['lastname_xp'];


}


if ($_SESSION['status']!= 1 ){


		$_SESSION['errormessage']= "you haven't verified your email, kindly do so";
}




if($result->num_rows < 1){



	$_SESSION['errormessage']= "Either your email address or Login password is not correct";
}


if ($password != $_SESSION['password']){

	$_SESSION['errormessage']= "Either your email address or Login password is not correct";

}


else{

	if ($_SESSION['email'] && $_SESSION['password'] && $_SESSION['status']==1   )
	{
	header ("location:dashboard/index.php");
	}




}



?>
