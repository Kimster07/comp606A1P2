<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin Log In</title>
	
	<!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- css -->
    <style>

        body{
            
            background: url(Images/YinYang.jpg) no-repeat; 
			background-size: cover;
			background-attachment: fixed;
        }

        .form-container{

            padding: 50px 60px;
            margin-top: 10vh;
            -webkit-box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);
            -moz-box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);
            box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);            
            color: aliceblue;
        }

        #signup_btn{
            
            background-color: royalblue;
        }
    

    </style>

</head>








<?php
session_start();
if(isset($_SESSION['aid']))
{
	?>
	<script type="text/javascript">
		window.open('admin_dashboard.php','_self');
	</script>
	<?php
}
?>


<body>


	
<div class="container">


<!-- navbar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">

		<!-- Brand and toggle get grouped for better display -->
		<div class="navbar-header">

			<!-- Button that toggles the navbar on and off on small screens -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	
				<!-- Hides information from screen readers -->
				<span class="sr-only"></span>
		
				<!-- Draws bars in navbar button when in small mode -->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<a class="pull-left"><img src="Images/YY.svg" width="60px" height="60px"></a>
			<a class="navbar-brand" href="#">Hamilton Massage Center</a>

		</div>

			<!-- nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div class="navbar-form navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="login.php">Log In</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<li class="active"><a href="adminlogin.php" >Admin<span class="sr-only">(current)</span></a></li>
				</ul>
		
			</div>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>


</div>




	<!-- Login section -->
	<div class="row">

		<!-- form alignement -->
		<div class="col-md-4 col-sm-4 col-xs12"></div>

			<div class="col-md-4 col-sm-4 col-xs-12">

				<form action="adminlogin.php" method="post"  class="form-container">

					<div align="center">
						<h1> Admin Login</h1>
					</div>

					<div class="form-group">
						<label for="a_name">Username :</label>
						<input type="text" id="a_name" name="a_name" required class="form-control">
					</div>

					<div class="form-group">
						<label for="a_pass">Password :</label>
						<input type="password" id="a_pass" name="a_pass" required class="form-control">
					</div>

					<div class="form-group" style="margin-top: 50px;">
						<input type="submit" name="submit1" value="Login" class="btn btn-success form-control">
					</div>

				</form>

			</div>

		</div>

	</div>

</div>




<!-- php --> 
<?php
if(isset($_POST['submit1']))
{
	include('dbcon.php');
	$uname=mysqli_real_escape_string($con,$_POST['a_name']);
	$password=($_POST['a_pass']);


	$sql = "SELECT * FROM `admin` WHERE `uname`='$uname' AND `pass`='$password'";


	$run = mysqli_query($con,$sql);
	$data = mysqli_fetch_assoc($run);
	if(mysqli_num_rows($run)>0)
	{

		$_SESSION['aid']=$data['aid'];
		?>
		<script type="text/javascript">
			window.open('admin_dashboard.php','_self');
		</script>
		<?php
	}
	else {
		?>
		<script type="text/javascript">
			window.open('adminlogin.php?ss=0','_self');
		</script>
		<?php
	}
}


?>
