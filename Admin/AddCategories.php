
<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php Confirm_password(); ?>  <!-- LOGIN REQUIRED FOR HONER LOGIN -->

<?php 

if (isset($_POST['Submit'])) {
	
	$Category = $_POST['CategotyTitle'];
	//$Admin = $_SESSION["UseRName"]; # Using Dynamically By session variables
	$Admin = "Govind";
    date_default_timezone_set("Asia/Kolkata"); //You can chage time Zone As you wish
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y  %H: %M: %S",$CurrentTime);


	if (empty($Category)) {
		
		$_SESSION["ErrorMessage"] = "All Fields must filled out";
		Redirect_to("AddCategories.php");
	}

	elseif (strlen($Category)<3) {
		
		$_SESSION["ErrorMessage"] = "Category Title should be greater than 2 characters";
		Redirect_to("AddCategories.php");
	}
	elseif (strlen($Category)<10) {
		
		$_SESSION["ErrorMessage"] = "Category Title should be less than 50 characters";
		Redirect_to("AddCategories.php");
	}
	else{

		#Query to insert category in DB when everything is fine
		global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
		$sql = "INSERT INTO ca(title,author,datetime)";
		$sql .= "VALUES(:categoriesName,:adminName,:dateTime)";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':categoriesName',$Category);
		$stmt->bindValue(':adminName',$Admin);
		$stmt->bindValue(':dateTime',$DateTime);
        $Execute =$stmt->execute();


        if ($Execute) {
        	$_SESSION["SuccessMessage"] = "Category with id : ".$ConnectingDB->lastInsertId()." Added Successfully";
        	Redirect_to("AddCategories.php"); // You Can Send Admin to Any PAge YOU Want
        }else{
        	$_SESSION["ErrorMessage"] = "Something Went to Wrong! Try Again!";
		    Redirect_to("AddCategories.php");
        }
	}

}


 ?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <!--<link rel="stylesheet" type="text/css" href="css/style.css">  -->
	<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
	<title>Coachnig Honer Dashboard</title>
</head>
<body>
<!-- NAVBAR-->
<?php include('header.php') ?>
<?php include('navbar.php') ?>
<!--- MAIN AREA START -->
<section class="container py-2 mb-4">
	<div class="row">
		<div class="offset-lg-1 col-lg-10" style="min-height: 440px;">
			
			<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

			 ?>
			<form action="AddCategories.php" method="post">
				<div class="card bg-secondary text-light mb-3">
					<div class="card-header">
						<h1>Add New Category</h1>
					</div>
					<div class="card-body bg-dark">
						<div class="form-group">
							<label for="title"> <span class="Fieldinfo">Category Title</span></label>
							<input class="form-control" type="text" name="CategotyTitle" id="title" value="" placeholder="Type title here">
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
					
			</form>
		</div>
	</div>
			<h2 style="font-weight: bold;">Existing Categories</h2>
			<table class="table table-striped table-hover">
				<thead class="thead-dark">
					<tr>
						<th>No.</th>
						<th>DateTime</th>
						<th>Category Name</th>
						<th>Creater Name</th>
						<th>Action</th>
					</tr>
				</thead>

			<!--- Php for Fetchin comments from database -->
			<?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM ca ORDER BY id desc ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
              	
                 $CategorytId = $DataRows["id"];
                 $CategoryDateTime = $DataRows["datetime"];
                 $CategoryName = $DataRows["title"];
                 $CreaterName = $DataRows["author"];
                 $SrNo++;
                 
			 ?>
			 <tbody>
			 	<tr>
			 		<td><?php echo htmlentities($SrNo) ; ?></td>
			 		<td><?php echo htmlentities($CategoryDateTime) ; ?></td>
			 		<td><?php echo htmlentities($CategoryName) ; ?></td>
			 		<td><?php echo htmlentities($CreaterName) ; ?></td>
			 		<td><a href="DCategory.php?id=<?php echo $CategorytId; ?>" class="btn btn-danger">Delete</a></td>
			 	</tr>
			 </tbody>
			<?php } ?>
			</table>
	
</section>
<!--- MAIN AREA END ---->
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