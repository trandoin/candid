<?php require_once("include/config.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php //Confirm_password(); ?>

<?php 
// Fetching UserName For MyProfile Page Start //
$AdminId = $_SESSION["FUserId"];
global $ConnectingDB;
$sql = "SELECT * FROM  f_user WHERE id='$AdminId' ";
$stmt = $ConnectingDB->query($sql);
$SrNo = 0;
while ($DataRows = $stmt->fetch()) {
  $ExistingName = $DataRows["name"];
  $ExistingEmail = $DataRows["email"];
  $ExistingMobile = $DataRows["mobile"];
  $ExistingGender = $DataRows["gender"];
  $ExistingStream = $DataRows["stream"];
  $ExistingPassword = $DataRows["password"];
  $ExistingClass = $DataRows["class"];
  $SrNo++;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candid | Student panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
</head>
<style>
  *{
    font-family: Arial, Helvetica;
  }
    .sidepanel  {
        width: 0;
        position: fixed;
        z-index: 9999;
        height:100%;
        top: 0;
        right: 0;
        
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }
      
      .sidepanel a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }
      
      .sidepanel a:hover {
        color: #f1f1f1;
      }
      
      .sidepanel .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
      }
    .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
        display:none;
        float: right;
      }
      
      .openbtn:hover {
        background-color:#444;
      }
      @media all and (max-width:900px){
        .openbtn{
      display:block;}
      .profile{
        display: none;
      }
      
      }

      .profile{
        float: right;
      }
      .profile h4{
        color: white;
      }
      .profile img{
        width: 50px;height:50px;border-radius:50%;
      }


      .sidenav li {
        text-transform: uppercase;
        font-family:Arial, Helvetica, sans-serif;
        font-size: 18px;
        font-weight: 400;
        letter-spacing: 1px;
        position: relative;
      }
      
      .sidenav li a:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: white;
        transform: scale(0);
        transition: all 0.5s;
        transform-origin: left;
      }
      
      .sidenav li a:hover:before,
      .sidenav li a:hover:after{
      transform: scaleX(1);
      }
      
      .sidenav li a:after{
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: white;
        transform: scale(0);
        transition: all 0.5s;
        transform-origin: right;
      }

      ul.sidenav {
        list-style-type: none;
        margin-top:81px;
        padding: 0;
       
        position: fixed;
        height: 100%;
        overflow:auto;
      }
      
      ul.sidenav li a {
        display: block;
        color: white;
        padding: 8px 16px;
        text-decoration: none;
      }
       
      ul.sidenav li a.active {
        background-color:#555;
        color: white;
        }
      
      ul.sidenav li a:hover:not(.active) {
        background-color: #555;
        color: white;
      }
      @media screen and (max-width:768px) {
        ul.sidenav {
         display: none;
        }
        
      
       
      }  
      h2,h3,h4{
        padding: 7px;
        letter-spacing: 2px;
        text-transform: uppercase;
        border-bottom: 1px solid grey;
      }

      .card3 a:link,.card2 a:link,.card3 a:visited,.card2 a:visited{
        color: black;
        text-decoration: none;
      }
      .card{
        padding: 10px;
      }
      .card1 img{
        float: right;
      }
      
      .card2 li{
        list-style: none;
        text-transform: uppercase;
        padding: 2px;
        margin: 3px 7px;
        letter-spacing: 1px;
        line-height: 3;
        border-bottom: 1px solid rgba(0,0,0,0.7);
      }
      
      .card2 li:last-child{
        border-bottom: none;
      }
      
      .card2 h3{
        color: white;
      }
      
      .card2 .btn{
        float: right;
        padding: 4px 50px;
        margin-top: 1%;
      }
      
      .card3 img{
        max-height: 200px;
      }
      .dashboard-content{
          margin-top: 100px;

      }
      .dashboard-links{
margin-top: 8px;
      }
.inputDnD .form-control-file {
    position: relative;
    width: 100%;
    height: 100%;
    min-height: 6em;
    outline: none;
    visibility: hidden;
    cursor: pointer;
    background-color: #c61c23;
    box-shadow: 0 0 5px solid currentColor;
  }
  .inputDnD .form-control-file:before {
    content: attr(data-title);
    position: absolute;
    top: 0.5em;
    left: 0;
    width: 100%;
    min-height: 6em;
    line-height: 2em;
    padding-top: 1.5em;
    opacity: 1;
    visibility: visible;
    text-align: center;
    border: 0.25em dashed currentColor;
    -webkit-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    overflow: hidden;
  }
  .inputDnD .form-control-file:hover:before {
    border-style: solid;
    box-shadow: inset 0px 0px 0px 0.25em currentColor;
  }
                            
</style>

