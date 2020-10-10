<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>

<?php Confirm_password(); ?>  <!-- LOGIN REQUIRED FOR HONER LOGIN -->

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
<br>
<!-- MAIN SECTION START HERE-->
<dir class="container">
	<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

			 ?>
	<div class="row">
		
					 <!-- Left Side Area Start -->
			 <div class="col-lg-3 d-none d-md-block">
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Course Posts</h1>
			 			<h4 class="display-5"><i class="fab fa-readme">  </i> <?php TotalCPosts(); ?></h4>
			 		</div>
			 	</div>
			 
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Categories</h1>
			 			<h4 class="display-5"><i class="fas fa-folder">  </i> <?php TotalCategories(); ?></h4>
			 		</div>
			 	</div>
			
				<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Registered Students</h1>
			 			<h4 class="display-5"><i class="fas fa-users">  </i> <?php TotalRStudents(); ?> </h4>
			 		</div>
			 	</div>
			
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Queries</h1>
			 			<h4 class="display-5"><i class="fas fa-comments">  </i> <?php TotalQueries(); ?> </h4>
			 		</div>
			 	</div>
		</div>
		<!-- Left Area Ending -->
		<div class="col-lg-3 d-none d-md-block">
			
			<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">SlideImages</h1>
			 			<h4 class="display-5"><i class="fab fa-readme">  </i> <?php TotalSlideImage(); ?></h4>
			 		</div>
			 	</div>
			 
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Annoucement</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalAnno(); ?></h4>
			 		</div>
			 	</div>
			
				<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">New&Events</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalNews(); ?></h4>
			 		</div>
			 	</div>
			
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Offers</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalOffers(); ?> </h4>
			 		</div>
			 	</div>

		</div>
		<!-- Third section start here -->
		<div class="col-lg-3 d-none d-md-block">
			
			<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">JEE Results</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalJeer(); ?></h4>
			 		</div>
			 	</div>
			 
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Medical Results</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalMedicalr(); ?></h4>
			 		</div>
			 	</div>
			
				<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">KVPY Results</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalKvpyr(); ?></h4>
			 		</div>
			 	</div>
			
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Testinomials</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalTesti(); ?></h4>
			 		</div>
			 	</div>

		</div>
		<!-- Third section ending here -->
		<!--  Fourth Section Starting here-->
		<div class="col-lg-3 d-none d-md-block">

			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Course Fee</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalCFee(); ?></h4>
			 		</div>
			 	</div>
			
				<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">JEE Papers</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalJeeP(); ?></h4>
			 		</div>
			 	</div>
			
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Medical Papers</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalMedicalP(); ?></h4>
			 		</div>
			 	</div>
			 	<div class="card text-center bg-dark text-white mb-3">
			 		<div class="card-body">
			 			<h1 class="lead">Boards Papers</h1>
			 			<h4 class="display-5"><i class="fab fa-readme"></i> <?php TotalBoardP(); ?></h4>
			 		</div>
			 	</div>

		</div>
		<!-- Fourth section Ending Here --> 
	</div>
</dir>
<!-- MAIN SECTION ENDING HERE-->
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