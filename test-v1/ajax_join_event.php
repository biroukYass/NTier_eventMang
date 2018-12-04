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
        echo "error bdd connection";
    } 

    $mail = $_POST["mail"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $id = $_POST["id"];

  $query_test = "SELECT * FROM client_event where mail= '$mail' and id_event='$id' ";
  $result_test = $conn->query($query_test);

   if ($result_test->num_rows == 0) {
      $query = "INSERT INTO client_event (id_event,mail) VALUES('$id', '$mail')";
       $result = $conn->query($query);
     if ($result) {
      // echo '0';
      echo "<div class='alert alert-success' role='alert'>joining succeed </div>";
     }else{
      // echo '1';
       echo "<div class='alert alert-danger' role='alert'> error joining </div>";
     }
   }
 else{
  // echo "3";
     echo "<div class='alert alert-danger' role='alert'> already joined </div>";   
 }
 



?>
