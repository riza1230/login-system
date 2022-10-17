<?php 
    require_once "./../includes/header.php";
?>


<nav class="navbar navbar-expand border shadow-sm">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./profile.php">
		  <i class="fa-solid fa-house-user"></i>
		  <b>Dashboard</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="./data-visualization.php">
		  <i class="fa-regular fa-pen-to-square"></i>
		  <b> Data Visualization</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="./edit-profile.php">
		  <i class="fa-solid fa-qrcode"></i>
		  <b> Scanner</b></a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="./../logout.php">
		  <i class="fa-solid fa-right-from-bracket"></i>	
		  <b> Logout</b></a>
        </li>
    </div>
  </div>
</nav>

<?php require_once __DIR__ . './qr-code-scanner/index.php' ?>