<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other Informations</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Noto+Sans+KR:700|Comic+Neue:wght@300;400;700|Noto+Serif|Roboto|Bitter|Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
</head>
<style>
    *{
      font-family: Arial, Helvetica;
        margin: 0px;
        padding: 0px;
        scroll-behavior: smooth; 
    }
    .our-r{
        padding: 10px;font-family: Arial, Helvetica;font-weight: 800;color: #3d3d3d;
        }
        .our-rr{
            font-family: Arial, Helvetica;color: rgb(80, 80, 80);
        }
a{
    color: blue;
}
</style>
<body>
       
<!-- some external information in Top Nav -->

<div class="header" >
    <div class="sec1 ">
        <div class="d-flex justify-content-between">
          <div class=" "><h5 class="p-2"><a class="candid_online text-white" href="http://candidonline.in/">Candid Online</a></h5></div>
          <div class="aa" style="margin-top: 12px;"><h6><a href="#"  class="text-right text-white">Admission Assistance: 9876576598 (9 am to 8 pm) </a></h6></div>
          <div class="" style="margin-top: 2.5px;"><a href="Login.php"><i class="fa fa-user-circle ic" style="font-size:24px;" aria-hidden="true"></i></a></div>
        </div>
     </div> 
     
<!-- INCLUDING NAVBAR HERE -->
  <?php include('navbar1.php') ?>
  
<!-- selection view of the mode of program -->
    

    <div class=" typeofc bg-secondary" style="margin-bottom:-110px">
        <div class="container ">
            <div  class="row "><span style="margin-top: 180px;">
                <h1 class="our-r text-white"><i class="fa fa-th-list" aria-hidden="true"></i> Other Information Portal</h1>
                
                    
            </span>
                
                </div>
               
            </div>
        </div>
          <div class="container pb-5 ">
                <div  class="row">
                <div class="col-md-10">
                    <!-- how to admission start -->
                    <div id="how_to_ad" style="height: 130px;"></div>
              <div class="container " style="margin-bottom: -110px;" >
                <h2 class="our-r " style="border-bottom:2px solid #3d3d3d;"><i class="fa fa-star" aria-hidden="true"></i> How To Get Admission at Candid ?</h2>
                <h5 class="our-rr">There is a very simple process of getting admission in Candid coaching by following the process step by step.</h5>       
            <h6>These are following Steps of Getting Admission:</h6>
            <ol>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
                <li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
            </ol>
              </div>
              <!-- how to get end --> <div id="fee_s" style="height:130px"></div>
              <!-- fee structure start -->
              <div class="container  "  style="margin-bottom:-110px">
                  <h2 class="our-r" style="border-bottom:2px solid #3d3d3d;"><i class="fa fa-star" aria-hidden="true"></i> Fee Structure</h2>
                  <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM fee_s ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId = $DataRows["id"];
                       $Image = $DataRows["pdf"];
                      $Title = $DataRows["title"];
                     
           ?>
<ul  style="list-style-type: square;">
    <li><a href="Upload/<?php echo htmlentities($Image); ?>" download=""><?php echo htmlentities($Title); ?></a></li>
   <?php } ?>
