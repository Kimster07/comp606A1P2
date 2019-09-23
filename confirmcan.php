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
?>
