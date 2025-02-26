<?php 

$emailerr = $msgerr = $namemsgerr = $submsgerr = "";

if (isset($_POST['sendmessage'])){




if (!empty($_POST['email_xp']) &&  ((strlen($_POST['message_xp']) > 15)) && !empty($_POST['name_xp']) && !empty($_POST['subject_xp'])  	)
{
		
	require 'submitcontact.php';

}

else {
	
		if ( empty($_POST['name_xp']) ){
	
	$namemsgerr='Name is required';
}
	
	if ( empty($_POST['email_xp']) ){
	
	$emailerr='Email is required';
}

	if ( empty($_POST['subject_xp']) ){
	
	$submsgerr='Subject of message is required';
}

if ( strlen($_POST['message_xp'] ) < 15) {
	
	$msgerr = 'Please send a valid request';
}


}
}

?>