 <!-- this HTML page for enter new password -->
<?php  require 'server.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>user registration system using php and Mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="header">
    <h2>Registration Form </h2>
  </div>
  <form method="post" action="resetpass.php">    <!-- created for input new password  -->



<div class="input-group">
  <label>Password</label>
  <input type="password" name="password_1" required>
</div>
<div class="input-group">
  <label>Confirm Password</label>
  <input type="password" name="password_2" required>
</div>

<?php
// to change a session variable, just overwrite it

//$s=$_SESSION['email'];

?>


<div class="input-group">
  <button type="submit" name="change" class="btn">change</button>
</div>

<p>  go to login page  <a href="login.php">login </a>   <!-- move to login  page  -->
</p>

  </form>

</body>



</html>
