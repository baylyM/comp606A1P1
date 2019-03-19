<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <!--title of page-->
  <title>Sign Up</title>
  <!--tells page to link to style.css for formating-->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <!--title of form-->
  	<h2>Register</h2>
  </div>
  <!--form-->
  <form method="post" action="register.php">
    <!--tells form to include errors.php
        which is empty and invisible until
        form is unsuccessfully submitted-->
  	<?php include('errors.php'); ?>
    <!--input group used as class name as it is vauge
        enough to use for all instances and input was
        better used for input line itself-->
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
      <!--Submits form values-->
  	  <button type="submit" class="btn" name="reg_user">Sign Up</button>
  	</div>
  	<p>
      <!--changes to Sign In page-->
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
