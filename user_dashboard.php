 
<?php include('function.php'); ?>
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <!-- Bootstrap CDN-->
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

          </button>

          <a class="pull-left"><img src="Images/YY.svg" width="60px" height="60px"></a>
          <a class="navbar-brand" href="#">Hamilton Massage Center</a>

        </div>

        <!-- nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="navbar-form navbar-right">
            <ul class="nav navbar-nav">
              <li><a href="user_logout.php">Logout</a></li>
            </ul>
        
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


  </div>
  
  <br><br><br><br><br><br><br><br>
  
  <div class="container dashboard">

    <div class="page header">
      <h2 align="center" style="text-align: center">Welcome to Sports Massage<?php showname($_SESSION['uid']); ?></h2>
    </div>

    <br><br><br><br>

    <!-- Thumbnails -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-3">
          <div class="thumbnail">
              <div class="caption">
                <h3>Book Apointment</h3>
                <p><button name="book" class="btn btn-success  btn-block" onclick="window.open('book.php','_self');">Book  </button></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-3 col-xs-3">
          <div class="thumbnail">
              <div class="caption">
                <h3>View your Appointment</h3>
                <p><button name="view" class="btn btn-info btn-block" onclick="window.open('viewAppointment.php','_self');">View  </button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

</body>


 
