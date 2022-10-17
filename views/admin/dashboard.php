<?php 
    require_once "./../includes/header.php";
?>


<nav class="navbar navbar-expand border shadow-sm">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-md-0">
		<li class="nav-item">
          <a class="nav-link active" href="./../logout.php">
		  <i class="fa-solid fa-right-from-bracket"></i>	
		  <b> Logout</b></a>
        </li>
    </div>
  </div>
</nav>

<div class="container-lg d-flex min-vh-100 align-items-center justify-content-center">
 <div class="card text-center p-5 shadow ">
 	<div class="card-title">
                <h1 class="">Admin Dashboard</h1>
 	</div>
        <div class="card-body ">
            <div class=" d-flex flex-column justify-content-center align-items-center">
                   <a href="./attendance.php" class="btn btn-primary btn-lg " role="button" ><strong>Attendance</strong></a>
					<a href="./scanner.php" class="btn btn-dark btn-lg btn-lg mt-3" role="button"><strong>Scanner</strong></a>
					<a href="./data-visualization.php" class="btn btn-success btn-lg mt-3" role="button"><strong>Data Visualization</strong></a>

     
            </div>
        </div>
    </div>
    </div>
