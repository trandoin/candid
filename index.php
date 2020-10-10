 <?php  require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?> 



<!--PHP FOR CUSTOMBER INQURIES  START   -->
<?php 

if(isset($_POST["Submit"])) {
  if(!empty($_POST["NAME"]) && !empty($_POST["EMAIL"])) {
    $Name       = $_POST["NAME"];
    $Email         = $_POST["EMAIL"];
    $Mobile        = $_POST["MOBILE"];
    $Stream     = $_POST["STREAM"];
    $Class = $_POST["CLASS"];
    $State = $_POST["STATE"];
    global $ConnectingDB; # global used bcoz we can use any version of php
    $sql = "INSERT INTO inquiry(NAME,EMAIL,MOBILE,STREAM,CLASS,STATE)
        VALUES(:namE,:emaiL,:mobilE,:streaM,:clasS,:statE)";
        $stmt = $ConnectingDB->prepare($sql);
        $stmt->bindValue('namE',$Name);
        $stmt->bindValue('emaiL',$Email);
        $stmt->bindValue('mobilE',$Mobile);
        $stmt->bindValue('streaM',$Stream);
        $stmt->bindValue('clasS',$Class);
        $stmt->bindValue('statE',$State);
        $Execute = $stmt->execute();
        if ($Execute) {
         # alert("<h2 class='FieldInfoHeading'>Thanks for connecting us!</h2>")
          echo "<span class='success'><h4>Thank you for connecting us! we will call back soon!</h4></span>";
          header('refresh:2;url=index.php');
        }
  }
  else{
    echo "<span class='FieldInfoHeading'>Please Add Atleast Name and Security Number</span>";
  }
}

 ?><!--PHP FOR CUSTOMBER INQURIES  END   -->

<!-- PHP START FOR SLIDE IMAGE GALLERY START -->
<?php 

$con = new mysqli("localhost","root","","candid");


$Result = $con->query("SELECT slide_image FROM slider");

 ?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candind Coaching Institute</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Noto+Sans+KR:700|Noto+Serif|Roboto|Bitter|Libre+Baskerville&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
<style type="text/css">
  *{
    font-family: Arial, Helvetica;
  }
  .collapse ul li a{
    text-decoration: none;
    font-weight: normal;
    font-size: 15px;
  }
  .scr h5,h6{
    font-weight: bold;
  }
</style>
</head>
<body>
<?php include('header1.php') ?>
<?php include('navbar1.php') ?>

<!-- slider start -->
<!-- slider start -->
  <?php include('Admin/slide.php')  ?>







<!--  -->



<!-- MAIN PAGE START -->

<!-- chat application -->
        <div class="chaticon" id="request1" style="font-family: Arial Helvatica;">
          <img src="photos/whatsapp.png" alt="" id="chaticonimg">
        </div>
        <div id="chatcontent">
          <img src="photos/cut.png" alt=""  id="crossiconimg">
            <p id="chatheader">Leave a Message on Whatsapp</p>
            <form action="" id="chat">
            <input type="text" class="form-control" placeholder="Full Name" id="name" required>
            <input type="number" class="form-control" placeholder="Phone No" id="phoneno" required>
            <select class="form-control class" required>
              <option id="class1">Select Your Class</option>
              <option >9th</option>
              <option >10th</option>
              <option >11th</option>
              <option >12th</option>
              <option >Dropper</option>
            </select>
            <select class="form-control course" required>
              <option id="course1">Select Your Course</option>
              <option>IIT-JEE</option>
              <option>MEDICAL</option>
              <option>FOUNDATION</option>
            </select>
            <textarea  rows="2" placeholder="Message" class="form-control" id="msg" required></textarea>

           <button class="btn btn-success send">Send</button>
          </form>
        
        </div>
<!-- end chat applicartion -->



<!-- announcement and news section -->
 <div class="news_ann container-fluid">
     <div class="row">
   <!--    <i class="fas fa-bullhorn"></i> -->
         <div class="col-lg-6 bg-white border-right p-3" style="height: auto;">
