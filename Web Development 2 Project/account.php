<?php
	session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rafaelle | Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="js/index.js"></script>
  </head>
  <body>
  <div class="main-store">
  <div class="container">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size: 30px;">Mr. Hide Hawk</a>
    </div>
    <ul class="nav navbar-nav" style="font-size: 20px;">
      <li><a href="store.php#home">Home</a></li>
      <li><a href="store.php#store">Store</a></li>
      <li><a href="store.php#team">Team</a></li> 
      <li class="active"><a href="#">Account</a></li> 
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li id="greeting" style="font-size: 20px;">Welcome 
		  <?php
			echo $_SESSION["username"];
		  ?>
		  </li>
		<li id="logout">
		<form  action="action.php?q=logout" method="POST">
		<p class="signin button">
		<input type="submit" class="btn btn-info" value="Log Out"/>
		</p>
		</form>
		</li>
	</ul>
</nav>
<div><br/><br/><br/></div>
<div id="account" class="row">
    <div class="col-sm-8">
      <h2>Name:
	  <?php
			echo $_SESSION["username"];
		  ?>
		</h2>
      <h2>Subscription:
	  <?php
			echo $_SESSION["subscription"];
		  ?>
		</h2>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo"></span>
    </div>
  </div>
</div>
</div>
  
  </body>
</html>