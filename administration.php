<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>

	<title>admin</title>
</head>

<body class="container ">


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
</nav>
<br>
<div class=" row">

	<div class="col-md-4">

		
		<form  name="ajax2" method="POST" action="">
		  <div class="form-group">
		    <label for="name"><b>Event's name :</b></label>
		    <input  name="nom" class="form-control" type="text" id="name" placeholder="name" required>
		  </div>
		  <div class="form-group">
		    <label for="adress"><b>Event's adress :</b></label>
		    <input  name="adress" class="form-control" type="text" id="adress" placeholder="name" >
		  </div>
		  <div class="form-group">
		    <label for="date"><b>Event's date :</b></label>
		    <input  name="adress" class="form-control" type="text" id="date" placeholder="name" >
		  </div>
		  	  <INPUT type="button" class="btn btn-primary " value="Tester l'URL"  ONCLICK="submitForm2()">
		</form>
		<hr />
		<p> <span id="storage2"> L'affichage du script PHP sera inséré ici </span></p>
		<hr />
	</div>

		<div class="col-md-8">
			<FORM name="ajax" method="POST" action="">
			<p>
			<INPUT type="button" class="btn btn-primary btn-lg" value="Envoyer"  ONCLICK="submitForm(document.getElementById('storage'))">
			</p>
		</FORM>
		<hr />
		<p> <span id="storage"> L'affichage du script PHP sera inséré ici </span></p>
		<hr />
		</div>	




</div>
</body>
</html>