<?php
include 'include/DB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
    <title>Candind Coaching Institute</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Noto+Sans+KR:700|Noto+Serif|Roboto|Bitter|Libre+Baskerville&display=swap" rel="stylesheet">

    
</head>
<body>
    
<!-- some external information in Top Nav -->
<div class="header" >
    <div class="sec1 ">
        <div class="d-flex justify-content-between">
          <div class=" "><h5 class="p-2"><a class="candid_online text-white" href="#">Candid Online</a></h5></div>
          <div class="aa" style="margin-top: 12px;"><h6><a href="#"  class="text-right text-white">Admission Assistance: 9876576598 (9 am to 8 pm) </a></h6></div>
          <div class="" style="margin-top: 2.5px;"><a href="login.html"><i class="fa fa-user-circle ic" style="font-size: 24px;" aria-hidden="true"></i></a></div>
        </div>
     </div>
  <!-- main Navbar -->
<div class="sec2">
  <nav class=" navbar navbar-expand-lg  navbar-dark " >
    <div class="container-fluid d-flex justify-content-between">
   <div> <a class="navbar-brand" href="#"><img src="logocandid.PNG" style="width: 220px; height: 70px;"></a>
    <button  class="menubar1 navbar-toggler menu_bar" type="button"  data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
    <div class="collapse navbar-collapse " id="navbarNavDropdown" style="text-transform: uppercase;margin-left:100px; display: none;">
      <ul class="navbar-nav">
        <li class="nav-item active p-2 c1">
          <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown p-2 c1">
          <a class="nav-link dropdown-toggle text-light"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item border-bottom" href="about.html">About</a>
            <a class="dropdown-item" href="about.html#vission">Vission</a>
            <a class="dropdown-item" href="about.html#mission">Mission</a>
            <a class="dropdown-item" href="about.html#why-candid">Why candid</a>
          </div>
        </li>
        <li class="nav-item dropdown p-2 c1">
          <li class="nav-item dropdown p-2 c1">
            <a class="nav-link  text-light"  href="#" data-toggle="modal" data-target="#exampleModal">
            Course
            </a>
           
          </li>
       
        </li>

        <li class="nav-item dropdown p-2 c1">
          <a class="nav-link dropdown-toggle text-light" href="TEQIP.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">contact us</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" href="mailto:dhanwant.nitj@gmail.com">Message Us</a>
             <a class="dropdown-item" href="tel:+9027997165" >Talk to us</a>
          </div>
        </li>
        <li class="sss nav-item dropdown p-2 c1" style="left: 250px;top:4px" >
          <div class="container1">
              <input class="sear" type="text" maxlength= "12" placeholder="Search Course" class="searchbar">
              <img class="sear1" src="https://images-na.ssl-images-amazon.com/images/I/41gYkruZM2L.png" alt="search icon" class="button">
            </div>
         </li>
      </ul>
    </div>


    </div>
  </nav>
</div>


<!-- Modal -->
<div class="modal fade m-4" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Course Related Your Choice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none">
          <span aria-hidden="true" >&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="course_taking"></div>
        <form  method="POST" action="courses.php">
          <div class="form-group">
            <label for="course_name">SELECT STREAM:</label>
            <select name="c_stream" id="course_name" class="form-control">
              <option id="1">Choose Stream</option>
                    <?php

                    $sql = "select distinct course_stream from cpost";

                    $res = $ConnectingDB->query($sql);
                    $i=2;
                    while($row = $res->fetch()){
                       
                    ?>

                        <option id="<?php echo$i?>"><?php echo $row['course_stream']; ?> </option>


                    <?php   
                    $i++;            
                    }

                    ?>
            </select>
          </div>
          <div class="form-group">
            <label for="course_title">SELECT COURSE NAME:</label>
            <select name="" id="course_title" class="form-control">
                    <option id="1">Choose Course Name</option>
           
            </select>
           
          </div>
          <div class="form-group">
            <label for="course_class">SELECT STREAM:</label>
            <select name="" id="course_class" class="form-control">
              <option value="1">Choose Course Class</option>
              
      


            </select>
          </div>


       
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="show_courses" onclick="showcourse()">Show Courses</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<script src="js/pop3.js"></script>

