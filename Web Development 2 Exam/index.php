<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Rafaelle</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/index.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Rafaelle <span>214210055</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<!--<h3 style="color:red;">
			<?php
			/*if(isset($_GET['q'])){
				$error = $_GET['q'];
				if ($error == "error"){
					echo "Invalid username or password";
					}
				}*/
			?>
			</h3>-->
			<form action="action.php?q=login" method="POST">
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<label for="captcha">Captcha</label><img src="images/captcha.jpg">
			<br/>
			<input type="text" id="captcha" name="captcha">
			<br/>
			<h3 id="wrongcaptcha" style="color:red;">test</h3>
			<br/>
			<button type="submit">Login</button>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>
			</form>
		</div>
	</div>
</body>
</script>

</html>