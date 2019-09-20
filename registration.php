
 <!-- HTML  page for sign up   -->
<?php  require 'server.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>user registration system using php and Mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>


</head>
<body>
  <div class="header">
    <h2>Registration Form </h2>
  </div>
  <form method="post" action="registration.php">        <!-- craeted for user data input   -->


<div class="input-group">
  <label>First Name</label>
  <input type="text" name="Firstname" required>
</div>
<div class="input-group">
  <label>Last Name</label>
  <input type="text" name="Lastname" required>
</div>
<div class="input-group">
  <label>Mobile Number</label>
  <input type="number" name="Mobile_no" required>
</div>
<div class="input-group">
  <label>Email</label>
  <input type="email" name="email" required>
</div>
<div class="input-group">
  <label>Password</label>
  <input type="password" name="password_1" required>
</div>
<div class="input-group">
  <label>Confirm Password</label>
  <input type="password" name="password_2" required>
</div>


<label>date</label>
  <input  type="text" name="From" id="From" class="form-control" >
  <script>
  $(document).ready(function(){
   $.datepicker.setDefaults({
     dateFormat: 'yy-mm-dd'
   });
   $(function(){
     $("#From").datepicker();

   });

  });
  </script>

  <div class="input-group">
  <input type="radio" name="appointment" value="10am" checked> 10am<br>
  <input type="radio" name="appointment" value="1pm"> 1am<br>
  <input type="radio" name="appointment" value="3pm"> 3am <br>
  <input type="radio" name="appointment" value="5pm"> 5am
  </div>



  <div class="input-group">
    <button type="submit" name="register" class="btn">Register</button>
  </div>

<p> Already a member? <a href="login.php"> sign in </a>                    <!-- move to  login  page  -->
</p>

  </form>

</body>



</html>
