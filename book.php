<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Booking</title>
	
	<!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- css -->
    <style>

      body{

      background: url(Images/Massage2.jpg) no-repeat; 
      background-size: cover;
      background-attachment: fixed;

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
							<li><a href="user_logout.php">Logout</a></li>
							<li><a href="user_dashboard.php">Back</a></li>
						</ul>
					
					</div>

				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->

		</nav>

	</div>



	<div class="container"> 


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
	<?php include('dbcon.php'); ?>
	<?php
	function getTimesloat()
	{
	global $con;

	$sql = "SELECT * FROM `timeslot` ORDER BY `tid`";
	$run = mysqli_query($con,$sql);
	while($data = mysqli_fetch_assoc($run))
	{
		?>
		<option value="<?php echo $data['tid']; ?>"><?php echo $data['timeslot']; ?></option>
		<?php
	}
	}
	function getMsgList()
	{
	global $con;

	$sql = "SELECT * FROM `msgtype` ORDER BY `mid`";
	$run = mysqli_query($con,$sql);
	while($data = mysqli_fetch_assoc($run))
	{
		?>
		<option value="<?php echo $data['mid']; ?>"><?php echo $data['name']; ?></option>
		<?php
	}
	}
	?>


		
		<div class="page-header">
			<h1 align="center">Book Appointment</h1>
		</div>

		<div class="col-md-4 col-sm-4 col-xs12"></div>

		<!-- booking form -->
		<div class="jumbotron col-md-4 col-sm-4 col-xs-12" style="background-color: black;color:#fff;">
			<form class="" action="book.php" method="post">
				<div class="form-group">
					<?php
							if(isset($_GET['er']))
							{
								if($_GET['er']==1)
								{
									echo "<h2 style='    color: #fbff0e;text-shadow: 2px 2px 2px #190f04;'>
									Appointment Slot is already taken.Pls choose another timeslot.</h2>";
								}


							}
					?>
					<h4>Book Appointment</h4>

				</div>
				<div class="form-group">
					<label for="tom">Massage Type</label>
					<select class="form-control"  required id="tom" name="tom">
						<?php getMsgList(); ?>
					</select>
				</div>
				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" name="date" class="form-control" id="date"  required>
				</div>
				<div class="form-group">
					<label for="ts">Time Slot</label>
					<select class="form-control" name="ts" id="ts"  required>
					<?php getTimesloat(); ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Reason</label>
					<textarea name="comment" class="form-control"   placeholder="e.g Recovery from injury, Any depression, etc."></textarea>
				</div>
				<div class="form-group" align="center">
					<input type="submit" name="submit" value="Book" class="btn btn-success form-control">
				</div>
			</form>
		</div>
</body> 






<!-- php-->


<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$tom=mysqli_real_escape_string($con, $_POST['tom']);
	$ts= $_POST['ts'];
	$date=$_POST['date'];
	$msg=mysqli_real_escape_string($con, $_POST['comment']);

	$uid = $_SESSION['uid'];

	$check = "SELECT * FROM `appointments` WHERE `date`='$date' AND `timeslot`='$ts'";
	$runcheck = mysqli_query($con,$check);
	if(mysqli_num_rows($runcheck)>0)
	{
		?>
		<script type="text/javascript">
			window.open('book.php?er=1','_self');
		</script>
		<?php
	}
	else {
		$sql = "INSERT INTO `appointments` (`apid`, `msgtype`, `date`, `timeslot`, `comment`, `uid`)
			VALUES (NULL, '$tom', '$date', '$ts', '$msg', '$uid');";
		$run=mysqli_query($con,$sql);
		if($run)
		{
			?>
			<script type="text/javascript">
				alert('Success...');
			</script>
			<?php
		}
		else {
			?>
			<script type="text/javascript">
				alert('Error...');
			</script>
			<?php
		}

	}



}
?>
