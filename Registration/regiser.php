<?php include('serrver.php') ?>
<!DOCTYPE html>

     <html>
    <head>

         <title>Registration system:</title>

         <link rel="stylesheet" type="text/css" href="styyle.css">

    </head>
    <body>

          <div class="header">
  	      <h2>Register</h2>
          </div>
	
     <form method="post" action="serrver.php">

  	 <?php include('errrorss.php'); ?>
    	  <div class="input-group">
    	  <label>Username</label>
    	  <input type="text" name="username" value="">
    	  </div>

  	    <div class="input-group">
  	    <label>Email</label>
  	    <input type="email" name="email" value="">
  	    </div>

      	<div class="input-group">
  	    <label>Password</label>
  	    <input type="password" name="password_1" value="">
        </div>

        <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
        </div>

        <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
        </div>

       <p>
       Already a member? <a href="login.php">Sign in</a>
       </p>

  </form>
  </body>
  </html>