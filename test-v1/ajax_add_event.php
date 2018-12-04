<?php


function add_event($nom,$date,$adress)
{
  $servername = "localhost";
  $username = "phpmyadmin";
  $password = "root";
  $dbname = "adv_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "error bdd connection";
  } 

  if (empty($nom) or empty($date) or empty($adress) ) {
    echo "<div class='alert alert-danger' role='alert'>fill all fields </div>";
  }
  else{
    $query = "INSERT INTO event(nom , date , adress) VALUES('$nom', '$date', '$adress')";
    $result = $conn->query($query);
    if ($result) {
      echo "<div class='alert alert-success' role='alert'>your event is inserted </div>";
    }else{
      echo "<div class='alert alert-danger' role='alert'>error </div>";

    }
  }
 }

$nom = $_POST["nom"];
$date = $_POST["date"];
$adress = $_POST["adress"];
// $date="";
// $adress="--";
add_event($nom,$date,$adress);

?>
