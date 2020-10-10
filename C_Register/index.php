<?php include('Include/db.php');?>
<?php include('Include/session.php');?>

<?php Confirm_passwordps(); ?>


<?php 


$PSID = $_SESSION["PUserId"];
$PSUName = $_SESSION["PUsername"];
$PSPassword = $_SESSION["PPassword"];
$PSName = $_SESSION['PName'];
$PSGender = $_SESSION["PSGender"]; 
$PSMobile = $_SESSION["PSMobile"];
$PSStream = $_SESSION["PSStream"]; 
$PSPClass =  $_SESSION["PSClass"]; 


?>






<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Candid | Schlorship registration</title>
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
     <style>
 *{
     font-family: Arial Helvatica;
   }
   body{
    
     background-color:whitesmoke;
   }

   input[type=text],[type=number],[type=date],[type=address],[type=file] {
 width: 100%;
 box-sizing: border-box;
 border-bottom: 3px solid rgb(230,230,230);
 outline: none;
}
textarea[type=text]{
 width: 100%;
 box-sizing: border-box;
 border-bottom: 3px solid rgb(230,230,230);
 outline: none;
}
input[type=text]:focus,input[type=number]:focus,input[type=date]:focus,input[type=address]:focus,input[type=file]:focus {
 background-color: whitesmoke;
 outline: green;
}
textarea[type=text]:focus{
 background-color: whitesmoke;
 outline: green;
}



 .box
 { background-color:#fff;
  width:75%;
  margin:0 auto;

margin-top:20px;
margin-bottom:30px;

border-radius:20px;
 }
 .active_tab1
 {
  background-color:#fff;
  color:#333;
  font-weight: 600;
 }
 .inactive_tab1
 {
  background-color: whitesmoke;
  color: #333;
  cursor: not-allowed;
 }
 .has-error
 {border-color:#00adcc;
  background-color:#ffe8df;
  /* border-color:#cc0000;
  background-color:#ffff99; */
 }
 label{
   font-size:17px;
 }
 .panel-heading{
   font-size:25px;
   color:#0067f4;
   font-weight:700;
 }
 .nav-link{
   font-size:18px;
 }
     </style>
    </head>

    <body>

        <div class="container box">
            <br />
            <h1 class="text-center"> <i class="fas fa-user"></i> Candid Registration Form</h1> <hr style="border-bottom:4px solid grey;border-left:4px solid transparent;border-right:4px solid transparent;">
           <!-- <?php echo $message; ?> -->
            <div class="bg-Primary " >
            <h3 class="text-White  text-center" style="padding:18px;">Please Provide correct details </h3>
            <?php
            echo ErrorMessage();
            echo SuccessMessage();
            
            ?>
            </div><br>
            <form method="post" id="register_form" action="indexsuccess.php" enctype="multipart/form-data">
<div class="container-fluid">
    <ul class="nav nav-tabs">
        <li class="nav-item ">
         <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_your_details"> <i class="fas fa-user"></i> Your Details</a>
        </li>
        <li class="nav-item">
         <a class="nav-link inactive_tab1 " id="list_personal_details" style="border:1px solid #ccc"><i class="fas fa-user"></i> Personal Details</a>
        </li>
        <li class="nav-item">
         <a class="nav-link inactive_tab1 " id="list_address_details" style="border:1px solid #ccc"> <i class="fas fa-address-book"></i> Academic Details</a>
        </li>
        <li class="nav-item">
           <a class="nav-link inactive_tab1" id="list_acedemic_details" style="border:1px solid #ccc"> <i class="fas fa-book"></i> Upload Documents</a>
          </li>
       </ul>
