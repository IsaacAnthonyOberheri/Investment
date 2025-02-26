<?php
	
require 'dbConfig.php';


$email = $_GET['email'];

$select = "SELECT * FROM dashboard WHERE email = '$email' ";
$result = mysqli_query($con, $select);

//$array_jason = array();
while($user = mysqli_fetch_array($result)){
$array_jason["list"] = array(
"email" => $user["email"],
"firstname" => $user["first_name"],
"lastname" => $user["last_name"],
"starter" => $user["starter"],
"bronze" => $user["bronze"],
"silver" => $user["silver"].".00",
"gold" => $user["gold"].".00",
"bonus" => $user["bonus"].".00",
"activedeposit" => $user["active_deposit"].".00",
"balance" => $user["balance"].".00"

);


}

$get_data =json_encode($array_jason);





echo $get_data;



?>