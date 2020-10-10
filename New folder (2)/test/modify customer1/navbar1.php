  <!-- main Navbar -->
<div class="sec2">
  <nav class=" navbar navbar-expand-lg  navbar-dark" style="background: #094586;" >
    <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="#"><img src="photos/logocandid.PNG" style="width: 220px; height: 70px;"></a>
    <button style="color: #3078c1;" class="navbar-dark navbar-toggler-right navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">   
    <i class="fa fa-navicon" style="color:#3078c1; font-size:28px;"></i>
</span>
    </button>
  
    <div class="collapse navbar-collapse " id="navbarNavDropdown" style="text-transform: uppercase;margin-left:100px">
      <ul class="navbar-nav">
        <li class="nav-item active p-2 c1">
          <a class="nav-link text-light " href="index.php" style="color: #3078c1;font-weight:600" onMouseOver="this.style.color='#023669'"
          onMouseOut="this.style.color='#3078c1'">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown p-2 c1">
          <a class="nav-link  dropdown-toggle text-light " style="color: #3078c1;font-weight:600" onMouseOver="this.style.color='#023669'"
          onMouseOut="this.style.color='#3078c1'"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item border-bottom" href="About.php">About</a>
            <a class="dropdown-item" href="About.php#vission">Vission</a>
            <a class="dropdown-item" href="About.php#mission">Mission</a>
            <a class="dropdown-item" href="About.php#why-candid">Why candid</a>
         <!--   <a class="dropdown-item" href="About.php#our-gallery">Our Gallery</a> -->
          </div>
        </li>
        <li class="nav-item dropdown p-2 c1">
          <a class="nav-link  dropdown-toggle text-light" style="color: #3078c1;font-weight:600" onMouseOver="this.style.color='#023669'"
          onMouseOut="this.style.color='#3078c1'" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="Courses.php" class="dropdown-item border-bottom">ALL COURSES</a>
            <a class="dropdown-item course1" onclick = "cou(1)">ENGINEERING</a>
            <a class="dropdown-item course2" onclick="cou(2)">MEDICAL</a>
            <a class="dropdown-item course3" onclick="cou(3)">FOUNDATIONS</a>
          </div>
        </li>
        <li class="nav-item active p-2 c1">
          <a class="nav-link text-light" href="Result.php" style="color: #3078c1;font-weight:600" onMouseOver="this.style.color='#023669'"
          onMouseOut="this.style.color='#3078c1'">RESULTS <span class="sr-only"></span></a>
        </li>
        
        <li class="sss text-primary nav-item dropdown p-2 c1" style="left:250px;top:4px" >
          <div class="container1">
              <input class="sear" type="text" maxlength= "12" placeholder="Search Course" class="searchbar">
              <img class="sear1" src="https://images-na.ssl-images-amazon.com/images/I/41gYkruZM2L.png" alt="search icon" class="button">
            </div>
         </li>
      </ul>
    </div>


    </div>
  </nav>
</div>