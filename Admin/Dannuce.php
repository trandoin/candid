<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php Confirm_password(); ?>  <!-- LOGIN REQUIRED FOR HONER LOGIN -->

<?php 

if (isset($_GET["id"])) {
	$SearchQueryParameter = $_GET["id"];

	global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
	//$Admin = $_SESSION["AdminName"];
	$sql = "DELETE FROM  announce  WHERE id='$SearchQueryParameter' ";
	$Execute = $ConnectingDB->query($sql);
	if ($Execute) {
		
		$_SESSION["SuccessMessage"] = "Announcement Deleted SuccessFully ! ";
			Redirect_to("announce.php");
	}
	else{
		$_SESSION["ErrorMessage"] = "Something Went to wrong. Try Again !";
			Redirect_to("announce.php");
	}
}





 ?>