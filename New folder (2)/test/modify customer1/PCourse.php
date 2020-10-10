<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>



<?php Confirm_password(); ?>  <!-- LOGIN REQUIRED FOR HONER LOGIN -->


<?php 

if (isset($_POST['Submit'])) {
	
	$POSTTITLE = $_POST['PostTitle'];
	$FreQuency = $_POST['Frequency'];
	$StartDate = $_POST['SBatch'];
	$EndDate = $_POST['EBatch'];
	$CATEGORY = $_POST['Category'];
	$IMAGE = $_FILES['Image']['name'];
	$Target = "Upload/".basename($_FILES['Image']['name']);
	$Admin = "Govind";
	//$Admin = $_SESSION["UseRName"]; # Using Dynamically By session variables
    date_default_timezone_set("Asia/Kolkata"); //You can chage time Zone As you wish
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y  %H: %M: %S",$CurrentTime);


	if (empty($POSTTITLE)||empty($FreQuency)||empty($StartDate)||empty($EndDate)||empty($CATEGORY)||empty($IMAGE)) {
		
		$_SESSION["ErrorMessage"] = "All Fields Must filled out !";
		Redirect_to("PCourse.php");
	}
	else{

		#Query to insert post in DB when everything is fine
		global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
		$sql = "INSERT INTO cpost(datetime,author,category,title,frequency,sbatch,ebatch,pdf)";
		$sql .= "VALUES(:dateTime,:adminName,:categoriesName,:postTitle,:FrequencY,:SbatcH,:EbatcH,:PdfName)";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':dateTime', $DateTime);
		$stmt->bindValue(':categoriesName', $CATEGORY);
		$stmt->bindValue(':adminName', $Admin);
		$stmt->bindValue(':postTitle', $POSTTITLE);
		$stmt->bindValue(':FrequencY',$FreQuency);
		$stmt->bindValue(':SbatcH',$StartDate);
		$stmt->bindValue(':EbatcH',$EndDate);
		$stmt->bindValue(':PdfName', $IMAGE);
        $Execute =$stmt->execute();
         
        move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);

      if ($Execute) {
        	$_SESSION["SuccessMessage"] = "Post  Added Successfully";
        	Redirect_to("PCourse.php"); // You Can Send Admin to Any PAge YOU Want
        }else{
        	$_SESSION["ErrorMessage"] = "Something Went to Wrong! Try Again!";
		    Redirect_to("PCourse.php");
        }
	}

}// Ending of Submit button if-Condition


 ?>






<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
	<title>Add New Course Post</title>
</head>
<body>
	<!--HEADER START -->
	<?php include('header.php')  ?>
 <!--HEADER END-->
<!-- NAVBAR-->
 <?php include('navbar.php')  ?>
 <!--NAV BAR END-->

<!--Main area of categories-->
<section class="container py-2 mb-4">
	<div class="row">
		<div class="offset-lg-1 col-lg-10" style="min-height: 440px;">
			
			<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

			 ?>
			<form action="PCourse.php" method="post" enctype="multipart/form-data">  <!--  Here we using enctype in form this use for handle images in database table   -->
				<div class="card bg-secondary text-light mb-3">
					<div class="card-body bg-dark">
						<h1><i class="fas fa-edit" style="color: #27aae1;"></i>Add New Course Post</h1>
						<div class="form-group">
							<label for="title"> <span class="Fieldinfo">Course Post Title</span></label>
							<input class="form-control" type="text" name="PostTitle" id="title" value="" placeholder="Type post title here">
						</div>
						<div class="form-group">
							<label for="title1"> <span class="Fieldinfo">Frequency</span></label>
							<input class="form-control" type="text" name="Frequency" id="title1" value="" placeholder="Type Frequency here">
						</div>
						<div class="form-group">
							<label for="title2"> <span class="Fieldinfo">Batch Starting Date</span></label>
							<input class="form-control" type="text" name="SBatch" id="title2" value="" placeholder="Type Batch Starting date here">
						</div>
						<div class="form-group">
							<label for="title3"> <span class="Fieldinfo">Batch Ending Date</span></label>
							<input class="form-control" type="text" name="EBatch" id="title3" value="" placeholder="Type Batch Ending here">
						</div>
						
						<div class="form-group">
							<label for="CategotyTitle"> <span class="Fieldinfo">Choose Categroy</span></label>
							<select class="form-control" id="CategotyTitle" name="Category">
								<?php 

                                 // fetching all the categaries from categery table
								global $ConnectingDB;
								$sql ="SELECT id,title FROM ca";
								$stmt = $ConnectingDB->query($sql);
								while ($DateRows = $stmt->fetch()) {
									
									$Id = $DateRows["id"];
									$CategoryName = $DateRows["title"];

								 ?>
								 <option> <?php echo $CategoryName; ?> </option>
								<?php  } ?> <!-- This bracess is ending of while loop  becoz we can see every categories  -->
							</select>
						</div>
						<div class="form-group">
						<!--	<label for="imageSelect"> <span class="Fieldinfo">Select Image</span></label> -->
							<div class="custom-file">
							<input class="custom-file-input" type="File" name="Image" id="imageSelect">
							<label for="imageSelect" class="custom-file-label">Select Pdf</label>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 mb-2">
								<a href="Dashboard.php" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"></i>Back To Dashboard</a>
							</div>
							<div class="col-lg-6 mb-2">
								<button type="submit" name="Submit" class="btn btn-success btn-block">
									<i class="fas fa-check"></i>Publish
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>