<h3 style="font-weight: bold;" class="H">ANNOUNCEMENT  <a href="#"><i style="float:right;font-weight: bold; color:rgb(19, 87, 155);" class="fas fa-bullhorn"></i></a></h3>
<div style="margin-top: 15px;">
  <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM announce ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $CategoryId = $DataRows["id"];
                      $CategoryName = $DataRows["title"];
                      $PDF = $DataRows["pdf"];
           ?>
    <table class="table " >
        <tbody>
            <tr>
                <td><p style="font-size: 14px;"> <!--JEE Question Bank - Download Free chapter-wise answer solution from the last 22 Years (4400+ Questions) --> <?php echo $CategoryName; ?> <img src="image/New.gif"></p></td>
                <td><a href="index.php?announce=<?php echo $PDF; ?>" download="<?php echo $PDF; ?>">view</a></td>
                <?php } ?>
            </tr> 
        </tbody>
        </table>
</div>
         </div>
         <div class="col-lg-6 bg-white border-left p-3" style="height: auto;">
<h3 style="font-weight: bold;" class="H" >NEWS & EVENTS <a href="#"><i style="float:right;color:rgb(19, 87, 155)" class="fas fa-newspaper" ></i></a></h3>
<div style="margin-top: 15px;">
   <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM ne ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $CategoryId1 = $DataRows["id"];
                      $CategoryName1 = $DataRows["title"];
                      $PDF1 = $DataRows["pdf"];
           ?>
    <table class="table " >
        <tbody>
            <tr>
                <td><p style="font-size: 14px;"><?php echo $CategoryName1; ?> <img src="image/New.gif"></p> </td>
                <td><a href="index.php?ne=<?php echo $PDF; ?>" download="<?php echo $PDF1; ?>"><i style="font-size:24px;color:rgb(212, 51, 51)" class="fa">&#xf1c1;</i></a></td>
              <?php } ?>
            </tr> 
        </tbody>
        </table>
