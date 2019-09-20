 <!-- HTML page for forgot password-->
<?php
 require 'server.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>forgot password</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="header">
    <h2>Password Reset</h2>
  </div>
  <form method="post" action="forgot.php">      <!-- create from for email input from user -->


    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" required>
    </div>

<div class="input-group">
  <button type="submit" name="forgot" class="btn">reset</button>
</div>

<p>  go to login page  <a href="login.php">login </a>
</p>


  </form>

</body>



</html>