</div>
<div class="tab-content" style="margin-top:16px;">
<!-- form 1 start --> 
    <div class="tab-pane active" id="your_details">
        <div class="panel panel-default">
         <div class="panel-heading">Your Details</div>
         <div class="panel-body">

          <div class="form-group">
              <label>Your Name</label>
              <input type="text" name="sname" id="name" value="<?php echo $PSName ?>" placeholder="Enter your name" class="form-control input-lg" />
              <span id="error_name" class="text-danger"></span>
             </div>
          <div class="form-group">
           <label>Your Email </label>
           <input type="email" name="email" id="email" value="<?php echo $PSUName; ?>" placeholder="Enter your email" class="form-control input-lg" />
           <span id="error_email" class="text-danger"></span>
          </div>
          <div class="form-group">
           <label>Gender</label>
           <select class="form-control input-lg"  id="gender" size="1" name="gender">
              <option value="" disabled selected>Choose Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="other">Other</option>
           </select> 
           <span id="error_gender" class="text-danger"></span>
          </div>
             <div class="form-group">
           <label >Your  Birth Date</label>
           <input  type="date" id="bday" name="sdob" class="form-control input-lg" placeholder="Enter your date of birth">
           <span id="error_bday" class="text-danger"></span>
          </div>
          <div class="form-group">
           <label >Your  Phone Number</label>
           <input  type="number" id="phone" name="sphone" value="<?php echo $PSMobile; ?>" class="form-control input-lg" placeholder="Enter your phone Number">
           <span id="error_phone" class="text-danger"></span>
          </div>
          <div class="form-group">
              <label>Your Category</label>
             <select class="form-control input-lg"  id="category" size="1" name="category">
              <option value="" disabled selected>Choose Category</option>
              <option value="sc">SC</option>
              <option value="st">ST</option>
              <option value="gn">GN</option>
              <option value="obc">OBC</option>
              <option value="ur">UR</option>
              <option value="ews">EWS</option> 
              <option value="phc">PHC</option> 
              <option value="army">ARMY</option> 
              </select> 
              <span id="error_category" class="text-danger"></span>
             </div>
          <div class="form-group">
           <label>Nationality</label>
           <select class="form-control input-lg"  id="country" size="1" name="country">
              <option value="" disabled selected>Choose Nationality</option>
              <option value="Indian">Indian</option>
              <option value="Forign">Forign</option>
           </select> 
           <span id="error_country" class="text-danger"></span>
          </div>
          <div class="form-group">
              <label>If Indian</label>
              <input placeholder="Aadhar Number..." class="form-control input-lg" name="saadhar" type="number">
              
             </div>
           
             <!-- <div class="form-group">
              <label>Your Gender</label> <br>
              <label class="radio-inline">
               <input type="radio" name="male" value="male" checked> Male
              </label>
              <label class="radio-inline">
               <input type="radio" name="female" value="female"> Female
              </label>
             </div> -->
      
          <br />
          <div align="center">
           <button type="button" name="btn_your_details" id="btn_your_details" class="btn btn-primary btn-lg">NEXT</button>
          </div>
      
          <br />
         </div>
        </div>
       </div>
<!-- form 1 end -->

<!-- form 2 start  -->

<div class="tab-pane fade" id="personal_details">
    <div class="panel panel-default">
     <div class="panel-heading">Your Personal Details</div>
     <div class="panel-body">
  
         <div class="form-group">
          <label >Your Father's Name</label>
          <input type="text" id="fname" class="form-control input-lg" name="fname" placeholder="Enter your Father's name">
          <span id="error_fname" class="text-danger"></span>
        </div>
         <div class="form-group">
          <label >Your Father's Occuption </label>
          <input type="text" id="foccu" class="form-control input-lg" name="foccuption" placeholder="Enter your Father's occuption">
          <span id="error_foccu" class="text-danger"></span>
        </div>
         <div class="form-group">
          <label >Your Father's Mobile Number</label>
          <input type="number" id="fphone" class="form-control input-lg" name="fphone" placeholder="Enter your Father's mobile number">
          <span id="error_fphone" class="text-danger"></span>
        </div>
         <div class="form-group">
          <label >Your Mothers's Name</label>
          <input type="text" id="mname" class="form-control input-lg" name="mname" placeholder="Enter your Mother's name">
          <span id="error_mname" class="text-danger"></span>
        </div>
         <div class="form-group">
          <label >Your Mothers's Occuption</label>
          <input type="text" id="moccu" class="form-control input-lg" name="moccuption" placeholder="Enter your Mother's occuption">
          <span id="error_moccu" class="text-danger"></span>
        </div>
         <div class="form-group">
          <label >Your Mother's Mobile Number</label>
          <input type="number" id="Mphone" class="form-control input-lg" name="mphone" placeholder="Enter your Mother's mobile number">
          <span id="error_Mphone" class="text-danger"></span>
        </div>
         <div class="form-group">
        <label>Your Permanent Address</label>
        <textarea type="text" name="paddress" id="paddress" class="form-control input-lg" rows="" cols="2" placeholder="Enter your permanent address"></textarea>
        <span id="error_paddress" class="text-danger"></span>
      </div>
      <div class="form-group">
          <label >Your Permanent City & Pin</label>
          <input type="text" id="pcity" class="form-control input-lg" name="ppincity" placeholder="Enter your Permanent address city and pin code">
          <span id="error_pcity" class="text-danger"></span>
        </div>
      <div class="form-group">
          <label >Your Permanent District & State</label>
          <input type="text" id="pdistrict" class="form-control input-lg" name="pdistrictstate" placeholder="Enter your Permanent address District and State">
          <span id="error_pdistrict" class="text-danger"></span>
        </div>
      <div class="form-group">
          <label >Your Correspondences Address</label>
          <textarea type="text" rows="" cols="2" name="caddress" id="caddress" class="form-control input-lg" placeholder="Enter your Correspondences address"></textarea>
          <span id="error_caddress" class="text-danger"></span>
      </div>
    <div class="form-group">
      <label >Your Correspondences City & Pin</label>
      <input type="text" id="ccity" class="form-control input-lg" name="cpincity" placeholder="Enter your Correspondences city and pin code">
      <span id="error_ccity" class="text-danger"></span>
    </div>
    <div class="form-group">
          <label >Your Correspondences District & State</label>
          <input type="text" id="cdistrict" class="form-control input-lg" name="cdistrictstate" placeholder="Enter your Permanent address State and Country">
          <span id="error_cdistrict" class="text-danger"></span>
        </div>
   
        
      <br />



      <div align="center">
       <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
       <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-primary btn-lg">NEXT</button>
      </div>


      <br />
     </div>
    </div>
   </div>