</div>
         </div>
         </div>
     </div>
    
     <!-- courses offers section -->
     <div class="container-fluid offer" >

         <h1 class="text-center " style="font-family: Arial Helvatica;font-weight: bold;">Current Offers</h1>
    <div class="container scr"  style="background-color:rgb(247, 247, 247);height:max-content;overflow-x:scroll; ">
       <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM offer ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId = $DataRows["id"];
                       $OfferImage = $DataRows["image"];
                      $OfferTitle = $DataRows["title"];
                      $OfferDescription = $DataRows["description"];
                     
           ?>
    <ul style="list-style-type:none;display:inline-flex;">
      <li style="padding:20px 20px 20px 10px;"><div class="coff">
                   <div class="card" style="width:100% ;">
                      <img class="card-img-top" src="Admin/Upload/<?php echo htmlentities($OfferImage); ?>" alt="Card image" style="width:100%;height: 150px;">
                       <div class="card-body">
                         <h6 class="card-title" style="font-weight: bold; color: #000000;"><?php echo htmlentities($OfferTitle); ?></h6>
                         <p class="text-primary"><?php echo htmlentities($OfferDescription); ?></p>
                         <a href="Courses.php" class="btn btn-primary btn-block">Enroll Now</a>
                       </div>
                     </div>
                </div>
              </li>

          <?php } ?>
    </ul>
     </div>
     <!-- answer and question of recent compitative examination -->
    </div>
    <div class="container-fluid p-5" >
        <h1 class="text-center" style="font-weight: bold;">Answer & Solutions</h1>
        <h6 class="text-center text-secondary" style="margin-bottom: 30px;" >Find accurate Answers & detailed Solutions of major competitive exams and AIATS and mock tests here.</h6>
      <div class="scr container">
        <ul style="list-style-type:none;display:inline-flex;">
          <li ><div class="ans border ">
            <h6><small class="float-left mt-2 ans_e1">Answers & Solutions</small><small class="float-right mt-1 text-primary ans_e2">Engineering</small></h6><br>
           
            <h6 class="text-primary mt-3">Questions & Solutions</h6>
            <h5 style="margin-top: -8px;font-family: Arial Helvatica;">IIT-JEE 2020</h5>
            <h6 class="text-secondary mt-3">PHYSIC | CHEMISTRY | MATHEMATICE</h6>
        </div></li>
          <li > <div class="ans border">
            <h6><small class="float-left mt-2 ans_e1">Answers & Solutions</small><small class="float-right mt-1 text-primary ans_e2">Foundation</small></h6><br>
            <h6 class="text-primary mt-3">Questions & Solutions</h6>
            <h5 style="margin-top: -8px;font-family: Arial Helvatica;">IIT-JEE|NEET 2020</h5>
            <h6 class="text-secondary mt-3">PHYSIC | CHEMISTRY | BIOLOGY | MATHEMATICE</h6>
        </div></li>
          <li > <div class="ans border pb-4">
            <h6><small class="float-left mt-2 ans_e1">Answers & Solutions</small><small class="float-right mt-1 text-primary ans_e2">Medical</small></h6><br>
            <h6 class="text-primary mt-3">Questions & Solutions</h6>
            <h5 style="margin-top: -8px;font-family: Arial Helvatica;">NEET|AIIMS 2020</h5>
            <h6 class="text-secondary mt-3">PHYSIC | CHEMISTRY | BIOLOGY</h6>
        </div></li>
          <li > <div class="ans border ">
            <h6><small class="float-left mt-2 ans_e1">Answers & Solutions</small><small class="float-right mt-1 text-primary ans_e2">Olyampiads</small></h6><br>
            <h6 class="text-primary mt-3">Questions & Solutions</h6>
            <h5 style="margin-top: -8px;font-family: Arial Helvatica;">OLYAMPIADS 2020</h5>
            <h6 class="text-secondary mt-3">PHYSIC | CHEMISTRY | MATHEMATICE</h6>
        </div></li>
        </ul>
      </div>
      <div class="text-center mt-4">
    <a href="Other_info.php#pre_p" class="border maq" style="font-family: Arial, Helvetica;"> VIEW QUESTIONS & ANSWERS</a>
      </div>
    </div>
<!-- result section -->

<div class="our-results p-3">
  <h1>Our Results</h1>
<div class="tab">
  <button class=" active tablinks" onclick="openCity(event, 'MEDICAL',)"><b>MEDICAL</b></button>
  <button class="tablinks" onclick="openCity(event, 'ENGINEERING')"><b>ENGINEERING</b></button>
  <button class="tablinks" onclick="openCity(event, 'FOUNDATIONS')"><b>FOUNDATION</b></button>
</div>

<div id="MEDICAL" class="container text-center  p-3 tabcontent">
<div class="row">
   <div class="col-lg-4">
  <h1>80081</h1>
  <p>NEET 2019 Selections</p>
 </div>
<div class="col-lg-4">
  <h1>688</h1>
  <p>AIIMS 2019 Selections</p>
</div>
<div class="col-lg-4">
  <h1>373</h1>
  <p>JIPMER 2019 Selections</p>
</div>  
</div>
  <div class="three text-center mt-5 mb-5" >
    <a href="Result.php#medical">SHOW ALL MEDICAL RESULTS</a>
</div>
</div>

<div id="ENGINEERING" style="display: none;" class="container text-center  p-3 tabcontent">
  <div class="row">
    <div class="col-lg-4">
      <h1>7648</h1>
      <p>JEE MAIN 2019 Selections</p>
    </div>
    <div class="col-lg-4">
      <h1>1633</h1>
    <p>JEE (Adv.) 2019 Selections</p>
    </div>
  <div class="col-lg-4">
    <h1>417</h1>
      <p>BITSAT 2019 Selections</p>
  </div >
  </div>
  <div class="three text-center mt-5 mb-5">
  
    <a href="Result.php#jee">SHOW ALL ENGINEERING RESULTS</a>

</div>
</div>

