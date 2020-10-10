<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php Confirm_password(); ?>  <!-- LOGIN REQUIRED FOR HONER LOGIN -->
<?php 

if (isset($_POST['Submit'])) {
	
	$PostTitle = $_POST['PostTitle'];
	$Image = $_FILES['Image']['name'];
	$Target = "Upload/".basename($_FILES['Image']['name']);
	//$Admin = "Govind";
	$Admin = $_SESSION["UseRName"]; # Using Dynamically By session variables
    date_default_timezone_set("Asia/Kolkata"); //You can chage time Zone As you wish
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y  %H: %M: %S",$CurrentTime);


	if (empty($PostTitle)) {
		
		$_SESSION["ErrorMessage"] = "Title can't be Empty !";
		Redirect_to("announce.php");
	}

	elseif (strlen($PostTitle)<5) {
		
		$_SESSION["ErrorMessage"] = "Post Title should be greater than 5 characters";
		Redirect_to("announce.php");
	}
	else{

		#Query to insert post in DB when everything is fine
		global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
		$sql = "INSERT INTO announce(datetime,title,pdf)";
		$sql .= "VALUES(:dateTime,:postTitle,:pdfName)";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':dateTime', $DateTime);
		$stmt->bindValue(':postTitle',$PostTitle);
		$stmt->bindValue(':pdfName',$Image);
        $Execute =$stmt->execute();
         
        move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);

        if ($Execute) {
        	$_SESSION["SuccessMessage"] = "Post with id : ".$ConnectingDB->lastInsertId()." Added Successfully";
        	Redirect_to("announce.php"); // You Can Send Admin to Any PAge YOU Want
        }else{
        	$_SESSION["ErrorMessage"] = "Something Went to Wrong! Try Again!";
		    Redirect_to("announce.php");
        }
	}

}// Ending of Submit button if-Condition


 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
	<title>Coachnig Honer Dashboard</title>
</head>
<body>
<!-- NAVBAR-->
<?php include('header.php') ?>
<?php include('navbar.php') ?>

<!--Main area of Announce-->
<section class="container py-2 mb-4">
	<div class="row">
	    <div class="col-lg-12">	
			<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

			 ?>
			<form action="announce.php" method="post" enctype="multipart/form-data">  <!--  Here we using enctype in form this use for handle images in database table   -->
				<div class="card bg-secondary text-light mb-3">
					<div class="card-body bg-dark">
						<div class="form-group">
							<label for="title"> <span class="Fieldinfo">Annoucenment Title</span></label>
							<input class="form-control" type="text" name="PostTitle" id="title" value="" placeholder="Type title here">
						</div>
						<div class="form-group">
						<!--	<label for="imageSelect"> <span class="Fieldinfo">Select Image</span></label> -->
							<div class="custom-file">
							<input class="custom-file-input" type="File" name="Image" id="imageSelect" placeholder="Select Pdf">
							<label for="imageSelect" class="custom-file-label">Select Pdf</label>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 mb-2">
								<a href="index.php" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"></i>Back To Dashboard</a>
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
					<th>Title</th>
					<th>Date&Time</th>
				<!--	<th>Banner</th> -->
					<th>Action</th>
					<th>Live Preview</th>
				</tr>
				</thead>
				<?php 
                 
                 global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
                 $sql = "SELECT * FROM announce";
                 $stmt = $ConnectingDB->query($sql);

                 $Sr = 0;
                 while ($DataRows = $stmt->fetch()) {	
                 	$Id  = $DataRows["id"];
                 	$DateTime  = $DataRows["datetime"];
                 	$PostTitle  = $DataRows["title"];	
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
				 	<td>
				 		
                       <?php if (strlen($DateTime)>11) {
                     	$DateTime = substr($DateTime,0,11).'...';
                     } 
				 	 echo $DateTime; ?>
				 	</td>
				 	<!--
				 	<td><img src="Upload/<?php echo $Image; ?>" width="150px;" height="80px;"></td> -->
				 	<td>
                    <a href="Dannuce.php?id=<?php echo $Id; ?>"><span class="btn btn-danger">Delete</span></a>
				 	</td>
				 	<td><a href="FullPost.php?id=<?php echo $Id; ?>" target="_blank" ><span class="btn btn-primary">Live Preview</span></a></td>
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