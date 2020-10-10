<?php require_once("include/config.php"); ?>


<?php 

function Redirect_to($New_location){
	header("Location:".$New_location);
	exit();
}



// Function for login Required 

function Confirm_password(){
	if (isset($_SESSION["UserId"])) {
		return true;
	}else{
		$_SESSION["ErrorMessage"] = "Login Required";
		Redirect_to("index.php");
	}
}

?>