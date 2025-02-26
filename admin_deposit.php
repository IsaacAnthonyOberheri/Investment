<?php
require 'dbConfig.php';
?>

<?php

$email = $_GET['email'];
$plan = $_GET['plan'];
$amount_deposit = $_GET['deposit_amount'];

$sql_search = "SELECT * FROM dashboard WHERE email = '$email' ";

$result = mysqli_query($con, $sql_search);


$user = mysqli_fetch_array($result);
$coin_change = $user['coin_change'];
$first_name = $user['first_name'];
$last_name = $user['last_name'];

$day = date('d').'th';
$month = date('M');
$year = date('Y');
$date_value = $day .' '.$month.' '.$year .' '.date('h:i:sa');

$start_date = $day .' '.$month.' '.$year; 

//echo $date1.'<br>';
$date=date_create($start_date);

date_add($date,date_interval_create_from_date_string("30 days"));
$end_date = date_format($date,"d").'th ';
$end_date .= date_format($date, "M Y");




  

$email_value = $user['email'];
$starter_value = $user['starter'];
$bronze_value = $user['bronze'];
$silver_value = $user['silver'];
$gold_value = $user['gold'];

$total_plan_value = $starter_value + $bronze_value + $silver_value + $gold_value;


if ($plan == 'starter'){
	$new_deposit = $amount_deposit + $starter_value;
	$returns = '10% - 15%';
	$min_expected = ((10/100) * $amount_deposit) + $amount_deposit;
	$max_expected = ((15/100) * $amount_deposit) + $amount_deposit;
	
	$profit = $max_expected - $amount_deposit;
}
if ($plan == 'bronze'){
	$new_deposit = $amount_deposit + $bronze_value;
	$returns = '7.5% - 12.5%';
	
	$min_expected = ((7.5/100) * $amount_deposit) + $amount_deposit;
	$max_expected = ((12.5/100) * $amount_deposit) + $amount_deposit;
	
	$profit = $max_expected - $amount_deposit;
}

if ($plan == 'silver'){
	$new_deposit = $amount_deposit + $silver_value;
	$returns = '10% - 15%';

	$min_expected = ((10/100) * $amount_deposit) + $amount_deposit;
	$max_expected = ((15/100) * $amount_deposit) + $amount_deposit;
	
	$profit = $max_expected - $amount_deposit;
}
if ($plan == 'gold'){
	$new_deposit = $amount_deposit + $gold_value;
	$returns = '6.5% - 10%';
	
	$min_expected = ((6.5/100) * $amount_deposit) + $amount_deposit;
	$max_expected = ((10/100) * $amount_deposit) + $amount_deposit;
	
	$profit = $max_expected - $amount_deposit;
}


//echo $total_plan_value;
$update = "UPDATE dashboard SET $plan = '$new_deposit' WHERE email = '$email'";

$result_update = mysqli_query($con, $update);

$latest_transaction = "INSERT INTO latest_transaction (id, email, first_name, last_name, date, type, amount, status)"
."VALUE('', '$email_value','$first_name','$last_name','$date_value','deposit','$amount_deposit','successful' )";

mysqli_query($con, $latest_transaction);

$my_investment = "INSERT INTO my_investment(id,email,first_name,amount,returns,min_expected,max_expected,profit_returned,start_date, end_date, status)" 
."VALUE('','$email_value','$first_name','$amount_deposit','$returns','$min_expected','$max_expected','$profit','$start_date','$end_date','active')";

mysqli_query($con, $my_investment);

if (isset($result_update)){
	
$sql_search = "SELECT * FROM dashboard WHERE email = '$email' ";

$result2 = mysqli_query($con, $sql_search);

$user2 = mysqli_fetch_array($result2);
$deposit_array['deposit'] = [
'email' => $user2['email'],
'starter' => $user2['starter'],
'bronze' => $user2['bronze'],
'silver' => $user2['silver'],
'gold' => $user2['gold'],
//'total' => $user2['starter'] + $user2['bronze'] + $user2['silver'] + $user2['gold'];



];

$json_value = json_encode($deposit_array);
echo $json_value;


}





?>