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
 			<h2 class="bg-dark text-light py-2 px-2" style="font-weight: bold;">Free Users</h2>
			<table class="table table-striped table-hover" >
				<thead class="thead-dark">
					<tr>
						<th>No.</th>
						<th>DateTime</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Gender</th>
						<th>Stream</th>
						<th>Class</th>
						<th>Password</th>
						<th>Action</th>
					</tr>
				</thead>

			<!--- Php for Fetchin comments from database -->
			<?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM  f_user ORDER BY id desc ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
              	
                 $Id = $DataRows["id"];
                 $DateTime = $DataRows['datetime'];
                 $Name = $DataRows['name'];
                 $Email = $DataRows['email'];
                 $Phone = $DataRows['mobile'];
                 $Gender = $DataRows['gender'];
                 $Stream = $DataRows["stream"];
                 $Class = $DataRows["class"];
                 $Password = $DataRows["password"];
                 $SrNo++;
                 
			 ?>
			 <tbody>
			 	<tr>
			 		<td><?php echo htmlentities($SrNo) ; ?></td>
			 		<td><?php echo htmlentities($DateTime); ?></td>
			 		<td><?php echo htmlentities($Name) ; ?></td>
			 		<td><?php echo htmlentities($Email); ?></td>
			 		<td><?php echo htmlentities($Phone); ?></td>	
			 		<td><?php echo htmlentities($Gender); ?></td>
			 		<td><?php echo htmlentities($Stream); ?></td>
			 		<td><?php echo htmlentities($Class); ?></td>
			 		<td><?php echo htmlentities($Password); ?></td>				
			 		<td><a href="Df_user.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
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