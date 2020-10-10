<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php Confirm_password(); ?>  <!-- LOGIN REQUIRED FOR HONER LOGIN -->

<?php 

if (isset($_GET["id"])) {
	$SearchQueryParameter = $_GET["id"];

	global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
	//$Admin = $_SESSION["AdminName"];
	$sql = "DELETE FROM  inquiry WHERE id='$SearchQueryParameter' ";
	$Execute = $ConnectingDB->query($sql);
	if ($Execute) {
		
		$_SESSION["SuccessMessage"] = "Inquery Deleted SuccessFully ! ";
			Redirect_to("ViewQueries.php");
	}
	else{
		$_SESSION["ErrorMessage"] = "Something Went to wrong. Try Again !";
			Redirect_to("ViewQueries.php");
	}
}





 ?>