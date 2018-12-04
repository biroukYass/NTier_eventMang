<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<title></title>
</head>
<body>
	<div class="container text-center">
 <form action="authenticate.php" method="post">
  
  	<div class="">
    <img src="imgs/avatar.png" alt="Avatar" class="avatar">
  </div>
    <label for="uname"><b>username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  
</form>
</div>
</body>
</html>
