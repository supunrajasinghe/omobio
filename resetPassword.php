<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>omobio test</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Reset password</h2>
  </div>
	
  <form method="post" action="register.php">
    <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
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
  	  <button type="submit" class="btn" name="reset_password">Reset password</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a><br/>
      back to user list? <a href="userList.php">User List</a>
  	</p>
  </form>
</body>
</html>