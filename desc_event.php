<?php

  require "bd_conx.php"; 

  $ide=$_GET['id'];

  $query = "SELECT * FROM event where id=$ide";
  $result = $conn->query($query);

 ?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="scripts/bing_map.js"></script>

  <script>
    $(function(){
      $('#my_form').submit(function(e){
        e.preventDefault();
        // alert("hello");
        $.ajax({
          url: 'ajax_join_event.php',
          type: 'post',
          data: $('#my_form').serialize(),
          success: function(res,statut){
              $('#result_joining').html(res);
          },
        });
      });
      return false;
    });
  </script>
  <title>event desc</title>
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
  <div class="">
    <div class='border '>
      herer we have  the description of the event !!<br>
      <?php 
         if ($result->num_rows > 0) {
              // output data of each row

              while($row = $result->fetch_assoc()) { ?>

                
                  <p class="card-title"><?php echo $row["id"] ?></p>
                      <h4 class="card-title"><?php echo $row["nom"] ?></h4>
                      <p class="card-text"><?php echo $row["date"] ?></p>
                      <p id='adr' class="card-text"><?php echo $row["adress"] ?></p>
                
              <?php
              }
          } else {
              echo "0 results";
          }
          $conn->close();

       ?>
    </div>
    <br>
    <div class="border row">
      <div class="col-md-4" id='directionsInputContainer' style="width: 100%; height: 400px"></div>
      <div id='printoutPanel' style="display: none;"></div>
      <div class="col-md-8" id='myMap' style="width: 100%; height: 400px"></div>
    </div>
  </div>
  <br>
  <div class="border border-primary ">
    <h3>to go to the event </h3>
    <form id="my_form" method="post" class="row">
      <input type="hidden" name="id" class="disabled" id="0" value=<?php echo $ide?> >
      <div class="form-group col-md-4">
        <label for="1">Email address</label>
        <input required type="email" name="mail" class="form-control " id="1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group col-md-3">
        <label for="2">nom</label>
        <input type="text" name="nom" class="form-control " id="2" placeholder="Enter nom">
      </div>
      <div class="form-group col-md-3">
        <label for="3">prenom</label>
        <input type="text" name="prenom" class="form-control " id="3" placeholder="Enter prenom">
      </div>
      <div class="form-group col-md-2">
        <br>
        <button type="submit" class="btn btn-primary" > get in</button>
      </div>
    </form>
    <span id="result_joining" class="col-md-12"> click GET IN to join the event  </span>
  </div>
  

<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=Ambnp48mbBd6ZVjctl4lB07mnsho9vt8flxJKXwTAeRdjk2T4KeXrjsqyZmve_pG &callback=loadMapScenario' async defer></script>

<br><br>
<footer class="footer">
  <div class="text-center">-----------------------------------------------</div>
  <div class="footer-copyright text-center">2018 copyright  <a href="">www.myste.com</a></div>
</footer>
</body>
</html>

