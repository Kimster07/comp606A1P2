<!-- HTML  page for sign up   -->
<?php  require 'server.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>

        body{

            background: url(Images/signupbg.jpg) no-repeat; 
            width: 100%; 
            height: 782px;

        }
    
    </style>

</head>
<body>

    <!-- Collapsible Navigation Bar -->
    <div class="container">

        <!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
        
            <!-- Button that toggles the navbar on and off on small screens -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        
                <!-- Hides information from screen readers -->
                <span class="sr-only"></span>
        
                <!-- Draws 3 bars in navbar button when in small mode -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
        
            <!-- You'll have to add padding in your image on the top and right of a few pixels (CSS Styling will break the navbar) -->
            <a class="pull-left"><img src="Images/YY.svg" width="60px" height="60px"></a>
            <a class="navbar-brand" href="#">Sports Massage</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar-form navbar-right">
                <ul class="nav navbar-nav">
                <li><a href="index.php">Home </a></li>
                <li><a href="login.php">Log In </a></li>
                <li class="active"><a href="signup.php">Sign Up <span class="sr-only">(current)</span></a></li>

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Phone</a></li>
                </ul>
                </li>
                </ul>
    
            </div>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>


    <div>
        <center><h2>Sign Up Form</h2></center>
		<form action="signup.php" method="post">
			<div class="inner_container">
				<label><b>First Name</b></label><br>
                <input type="text" placeholder="Enter First Name" id="fname" name="fname" required><br>
                <label><b>Last Name</b></label><br>
				<input type="text" placeholder="Enter Last Name" id="lname" name="lname" required><br>
				<label><b>E-mail</b></label><br>
				<input type="email" placeholder="Enter E-mail" id ="email" name="email" required><br>
				<label><b>Contact Number</b></label><br>
				<input type="number" placeholder="Enter Contact Number" id ="cnumber"name="cnumber" required><br>

				<label><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" id="password" name="password" required><br>
				<label><b>Confirm Password</b></label><br>
				<input type="password" placeholder="Enter Password" id ="repassword" name="repassword" required><br>
				<button name="register" class="sign_up_btn"   type="submit">Sign Up</button><br>


                 
				
			</div>
		</form>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>      
</body>
</html>