<!-- form 2 end -->

<!-- form 3 start -->

<div class="tab-pane fade" id="address_details">
    <div class="panel panel-default">
     <div class="panel-heading">Your Academics Details</div>
     <div class="panel-body">
        
     <div class="form-group">
                <label>Your Stream</label>
                <select type="text" class="form-control input-lg" id="stream" name="stream" >
                  <option selected disabled>Choose Stream</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Medical">Medical</option>
                  <option value="Foundation">Foundation</option>
                  <option value="other">Other</option>
                </select>
                <span id="error_stream" class="text-danger"></span>
               </div>
            <div class="form-group">
             <label>Your Class </label>
             <select type="text" class="form-control input-lg" id="class" name="class" >
              <option selected disabled>Choose Present Class</option>
              <option value="8th">8th</option>
              <option value="9th">9th</option>
              <option value="10th">10th</option>
              <option value="11th">11th</option>
              <option value="12th">12th</option>
              <option value="Dropper">Dropper</option>
            </select>
            <span id="error_class" class="text-danger"></span>
           
            </div>
            <div class="form-group">
                <label>Your Board </label>
                <select type="text" class="form-control input-lg" id="board" name="board">
                  <option selected disabled>Choose Board</option>
                  <option value="CBSE">CBSE</option>
                  <option value="ICSE">ICSE</option>
                  <option value="STATE BOARD">STATE BOARD</option>
                </select>
                <span id="error_board" class="text-danger"></span>
               </div>
               <div class="form-group">
               <label > Your Class for Admission</label>
               <select type="text" class="form-control input-lg" id="Aclass" name="Aclass" class="input">
                  <option selected disabled>Choose Admission Class</option>
                  <option value="8th">8th</option>
                  <option value="9th">9th</option>
                  <option value="10th">10th</option>
                  <option value="11th">11th</option>
                  <option value="12th">12th</option>
                  <option value="Dropper">Dropper</option>
                </select>
                <span id="error_Aclass" class="text-danger"></span>
               </div>
           
               
            <div class="form-group">
             <label>Your School Name</label>
             <input type="text" id="school" placeholder="Enter your school name" class="form-control input-lg" name="schname">
             <span id="error_school" class="text-danger"></span>
            </div>
            <div class="form-group">
              <label for="name ">Your Schools Address</label>
              <textarea type="text" name="saddress" id="saddress" class="form-control input-lg"></textarea>
              <span id="error_saddress" class="text-danger"></span>
            </div>

            <div class="form-group">
            <label > Your Medium</label>
                 <select type="text" class="form-control input-lg" id="medium" name="medium" >
                    <option selected disabled>Choose Medium</option>
                    <option value="hindi">Hindi</option>
                    <option value="English">English</option>
                  </select>
                  <span id="error_medium" class="text-danger"></span>
          </div>
          <div class="form-group">
                 <label for="">10th Passed / Appearing</label>
                 <select type="text" class="form-control input-lg" id="status10th" name="status10th" >
                 <option selected disabled>Choose Status</option>
                    <option value="Passed">Passed</option>
                    <option value="Appreaing">Appreaing</option>
                  </select>
                  <span id="error_status10th" class="text-danger"></span>
            </div>
          <div class="form-group">
                 <label for="">If 10th Passed</label>
                 <p><input type="text" placeholder="Enter Passing Year..." class="form-control input-lg"    name="year10"></p>
                 <p><input type="text" placeholder="Enter Roll number..." class="form-control input-lg"     name="roll_No10"></p>
                 <p><input type="text" placeholder="Marks Obtained in %..." class="form-control input-lg"   name="marks10"></p>
            </div> 
            <div class="form-group">
                 <label for="">12th Passed / Appearing</label>
                 <select type="text" class="form-control input-lg" id="status12th" name="status12th" >
                 <option selected disabled>Choose Status</option>
                    <option value="Passed">Passed</option>
                    <option value="Appreaing">Appreaing</option>
                  </select>
                  <span id="error_status12th" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="">If 12th Passed</label>
                <p><input type="text" placeholder="Enter Passing Year..." class="form-control input-lg"    name="year12"></p>
                <p><input type="text" placeholder="Enter Roll number..." class="form-control input-lg"     name="roll_No12"></p>
                <p><input type="text" placeholder="Marks Obtained in %..." class="form-control input-lg"   name="marks12"></p>
            </div>
      <br />
      <div align="center">
          <button type="button" name="previous_btn_address_details" id="previous_btn_address_details" class="btn btn-default btn-lg">Previous</button>
          <button type="button" name="btn_address_details" id="btn_address_details" class="btn btn-primary btn-lg">NEXT</button>
         </div>
    
         <br />
      </div>
     </div>
    </div>

