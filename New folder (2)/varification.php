<?php  require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candid Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
     <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
</head>

<style>
*{
  font-family: Arial, Helvatica;
}
</style>
</head>
<body>
 <div class="container bg-warning mb-4" style="" align="conter">
  <div class="card mt-3">
    <div class="card-header">
      <h4>OTP Verification</h4>
    </div>
    <div class="card-body">
      <div class="panel-body">
        <form action="../C_Register" method="post" class=""  >
                 <div class="form-group">
                   <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text bg-info text-light">Verify Mobile OTP&nbsp; <i class="fa fa-mobile" style="font-size: 24px;" aria-hidden="true"></i></span></div>
                     <input placeholder="Get verification code sent on mobile "  type="Number" name="motp" id="name" class="form-control" />
                     </div>
                    </div>
                   <!-- <div class="form-group">
                   <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text bg-info text-light">Verify Email OTP&nbsp; <i class="fas fa-envelope-square" style="font-size: 24px;" aria-hidden="true"></i></span></div>
                     <input placeholder="Get verification code sent on email "  type="Number" name="eotp" id="name" class="form-control" />
                     </div>
                    </div> -->
                   <div style="float:right;">
                    <button type="submit"  name="otp" class="btn btn-primary">Verify OTP</button>
                   </div>
                    </form>
      </div>
    </div>
  </div>
 </div>
    <?php include('../footer1.php') ?>
    <script type="text/javascript" src="../js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>