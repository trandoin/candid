<?php 

$DSN = 'mysql:host=localhost;dbname=candid';
$ConnectingDB = new PDO($DSN,'root','');

function Redirect_to($New_location){
	header("Location:".$New_location);
	exit();
}


// Function for login Required 

function Confirm_passwordps(){
	if (isset($_SESSION["PUserId"])) {
		return true;
	}else{
		$_SESSION["ErrorMessage"] = "Login Required";
		Redirect_to("../s_register/pa_user.php");
	}
}

function Confirm_passwordschs(){
	if (isset($_SESSION["ShUserId"])) {
		return true;
	}else{
		$_SESSION["ErrorMessage"] = "Login Required";
		Redirect_to("../s_register/sch_user.php");
	}
}


?>