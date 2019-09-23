 <!-- HTML page for forgot password-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

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
            
            background: url(Images/YinYang.jpg) no-repeat; 
            width: 100%; 
            height: 782px;
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
              <li><a href="login.php">Back</a></li>
            </ul>
        
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


	<!-- Forgot password form -->
	<div class="row">

		<div class="col-md-4 col-sm-4 col-xs12"></div>

			<div class="col-md-4 col-sm-4 col-xs-12">
        <form method="post" action="forgot.php" class="form-container">      

          <h3>Forgot Passward</h3>

          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
          </div>

          <div class="input-group">
            <button type="submit" name="forgot" class="btn btn-primary form-control">reset</button>
          </div>
          
        </form>

      </div>

    </div>

  </div>

</body>



</html>
