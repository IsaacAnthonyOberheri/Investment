<?php
session_start();
require 'dbConfig.php';

?>

<?php

$email=$_GET['email'];
$date = $_GET['date'];

$msg = "INSERT INTO newsletter (email, date)" ."VALUES('$email','$date')";
mysqli_query($con, $msg);
?>