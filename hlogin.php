
<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php 
 // Yah  1st Wali IF Condition iss liye use ki hai Agr user logged in hai to wo login page prr nahi aa sakta hai
 if (isset($_SESSION["UserId"])) {     
	Redirect_to("Dashboard.php");
}


if (isset($_POST['Submit'])) {
	
	$UserName = $_POST["Username"];
	$Password = $_POST["Password"];

	if (empty($UserName)||empty($Password)) {
		$_SESSION["ErrorMessage"] = "All Fields must filled out";
	}else{

		// code for checking username and password from database
		$Found_Account=Login_Attampt($UserName,$Password);
		if ($Found_Account) {
		
           $_SESSION["UserId"]= $Found_Account["id"];
           $_SESSION["UseRName"]= $Found_Account["username"];
           $_SESSION["AdminName"]= $Found_Account["aname"];

			$_SESSION["SuccessMessage"] = "Welcome " .$_SESSION["UseRName"]. "!";
			Redirect_to("Admin/Dashboard.php");
		}else{
			$_SESSION["ErrorMessage"] = "Incorrect Username and Password";
			Redirect_to("index.php");
		}
	
	}
}



 ?>