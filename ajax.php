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



$query = "SELECT * FROM event ";
$result = $conn->query($query);
?>
	<table class="table table-dark">
	  <thead>
	  	<tr>
	      <th scope="col">#</th>
	      <th scope="col">nom</th>
	      <th scope="col">date</th>
	      <th scope="col">adress</th>
	    </tr>
	  </thead>
  		<tbody>
  <?php
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) { ?>

    	<tr>
      <th scope="row"><?php echo $row["id"] ?></th>
      <td><?php echo $row["nom"] ?></td>
      <td> <?php echo $row["date"] ?> </td>
      <td> <?php echo $row["adress"] ?> </td>
      <td>  <button type="button" class="btn btn-info">Info</button>
	</td>
    </tr>
    <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</tbody>
</table>