<!-- slider start -->
        <div class="slid">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner" >
              <div class="carousel-item active statich">
                <img src="photos/xOMHITF9Xn.jpg" alt="Los Angeles" class="slideimg">
                <div class="carousel-caption">
                  <h3>Los Angeles</h3>
                  <p>We had such a great time in LA!</p>
                </div>   
              </div>
              <div class="carousel-item statich">
                <img src="photos/93pJYwIF9v.jpg" alt="Chicago" class="slideimg">
                <div class="carousel-caption">
                  <h3>Chicago</h3>
                  <p>Thank you, Chicago!</p>
                </div>   
              </div>
              <div class="carousel-item statich">
                <img src="photos/7VZ8IVEhuL.jpg" alt="New York" class="slideimg">
                <div class="carousel-caption">
                  <h3>New York</h3>
                  <p>We love the Big Apple!</p>
                </div>   
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span  class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span  class="carousel-control-next-icon"></span>
            </a>
          </div>
      </div>

        </div>

<!-- chat application -->
        <div class="chaticon">
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
         <div class="col-lg-6 bg-white border-right p-3" style="height: auto;">
<h2 class="H">ANNOUNCEMENT <a href="#"><i style="font-size:30px;float:right;color:rgb(19, 87, 155)" class="fa arrowse">&#xf1d8;</i></a></h2>
<div style="margin-top: 15px;">
    <table class="table " >
        <tbody>
            <tr>
                <td><p>JEE Question Bank - Download Free chapter-wise answer solution from the last 22 Years (4400+ Questions)</p> </td>
                <td><a href="#">view</a></td>
            </tr>
            <tr>
                <td><p>Aakash ONLINE ACST Scheduled on 29th March</p></td>
                <td><a href="#">view</a></td>
            </tr>
            <tr>
                <td><p>Aakash iACSt for Instant Scholarship upto 75%</p></td>
                <td><a href="#">view</a></td>
            </tr>
            <tr>
                <td><p>Final Test Series 1 ( Code - B ) - 2020 Video Solutions</p></td>
                <td><a href="#">view</a></td>
            </tr>
            <tr>
                <td><p>Final Test Series 1 ( Code - A ) - 2020 Video Solutions</p></td>
                <td><a href="#">view</a></td>
            </tr>
        </tbody>
        </table>
</div>
         </div>
         <div class="col-lg-6 bg-white border-left p-3" style="height: auto;">
<h2 class="H" >NEWS & EVENTS <a href="#"><i style="font-size:30px;float:right;color:rgb(19, 87, 155)" class="fa arrowse">&#xf1d8;</i></a></h2>
<div style="margin-top: 15px;">
    <table class="table " >
        <tbody>
            <tr>
                <td><p>Class XII CBSE Date Sheet</p> </td>
                <td><a href="#"><i style="font-size:24px;color:rgb(212, 51, 51)" class="fa">&#xf1c1;</i></a></td>
            </tr>
            <tr>
                <td><p>Class X CBSE Date Sheet</p></td>
                <td><a href="#"><i style="font-size:24px;color:rgb(212, 51, 51)" class="fa">&#xf1c1;</i></a></td>
            </tr>
            <tr>
                <td><p>NTA Notification Regarding Eligibility Criteria in NEET 2020</p></td>
                <td><a href="#"><i style="font-size:24px;color:rgb(212, 51, 51)" class="fa">&#xf1c1;</i></a></td>
            </tr>
            <tr>
                <td><p>NEET NOTIFICATION 2020</p></td>
                <td><a href="#"><i style="font-size:24px;color:rgb(212, 51, 51)" class="fa">&#xf1c1;</i></a></td>
            </tr>
            <tr>
                <td><p>NTSE (Stage-I) & NMMSE 2019-20 State-Wise Notification</p></td>
                <td><a href="#"><i style="font-size:24px;color:rgb(212, 51, 51)" class="fa">&#xf1c1;</i></a></td>
            </tr>
        </tbody>
        </table>
