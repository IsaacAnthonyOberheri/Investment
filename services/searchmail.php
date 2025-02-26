<?php
require 'dbConfig.php';
?>

<?php 

$search = $_GET['n'];
$select_query = "SELECT * FROM registration_client WHERE email = '$search' ";
$sql = mysqli_query($con, $select_query);


if ($sql->num_rows > 0 ){

$emailerr="User with this email already exist";

echo $emailerr;
}












?>