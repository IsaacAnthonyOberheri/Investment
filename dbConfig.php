<?php
// Database configuration
$dbHost     = "127.0.0.1";
//$dbUsername = "staaucgg_tncon28";
$dbUsername = "root";
//$dbPassword = "Newdawn1";
$dbPassword = "";
$dbName     = "crypto_block_deck";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$con=mysqli_connect('127.0.0.1','root','','crypto_block_deck') or die ('sorry it cannot connect to database');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>
