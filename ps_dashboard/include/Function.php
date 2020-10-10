<?php require_once("include/config.php"); ?>
<?php 

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



 // Function for Calculating No of Course Posts 
function TotalCPosts(){

                        global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM cpost";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalPosts = array_shift($TotalRows);
                        echo $TotalPosts;
}

?>