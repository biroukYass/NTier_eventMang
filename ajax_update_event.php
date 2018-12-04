<?php

require "bd_conx.php";

$id=$_POST['id'];
$nom=$_POST['nom'];
$date=$_POST['date'];
$adress=$_POST['adress'];

$query = "UPDATE event SET nom='$nom', date='$date', adress='$adress' WHERE id='$id' ";
$result = $conn->query($query);

?>