</div>
         </div>
         </div>
     </div>
    
     <!-- courses offers section -->
     <div class="container-fluid offer" >

         <h1 class="text-center " style="font-family: 'Bitter', serif;">Current Offers</h1>
    <div class="container"  style="background-color:rgb(247, 247, 247);height:max-content;">
        <div class="row">
            <div class="col-md-3 p-3 ">
                <div class="coff">
                   <div class="card" style="width:100%">
                       <img class="card-img-top" src="photos/1.jpg" alt="Card image" style="width:100%;height:200px">
                       <div class="card-body">
                         <h6 class="card-title">Candid Scholarship test for Foundation</h6>
                         <p class="lead">Get Upto 90% Scholarship on selected course</p>
                         <a href="#" class="btn btn-primary btn-block">Enroll Now</a>
                       </div>
                     </div>
                </div>
            </div>
            <div class="col-md-3 p-3">
               <div class="coff">
                   <div class="card" style="width:100%">
                       <img class="card-img-top" src="photos/2.jpg" alt="Card image" style="width:100%;height:200px">
                       <div class="card-body">
                         <h6 class="card-title">Candid Scholarship test for Engineering</h6>
                         <p class="lead">Get Upto 90% Scholarship on selected course</p>
                         <a href="#" class="btn btn-primary btn-block">Enroll Now</a>
                       </div>
                     </div>
                </div>
            </div>
            <div class="col-md-3 p-3">
               <div class="coff">
                   <div class="card" style="width:100%">
                       <img class="card-img-top" src="photos/3.jpg" alt="Card image" style="width:100%;height:200px">
                       <div class="card-body">
                         <h6 class="card-title">Candid Scholarship test for Medical</h6>
                         <p class="lead">Get Upto 90% Scholarship on selected course</p>
                         <a href="#" class="btn btn-primary btn-block">Enroll Now</a>
                       </div>
                     </div>
                </div>
            </div>
            <div class="col-md-3 p-3">
                 <div class="coff">
                   <div class="card" style="width:100%">
                       <img class="card-img-top" src="photos/4.jpg" alt="Card image" style="width:100%;height:200px">
                       <div class="card-body">
                         <h6 class="card-title">Candid Scholarship test for Olyampiads</h6>
                         <p class="lead">Get Upto 90% Scholarship on selected course</p>
                         <a href="#" class="btn btn-primary btn-block">Enroll Now</a>
                       </div>
                     </div>
                </div>
            </div>
    </div>
     </div>
     <!-- answer and question of recent compitative examination -->
    </div>
    <div class="container-fluid p-5" >
        <h1 class="text-center" style="font-weight: bold;">Answer & Solutions</h1>
        <h6 class="text-center text-secondary" style="margin-bottom: 30px;" >Find accurate Answers & detailed Solutions of major competitive exams and AIATS and mock tests here.</h6>
      <div class="row">
        <div class="col-sm-3  p-3">
            <div class="ans border pb-4">
                <h6><small class="float-left mt-2 ans_e1">Answers & Solutions</small><small class="float-right mt-1 text-primary ans_e2">Engineering</small></h6><br>
               
                <h6 class="text-primary mt-3">Questions & Solutions</h6>
                <h5 style="margin-top: -8px;font-family: 'Noto Sans KR', sans-serif;">IIT-JEE 2020</h5>
                <h6 class="text-secondary mt-3">PHYSIC | CHEMISTRY | MATHEMATICE</h6>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="ans border">
                <h6><small class="float-left mt-2 ans_e1">Answers & Solutions</small><small class="float-right mt-1 text-primary ans_e2">Foundation</small></h6><br>
                <h6 class="text-primary mt-3">Questions & Solutions</h6>
                <h5 style="margin-top: -8px;font-family: 'Noto Sans KR', sans-serif;">IIT-JEE|NEET 2020</h5>
                <h6 class="text-secondary mt-3">PHYSIC | CHEMISTRY | BIOLOGY | MATHEMATICE</h6>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="ans border pb-4">
                <h6><small class="float-left mt-2 ans_e1">Answers & Solutions</small><small class="float-right mt-1 text-primary ans_e2">Medical</small></h6><br>
                <h6 class="text-primary mt-3">Questions & Solutions</h6>
                <h5 style="margin-top: -8px;font-family: 'Noto Sans KR', sans-serif;">NEET|AIIMS 2020</h5>
                <h6 class="text-secondary mt-3">PHYSIC | CHEMISTRY | BIOLOGY</h6>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="ans border pb-4">
                <h6><small class="float-left mt-2 ans_e1">Answers & Solutions</small><small class="float-right mt-1 text-primary ans_e2">Olyampiads</small></h6><br>
                <h6 class="text-primary mt-3">Questions & Solutions</h6>
                <h5 style="margin-top: -8px;font-family: 'Noto Sans KR', sans-serif;">OLYAMPIADS 2020</h5>
                <h6 class="text-secondary mt-3">PHYSIC | CHEMISTRY | MATHEMATICE</h6>
            </div>
        </div>
      </div>
      <div class="text-center mt-4">
    <a href="#" class="border maq"> MORE QUESTIONS & ANSWERS</a>
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
    <a href="#">SHOW ALL MEDICAL RESULTS</a>
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
  
    <a href="#">SHOW ALL ENGINEERING RESULTS</a>

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

    <a href="#">SHOW ALL FOUNDATIONS RESULTS</a>

