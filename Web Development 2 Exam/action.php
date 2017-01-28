<?php
	session_start();
	$request = $_GET['q'];
	if ($request == login){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$captcha = $_POST["captcha"];
		if ($username == "admin" && $password == "1234" && $captcha == "1mznsp"){
			$_SESSION["username"] = $username; //this allows you to put the username variable from php into a session and the session name is username
			$_SESSION["firstname"] = "Administrator";
			header("location:welcome.php"); //goes to this page if "if" condition is satisfied
		} else {
			header ("location:error.php");
		}
	} else if ($request == logout) {
		session_destroy(); //clear the session
		header ("location:index.php"); //redirect the user back to index.php
	}

	//echo $username . " " . $password;
?>