</ul>
              </div>

            <!-- fee end -->
           <!-- question papers start --> <div id="pre_p" style="height: 130px;"></div>
            <div class="container " style="margin-bottom:-110px">
                <h2 class="our-r" style="border-bottom:2px solid #3d3d3d;"><i class="fa fa-star" aria-hidden="true"></i> Previous Year Question Papers and Solutions</h2>
                <div class="w3-bar w3-white">
                    <button class="w3-bar-item w3-button  w3-border-bottom w3-hover-light-blue tablink w3-blue" onclick="openpapers(event,'engineering')">ENGINEERING</button>
                    <button class="w3-bar-item w3-button  w3-border-bottom w3-hover-light-blue tablink" onclick="openpapers(event,'medical')">MEDICAL</button>
                    <button class="w3-bar-item w3-button  w3-border-bottom w3-hover-light-blue tablink" onclick="openpapers(event,'boards')">BOARDS</button>
                    <!--
                    <button class="w3-bar-item w3-button  w3-border-bottom w3-hover-light-blue tablink" onclick="openpapers(event,'sample')">SAMPLE PAPERS</button> -->
                  </div>
                  
                  <div id="engineering" class="w3-container  papers" >
                    <h3 class="our-r"> IIT JEE PAPERS</h3>
                      <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM jee_p ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId = $DataRows["id"];
                       $Image1 = $DataRows["pdf"];
                      $Title1 = $DataRows["title"];
                     
                    ?>
                    <ul  style="list-style-type: square;">
                      <li><a href="Upload/<?php echo htmlentities($Image1); ?>" download=""><?php echo htmlentities($Title1); ?></a></li>
                    <?php } ?>
                    </ul>
                  </div>
                  <div id="boards" class="w3-container  papers" style="display:none">
                    <h3 class="our-r">CBSE BOARD  </h3>
                     <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM board_p ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId = $DataRows["id"];
                       $Image2 = $DataRows["pdf"];
                      $Title2 = $DataRows["title"];
                     
                    ?>
                <ul  style="list-style-type: square;">
                <li><a href="Upload/<?php echo htmlentities($Image2); ?>" download=""><?php echo htmlentities($Title2); ?></a></li>
                <?php } ?>
                </ul>
                  </div>
                  <div id="medical" class="w3-container  papers" style="display:none">
                    <h3 class="our-r"> MEDICAL PAPERS</h3>
                     <?php 

                    global $ConnectingDB;
                    $sql = "SELECT * FROM medical_p ORDER BY id desc";
                    $stmt = $ConnectingDB->query($sql);
                    while ($DataRows = $stmt->fetch()) {
                      
                      $OfferId = $DataRows["id"];
                       $Image3 = $DataRows["pdf"];
                      $Title3 = $DataRows["title"];
                     
                    ?>
                <ul  style="list-style-type: square;">
                <li><a href="Upload/<?php echo htmlentities($Image3); ?>" download=""><?php echo htmlentities($Title3); ?></a></li>
               <?php } ?>
                </ul>
                  </div> <!--
                  <div id="sample" class="w3-container papers" style="display: none;" >
                    <div class="w3-bar w3-white ">
                        <button class="w3-bar-item w3-button w3-hover-darkgray tablink1 w3-border-bottom" onclick="openpaper(event,'physics')">PHYSICS</button>
                        <button class="w3-bar-item w3-button w3-hover-darkgray tablink1" onclick="openpaper(event,'chemistry')">CHEMISTRY</button>
                        <button class="w3-bar-item w3-button w3-hover-darkgray tablink1" onclick="openpaper(event,'Mathematics')">MATHEMATICS</button>
                        <button class="w3-bar-item w3-button w3-hover-darkgray tablink1" onclick="openpaper(event,'others')">OTHER</button>
                      </div>
                      <div id="physics" class="w3-container  paper">
                        <h3 class="our-r"> PHYSICS PAPERS</h3>
                    <ul  style="list-style-type: square;">
                    <li><a href="#">2016 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2017 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2018 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2019 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2020 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2017 AIIMS Question Paper and Answers</a></li>
                    <li><a href="#">2018 AIIMS Question Paper and Answers</a></li>
                    <li><a href="#">2019 AIIMS Question Paper and Answers</a></li>
                    </ul>
                      </div>
                      <div id="chemistry" class="w3-container  paper" style="display:none">
                        <h3 class="our-r"> CHEMISTRY PAPERS</h3>
                    <ul  style="list-style-type: square;">
                    <li><a href="#">2016 10th board chemistry Question Paper and Answers</a></li>
                    <li><a href="#">2017 10th board chemistry Question Paper and Answers</a></li>
                    <li><a href="#">2018 10th board chemistry Question Paper and Answers</a></li>
                    <li><a href="#">2019 10th board chemistry Question Paper and Answers</a></li>
                    <li><a href="#">2020 10th board chemistry Question Paper and Answers</a></li>
                    <li><a href="#">2017 AIIMS Question Paper and Answers</a></li>
                    <li><a href="#">2018 AIIMS Question Paper and Answers</a></li>
                    <li><a href="#">2019 AIIMS Question Paper and Answers</a></li>
                    </ul>
                      </div>
                      <div id="Mathematics" class="w3-container  paper" style="display:none">
                        <h3 class="our-r"> MATHEMATICS PAPERS</h3>
                    <ul  style="list-style-type: square;">
                    <li><a href="#">2016 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2017 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2018 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2019 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2020 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2017 AIIMS Question Paper and Answers</a></li>
                    <li><a href="#">2018 AIIMS Question Paper and Answers</a></li>
                    <li><a href="#">2019 AIIMS Question Paper and Answers</a></li>
                    </ul>
                      </div>
                      <div id="others" class="w3-container  paper" style="display:none">
                        <h3 class="our-r"> OTHER PAPERS</h3>
                    <ul  style="list-style-type: square;">
                    <li><a href="#">2016 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2017 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2018 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2019 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2020 NEET Question Paper and Answers</a></li>
                    <li><a href="#">2017 AIIMS Question Paper and Answers</a></li>
                    <li><a href="#">2018 AIIMS Question Paper and Answers</a></li>
                    <li><a href="#">2019 AIIMS Question Paper and Answers</a></li>
                    </ul>
                      </div>
                  </div> -->
                </div>
               
               <!-- question end -->
         <!-- faq start --> <div  id="FAQ" style="height:130px"></div>
            <div class="container" >
                <h2 class="our-r " style="border-bottom:2px solid #3d3d3d;"><i class="fa fa-star" aria-hidden="true"></i> Frequently Asked Questions (FAQ)</h2>
<ol  style="list-style-type:none">
  <li><strong>Q1.</strong> <b>Where Do You Like To Go When You Eat Out?</b> </li>
  <li><strong>Ans.</strong> A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea.</li>
  <li><strong>Q2.</strong> <b>Do You Like To Cook?</b></li>
  <li><strong>Ans.</strong> A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea.</li>
  <li><Strong>Q3.</Strong> <b>Could You Live Without The Internet?</b></li>
  <li><strong>Ans.</strong> A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea.</li>
  <li><Strong>Q4.</Strong> <b>Most Memorable Birthday?</b></li>
  <li><strong>Ans.</strong> A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea.</li>
  <li><strong>Q5.</strong> <b>What Would Your Perfect Day Be Like?</b></li>
  <li><strong>Ans.</strong> A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea.</li>
</ol>
            </div>
<!-- faq end -->
        </div>
        

        <div class=" border-left col-md-2" style="margin-top: 110px;">
<h1  class="our-r border-bottom mt-3 text-primary">Candid</h1>
        </div>
    </div>
           
        
      
        </div>
       
    </div>
</div>
    
    <script>
        function openpaper(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("paper");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink1");
            for (i = 0; i < x.length; i++) {
           tablinks[i].className = tablinks[i].className.replace(" w3-border-bottom", "");
           
           }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-border-bottom";
          }
        function openpapers(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("papers");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-blue";
          }
    </script>   

    <!--INCLUDING FOOTER -->      
<?php include ('footer1.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script><script src="js/course.js"></script>
</body>
</html>