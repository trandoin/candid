 <?php  require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?> 



<?php 
//session_start();
include 'include/DB.php';
$stream_name = $_SESSION['stream_name'];

$stream_title = $_SESSION['stream_titles'];

$stream_class = $_SESSION['stream_class'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candid-Courses</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Noto+Sans+KR:700|Comic+Neue:wght@300;400;700|Noto+Serif|Roboto|Bitter|Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
    <style type="text/css">
        *{
            font-family: Arial, Helvetica;
        }
    </style>
</head>
<body>
<?php include('header1.php') ?>
<?php include('navbar1.php') ?>
<!-- MAIN PAGE START -->
<!-- selection view of the mode of program -->
    <div class=" typeofc " >
<div class="container ">
    <div class="row ">
        <div class="col-sm-4  text-center hey">
       <a role="button"  onclick="fncc()">
            <div class="type_of_Course">
        <img src="photos/4.jpg" alt="" >
        <h4 class="text-dark">CLASSROOM COURSES</h4>
        </div>
    </a>
        </div>
        <div class="col-sm-4  text-center hey">
       <a role="button"  onclick="fnoc()">
        <div class="type_of_Course ">
            <img src="photos/4.jpg" alt="" >
            <h4 class="text-dark">ONLINE COURSES</h4>
        </div>
       </a>
        
        </div>
        <div class="col-sm-4 text-center hey">
     <a role="button"  id= "c3" onclick="fncn()">
        <div class="type_of_Course ">
            <img src="photos/4.jpg" alt="" >
            <h4 class="text-dark">CANDID NOTES</h4>
        </div>
     </a>
        
        </div>
    </div>
</div>
    </div>
</div>


    <!-- filtering of the courses -->

<div class="container-fluid">
        <div class="row" style="background-color: whitesmoke;">
            
<!-- all courses which coaching have  -->
<div id="onlinec" class="col-md-12 onc"   style="display:none; padding-top: 80px;">
<div class="container">
<div class="row">
    <div class="col-lg-6 oncc" >
        <div class="shadow">
            <iframe src="https://www.youtube.com/embed/otjFrsLHKAU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>IIT JEE | 12 <sup>th</sup> | PHYSICS</h6>
            <h6  style="font-size:20px;font-weight:400">Capacitor(Electrostatic)</h6>
            <button class="btn btn-primary btn-block">Enroll Course</button>
        </div>
        
    </div>
    <div class="col-lg-6 oncc" >
        <div class="shadow " >
            <iframe src="https://www.youtube.com/embed/qNlUcJ5Sxrg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>IIT JEE | 12 <sup>th</sup> | CHEMISTRY</h6>
            <h6  style="font-size:20px;font-weight:400">Alchoal(Organic Chemistry)</h6>
            <button class="btn btn-primary btn-block">Enroll Course</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 oncc" >
        <div class="shadow ">
            <iframe src="https://www.youtube.com/embed/otjFrsLHKAU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>IIT JEE | 12 <sup>th</sup> | PHYSICS</h6>
            <h6  style="font-size:20px;font-weight:400">Ohms law(Current Electricity)</h6>
            <button class="btn btn-primary btn-block">Enroll Course</button>
        </div>
        
    </div>
    <div class="col-lg-6 oncc">
        <div class="shadow " >
            <iframe src="https://www.youtube.com/embed/qNlUcJ5Sxrg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>IIT JEE | 12 <sup>th</sup> | CHEMISTRY</h6>
            <h6 style="font-size:20px;font-weight:400">d-block Elements (Inorganic Chemistry)</h6>
            <button class="btn btn-primary btn-block">Enroll Course</button>
        </div>
    </div>
</div>
</div>
            </div>

<div id="recordedc" class="col-md-9 course_card  pr-5 pl-5" style="display:none; padding-top: 80px;">
<div class="container">
<div class="row">
    <div class="col-lg-6 oncc" >
        <div class="shadow">
            <iframe src="https://www.youtube.com/embed/uC1iJcYOyeY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>IIT JEE | 12 <sup>th</sup> | PHYSICS</h6>
            <h6  style="font-size:20px;font-weight:400">Capacitor(Electrostatic)</h6>
            <button class="btn btn-primary btn-block">Enroll Course</button>
        </div>
        
    </div>
    <div class="col-lg-6 oncc" >
        <div class="shadow " >
            <iframe src="https://www.youtube.com/embed/vTQkB6MvKZc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>IIT JEE | 12 <sup>th</sup> | CHEMISTRY</h6>
            <h6  style="font-size:20px;font-weight:400">Alchoal(Organic Chemistry)</h6>
            <button class="btn btn-primary btn-block">Enroll Course</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 oncc" >
        <div class="shadow ">
            <iframe src="https://www.youtube.com/embed/-fP4LK67CW0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>IIT JEE | 12 <sup>th</sup> | PHYSICS</h6>
            <h6  style="font-size:20px;font-weight:400">Ohms law(Current Electricity)</h6>
            <button class="btn btn-primary btn-block">Enroll Course</button>
        </div>
        
    </div>
    <div class="col-lg-6 oncc">
        <div class="shadow " >
            <iframe src="https://www.youtube.com/embed/jBspOUwBHRg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>IIT JEE | 12 <sup>th</sup> | CHEMISTRY</h6>
            <h6 style="font-size:20px;font-weight:400">d-block Elements (Inorganic Chemistry)</h6>
            <button class="btn btn-primary btn-block">Enroll Course</button>
        </div>
    </div>
</div>
            </div></div>




            
 <div id="classroomc" class="col-md-12 course_card  pr-5 pl-5" style="padding-top: 80px;">


                <!-- each course container start -->


        <?php 
             $sql = "SELECT * FROM cpost where course_stream = '$stream_name' and title='$stream_title' and course_class='$stream_class'";

                 $stmt = $ConnectingDB ->query($sql);
                 while ($DataRows = $stmt->fetch()) { 
                  $ID  = $DataRows["id"];
                  $DateTime1  = $DataRows["datetime"];
                  $PostTitle1  = $DataRows["title"];
                  $PostClass1 = $DataRows['course_class'];// Suraj
                  $PostStream1 = $DataRows['course_stream'];//suraj
                  $Frequency1  = $DataRows["frequency"];
                  $StartDate1  = $DataRows["sbatch"];
                  $EndDate1  = $DataRows["ebatch"];
                  $Image1  = $DataRows["pdf"];
                 
                 
                 
         ?>
  
<div id="Medical<?php echo $ID;?>" class="tenth container shadow course_card_content" >

    
        <h3 id="program_name<?php echo $ID;?>"><?php echo $PostTitle1; ?></h3>
        <!-- image part start-->
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
               <div class="p-3 program_for">
                <ul class="list-unstyled" style="display:inline-flex">
                    <li>
                        <img src="Photos\1.jpg" alt="" >
                    </li>
                    <li>
                        <h6 class="pl-3 mt-2 selected_class<?php echo $ID;?>"><font style="color: rgb(80, 79, 79);">for</font><br><?php echo htmlentities($PostClass1); ?>th Class Students</h6> <!------Add by suraj----->
                    </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
               <div class="p-3 program_for">
                <ul class="list-unstyled" style="display:inline-flex">
                    <li>
                        <img src="Photos\2.jpg" alt="" >
                    </li>
                    <li>
                        <h6 class="pl-3 mt-2"><font style="color: rgb(80, 79, 79);">Schlorship</font><br>Avilable</h6>
                    </li>
                </ul>
                 </div>
            </div>
            <div class="col-lg-4">
               <div class="p-3 program_for">
                <ul class="list-unstyled" style="display:inline-flex">
                    <li>
                         <i class="fa fa-file-pdf-o text-info" style="font-size:50px;"></i>
                    </li>
                    <li>
                        <h6 class="pl-3 mt-2"><font style="color: rgb(80, 79, 79);"><a href="Upload/<?php echo $Image1; ?>" download="" style="text-decoration: none;"> View/Download Brochure</a></font></h6>
                    </li>
                </ul>
            </div>
          </div>
          </div>
        </div>
        
        <!-- image part end -->
        <!-- couse information -->
        <div class="pl-3 pt-1 pr-3">
         <ul class="list-unstyled" style="display:inline-flex">
             <li><i class="fa fa-history mt-3" style="font-size:32px;color:#3078c1"></i></li>
             <li>
                 <p class="pl-2 mt-3" style="color: grey;"><b style="color: black;">Frequency</b> <br><?php echo htmlentities($Frequency1); ?></p>
             </li>
         </ul>
         
        </div>
        <div class="pl-3 pr-3" style="margin-top: -40px;">
            <ul class="list-unstyled" style="display:inline-flex">
                <li><i class="  fa fa-calendar mt-3" style="font-size:32px;color:#3078c1"></i></li>
                <li>
                    <p class="pl-2 mt-3" style="color: grey;"><b style="color: black;">Batch Starting On</b> <br><?php echo htmlentities($StartDate1); ?></p>
                </li>
            </ul>
           </div>
           <div class="pl-3 pr-3" style="margin-top: -30px;">
            <ul class="list-unstyled" style="display:inline-flex">
               
                <li class="pl-4">
                    <p class="pl-3 mt-3" style="color: grey;"><b style="color: black;">Batch Ending On</b> <br><?php echo htmlentities($EndDate1); ?></p>
                </li>
            </ul> 
           </div>
          
          <div class="container">
            <div class="row">
              <div class="col-lg-4 mb-2">
                <a class="btn btn-info btn-block" href="#"><i class="fas fa-shopping-cart"></i> PAY REGISTRATION FEE</a>
              </div>
              <div class="col-lg-4 mb-2">
                <a class="btn btn-info btn-block" href="index.php#request"><i class="fas fa-phone-volume"></i> REQUEST A CALL BACK</a>
              </div>
              <div class="col-lg-4 mb-2">
                <a class="btn btn-info btn-block" href="index.php#request1"><i class="fas fa-sms"></i> LEAVE A MESSAGE</a>
              </div>
            </div>
          </div>
          
</div>
<?php } ?>
</div>



<div id="classroomc_all" class="col-md-12 course_card  pr-5 pl-5" style="padding-top: 80px;display:none">


<!-- each course container start -->


<?php 

     $sql = "SELECT * FROM cpost";

        $stmt = $ConnectingDB->query($sql);
        while ($DataRows = $stmt->fetch()) { 
        $ID  = $DataRows["id"];
        $DateTime1  = $DataRows["datetime"];
        $PostTitle1  = $DataRows["title"];
        $PostClass1 = $DataRows['course_class'];
        $PostStream1 = $DataRows['course_stream'];
        $Frequency1  = $DataRows["frequency"];
        $StartDate1  = $DataRows["sbatch"];
        $EndDate1  = $DataRows["ebatch"];
        $Image1  = $DataRows["pdf"];
        
        
        
        ?>

<div id="Medical<?php echo $ID;?>" class="tenth container shadow course_card_content" >


<h3 id="program_name<?php echo $ID;?>"><?php echo $PostTitle1; ?></h3>
<!-- image part start-->
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="p-3 program_for">
<ul class="list-unstyled" style="display:inline-flex">
    <li>
        <img src="Photos\1.jpg" alt="" >
    </li>
    <li>
        <h6 class="pl-3 mt-2 selected_class<?php echo $ID;?>"><font style="color: rgb(80, 79, 79);">for</font><br><?php echo htmlentities($PostClass1); ?>th Class Students</h6> <!------Add by suraj----->
    </li>
</ul>
</div>
</div>
<div class="col-lg-4">
<div class="p-3 program_for">
<ul class="list-unstyled" style="display:inline-flex">
    <li>
        <img src="Photos\2.jpg" alt="" >
    </li>
    <li>
        <h6 class="pl-3 mt-2"><font style="color: rgb(80, 79, 79);">Schlorship</font><br>Avilable</h6>
    </li>
</ul>
 </div>
</div>
<div class="col-lg-4">
<div class="p-3 program_for">
<ul class="list-unstyled" style="display:inline-flex">
    <li>
         <i class="fa fa-file-pdf-o text-info" style="font-size:50px;"></i>
    </li>
    <li>
        <h6 class="pl-3 mt-2"><font style="color: rgb(80, 79, 79);"><a href="Upload/<?php echo $Image1; ?>" download="" style="text-decoration: none;"> View/Download Brochure</a></font></h6>
    </li>
</ul>
</div>
</div>
</div>
</div>

<!-- image part end -->
<!-- couse information -->
<div class="pl-3 pt-1 pr-3">
<ul class="list-unstyled" style="display:inline-flex">
<li><i class="fa fa-history mt-3" style="font-size:32px;color:#3078c1"></i></li>
<li>
 <p class="pl-2 mt-3" style="color: grey;"><b style="color: black;">Frequency</b> <br><?php echo htmlentities($Frequency1); ?></p>
</li>
</ul>

</div>
<div class="pl-3 pr-3" style="margin-top: -40px;">
<ul class="list-unstyled" style="display:inline-flex">
<li><i class="  fa fa-calendar mt-3" style="font-size:32px;color:#3078c1"></i></li>
<li>
    <p class="pl-2 mt-3" style="color: grey;"><b style="color: black;">Batch Starting On</b> <br><?php echo htmlentities($StartDate1); ?></p>
</li>
</ul>
</div>
<div class="pl-3 pr-3" style="margin-top: -30px;">
<ul class="list-unstyled" style="display:inline-flex">

<li class="pl-4">
    <p class="pl-3 mt-3" style="color: grey;"><b style="color: black;">Batch Ending On</b> <br><?php echo htmlentities($EndDate1); ?></p>
</li>
</ul> 
</div>

<div class="container">
<div class="row">
<div class="col-lg-4 mb-2">
<a class="btn btn-info btn-block" href="#"><i class="fas fa-shopping-cart"></i> PAY REGISTRATION FEE</a>
</div>
<div class="col-lg-4 mb-2">
<a class="btn btn-info btn-block" href="index.php#request"><i class="fas fa-phone-volume"></i> REQUEST A CALL BACK</a>
</div>
<div class="col-lg-4 mb-2">
<a class="btn btn-info btn-block" href="index.php#request1"><i class="fas fa-sms"></i> LEAVE A MESSAGE</a>
</div>
</div>
</div>

</div>
<?php } ?>
</div>

<div id="coursewise" class="col-md-12 course_card  pr-5 pl-5" style="padding-top: 80px;">

<!-- here will come if user click on any stream then it will show -->

</div>
<div id="M" class="tenth container shadow course_card_content text-center" style="display:none">
      <h1>No Records Found</h1>
</div>

        </div>
    </div>


<!-- MAIN PAGE  ENDING -->


<!-- Scripts -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script src = "js/pop3.js"></script>

<!--  SCRIPTS ENDS -->
<!-- FOOTER SECTION -->
<?php include('footer1.php')  ?>
</body>
</html>