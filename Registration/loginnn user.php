<?php include('serrver.php') ?>

<!DOCTYPE html>
<html>
<head>

  <title>Registration system:</title>
  <link rel="stylesheet" type="text/css" href="styyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="loginn user.php">
  	<?php include('errrorss.php'); ?>

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>

  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>

  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    
  </form>
</body>
</html>