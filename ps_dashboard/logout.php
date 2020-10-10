<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php 

    $_SESSION["PUserId"]= null;
    $_SESSION["PUsername"]= null;
    $_SESSION["PPassword"]= null;
    $_SESSION['PName']= null;
    $_SESSION["PSGender"] = null;
    $_SESSION["PSMobile"] = null;
    $_SESSION["PSStream"] = null;
    $_SESSION["PSClass"] = null;
  session_destroy();
  Redirect_to("../index.php");
    



 ?>