<!-- form 3 end -->


<!-- form 4 start -->

<div class="tab-pane " id="acedemic_details">
    <div class="panel panel-default">
     <div class="panel-heading">Upload Your Documents</div>
     <div class="panel-body">
  
     <div class="form-group">
        <label for=" ">Upload Passport Size Photo</label>
         <input type="file" name="Image" id="fileToUpload" class="form-control input-lg">
         </div>
      <div class="form-group">
        <label for=" ">Upload Your 12th Marksheet</label>
      <input type="file" name="file12mark" id="fileToUpload" class="form-control input-lg">
      </div>
      <div class="form-group">
        <label for="name ">Upload Your 10th Marksheet</label>
        <input type="file" name="file10mark" id="fileToUpload" class="form-control input-lg">
         </div>
         <div class="form-group">
          <label>How did You Come to Know?</label>
          <select type="text" class="form-control input-lg" id="source" name="source">
            <option value="Internet">Internet</option>
            <option value="Friends">Friends</option>
            <option value="News Paper">News Paper</option>
            <option value="School">School </option>
            <option value="Poster">Poster </option>
            <option value="Pamphlet">Pamphlet</option>
            <option value="other">other</option>
          </select>
         </div>
         <div>
      
           <input type="checkbox" value="agree" name="term" class="">&nbsp; <span style="font-weight: bold;">Applied all terms and conditions</span>
            <div class="ml-5">
              <ol>
                <li>I have checked all term & conditions</li>
                 <li>I have checked all term & conditions</li>
                  <li>I have checked all term & conditions</li>
                   <li>I have checked all term & conditions</li>
                    <li>I have checked all term & conditions</li>
              </ol>
            </div>
         </div>
      <br />
      <div align="center">
        <button type="button" name="previous_btn_acedemic_details" id="previous_btn_acedemic_details" class="btn btn-default btn-lg">Previous</button>
        <button type="submit" name="Register" id="submit_form" class="btn btn-success btn-lg">Register</button>
       </div>
      
      <br />
     </div>
    </div>
   </div>

<!-- form 4 end -->
</div> 
</form>
         </div>
         <script src="js/index.js"></script>



    </body>
    </html>