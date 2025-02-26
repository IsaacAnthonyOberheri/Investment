<?php

require 'dbConfig.php';

$con=mysqli_connect('127.0.0.1','root','','crypto_block_deck') or die ('sorry it cannot connect to database');


$sql = "INSERT INTO registration_client (id, email)"."VALUES('','g')";
	mysqli_query($con, $sql);
	
	echo 'working';


?>