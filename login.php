<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>

        .bg{
            
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
    
    <div class="container-fluid bg">
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
                          <li class="active"><a href="login.php">Log In <span class="sr-only">(current)</span></a></li>
                          <li><a href="signup.php">Sign Up</a></li>
          
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


        <div class="row">
        
            <div class="col-md-4 col-sm-4 col-xs12"></div>
        
            <div class="col-md-4 col-sm-4 col-xs-12">

                <form class="form-container">
                    <h1>Log In</h1>
        
                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" id="Email" placeholder="Enter email">
                    </div>
                            
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" placeholder="Password">
                    </div>
                    <p>Forgot Password?<a href ="#"> Click here. </a></p>                    
                    <br>

                    <button type="submit" class="btn btn-success btn-block">Submit</button><br>
                    <small class="form-text text-muted">Not a member yet? Sign Up now.</small><br>
                    <button type="submit" class="btn" id="signup_btn" href="#">Sign Up</button>

        
                </form>
        
            </div>
        
        </div>
    
    </div>            
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>