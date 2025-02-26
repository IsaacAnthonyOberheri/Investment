<?php
session_start();
require 'dbConfig.php';
 $userid = $_SESSION['email'];
 $per = $_GET['per'];
$coin = "UPDATE dashboard SET coin_change = '$per' WHERE email = '$userid' ";
mysqli_query($con, $coin);

$select = "SELECT * FROM dashboard WHERE email = '$userid' ";
$result= mysqli_query($con, $select);
$user = mysqli_fetch_array($result);
$total = $user['starter'] + $user['bronze'] + $user['silver'] + $user['gold'];

$equity = (($per * $total)/100)+ $total;
echo $equity *2/2;

//echo 'good';

?>