<!--MAin area end -->
<!--Main Are Start here --->
<section class="container py-2 mb-4">
	<div class="row">
		<div class="col-lg-12">
			<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

			 ?>
			<table class="table">
				<thead class="thead-dark table-striped table-hover">
				<tr>
					<th>#</th>
					<th>Post Title</th>
					<th>Frequency</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Category</th>
					<th>Date&Time</th>
					<th>Author</th>
					<th>Pdf</th>
					<th>Action</th>
				</tr>
				</thead>
				<?php 
                 
                 global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
                 $sql = "SELECT * FROM cpost";
                 $stmt = $ConnectingDB->query($sql);

                 $Sr = 0;
                 while ($DataRows = $stmt->fetch()) {	
                 	$Id  = $DataRows["id"];
                 	$DateTime  = $DataRows["datetime"];
                 	$PostTitle  = $DataRows["title"];
                 	$Frequency  = $DataRows["frequency"];
                 	$StartDate  = $DataRows["sbatch"];
                 	$EndDate  = $DataRows["ebatch"];
                 	$Category  = $DataRows["category"];
                 	$Admin  = $DataRows["author"];
                 	$Image  = $DataRows["pdf"];
                 	$Sr ++;
				 ?>
				 <tbody>
				 <tr>
				 	<td><?php echo $Sr; ?></td>
				 	<td class="table-danger">

                     <?php if (strlen($PostTitle)>20) {
                     	$PostTitle = substr($PostTitle,0,20).'...';
                     } 
				 	 echo $PostTitle; ?>
				 	 	
				 	 </td>
				 	 <td><?php if (strlen($Frequency)>20) {
                     	$Frequency = substr($Frequency,0,20).'...';
                     } 
				 	 echo $Frequency; ?></td>
				 	 <td>
				 	 	<?php if (strlen($StartDate)>20) {
                     	$StartDate = substr($StartDate,0,20).'...';
                     } 
				 	 echo $StartDate; ?>
				 	 </td>
				 	 <td>
				 	 	<?php if (strlen($EndDate)>20) {
                     	$EndDate = substr($EndDate,0,20).'...';
                     } 
				 	 echo $EndDate; ?>
				 	 </td>
				 	<td>

                     <?php if (strlen($Category)>10) {
                     	$Category = substr($Category,0,10).'...';
                     }
				 	 echo $Category; ?>
				 	 	
				 	 </td>
				 	<td>
				 		
                       <?php if (strlen($DateTime)>11) {
                     	$DateTime = substr($DateTime,0,11).'...';
                     } 
				 	 echo $DateTime; ?>
				 	</td>
				 	<td class="table-primary"><?php echo $Admin; ?></td>
				 	<td><?php echo htmlentities($Image); ?></td>
				 	<td>
                    <a href="DPCourse.php?id=<?php echo $Id; ?>"><span class="btn btn-danger">Delete</span></a>
				 	</td>
				 </tr>
				 </tbody>
				<?php } ?>
			</table>
		</div>
	</div>
</section>
<!-- Main area ending -->
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