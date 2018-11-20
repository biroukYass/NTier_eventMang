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

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for events..">
	<table id="myTable" class="table table-dark">

	  <thead>
	  	<tr>
	      <th scope="col">#</th>
	      <th scope="col">nom</th>
	      <th scope="col">date</th>
	      <th scope="col">adress</th><th scope="col">action</th>
	    </tr>
	  </thead>
  		<tbody>
  <?php
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) { ?>

    	<tr contenteditable="true" class="edit">
      <th contenteditable="false" class="id" scope="row"><?php echo $row["id"] ?></th>

      <td class="nom"><?php echo $row["nom"] ?></td>
      <td class="date"> <?php echo $row["date"] ?> </td>
      <td class="adress"> <?php echo $row["adress"] ?> </td>
      <td contenteditable="false"><button id="but" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
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
<script src="update_event.js"></script>
<script src="delete_event.js"></script>
 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 
