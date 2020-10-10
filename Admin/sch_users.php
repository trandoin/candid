<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php Confirm_password(); ?>  <!-- LOGIN REQUIRED FOR HONER LOGIN -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
	<title>Candid | Registered students</title>
</head>
<body>
<!-- NAVBAR-->
<?php include('header.php') ?>
<?php include('navbar.php') ?>
<br>
<!-- MAIN AREA START ---->
 <div class="container">
 	<div class="row">
 		
 			<div class="col-lg-4 mb-2">
				<a class="btn btn-success btn-block" href="ViewRegisterStudents.php"> <i class="fas fa-users"></i> Paid users</a>
			</div><div class="col-lg-4 mb-2">
				<a class="btn btn-success btn-block" href="f_users.php"> <i class="fas fa-users"></i> Free users</a>
			</div>
			<div class="col-lg-4 mb-2">
				<a class="btn btn-success btn-block" href="sch_users.php"> <i class="fas fa-users"></i> Schlorship users</a>
			</div>
 		
 	</div>
 </div>
 <div class="container">
 	<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

			 ?>
 	<div class="row">
 		<div class="col-lg-12" style="overflow: scroll;">
 			<h2 class="bg-dark text-light py-2 px-2" style="font-weight: bold;">Schlorship Users</h2>
			<table class="table table-striped table-hover" >
				<thead class="thead-dark">
					<tr>
						<th>No.</th>
						<th>DateTime</th>
						<th>Name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Mobile</th>
						<th>DOB</th>
						<th>Category</th>
						<th>Country</th>
						<th>Adhar</th>
						<th>Father's Name</th>
						<th>Father's Occupation</th>
						<th>Father's Mobile</th>
						<th>Mother's Name</th>
						<th>Mother's Occupation</th>
						<th>Mother's Mobile</th>
						<th>P_Address</th>
						<th>P_Pin_City</th>
						<th>P_District_State</th>
						<th>C_Address</th>
						<th>C_Pin_City</th>
						<th>C_Distict_State</th>
						<th>Stream</th>
						<th>Present_Class</th>
						<th>P_Board</th>
						<th>P_Medium</th>
						<th>Admission_Class</th>
						<th>School_Name</th>
						<th>School_Address</th>
						<!-- <th>Appare10th_Class</th>
						<th>Passing_Year</th>
						<th>Roll_10th</th>
						<th>Marks_10th(%)</th>
						<th>Appare12th_Class</th>
						<th>Year_12th</th>
						<th>Roll_12th</th>
						<th>MArks_12th(%)</th> -->
						<th>Picture</th>
						<th>Marksheet_10th</th>
						<th>Marksheet_12th</th>
						<th>Source</th>
						<th>Terms&conditions</th>
						<th>Action</th>
					</tr>
				</thead>

			<!--- Php for Fetchin comments from database -->
			<?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM  c_r_p_u ORDER BY id desc ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
              	
                 $Id = $DataRows["id"];
                 $DateTime = $DataRows['datetime'];
                 $Name = $DataRows['name'];
                 $Gender = $DataRows['gender'];
                 $Phone = $DataRows['mobile'];
                 $Email = $DataRows['email'];
                 $DOB = $DataRows["dob"];
                 $Category = $DataRows["category"];
                 $Country = $DataRows["country"];
                 $Adhar = $DataRows["adhar"];
                 $FName = $DataRows["fname"];
                 $FOccupation = $DataRows["foccupation"];
                 $FMobile = $DataRows["fmobile"];
                 $MName = $DataRows["mname"];
                 $MOccuption = $DataRows["moccupation"];
                 $MMobile = $DataRows["mmobile"];
                 $PAddress = $DataRows["paddress"];
                 $PPinCity = $DataRows["ppincity"];
                 $PDistrictState = $DataRows["pdistrict"];
                 $CAddress = $DataRows["caddress"];
                 $CPinCity = $DataRows["cpincity"];
                 $CDistrictState = $DataRows["cdistrict"];
                 $Stream = $DataRows["stream"];
                 $Class = $DataRows["pclass"];
                 $Board = $DataRows["board"];
                 $medium = $DataRows["medium"];
                 $AdmissionClass = $DataRows["admissionclass"];
                 $SchoolName = $DataRows["schoolname"];
                 $SchoolAddress = $DataRows["schooladdress"];
                 $Appare10thClass = $DataRows["appare10thclass"];
                 $Passing10thYear = $DataRows["passingyear10th"];
                 $Roll10Th = $DataRows["rollno10th"];
                 $Marks10th = $DataRows["marks10th"];
                 $Appare12thClass = $DataRows["appare12thclass"];
                 $Passing12thYear = $DataRows["passingyear12th"];
                 $Roll12Th = $DataRows["rollno12th"];
                 $Marks12th = $DataRows["marks12th"];
                 $sourcek = $DataRows["source"];
                 $Termsand = $DataRows["terms"];
                 $Photo = $DataRows["photo"];
                 $MArksheet10th = $DataRows["markssheet10th"];
                 $MArksheet12th = $DataRows["markssheet12th"];
              
                 $SrNo++;
                 
			 ?>
			 <tbody>
			 	<tr>
			 		<td><?php echo htmlentities($SrNo) ; ?></td>
			 		<td><?php echo htmlentities($DateTime); ?></td>
			 		<td><?php echo htmlentities($Name) ; ?></td>
			 		<td><?php echo htmlentities($Email); ?></td>
			 		<td><?php echo htmlentities($Gender); ?></td>
			 		<td><?php echo htmlentities($Phone); ?></td>		 		
			 		<td><?php echo htmlentities($DOB); ?></td>
			 		<td><?php echo htmlentities($Category); ?></td>
			 		<td><?php echo htmlentities($Country); ?></td>
			 		<td><?php echo htmlentities($Adhar); ?></td>
			 		<td><?php echo htmlentities($FName); ?></td>
			 		<td><?php echo htmlentities($FOccupation); ?></td>
			 		<td><?php echo htmlentities($FMobile); ?></td>
			 		<td><?php echo htmlentities($MName); ?></td>
			 		<td><?php echo htmlentities($MOccuption); ?></td>
			 		<td><?php echo htmlentities($MMobile); ?></td>
			 		
			 		<td><?php echo htmlentities($PAddress); ?></td>
			 		<td><?php echo htmlentities($PPinCity); ?></td>
			 		<td><?php echo htmlentities($PDistrictState); ?></td>
			 		<td><?php echo htmlentities($CAddress); ?></td>
			 		<td><?php echo htmlentities($CPinCity); ?></td>
			 		<td><?php echo htmlentities($CDistrictState); ?></td>
			 		<td><?php echo htmlentities($Stream); ?></td>
			 		<td><?php echo htmlentities($Class); ?></td>
			 		<td><?php echo htmlentities($Board); ?></td>
			 		<td><?php echo htmlentities($medium); ?></td>
			 		<td><?php echo htmlentities($AdmissionClass); ?></td>
			 		<td><?php echo htmlentities($SchoolName); ?></td>
			 		<td><?php echo htmlentities($SchoolAddress); ?></td>

			 		<!-- <td><?php echo htmlentities($Appare10thClass); ?></td>
			 		<td><?php echo htmlentities($Passing10thYear); ?></td>
			 		<td><?php echo htmlentities($Roll10Th); ?></td>
			 		<td><?php echo htmlentities($Marks10th); ?></td>
			 		<td><?php echo htmlentities($Appare12thClass); ?></td>
			 		<td><?php echo htmlentities($Passing12thYear); ?></td>
			 		<td><?php echo htmlentities($Roll12Th); ?></td>
			 		<td><?php echo htmlentities($Marks12th); ?></td> -->
			 		
			 		<td><img src="../C_Register/Upload/<?php echo $Photo ; ?> " style="width: 120px; height: 100px;"></td>
			 		<!-- <td><img src="../C_Resitr"> <?php echo htmlentities($Photo); ?></td> -->
			 		<td><a href="../C_Register/Doc10th/<?php echo htmlentities($MArksheet10th); ?>"><?php echo htmlentities($MArksheet10th); ?></a></td>
			 		<td><a href="../C_Register/Doc12th/<?php echo htmlentities($MArksheet12th); ?>"><?php echo htmlentities($MArksheet12th); ?></a></td>
			 		<td><?php echo htmlentities($sourcek); ?></td>
			 		<td><?php echo htmlentities($Termsand); ?></td>
			 		<td><a href="Dsch_users.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
			 	</tr>
			 </tbody>
			<?php } ?>
			</table>
 		</div>
 	</div>
 </div>
<!--- MAIN AREA END -->
<!-- FOOTER --->
<?php include('footer.php') ?>
<!--FOOTER END-->
<!--- Bootsstrap js  --->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- SCRIPT FOR COPYRIGHT YEAR -->
<script>
	$('#year').text(new Date().getFullYear());
</script>
</body>
</html>