</div>
</div>
</div>

<!-- students review section called as testimonal -->

<div class="container-fluid">
    <h1 class="display1 text-center pt-5 border-bottom pb-3" style="font-weight: bold;">Testimonals</h1>
<section id="testim" class="testim">
           <div class="testim-cover"> 
                <div class="wrap">
    
                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">
                        
                        <div class="active">
                            <div class="img"><img src="photos\1.jpg" alt=""></div>
                            <h2>Lorem Ipsum</h2>
                             <h2 style="font-size:x-large;color:black;font-weight:700">JEE MAINS 2020</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="photos\2.jpg" alt=""></div>
                            <h2>Mr. Lorem Ipsum</h2>
                            <h2 style="font-size:x-large;color:black;font-weight:700">JEE MAINS 2020</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="photos\3.jpg" alt=""></div>
                            <h2>Lorem Ipsum</h2>
                            <h2 style="font-size:x-large;color:black;font-weight:700">NEET 2020</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="photos\4.jpg" alt=""></div>
                            <h2>Lorem De Ipsum</h2>
                            <h2 style="font-size:x-large;color:black;font-weight:700">AIIMS 2020</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="photos\2.jpg" alt=""></div>
                            <h2>Ms. Lorem R. Ipsum</h2>
                            <h2 style="font-size:x-large;color:black;font-weight:700">NEET 2020</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                    </div>
    
                </div>
            </div> 
        </section>
    </div>
<!-- testimonal end -->

<!--- Start form section -->

  <div class="container-fluid pt-5 pb-5" style="margin-top: 40px; background-color: #5297e0;" align="center">
  <fieldset>
  <h1 align="center" style="color: #fff; font-weight: bold;">Talk to our expert</h1>
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
    <input class="btn btn-submit" style="background-color: #fff; color:blue;" type="Submit" name="Submit" value="REQUEST A CALL BACK" >
  </form>
  </div>
</fieldset>
</div> <!-- Ending Form div--->

<!-- footer -->

<div class="footer container-fluid bg-dark">
<div class="row pl-4 pr-4 pt-3 pb-3">
  <div class="col-lg-2 text-left">
   <h6 class="text-light ">ABOUT US</h6>
   <ul class="list-unstyled">
     <li class="pb-2"> <a href="#" class="foa text-white">About Candid</a> </li>
     <li class="pb-2"> <a href="#" class="foa text-white">Why Candid</a> </li>
     <li class="pb-2"> <a href="#" class="foa text-white">Candid Methodology & Concepts</a> </li>
     <li class="pb-2"> <a href="#" class="foa text-white">Candid in Media</a> </li>
     <li class="pb-2"> <a href="#" class="foa text-white">Investor Corner</a> </li>
   </ul>
  </div>
  <div class="col-lg-3 text-left">
    <h6 class="text-light">COURSES & SCHOLARSHIP</h6>
<ul class="list-unstyled ">
  <li class="pb-2"><a href="#" class="foa text-white">Classroom Courses at Candind</a></li>
  <li class="pb-2"><a href="#" class="foa text-white">Candid Digital - Online Learning Courses</a></li>
  <li class="pb-2"><a href="#" class="foa text-white">Candid Distance Learning Program Courses</a></li>
  <li class="pb-2"><a href="#" class="foa text-white">Candid Talent Hunt Exam (CTHE)</a></li>
  <li class="pb-2"><a href="#" class="foa text-white">Candid Eligibility & Scholarship Test (CEST)</a></li>
  <li class="pb-2"><a href="#" class="foa text-white">Admission Cum Scholarship Test (ACST)</a></li>
  <li class="pb-2"><a href="#" class="foa text-white">Various Scholarships at Candid</a></li>
