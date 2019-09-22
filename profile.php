 <!-- this is welcome page   -->
<?php
 require 'server.php';
 ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">

	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Assignment 1</h1>

				<a href="logout.php">Logout</a>     <!-- move to logout page  -->
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>

			
      <?php if(isset($_SESSION['First_Name'])): ?>
   <p> welcome back <strong><?php echo'  '. $_SESSION['First_Name']; ?></strong></p>         <!-- show the logged in user name   -->

 <?php endif ?>




		</div>
	</body>
</html>