<body>
    <!-- onclick start panel -->
    <div id="mySidepanel" class="sidepanel bg-dark" >
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"> <img class="text-center" src="photos/profile.png" alt="" style=" width: 60px;height:60px;border-radius:50%;background-color:aliceblue;"><span style="border-bottom:2px solid rgb(139, 139, 139);margin-left:10px">Govind</span></a>
        <a href="#">Home</a>
        <a href="courses.html">Shop course</a>
        <a href="#">Take a test</a>
        <a href="#assignment">Upload Assignment</a>
        <a role="button" id="profile" type="button" data-toggle="modal" data-target="#exampleModalCenter">Change Profile</a>
        <h5 style="margin-top: 20px;border-top:2px solid white;border-bottom:2px solid white;padding:10px ; color:White">CONTACT INFO</h5>
        <h6 style="padding:10px;color:white;font-size:15px">PHONE: <span><?php echo htmlentities($ExistingMobile); ?></span></h6>
        <h6 style="padding:10px;color:white;font-size:13px;">EMAIL: <span style="font-size:11px;text-transform:lowercase"><?php echo htmlentities($ExistingEmail); ?></span></h6>
      </div>
    <!-- onclick end panel -->
    <!-- header start -->
    <div class="container-fluid bg-dark fixed-top topnav p-2">
        <img src="photos/logocandid.png" alt="" style="width: 250px;float:left;padding-bottom:-10px">
       <div class="profile">
<h4>Welcome <?php echo htmlentities($ExistingName); ?> <a href="logout.php"><i class="fas fa-user text-danger"></i></a><!-- <img src="photos/profile.png" alt="" style="background-color: aliceblue;" >--></h4>
       </div>
       <button class="openbtn" onclick="openNav()">☰</button> 
      </div>
    <!-- hearder end -->
<!-- content section start -->
<section class="dashboard">
    <div class="">
        <div class="row">
            <div class="col-md-3 dashboard-links">
                <ul class="sidenav bg-dark ">
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="courses.html">Shop course</a></li>
                    <li><a href="#contact">Take a test</a></li>
                    <li><a href="#assignment">Upload Assignment</a></li>
                    <li><a role="button" id="profile" type="button" data-toggle="modal" data-target="#exampleModalCenter">Change Profile</a></li>
                    <li style="margin-top: 20px;border-top:2px solid white;border-bottom:2px solid white;padding:10px ; color:White">CONTACT INFO</li>
                    <li style="padding:10px;color:white;font-size:15px">PHONE: <span><?php echo htmlentities($ExistingMobile); ?></span></li>
                    <li style="padding:10px;color:white;font-size:13px;">EMAIL: <span style="font-size:11px;text-transform:lowercase"><?php echo htmlentities($ExistingEmail); ?></span></li>
                   <li></li>
                  </ul>          
            </div>
            <div class="col-md-9  dashboard-content">
               <div class="container">
                <h2>Remainder</h2>
                <div class="row">
                  <div class="col-sm-4 p-3">
                  <div class=" card card1 ">
                <h3>message   <span>  <img src="photos/message.png" alt="" width="55px" height="55px"></span></h3>
                <p>Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder </p>
                  </div></div>
                  <div class="col-sm-4 p-3">
                    <div class=" card card1 ">
                  <h3>message   <span>  <img src="photos/course2.png" alt="" width="55px" height="55px"></span></h3>
                  <p>Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder </p>
                    </div></div>
                    <div class="col-sm-4 p-3">
                      <div class=" card card1">
                    <h3>message   <span>  <img src="photos/test.png" alt="" width="55px" height="55px"></span></h3>
                    <p>Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder Remainder </p>
                      </div></div>
                </div>
               </div>
                
                <!-- Scond Row -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Courses -->
                   <div class="col-lg-6 p-3">
                    <div class=" card2">
                      <h3 class="bg-dark">My Courses</h2>
                        <div class="card">
                      <ul>
                        <li><a href="#">class 12</a>
                          <button type="button" name="button" class="btn btn-primary">Go</button>
                        </li>
                        <li><a href="#">Jee 2020</a>
                          <button type="button" name="button" class="btn btn-primary">Go</button>
                        </li>
                        <li> <a href="#">IIT Advance 2020</a>
                          <button type="button" name="button" class="btn btn-primary">Go</button>
                        </li>
                      </ul>
                        </div>
                        </div>
                   </div>


                   <div class="col-lg-6 p-3">
                    <div class=" card2">
                      <h3 class="bg-dark">My Assignment</h2>
                        <div class="card">
                      <ul>
                        <li><a href="#">Assignment 1</a>
                          <button type="button" name="button" class="btn btn-primary">Go</button>
                        </li>
                        <li><a href="#">Assignment 2</a>
                          <button type="button" name="button" class="btn btn-primary">Go</button>
                        </li>
                        <li> <a href="#">Assignment 3</a>
                          <button type="button" name="button" class="btn btn-primary">Go</button>
                        </li>
                      </ul>
                        </div>
                        </div>
                   </div>
                  <!-- Attendance -->
                    
                  <div class="col-lg-12 p-3">
                    <div class="col card2 ">
                      <h3 class="bg-dark" >Attendance</h3>
                        <div class="card" >
                          <canvas id="myChart"></canvas>
                        </div>
                        </div>
                  </div>
                  </div>
            </div>

                <!-- Third Row -->
                <div class="container-fluid p-3 " style="margin-bottom:50px">
                  <h3 class="bg-dark" style="color:white;" >Instructor</h3>
                
                <div class="row">
                    <div class="col-md-4">
                
                      <div class=" card card1 card3">
                    <h5 style="border-bottom: 1px solid black;padding-bottom:10px">Physics faculty </h5>
                    <img src="photos/1.jpg" alt="" class="img-fluid">
                <h6>Name:</h6>
                <h6>Experience:</h6>
                <h6>Contact:</h6>
                <div class="row2">
                  <a href="#" class="link"> <img src="photos/facebook.png" alt=""> </a>
                  <a href="#" class="link"> <img src="photos/instagram.png" alt=""> </a>
                  <a href="#" class="link"> <img src="photos/twitter.png" alt=""> </a>
                
                </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class=" card card1 card3">
                    <h5 style="border-bottom: 1px solid black;padding-bottom:10px">Chemistry faculty </h5>
                    <img src="photos/1.jpg" alt="" class="img-fluid">
                <h6>Name:      </h6>
                <h6>Experience:</h6>
                <h6>Contact:   </h6>
                <div class="row2">
                  <a href="#" class="link"> <img src="photos/facebook.png" alt=""> </a>
                  <a href="#" class="link"> <img src="photos/instagram.png" alt=""> </a>
                  <a href="#" class="link"> <img src="photos/twitter.png" alt=""> </a>
                
                </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class=" card card1 card3">
                    <h5 style="border-bottom: 1px solid black;padding-bottom:10px">Maths faculty </h5>
                    <img src="photos/1.jpg" alt="" class="img-fluid">
                <h6>Name:</h6>
                <h6>Experience:</h6>
                <h6>Contact:</h6>
                <div class="row2">
                  <a href="#" class="link"> <img src="photos/facebook.png" alt=""> </a>
                  <a href="#" class="link"> <img src="photos/instagram.png" alt=""> </a>
                  <a href="#" class="link"> <img src="photos/twitter.png" alt=""> </a>
                
                </div>
                      </div>
                    </div>
                    </div>
                    
                  </div>
              </div>
              </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- bottom section  -->
