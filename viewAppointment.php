<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sign In</title>
	<!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- css styling -->
    <style>

		body{

		background-image: url(Images/Massage3.jpg);
		background-size: cover;
		background-attachment: fixed;

		}

		.page-header{

		color: white;
		}

    </style>

</head>


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
	
		<span class="icon-bar"></span>

	  </button>

	  <a class="pull-left"><img src="Images/YY.svg" width="60px" height="60px"></a>
	  <a class="navbar-brand" href="#">Hamilton Massage Center</a>

	</div>

	<!-- nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <div class="navbar-form navbar-right">
		<ul class="nav navbar-nav">
		  <li><a href="user_logout.php">Logout</a></li>
		  <li><a href="user_dashboard.php">Back</a></li>
		</ul>
	
	  </div>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


</div>


</body>

<?php
session_start();
if(!isset($_SESSION['uid']))
{
	?>
	<script type="text/javascript">
		window.open('login.php','_self');
	</script>
	<?php
}
?>
<?php include('function.php'); ?>




 
<div class="page-header">
	<h1 align="center">View Appointments</h1>
	</div>



   <!-- For headings-->
  		<table class="table table-hover table-bordered" style="background-color: rgba(255,255,255,0.5);">
   			<thead>
      			<tr>
        			<th>No.</th>
							<th>Name</th>
        			<th>Dates</th>
        			<th>Time</th>
        			<th>Details</th>
      			</tr>
    		</thead>

    		<!-- for Body and original data -->

    	<tbody>
      		<?php getApList($_SESSION['uid']); ?>



   		 </tbody>
  		</table>
