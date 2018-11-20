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
$nom=$_POST['nom'];
$date=$_POST['date'];
$adress=$_POST['adress'];

$query = "UPDATE event SET nom='$nom', date='$date', adress='$adress' WHERE id='$id' ";
$result = $conn->query($query);

?>