</ul>
  </div>
  <div class="col-lg-2 text-left">
    <h6 class="text-light">STUDENT AREA</h6>
    <ul class="list-unstyled ">
      <li class="pb-2"><a href="#" class="foa text-white">Candid Results</a> </li>
      <li class="pb-2"><a href="#" class="foa text-white">Admission at Candid</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">Fee Structure</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">Award &amp; Prize Scheme at Candid</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">Download Sample Papers</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">Class X Previous Years&#039; Question Bank (CBSE)</a> </li>
      <li class="pb-2"><a href="#" class="foa text-white">Mock Test for NEET 2020</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">Mock Test for JEE(Main) 2020</a></li>
    </ul>
  </div>
  <div class="col-lg-2 text-left">
    <h6 class="text-light">OTHERS</h6>
    <ul class="list-unstyled text-left">
      <li class="pb-2"><a href="#" class="foa text-white">Admission Enquery</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">Genral Enquery</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">FAQ</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">Candid Blogs</a></li>
      <li class="pb-2"><a href="#" class="foa text-white">Our Gallery</a></li>
    </ul>
  </div>
  <div class="col-lg-3 text-left">
    <ul class="list-unstyled socal_acc">
      <li class="pr-2 pb-2 pt-2 " ><h6>Follow Us:</h6></li>
      <li class="socal_acco text-center" style="background-color:#3b5998;"><a href="#"><i class="fa fa-facebook-f" style="font-size:22px;margin-top:8px;color:white"></i></a></li>
      <li class="socal_acco text-center" style="background-color:#c4302b;"><a href="#"><i class="fa fa-youtube-play" style="font-size:22px;margin-top:8px;color:white"></i></a></li>
      <li class="socal_acco text-center" style="background-color:#00acee;"><a href="#"><i class="fa fa-twitter" style="font-size:22px;margin-top:8px;color:white"></i></a></li>
      <li class="socal_acco text-center" style="background-color:#0088cc;"><a href="#"><i class="fa fa-linkedin" style="font-size:22px;margin-top:8px;color:white"></i></a></li>
    </ul>
   <h5 class=" text-light">Candid Coaching Institute</h5>
   <h6 class=" text-light">Registered office Address:</h6>
    <p class=" text-light" style="margin-bottom: -5px;">Plot No.:8,Candid Building,Raliway station Road,</p>
    <p class=" text-light" style="margin-bottom: -5px;">Jalandhar – 144005, India</p>
    <p class=" text-light" style="margin-bottom: -5px;">CIN: U80300DL2007PLC169398</p>
    <p class=" text-light" style="margin-bottom: -5px;">Telephone: +91-11111111111</p>
    <p class=" text-light" style="margin-bottom: -5px;">Fax: +91-11–111111111</p>
    <p class=" text-light" style="margin-bottom: -5px;">Email: candid@gmail.com</p>
    <!-- Button trigger modal -->
<button id="owner" type="button" class=" btn btn-link mt-2" data-toggle="modal" data-target="#exampleModalCenter">
  Owner Login
</button>
  </div>
  
</div>
</div>


<!-- owner login start-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container mt-1" >
          <form action="FullPost.php?id=5" method="post" class="text-center" >
              <div class="card mb-3">
                  <div class="card-header">
                      <h5 class="text-center Fieldinfo">Please Enter Your Login Details</h5>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                          <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user" style="font-size: 24px;" aria-hidden="true"></i></span>
                          </div>
                          <input type="text" class="form-control" name="CommenterName" placeholder="User Name" value="" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key" style="font-size: 18px;" aria-hidden="true"></i></span>
                          </div>
                          <input type="password" class="form-control" name="CommenterName" placeholder="Your Password" value="" required>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary " name="Submit">Go To Dashboard</button>
                  </div>
              </div>
          </form>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- owner login end -->
<script src="js/chat.js"></script>
<script src="js/index.js"></script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
</body>
</html>