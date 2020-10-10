<?php

include 'include/DB.php';
session_start();
extract($_POST);

if(isset($_POST['stream_name'])){

    $sql = "select distinct title from cpost where course_stream=?";
    
    $result = $ConnectingDB->prepare($sql);
    $result->execute([$stream_name]);
    $res = '<option id="1">Choose Course Name</option>';
    $i=2;
    
    while($row = $result->fetch()){

        $res .= '<option id='.$i.'>'.$row['title'].'</option>';
     
        $i++;
    }
    echo $res;


}


if(isset($_POST['stream_title'])){
    $sql = "select  distinct course_class from cpost where title=?";

    $result = $ConnectingDB->prepare($sql);
    $result->execute([$stream_title]);
    $res = '<option id="1">Choose Course Class</option>';
    $i=2;
    
    while($row = $result->fetch()){

        $res .= '<option id='.$i.'>'.$row['course_class'].'</option>';
     
        $i++;
    }
    echo $res;


}

if(isset($_POST['stream_names']) and isset($_POST['stream_titles']) and isset($_POST['stream_class'])){

    $_SESSION['stream_name']=$stream_names;
    $_SESSION['stream_titles']=$stream_titles;
    $_SESSION['stream_class']=$stream_class;


    echo'<script> window.open("http://localhost/modify customer1/courses.php")</script>';




}

if(isset($_POST['field_name'])){

    $sql = "select * from cpost where course_stream = ?";

    $result = $ConnectingDB->prepare($sql);

    $result->execute([$field_name]);
    $countrow = $result->rowCount();
    $res = '';
if($countrow>1){
while ($DataRows = $result->fetch()) { 
            $ID  = $DataRows["id"];
            $DateTime1  = $DataRows["datetime"];
            $PostTitle1  = $DataRows["title"];
            $PostClass1 = $DataRows['course_class'];// Suraj
            $PostStream1 = $DataRows['course_stream'];//suraj
            $Frequency1  = $DataRows["frequency"];
            $StartDate1  = $DataRows["sbatch"];
            $EndDate1  = $DataRows["ebatch"];
            $Image1  = $DataRows["pdf"];

            $res .='<div id="Medical'.$ID.'" class="tenth container shadow course_card_content" >


            <h3 id="program_name'.$ID.'">'.$PostTitle1.'</h3>
            <div class="container">
            <div class="row">
            <div class="col-lg-4">
            <div class="p-3 program_for">
            <ul class="list-unstyled" style="display:inline-flex">
                <li>
                    <img src="Photos\1.jpg" alt="" >
                </li>
                <li>
                    <h6 class="pl-3 mt-2 selected_class '.$ID.'"><font style="color: rgb(80, 79, 79);">for</font><br>'.htmlentities($PostClass1).'th Class Students</h6> 
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
                    <h6 class="pl-3 mt-2"><font style="color: rgb(80, 79, 79);"><a href="Upload/'.$Image1.'" download="" style="text-decoration: none;"> View/Download Brochure</a></font></h6>
                </li>
            </ul>
            </div>
            </div>
            </div>
            </div>


            <!-- couse information -->
            <div class="pl-3 pt-1 pr-3">
            <ul class="list-unstyled" style="display:inline-flex">
            <li><i class="fa fa-history mt-3" style="font-size:32px;color:#3078c1"></i></li>
            <li>
            <p class="pl-2 mt-3" style="color: grey;"><b style="color: black;">Frequency</b> <br>'.htmlentities($Frequency1).'</p>
            </li>
            </ul>

            </div>
            <div class="pl-3 pr-3" style="margin-top: -40px;">
            <ul class="list-unstyled" style="display:inline-flex">
            <li><i class="  fa fa-calendar mt-3" style="font-size:32px;color:#3078c1"></i></li>
            <li>
                <p class="pl-2 mt-3" style="color: grey;"><b style="color: black;">Batch Starting On</b> <br>'.htmlentities($StartDate1).'</p>
            </li>
            </ul>
            </div>
            <div class="pl-3 pr-3" style="margin-top: -30px;">
            <ul class="list-unstyled" style="display:inline-flex">

            <li class="pl-4">
                <p class="pl-3 mt-3" style="color: grey;"><b style="color: black;">Batch Ending On</b> <br>'.htmlentities($EndDate1).'</p>
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
            ';



}
}
else{
    $res .= '<script>
        document.querySelector("#M").style.display="block";
    </script>';
}
echo $res;

}


?>