<div id="FOUNDATIONS" style="display: none;" class="container text-center  p-3 tabcontent">
<div class="row">
  <div class="col-lg-4">
    <h1>750</h1>
    <p>NTSE (Stage-I) 2018-19 Selections</p>
   </div>
   <div class="col-lg-4">
    <h1>445</h1>
    <p>KVPY 2019 Selections</p>
   </div>
   <div class="col-lg-4">
    <h1>366</h1>
    <p>NTSE (Stage-II) 2019 Selections</p>
   </div>
</div>
  <div class="three text-center mt-5 mb-5">

    <a href="Result.php#kvpy">SHOW ALL FOUNDATIONS RESULTS</a>

</div>
</div>
</div>

<!-- students review section called as testimonal -->

<div class="container" style="font-family: Arial Helvatica;">
    <h1 class="display1 text-center pt-5 mb-5 " style="font-weight: bold;">Testimonals</h1>
    
      <div class="main-carousel text-center " data-flickity='{ "wrapAround": true , "autoPlay": true}'>
            
             <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM testinomial ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId = $DataRows["id"];
                       $OfferImage = $DataRows["image"];
                      $StudentTitle = $DataRows["sname"];
                      $CourseTitle = $DataRows["cname"];
                      $StudentMessage = $DataRows["smessage"];
                     
           ?>

        <div class="carousel-cell">  
          <div class="card" style="width:100%">
            <img class=" card-img-top image-fluid" src="Admin/Upload/<?php echo htmlentities($OfferImage); ?>" alt="Card image" >
            <div class="card-body">
              <h4 class="card-title" style="font-weight: bold;"><?php echo htmlentities($StudentTitle); ?></h4>
              <h5><?php echo htmlentities($CourseTitle); ?></h5>
              <p class=""><?php echo htmlentities($StudentMessage); ?></p>
            </div>
          </div></div>
        <?php } ?>
    </div>
  </div>
<!-- testimonal end -->

<!--- Start form section -->

  <div class="container-fluid pt-5 pb-5 " id="request1"  style="margin-top: 40px; background-color: #5297e0;" align="center">
  <fieldset>
  <h1 align="center" style="color: #fff; font-weight: bold;" id="request">Talk to our expert</h1>
  <div class="card-body">
  <form action="#" method="post">
    <label>Name:
    <input class="form-control" type="text" name="NAME" placeholder="Name" required="">
    </label>
    <label>Email :
    <input class="form-control" type="email" name="EMAIL" placeholder="Email" required="">
    </label>
    <label>Mobile No. :
    <input class="form-control" type="text" name="MOBILE" placeholder="Mobile No" required="">
    </label>
    <label>Stream:
 <!--   <input type="text" name="STREAM" placeholder="Ex. Medical,Engineering"> -->
    <select class="form-control" type="text" name="STREAM">
      <option>Stream</option>
      <option>Engineering</option>
      <option>Medical</option>
      <option>Foundation</option>
    </select>
    </label>
    <label>Class:
  <!--  <input type="text" name="CLASS" placeholder="Ex. 8th,9th,10th,11th,12th,13th"> -->
    <select class="form-control" type="text" name="CLASS">
      <option>Class</option>
      <option>8th</option>
      <option>9th</option>
      <option>10th</option>
      <option>11th</option>
      <option>12th</option>
      <option>13th</option>
    </select>
    </label>
    <label>Address:
   <input class="form-control" type="text" name="STATE" placeholder="Enter your Address">
    </label><br>
    <p style="margin-top: 10px;"><input type="checkbox" name="" required="">&nbsp;&nbsp;&nbsp;By accepting you are expressly agreeing to Candid's</p>
    <input class="btn btn-submit" style="background-color: #fff; color:blue; font-family: Arial, Helvetica;" type="Submit" name="Submit" value="REQUEST A CALL BACK" >
  </form>
  </div>
</fieldset>
</div> <!-- Ending Form div--->

<!--MAIN AREA ENDING -->
<!-- FOOTER SECTION -->
<?php include('footer1.php')  ?>


<script src="js/chat.js"></script>
<script src="js/index.js"></script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
</body>
</html>