 <!-- HTML page for login -->
<?php
 require 'server.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>user registration system using php and Mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


  <div class="header">
    <h2>Login</h2>
  </div>
  <form method="post" action="login.php">        <!-- create from for data input from user -->

<div class="input-group">
  <label>Email</label>
  <input type="text" name="email" required>
</div>

<div class="input-group">
  <label>Password</label>
  <input type="password" name="password"required>
</div>

<div class="input-group">
  <button type="submit" name="login" class="btn">login</button>
</div>

<p> forgot password <a href ="forgot.php"> click here </a></p>                       <!-- move to forgot password page  -->
<p> not  a member? <a href="registration.php"> sign up </a> </p>                       <!-- move to registration page  -->

  </form>

</body>



</html>
