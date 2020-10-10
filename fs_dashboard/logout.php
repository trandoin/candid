<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php 

    $_SESSION["FUserId"]=null;
    $_SESSION["FUsername"]= null;
    $_SESSION["FPassword"]= null;
    $_SESSION["FName"] = null;
  session_destroy();
  Redirect_to("../index.php");
    



 ?>