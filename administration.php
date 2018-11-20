<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(function(){
      
      $('#get_evts').click(function(e){
        e.preventDefault();
         // alert("hello");
        $.ajax({
          url: 'ajax.php',
          type: 'get',
          success: function(res){
              $('#evts').html(res);
          }
      })
      });
      
     return false;
  });
  $(function(){
      $('#add_evt').click(function(e){
        e.preventDefault();
        // alert("hello");
        $.ajax({
          url: 'ajax_add_event.php',
          type: 'post',
          data: $('#my_form').serialize(),
          success: function(res,statut){
              $('#storage2').html(res);
          },

      });
      });
      
     return false;
  });
  </script>

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

		
		<form id="my_form" name="ajax2" method="POST" action="">
		  <div class="form-group">
		    <label for="name"><b>Event's name :</b></label>
		    <input  name="nom" class="form-control" type="text" id="name" placeholder="name">
		  </div>
		  <div class="form-group">
		    <label for="adress"><b>Event's adress :</b></label>
		    <input  name="adress" class="form-control" type="text" id="adress" placeholder="adress" >
		  </div>
		  <div class="form-group">
		    <label for="date"><b>Event's date :</b></label>
		    <input  name="date" class="form-control" type="text" id="date" placeholder="date" >
		  </div>
		  	  <INPUT id="add_evt" type="button" class="btn btn-primary " value="ajouter" >
		</form>
		<hr />
		<p> <span id="storage2"> résultat d'ajout ici </span></p>
		<hr />
	</div>

		<div class="col-md-8">
			<FORM name="ajax">
			<p>
			<button id="get_evts" type="button" class="btn btn-primary btn-lg">aller </button>
      <span id="msg"></span>
			</p>
		</FORM>
		<hr />
		<p> <span id="evts"> L'affichage des evenment existants sera ici
   </span></p>
		<hr />
		</div>	




</div>



</body>
</html>