<?php require_once("include/DB.php"); ?>
<?php 

function Redirect_to($New_location){
	header("Location:".$New_location);
	exit();
}

// Follwing function for check Existing user FOR FREE USER
function FCheckUserNameExistOrNot($Name,$Email){
 global $ConnectingDB;
$sql = "SELECT name,email FROM f_user WHERE name = :Name OR email = :userName";
$stmt = $ConnectingDB->prepare($sql);
$stmt->bindValue(':Name',$Name);
$stmt->bindValue(':userName',$Email);
$stmt->execute();
$Result = $stmt->rowCount();
if ($Result==1) {
	return true;
}else{
	return false;
    }
}
// Follwing function for check Existing user FOR PAID USER
function PCheckUserNameExistOrNot($Name,$Email){
 global $ConnectingDB;
$sql = "SELECT name,email FROM p_user WHERE name = :Name OR email = :userName";
$stmt = $ConnectingDB->prepare($sql);
$stmt->bindValue(':Name',$Name);
$stmt->bindValue(':userName',$Email);
$stmt->execute();
$Result = $stmt->rowCount();
if ($Result==1) {
	return true;
}else{
	return false;
    }
}
// Follwing function for check Existing user FOR SCHOLARSHIP USER
function SchCheckUserNameExistOrNot($Name,$Email){
 global $ConnectingDB;
$sql = "SELECT name,email FROM sch_user WHERE name = :Name OR email = :userName";
$stmt = $ConnectingDB->prepare($sql);
$stmt->bindValue(':Name',$Name);
$stmt->bindValue(':userName',$Email);
$stmt->execute();
$Result = $stmt->rowCount();
if ($Result==1) {
	return true;
}else{
	return false;
    }
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

// Function for User Login from Existing username and password for FREE USER
function FLogin_Attampt($UserName,$Password){

		global $ConnectingDB;
		$sql = "SELECT * FROM  f_user WHERE email=:Username AND password=:Password LIMIT 1";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':Username',$UserName);
		$stmt->bindValue(':Password',$Password);
		$stmt->execute();
		$Result = $stmt->rowcount();
		if ($Result==1) {
			return $Found_Account=$stmt->fetch();
		}else{
			return null;
		}
}
// Function for User Login from Existing username and password for PAID USER
function PLogin_Attampt($UserName,$Password){

		global $ConnectingDB;
		$sql = "SELECT * FROM  p_user WHERE email=:Username AND password=:Password LIMIT 1";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':Username',$UserName);
		$stmt->bindValue(':Password',$Password);
		$stmt->execute();
		$Result = $stmt->rowcount();
		if ($Result==1) {
			return $Found_Account=$stmt->fetch();
		}else{
			return null;
		}
}
// Function for User Login from Existing username and password for SCHLORSHIP USER
function SchLogin_Attampt($UserName,$Password){

		global $ConnectingDB;
		$sql = "SELECT * FROM  sch_user WHERE email=:Username AND password=:Password LIMIT 1";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':Username',$UserName);
		$stmt->bindValue(':Password',$Password);
		$stmt->execute();
		$Result = $stmt->rowcount();
		if ($Result==1) {
			return $Found_Account=$stmt->fetch();
		}else{
			return null;
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