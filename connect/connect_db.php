<?php
$servername = "localhost";
$username = "jakkapet";
$password = "0886121394";
$db = "jakkapet";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>