<?php include('Include/db.php');?>
<?php include('Include/session.php');?>

<?php 

if (isset($_POST['Register'])) {
  
  $Name = $_POST['sname'];
  $Gender = $_POST['gender'];
  $Phone = $_POST['sphone'];
  $Email = $_POST['email'];
  $DOB = $_POST["sdob"];
  $Category = $_POST["category"];
  $Country = $_POST["country"];
  $Adhar = $_POST["saadhar"];
  $FName = $_POST["fname"];
  $FOccupation = $_POST["foccuption"];
  $FMobile = $_POST["fphone"];
  $MName = $_POST["mname"];
  $MOccuption = $_POST["moccuption"];
  $MMobile = $_POST["mphone"];
  $PAddress = $_POST["paddress"];
  $PPinCity = $_POST["ppincity"];
  $PDistrictState = $_POST["pdistrictstate"];
  $CAddress = $_POST["caddress"];
  $CPinCity = $_POST["cpincity"];
  $CDistrictState = $_POST["cdistrictstate"];
  $Stream = $_POST["stream"];
  $Class = $_POST["class"];
  $Board = $_POST["board"];
  $medium = $_POST["medium"];
  $AdmissionClass = $_POST["Aclass"];
  $SchoolName = $_POST["schname"];
  $SchoolAddress = $_POST["saddress"];
  $Appare10thClass = $_POST["status10th"];
  $Passing10thYear = $_POST["year10"];
  $Roll10Th = $_POST["roll_No10"];
  $Marks10th = $_POST["marks10"];
  $Appare12thClass = $_POST["status12th"];
  $Passing12thYear = $_POST["year12"];
  $Roll12Th = $_POST["roll_No12"];
  $Marks12th = $_POST["marks12"];
  
  $IMAGE = $_FILES['Image']['name'];
  $Target1 = "Upload/".basename($_FILES['Image']['name']);
  $sheet10th = $_FILES['file10mark']['name'];
  $Target2 = "Doc10th/".basename($sheet10th);
  $sheet12th = $_FILES['file12mark']['name'];
  $Target3 = "Doc12th/".basename($sheet12th);
  $sourcek = $_POST["source"];
  $Termsand = $_POST["term"];
  date_default_timezone_set("Asia/Kolkata"); //You can chage time Zone As you wish
  $CurrentTime = time();
  $DateTime = strftime("%B-%d-%Y  %H: %M: %S",$CurrentTime);


  if (empty($Name)) {
    
    $_SESSION["ErrorMessage"] = "All Fields Must filled out !";
    Redirect_to("index.php");
  }
  else{

    #Query to insert post in DB when everything is fine
    global $ConnectingDB ; // FOR OLD VERSION OF PHP LIKE 5.6 ect
  
    $sql = "INSERT INTO reserve(datetime,name,gender,mobile,email,dob,category,country,adhar,fname,foccupation,fmobile,mname,moccupation,mmobile,paddress,ppincity,pdistrict,caddress,cpincity,cdistrict,stream,pclass,board,medium,admissionclass,schoolname,schooladdress,appare10thclass,passingyear10th,rollno10th,marks10th,appare12thclass,passingyear12th,rollno12th,marks12th,photo,markssheet10th,markssheet12th,source,terms)";
    $sql .= "VALUES(:dateTime,:NamE,:GendeR,:MobilE,:EmaiL,:Dob,:CategorY,:CountrY,:AddaR,:FnamE,:foccupatioN,:Fmobile,:MnamE,:MoccupaTioN,:Mmobile,:PaddresS,:PPincitY,:PdistricT,:CAddreSS,:CPinCity,:CDistRict,:Stream,:PcLLass,:Board,:MediUm,:AClass,:SchoolName,:SchoolAdd,:Appear10th,:Passing10th,:roll10th,:marks10th,:Appear12th,:Passing12th,:roll12th,:markS12th,:PhOto,:markSheet10th,:markSheet12th,:SoUrce,:terms)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':dateTime', $DateTime);
    $stmt->bindValue(':NamE', $Name);
    $stmt->bindValue(':GendeR', $Gender);
    $stmt->bindValue(':MobilE', $Phone);
    $stmt->bindValue(':EmaiL', $Email);
    $stmt->bindValue(':Dob', $DOB);
    $stmt->bindValue(':CategorY', $Category);
    $stmt->bindValue(':CountrY', $Country);
    $stmt->bindValue(':AddaR', $Adhar);
    $stmt->bindValue(':FnamE', $FName);
    $stmt->bindValue(':foccupatioN', $FOccupation);
    $stmt->bindValue(':Fmobile', $FMobile);
    $stmt->bindValue(':MnamE', $MName);
    $stmt->bindValue(':MoccupaTioN', $MOccuption);
    $stmt->bindValue(':Mmobile', $MMobile);
    $stmt->bindValue(':PaddresS', $PAddress);
    $stmt->bindValue(':PPincitY', $PPinCity);
    $stmt->bindValue(':PdistricT', $PDistrictState);
    $stmt->bindValue(':CAddreSS', $CAddress);
    $stmt->bindValue(':CPinCity', $CPinCity);
    $stmt->bindValue(':CDistRict', $CDistrictState);
    $stmt->bindValue(':Stream', $Stream);
    $stmt->bindValue(':PcLLass', $Class);
    $stmt->bindValue(':Board', $Board);
    $stmt->bindValue(':MediUm', $medium);
    $stmt->bindValue(':AClass', $AdmissionClass);
    $stmt->bindValue(':SchoolName', $SchoolName);
    $stmt->bindValue(':SchoolAdd', $SchoolAddress);
    $stmt->bindValue(':Appear10th', $Appare10thClass);
    $stmt->bindValue(':Passing10th', $Passing10thYear);
    $stmt->bindValue(':roll10th', $Roll10Th);
    $stmt->bindValue(':marks10th', $Marks10th);
    $stmt->bindValue(':Appear12th', $Appare12thClass);
    $stmt->bindValue(':Passing12th', $Passing12thYear);
    $stmt->bindValue(':roll12th', $Roll12Th);
    $stmt->bindValue(':markS12th', $Marks12th);
    $stmt->bindValue(':PhOto', $IMAGE);
    $stmt->bindValue(':markSheet10th', $sheet10th);
    $stmt->bindValue(':markSheet12th', $sheet12th);
    $stmt->bindParam(':SoUrce',$sourcek);
    $stmt->bindParam(':terms',$Termsand); 
    
    // $stmt->bindValue(':ClasS', $Class);
    // $stmt->bindValue(':PassworD', $Password);
        $Execute = $stmt->execute();
         
       move_uploaded_file($_FILES["Image"]["tmp_name"], $Target1);
       move_uploaded_file($_FILES["file10mark"]["tmp_name"], $Target2);
       move_uploaded_file($_FILES["file12mark"]["tmp_name"], $Target3);

      if ($Execute) {
          $_SESSION["SuccessMessage"] = "Register Successfully";
          Redirect_to("../fs_dashboard/"); // You Can Send Admin to Any PAge YOU Want
        }else{
          $_SESSION["ErrorMessage"] = "Something Went to  Wrong! Try Again!";
        Redirect_to("index.php");
        }
  }

}// Ending of Submit button if-Condition


 ?>