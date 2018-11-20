<?php

$servername = "localhost";
$username = "phpmyadmin";
$password = "root";
$dbname = "adv_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id=$_POST['id'];


$query = "DELETE FROM event WHERE id='$id' ";
$result = $conn->query($query);

echo "yeap";

?>