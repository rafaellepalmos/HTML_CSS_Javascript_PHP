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
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="#store">Store</a></li>
      <li><a href="#team">Team</a></li> 
      <li><a href="account.php">Account</a></li>
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
<div id="home"><br/><br/></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/bg.jpg" alt="meeting">
      <div class="carousel-caption">
        <h3>Meeting</h3>
        <p>Brainstorming ideas for our product.</p>
      </div> 
    </div>

    <div class="item">
      <img src="images/bg2.jpg" alt="team">
      <div class="carousel-caption">
        <h3>Team</h3>
        <p>A team of IT students making this project happen.</p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div><br/><hr><br/></div>
<div class="row">
    <div class="col-sm-8">
      <h2 style="font-size: 50px;">Mr. Hide Hawk</h2>
      <h4 style="font-size: 30px;">This application is supposed to be an intermediary between users and the company offering their personal data clearance and give them right to be forgotten.</h4><br/>
      <p style="font-size: 20px;">Request to remove personal identity from several websites can be very tedious and tiresome for many. The application and the company services are supposed to make this task as much hassle-free as possible for end-users. They should be able to login on our application using their existing google account and pay for subscription costs using google wallet or paypal. They should be able to easily request for their identity removal from any sites on the result list. After the request is sent, everything else will be taken cared of for them. They can choose to track all current requests and monitor the progress of their request.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-erase logo"></span>
    </div>
  </div>
<div id="store"><br/><hr><br/></div>
  <div class="text-center">
    <h2 style="font-size: 40px;">Pricing</h2>
    <h4 style="font-size: 20px;">Choose a subscription plan that works for you</h4><br/><br/>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Single Request</h1>
        </div>
        <div class="panel-body">
          <p><strong>No</strong> Subscription Needed</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per request</h4>
          <form  action="action.php?q=single" method="POST"><button class="btn btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button></form>
        </div>
      </div> 
    </div> 
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Monthly</h1>
        </div>
        <div class="panel-body">
          <p><strong>Unlimited</strong> Requests</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <form  action="action.php?q=monthly" method="POST"> <button class="btn btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button></form>
        </div>
      </div> 
    </div> 
   <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Annually</h1>
        </div>
        <div class="panel-body">
          <p><strong>Unlimited</strong> Requests</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per year</h4>
          <form  action="action.php?q=annually" method="POST"> <button class="btn btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button></form>
        </div>
      </div> 
    </div>
	</div>
	<div id="team"><br/><hr><br/></div>
	<div class="text-center">
    <h2 style="font-size: 40px;">Team Members</h2><br/><br/>
  </div>
	<div class="row">
	<div class="col-sm-3">
    <p class="text-center" style="font-size: 25px;"><strong>Faye</strong></p><br>
    <a href="#faye" data-toggle="collapse">
      <img src="images/faye.jpg" class="img-circle person" alt="Random Name">
    </a>
    <div id="faye" class="collapse" style="font-size: 15px;">
      <p>STIU IT Student</p>
      <p>Coder</p>
      <p>Member since 2015</p>
    </div>
  </div>
  <div class="col-sm-3">
    <p class="text-center" style="font-size: 25px;"><strong>Arvind</strong></p><br>
    <a href="#arvind" data-toggle="collapse">
      <img src="images/arvind.jpg" class="img-circle person" alt="Random Name">
    </a>
    <div id="arvind" class="collapse" style="font-size: 15px;">
      <p>STIU IT Student</p>
      <p>Coder</p>
      <p>Member since 2015</p>
    </div>
  </div>
  <div class="col-sm-3">
    <p class="text-center" style="font-size: 25px;"><strong>Sajag</strong></p><br>
    <a href="#sajag" data-toggle="collapse">
      <img src="images/sajag.jpg" class="img-circle person" alt="Random Name">
    </a>
    <div id="sajag" class="collapse" style="font-size: 15px;">
      <p>STIU IT Student</p>
      <p>Project Leader</p>
      <p>Member since 2015</p>
    </div>
  </div>
  <div class="col-sm-3">
    <p class="text-center" style="font-size: 25px;"><strong>Nitesh</strong></p><br>
    <a href="#nitesh" data-toggle="collapse">
      <img src="images/nick.jpg" class="img-circle person" alt="Random Name">
    </a>
    <div id="nitesh" class="collapse" style="font-size: 15px;">
      <p>STIU IT Student</p>
      <p>Designer</p>
      <p>Member since 2015</p>
    </div>
  </div>
  </div>
</div>
</div>
  
  </body>
</html>