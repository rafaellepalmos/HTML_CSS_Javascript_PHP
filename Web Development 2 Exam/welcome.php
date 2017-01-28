<?php
	session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Rafaelle</title>
    <link rel="stylesheet" href="css/welcome.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/sweetalert.min.js"></script>
  </head>

  <body>
  
	<div id="greeting">
	<h1 class="title">
          Hello 
		  <?php
			echo $_SESSION["firstname"];
		  ?>
        </h1>
        <form action="action.php?q=logout" method="POST">
            <button class="logout"><span>Logout</span></button>
        </form>
	</div>
  
	<center>
	<div id="cities">
	<a href="#">Bangkok</a>
	<a href="#">London</a>
	<a href="#">Tokyo</a>
	</div>
	<div id="container">
	<center>select a city</center>
	</div>
	<!--<a href="#" class="button" id="fahrenheit">Fahrenheit</a>
	<a href="#" class="button" id="celsius">Celsius</a>-->
	</center>
  </body>
</html>
