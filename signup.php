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
			background-size: cover;
			background-attachment: fixed;

        }

		.form-container{

			padding: 50px 60px;
			margin-top: 10vh;
			-webkit-box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);
			box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);            
			color: black;
		}

    
    </style>

</head>

<body>

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

				</button>

				<!-- You'll have to add padding in your image on the top and right of a few pixels (CSS Styling will break the navbar) -->
				<a class="pull-left"><img src="Images/YY.svg" width="60px" height="60px"></a>
				<a class="navbar-brand" href="#">Hamilton Massage Center</a>

			</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="navbar-form navbar-right">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home </a></li>
						<li><a href="login.php">Log In</a></li>
						<li class="active"><a href="Signup.php">Sign Up <span class="sr-only">(current)</span></a></li>
						<li><a href="adminlogin.php" >Admin</a></li>
					</ul>
			
				</div>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	</div>


	<div class="row">

		<div class="col-md-4 col-sm-4 col-xs12"></div>

			<div class="col-md-4 col-sm-4 col-xs-12">

				<form action="#" method="post"  class="form-container">

					<?php
							if(isset($_GET['ss']))
							{
								if($_GET['ss']==0)
								{
									echo "<legend> Unable To Register User , Please Try Again.</legend>";
								}
								if($_GET['ss']==2)
								{
									echo "<legend> Password is not matched  , Please Try Again.</legend>";
								}
								if($_GET['ss']==3)
								{
									echo "<legend> Email alredy present  , Please Try Again.</legend>";
								}
							}


					?>

					<h1>Registration Form</h1>

					<div class="form-group">
						<label for="fname">First Name</label>
						<input type="text" class="form-control" id="fname" name="fname" required>
					</div>

					<div class="form-group">
						<label for="lname">Last Name</label>
						<input type="text" class="form-control" id="lname" name="lname" required>
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>

					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" class="form-control" id="pass" name="pass" required>
					</div>

					<div class="form-group">
						<label for="cpass">Password</label>
						<input type="password" class="form-control" id="cpass" name="cpass" required>
					</div>


					<div class="form-group" >
						<input type="submit" name="signup" value="Signup" class="btn btn-primary form-control">
					<div>



				</form>

			</div>

		</div>


	</div>
</body>

 
<?php
if(isset($_POST['signup']))
{
	include('dbcon.php');
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$lname=mysqli_real_escape_string($con,$_POST['lname']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=md5($_POST['pass']);
  $cpassword=md5($_POST['cpass']);
  if(	$password==$cpassword)
  {


    $check_query = "SELECT * FROM `users` WHERE   email ='$email' ";     //this will check  user already exits in database
    $result = mysqli_query($con, $check_query);
   // $user = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0)
    {
      ?>
      <script type="text/javascript">
        window.open('signup.php?ss=3','_self');
      </script>
      <?php


    }
    else {
      $sql = "INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `password`)
              VALUES (NULL, '$fname', '$lname', '$email', '$password');";

      $run = mysqli_query($con,$sql);

      if($run)
      {
        ?>
        <script type="text/javascript">
          window.open('login.php?ss=1','_self');
        </script>
        <?php
      }
      else {
        ?>
        <script type="text/javascript">
          window.open('signup.php?ss=0','_self');
        </script>
        <?php
      }

    }


    }

    else
    {
      ?>
      <script type="text/javascript">
        window.open('signup.php?ss=2','_self');
      </script>
      <?php
    }
  }




?>
