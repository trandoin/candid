<?php require_once("include/DB.php"); ?>
<?php require_once("include/Function.php"); ?>
<?php require_once("include/Session.php"); ?>



<?php Confirm_password(); ?>  <!-- LOGIN REQUIRED FOR HONER LOGIN -->


<?php 

$con = new mysqli("localhost","root","","candid");

$msg = '';
if (isset($_POST['upload'])) {
  
  $Image = $_FILES['image']['name'];
  $Path  = 'Upload/'.$Image;

  $sql = $con->query("INSERT INTO slider (slide_image) VALUES ('$Path')");

  if ($sql) {
    
    move_uploaded_file($_FILES['image']['tmp_name'], $Path);
    $msg = 'Image Uploaded Successfully';
  }else{
    $msg = 'Image Upload Failed !';
  }

}

$Result = $con->query("SELECT slide_image FROM slider");

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Dynamic Slider</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include('header.php') ?>
  <?php include('navbar.php') ?>
  <!--
<h1 class="text-center bg-dark text-light pb-2">Dynamic BS4 Slider</h1> -->
<div class="container-fluid mt-4"  >
  <div class="row justify-content-center mb-2" >
    <div class="col-lg-10">

      <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php 

    $i= 0;
    foreach ($Result as $row) {
      $actives = '';
      if ($i == 0) {
        $actives = 'active';
      }
   

     ?>
    <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
    <!--
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  -->
  <?php $i++; } ?>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
     <?php 

    $i= 0;
    foreach ($Result as $row) {
      $actives = '';
      if ($i == 0) {
        $actives = 'active';
      }
   

     ?>

    <div class="carousel-item <?= $actives; ?>">
      <img src="<?= $row['slide_image'] ?>" width="100%" height="500" >
    </div>
    <?php $i++; }  ?>
    <!--
    <div class="carousel-item">
      <img src="chicago.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York">
    </div> -->
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
    </div>
  </div>
  <div class="row justify-content-center mb-4">
    <div class="col-lg-4 bg-dark rounded px-4">
      <h4 class="text-center text-light p-1">Select Image to Upload !</h4>
      <form accept="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <input type="file" name="image" class="form-control p-1" required="">
        </div>
        <div class="form-group">
          <input type="submit" name="upload" class="btn btn-warning btn-block" value="Upload Image">
        </div>
        <div class="form-group">
          <h4 class="text-center text-light"><?= $msg;  ?></h4>
        </div>
      </form>
    </div>
  </div>
</div>


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
          <th>Banner</th>
          <th>Action</th>
        </tr>
        </thead>
        <?php 
                 
                 global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
                 $sql = "SELECT * FROM slider";
                 $stmt = $ConnectingDB->query($sql);

                 $Sr = 0;
                 while ($DataRows = $stmt->fetch()) { 
                  $Id  = $DataRows["id"];
                  $Image  = $DataRows["slide_image"];
                  $Sr ++;
         ?>
         <tbody>
         <tr>
          <td><?php echo $Sr; ?></td> 
          <td><img src="<?php echo $Image; ?>" width="150px;" height="80px;"></td>
         <td><a href="Dslider.php?id=<?php echo $Id; ?>"><span class="btn btn-danger">Delete</span></a></td>
         </tr>
         </tbody>
        <?php } ?>
      </table>
    </div>
  </div>
</section>


<!-- FOOTER SECTION START -->
<?php include('footer.php') ?>
<!-- FOOTER SECTION ENDING HERE --> 

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>