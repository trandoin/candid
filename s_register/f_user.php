<?php  require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?> 

<!-- PHP FOR FREE USER REGISTRATION -->
<?php 

if (isset($_POST['fRegister'])) {
  
  $Name = $_POST['fname'];
  $Email = $_POST['femail'];
  $Phone = $_POST['fphone'];
  $Gender = $_POST['fgender'];
  $Stream = $_POST['fstram'];
  $Class = $_POST['fclasses'];
  $Password = $_POST['fpassword'];
  $ConfirmPassword = $_POST['fcpassword'];

 // $IMAGE = $_FILES['Image']['name'];
  //$Target = "Upload/".basename($_FILES['Image']['name']);
  //$Admin = $_SESSION["UseRName"]; # Using Dynamically By session variables
    date_default_timezone_set("Asia/Kolkata"); //You can chage time Zone As you wish
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y  %H: %M: %S",$CurrentTime);


  if (empty($Name)||empty($Email)) {
    
    $_SESSION["ErrorMessage"] = "All Fields Must filled out !";
    Redirect_to("f_user.php");
  }
  elseif ($Password !== $ConfirmPassword ) {
    $_SESSION["ErrorMessage"] = "Password and confirm password should be match !";
    Redirect_to("f_user.php");
  }
  elseif (FCheckUserNameExistOrNot($Name,$Email)) {
     $_SESSION["ErrorMessage"] = "User already exist Please try another name and email !";
    Redirect_to("f_user.php");
  }
  else{

    #Query to insert post in DB when everything is fine
    global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
    $sql = "INSERT INTO f_user(datetime,name,email,mobile,gender,stream,class,password)";
    $sql .= "VALUES(:dateTime,:NamE,:EmaiL,:MobilE,:GendeR,:StreaM,:ClasS,:PassworD)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':dateTime', $DateTime);
    $stmt->bindValue(':NamE', $Name);
    $stmt->bindValue(':EmaiL', $Email);
    $stmt->bindValue(':MobilE', $Phone);
    $stmt->bindValue(':GendeR', $Gender);
    $stmt->bindValue(':StreaM', $Stream);
    $stmt->bindValue(':ClasS', $Class);
    $stmt->bindValue(':PassworD', $Password);
        $Execute =$stmt->execute();
         
       // move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);

      if ($Execute) {
          $_SESSION["SuccessMessage"] = "Register Successfully";
          Redirect_to("../Varificationf/"); // You Can Send Admin to Any PAge YOU Want
        }else{
          $_SESSION["ErrorMessage"] = "Something Went to Wrong! Try Again!";
        Redirect_to("f_user.php");
        }
  }

}// Ending of Submit button if-Condition


 ?>
<!-- PHP FOR FREE USER LOGIN -->
<?php 
 // Yah  1st Wali IF Condition iss liye use ki hai Agr user logged in hai to wo login page prr nahi aa sakta hai

//if (isset($_SESSION["FUserId"])) {     
  //Redirect_to("index.php");
//}


if (isset($_POST['FLogin'])) {
  
  $UserName = $_POST["fusername"];
  $Password = $_POST["fpassword"];

  if (empty($UserName)||empty($Password)) {
    $_SESSION["ErrorMessage"] = "Please enter username and password !";
    Redirect_to("f_user.php");
  }else{

    // code for checking username and password from database
    $Found_Account=FLogin_Attampt($UserName,$Password);
    if ($Found_Account) {
    
           $_SESSION["FUserId"]= $Found_Account["id"];
           $_SESSION["FUsername"]= $Found_Account["email"];
           $_SESSION["FPassword"]= $Found_Account["password"];
           $_SESSION["FName"]= $Found_Account["name"];

      $_SESSION["SuccessMessage"] = "Welcome " .$_SESSION["FName"]. "!";
      Redirect_to("../fs_dashboard/");
    }else{
      $_SESSION["ErrorMessage"] = "Incorrect Username and Password";
      Redirect_to("f_user.php");
    }
  
  }
}



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candid | Free user Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
</head>

<style>
  *{
    font-family: Arial, Helvetica;
  }
  .log{
    margin-top: 30%;
    
  }
      /*width */
