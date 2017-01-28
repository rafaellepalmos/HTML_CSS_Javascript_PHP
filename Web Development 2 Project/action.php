<?php
require_once ("connection.php");
session_start();
$form = $_GET['q'];
if($form == "login"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    checkLogin($username, $password);
    if(checkLogin($username, $password)){
    //if($username == "admin" && $password == "1234"){
    	$_SESSION["username"] = $username;
		$_SESSION["subscription"] = checkSubs($username);
        header("location:store.php");
        
    }
    else{
    	header("location:login.php?q=error");
    }
    
}
else if($form == "logout"){
	session_destroy();
	header("location:login.php");
     
}

elseif ($form == "register") {
    $username =$_POST["usernamesignup"];
    $password =$_POST["passwordsignup"];
    $repeatpassword =$_POST["passwordsignup_confirm"];
    if($password==$repeatpassword){
       addNewUser($username, $password);
	   $subscription = "No Subscription";
	   addSubscription($subscription, $username);

    }
       header("location:login.php");
}

elseif ($form == "single") {
	$cusername = $_SESSION["username"];
	$subscription = "single";
	addSubscription($subscription, $cusername);
	$_SESSION["subscription"] = checkSubs($cusername);
	header("location:account.php");
}

elseif ($form == "monthly") {
	$cusername = $_SESSION["username"];
	$subscription = "monthly";
	addSubscription($subscription, $cusername);
	$_SESSION["subscription"] = checkSubs($cusername);
	header("location:account.php");
}

elseif ($form == "annually") {
	$cusername = $_SESSION["username"];
	$subscription = "annually";
	addSubscription($subscription, $cusername);
	$_SESSION["subscription"] = checkSubs($cusername);
	header("location:account.php");
}
?>