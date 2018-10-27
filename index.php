
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>
</head>
<body class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav><br>
<div class="row">
  <div class="form-group col-md-4">
    <label for="1">Email address</label>
    <input type="email" name="email" class="form-control " id="1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group col-md-4">
    <label for="2">nom</label>
    <input type="text" name="nom" class="form-control " id="2" placeholder="Enter nom">
  </div>
  <div class="form-group col-md-4">
    <label for="3">prenom</label>
    <input type="text" name="prenom" class="form-control " id="3" placeholder="Enter prenom">
  </div>
  <span id="result_joining" class="col-md-12"> here </span>

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

  if ($result->num_rows > 0) {
      // output data of each row

      while($row = $result->fetch_assoc()) { ?>

        <div class="col-md-3" style="padding-bottom: 20px">
          <div class="card " style="height: 200px">
            <!-- <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap"> -->
            <div class="card-body">
              <h4 class="card-title"><?php echo $row["nom"] ?></h4>
              <p class="card-text"><?php echo $row["date"] ?></p>
              <p class="card-text"><?php echo $row["adress"] ?></p>
              <!-- <FORM name="ajax2" method="POST" action="">
                <p>
                <INPUT type="button" class="btn btn-primary " value="Envoyer"  ONCLICK="submitForm(document.getElementById('result_joining'))">
                </p>
              </FORM> -->
              <a  href= <?php  echo 'desc_event.php?id=' .  $row["id"]?>  id="a" type="button" class="btn btn-primary">Launch</a>
            </div>
          </div>
        </div>
      <?php
      }
  } else {
      echo "0 results";
  }
  $conn->close();
?>


</div>



</body>
</html>