::-webkit-scrollbar{
    width:8px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: rgb(145, 200, 255); 
    border-radius: 10px;
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background:yellow; 
  }
 .vl{
     background-color: #00429e;
     height:100%;
     width: 3px;
 }

</style>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
        <div class="col-md-6 ">
        
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          
             
        <div class="card">
            <div class="card-header text-center">
               <h5><i class="sign-in-alt"></i>Free Student Login</h5>
            </div>
            <?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

       ?>
            <div class="card-body">
                           
                <div class="panel-body">
                    <form action="f_user.php" method="post" class=""  >
                 <div class="form-group">
                   <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user" style="font-size: 24px;" aria-hidden="true"></i></span></div>
                     <input placeholder="Enter registered email id..."  type="text" name="fusername" id="name" class="form-control" />
                     </div>
                    </div>
                    <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock" style="font-size: 24px;" aria-hidden="true"></i></span></div>
                     <input placeholder="Enter password..." type="password" name="fpassword"  class="form-control" id="myInput" />
                     </div>
                    </div>
                    <input type="checkbox" onclick="myFunction()"> &nbsp;Show Password
                   <div class="text-center">
                    <button type="submit"  name="FLogin" class="btn btn-primary">LOGIN</button>
                   </div>
                    </form>
                 
                    <div align="center">
                        <a type="button" name="forget" id="forget" class="btn btn-default btn-md" href="#">Forget Password ?</a>
                  
                     </div>
         
         
         
                 <br />
                </div>
            </div>
        </div>
               
         
              </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        
                                  <div class="card">
                                      <div class="card-header text-center"><h5>Free Student Register</h5></div>
                                      <?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

       ?>
                                      <div class="card-body">
                                        <form action="f_user.php" method="post" class=""  >
                                            <div class="form-group">
                                                <input placeholder="Enter Your Name..." type="text" name="fname" id="name" class="form-control" />
                                               </div>
                                            <div class="form-group">
                                           
                                             <input type="email" placeholder="Enter Your Email..." name="femail" id="email" class="form-control" />
                                             
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="number" placeholder="Enter Your Phone..." name="fphone" id="phone" class="form-control" />
                                                
                                               </div>
                                               <div class="form-group">
                                            
                                               <select class="form-control"  id="category" size="1" name="fgender">
                                                <option value="" disabled selected>Select your Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                               
                                                </select> 
                                               </div>
                                               <div class="form-group">
                                          
                                               <select class="form-control"  id="category" size="1" name="fstram">
                                                <option value="" disabled selected>Choose Stream</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Medical">Medical</option>
                                                <option value="Foundation">Foundation</option>
                                                <option value="Others">Others</option>
                                              
                                              
                                                </select> 
                                               </div>
                                               <div class="form-group">
                                        
                                               <select class="form-control"  id="category" size="1" name="fclasses">
                                                <option value="" disabled selected>Choose present Class</option>
                                                <option value="8th">8th</option>
                                                <option value="9th">9th</option>
                                                <option value="10th">10th</option>
                                                <option value="11th">11th</option>
                                                <option value="12th">12th</option>
                                                <option value="Dropper">Dropper</option> 
                                                <option value="Other">Other</option> 
                                                </select> 
                                               </div>
                                               <div class="form-group">
                                                
                                            
                                                   <input class="form-control " type="password" name="fpassword" placeholder="Enter Your password..." value="" required>
                                              
                                              </div>
                                               <div class="form-group">
                                                
                                           
                                                   <input class="form-control " type="password" name="fcpassword" placeholder="Re-Enter Your Password..." value="">
                                             
                                              </div>
                                               <div align="center"><br>
                                                   <button type="submit"  name="fRegister" class="btn btn-primary">Sign Up</button>
                                                  </div>
                                          
                                             
                                        </form>
                                        
                                    
                                      
                             
                        
                                      </div>
                                  </div>
       
              </div>
              <br>
        </div></div>
        <div class="col-md-1 text-center">
            <div class=" vl"></div>
          </div>
        <div class="col-md-5">
        <div class=" nav flex-column nav-pills  log" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link text-center btn  active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Login</a>
          <a class="nav-link text-center btn " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sign Up</a>
         
        </div>
        </div>
        </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>