<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cancel Appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>

      body{

        background: url(Images/signupbg.jpg) no-repeat; 
        background-size: cover;
        background-attachment: fixed;

      }
      .jumbotron{

        background-color:#2E2D88;
        color:white;

      }
      .tab-content {
      
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        padding: 10px;
      
      }

    </style>

</head>







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
<?php

$apid = $_GET['apid'];

include('dbcon.php');

$sql = "SELECT * FROM `appointments` WHERE `apid`='$apid'";
$run=mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
$apDate = $data['date'];
$today = date('Y-m-d');

$datetime1 = new DateTime($apDate);
$datetime2 = new DateTime($today);
$interval = date_diff($datetime2,$datetime1);

$countday = $interval->format("%R%a ");
$diff=date_diff($datetime2,$datetime1);

 

if($countday<0)
{
  $DeleteQuery = "DELETE FROM `appointments` WHERE `apid`='$apid'";
  $runDelete = mysqli_query($con,$DeleteQuery);

  if($runDelete)
  {
      ?>
      <script type="text/javascript">
        window.open('viewAppointment.php','_self');
      </script>
      <?php
  }
}
else {
?>


<div class="container">
  <div class="jumbotron" align="center">
    <p>Cancellation fees will be charged for cancelling appointment within 24 hours of the scheduled time.</p>
    <p>Are you sure you want to cancel the appointment?</p>
    <a href="confirmcan.php?apid=<?php echo $apid; ?>" class="btn btn-danger">Yes</a>
    <a href="viewAppointment.php" class="btn btn-success">No</a>
  </div>

</div>


<?php
}
?>