<div class="bottom bg-dark fixed-bottom text-center">
    <h6 class="pt-3 text-light">Made By Trando</h6>
  </div>
<!-- content section end -->

<!-- popup for profile change -->
 <!-- change profile form start  -->
 <div style="z-index: 99999;" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <h5 class="text-center Fieldinfo">Change Your Profile Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user" style="font-size: 24px;" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" class="form-control" name="CommenterName" placeholder="Changed User Name" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key" style="font-size: 18px;" aria-hidden="true"></i></span>
                            </div>
                            <input type="email" class="form-control" name="CommenterName" placeholder="Change Email Id" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key" style="font-size: 18px;" aria-hidden="true"></i></span>
                          </div>
                          <input type="phone" class="form-control" name="CommenterName" placeholder="Change Phone Number" value="" >
                          </div> 
                      </div>
                      <div class="form-group">
<div class="input-group">
 
  
    <div class="container ">
      <button type="button" class="btn btn-secondary btn-block" onclick="document.getElementById('inputFile').click()">Upload Photo</button>
      <h6 class="text-center">or</h6>
      <div class="form-group inputDnD">
        <label class="sr-only" for="inputFile">File Upload</label>
        <input type="file" class="form-control-file text-secondary font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Drag and drop Your Profile Picture">
      </div>
 
  </div>
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
  <!-- change profile form end -->
<!-- script start -->
<script>
    
  let myChart = document.getElementById('myChart').getContext('2d');
  Chart.defaults.global.defaultFontFamily = 'Lato';
  Chart.defaults.global.defaultFontSize = 18;
  Chart.defaults.global.defaultFontColor = '#777';

  let massPopChart = new Chart(myChart, {
    type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data:{
      labels:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
      datasets:[{
        label:'Attendance',
        data:[
              30,28,25,24,26,25,21,27,29,30,25,29
        ],

        backgroundColor:[
          'rgba(255, 99, 132, 0.6)',
          'rgba(54, 162, 235, 0.6)',
          'rgba(255, 206, 86, 0.6)',
          'rgba(75, 192, 192, 0.6)',
          'rgba(153, 102, 255, 0.6)',
          'rgba(255, 159, 64, 0.6)',
          'rgba(255, 99, 132, 0.6)',
           'rgba(255, 99, 132, 0.6)',
              'rgba(54, 162, 235, 0.6)',
              'rgba(255, 206, 86, 0.6)',
              'rgba(75, 192, 192, 0.6)',
              'rgba(153, 102, 255, 0.6)',
              'rgba(255, 159, 64, 0.6)'
        ],
        borderWidth:1,
        borderColor:'#777',
        hoverBorderWidth:3,
        hoverBorderColor:'#000'
      }]
    },
    options:{
      title:{
        display:true,
        text:'Attendance',
        fontSize:25
      },
      legend:{
        display:true,
        position:'right',
        labels:{
          fontColor:'#000'
        }
      },
      layout:{
        padding:{
          left:50,
          right:0,
          bottom:0,
          top:0
        }
      },
      tooltips:{
        enabled:true
      }
    }
  });
  function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
  }
</script>
</body>
</html>