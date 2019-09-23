 
<?php
session_start();
if(!isset($_SESSION['aid']))
{
	?>
	<script type="text/javascript">
		window.open('adminlogin.php','_self');
	</script>
	<?php
}
?>
<?php include('function.php'); ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Admin</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- css -->
    <style>

      body{

        background: url(Images/Massage2.jpg) no-repeat; 
        width: 100%; 
        height: 782px;

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
            <li>  <a href="admin_logout.php">Logout</a></li>
          </ul>
      
        </div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  </div>

  <br>

  <div class="container dashboard">

  <div class="page header">
  <h1 align="center">Welcome Admin</h1>
  </div>

  <br>
  
  
  <!-- table headings-->

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

    <!-- for data -->

    <tbody>
      <?php getApListAll(); ?>
    </tbody>

  </table>
</body>