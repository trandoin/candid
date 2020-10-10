<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>  

<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candid-Results</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/results.css">
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

<!-- MAIN AREA START -->

<!-- selection view of the mode of program -->
    <div class=" typeofc " >
<div class="container ">
    <div  class="row text-center"><span style="margin-top: 180px;">
        <h2 class="our-r">OUR RESULTS</h2>
        
        <h3 class="our-rr">Students who enrolled our Classroom and Distance learning program, performing well in different compitative exams and in respective Boards</h3>       
    </span>
        
        </div>
       
    </div>
</div>
    </div>
</div>
    <!-- filtering of the courses -->

    <div class="container-fluid">
        <div class="row" style="background-color: whitesmoke;">
            <div class="shadow col-md-3 filters mb-5" >
<ul class="list-unstyled filt">
    <li>
        <h5>Filter</h5>
    </li>
    <li>
        <h6 id="stream">Stream</h6>
    </li>
    <li>
         <h3><a class="btn btn-primary btn-block" href="Result.php#jee">Engineering</a></h3>
       <!-- <h6 id="m1" onclick="fnmd()">Medical <input style="float: right;" type="radio" name="rd1" id="ab1"></h6> -->
        
    </li><hr>
    <li>
        <h3><a class="btn btn-primary btn-block" href="Result.php#medical">Medical</a></h3>
      <!--  <h6 id="e1" onclick="fnen()">Engineering  <input style="float: right;" type="radio" name="rd1" id="ab2"></h6> -->
    </li><hr>
    <li>
        <h3><a class="btn btn-primary btn-block" href="Result.php#kvpy">KVPY</a></h3>
        <!--
        <h6 id="f1" onclick="fnfd()">Foundation  <input style="float: right;" type="radio" name="rd1" id="ab3"></h6> -->
    </li><hr>
    <li>
       <h6 id="class"></h6>
    </li>
    <!--
    <li>
        <div class="input-group">
            <select class="form-control" id="inputGroupSelect03" aria-label="Example select with button addon">
              <option selected>Choose Class...</option>
              <option value="1">9th</option>
              <option value="2">10th</option>
              <option value="3">11th</option>
              <option value="4">12th</option>
              <option value="5">Dropper/Target</option>
            </select>
           
          </div>
    </li> -->
</ul>

            </div>

            <!-- all courses which coaching have  -->
      
 <div  class="col-md-9 course_card  pr-5 pl-5" style=" padding-top: 50px;">
<h3 align="center" id="jee" class="text-dark py-2" style="background-color: rgba(255, 205, 0,0.7);  font-weight: bold;">JEE Results</h3>
<div class="row">
    <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM jee_r ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId = $DataRows["id"];
                      $Image = $DataRows["image"];
                      $StudentTitle = $DataRows["sname"];
                      $Main = $DataRows["main"];
                      $Advance = $DataRows["adv"];
                      $Program = $DataRows["program"];      
                     
           ?>
    <div class="col-sm-6 pb-3">
        <div class="card1 shadow">
            <img src="Admin/Upload/<?php echo htmlentities($Image); ?>" alt="John" style="width:100%; height: 200px; padding-bottom: 10px;">
            <h3 style="font-weight: bold;"><?php echo htmlentities($StudentTitle); ?></h3> 
            <p class="title_student"><?php echo htmlentities($Main); ?></p>
            <p class="title_student" style="margin-top:-15px ;"><?php echo htmlentities($Advance); ?></p>
            <p id="p" style="text-transform: uppercase;"><?php echo htmlentities($Program); ?></p>
            <p>
          </div> 
        
    </div>
      <?php } ?>
     <!--
    <div class="col-sm-6 pb-4">
        <div class="card1 shadow">
            <img src="photos/2.jpg" alt="John" style="width:100%">
            <h3>Ajay Kumar</h3>
            <p class="title_student">IIT-JEE 2020 | AIR-4254</p>
            <p class="title_student" style="margin-top:-15px ;">JEE-MAINS 2020 | AIR-1254</p><p id="p">CLASSROOM PROGRAM</p>
          </div>
    </div> -->
</div>
<h3 align="center" id="medical" class="text-dark py-2" style="background-color: rgba(255, 205, 0,0.7); font-weight: bold;">Medical Results</h3>
<div class="row">
     <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM medical_r ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId1 = $DataRows["id"];
                      $Image1 = $DataRows["image"];
                      $StudentTitle1 = $DataRows["sname"];
                      $NEET = $DataRows["neet"];
                      $AIIMS = $DataRows["aims"];
                      $Program1 = $DataRows["program"];      
                     
           ?>
    <div class="col-sm-6 pb-4">
        <div class="card1 shadow">
            <img src="Admin/Upload/<?php echo htmlentities($Image1); ?>" alt="John" style="width:100%;height: 200px; padding-bottom: 10px;">
            <h3 style="font-weight: bold;"><?php echo htmlentities($StudentTitle1); ?></h3>
            <p class="title_student"><?php echo htmlentities($NEET); ?></p>
            <p class="title_student"><?php echo htmlentities($AIIMS); ?></p>
            <p id="p" style="text-transform: uppercase;"><?php echo htmlentities($Program1); ?></p>
            <p>
          </div>
    </div> 
    <?php } ?><!--
    <div class="col-sm-6 pb-4">
        <div class="card1 shadow">
            <img src="photos/2.jpg" alt="John" style="width:100%">
            <h3>Ajay Kumar</h3>
            <p class="title_student">KVPY 2020 | AIR-67</p>
            <p class="title_student" style="margin-top:-15px ;">JEE-MAINS 2020 | AIR-540</p><p id="p">CLASSROOM PROGRAM</p>
          </div>
    </div> -->
</div>
<h3 align="center" id="kvpy" class="text-dark py-2" style="background-color: rgba(255, 205, 0,0.7); font-weight: bold;">KVPY Results</h3>
<div class="row">
     <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM kvpy_r ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId2 = $DataRows["id"];
                      $Image2 = $DataRows["image"];
                      $StudentTitle2 = $DataRows["sname"];
                      $KVPY = $DataRows["kvpy"];
                      $Other = $DataRows["other"];
                      $Program2 = $DataRows["program"];      
                     
           ?>
    <div class="col-sm-6 pb-4">
        <div class="card1 shadow">
            <img src="Admin/Upload/<?php echo htmlentities($Image2); ?>" alt="John" style="width:100%;height: 200px; padding-bottom: 10px;">
            <h3 style="font-weight: bold;"><?php echo htmlentities($StudentTitle2); ?></h3>
            <p class="title_student"><?php echo htmlentities($KVPY); ?></p>
            <p class="title_student"><?php echo htmlentities($Other); ?></p>
            <p id="p" style="text-transform: uppercase;"><?php echo htmlentities($Program2); ?></p>
            <p>
          </div>
    </div> 
<?php } ?>
<!--
    <div class="col-sm-6 pb-4">
        <div class="card1 shadow">
            <img src="photos/2.jpg" alt="John" style="width:100%">
            <h3>Ajay Kumar</h3>
            <p class="title_student">KVPY 2020 | AIR-67</p>
            <p class="title_student" style="margin-top:-15px ;">JEE-MAINS 2020 | AIR-540</p><p id="p">CLASSROOM PROGRAM</p>
          </div>
    </div> -->
</div>
</div>


<!-- MAIN AREA ENDING -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script><script src="js/course.js"></script>

<?php include('footer1.php') ?>

  
</body>
</html>