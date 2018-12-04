<?php

require "bd_conx.php";

$id=$_POST['id'];


$query = "DELETE FROM event WHERE id='$id' ";
$result = $conn->query($query);

echo "yeap";

?>