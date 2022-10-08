<?php 
    require_once "./../includes/header.php";
?>


<a href="./../logout.php">Logout</a>
<div class="container d-flex min-vh-100 align-items-center justify-content-center">
 <div class="card text-center p-4 ">
 	<div class="card-title">
                <h3 class="">Admin Dashboard</h3>
 	</div>
        <div class="card-body ">
            <div class=" d-flex flex-column justify-content-center align-items-center">
                   <a href="./attendance.php" class="btn btn-primary " role="button" ><strong>Attendance</strong></a>
					<a href="./scanner.php" class="btn btn-dark mt-3" role="button"><strong>Scanner</strong></a>
					<a href="./data-visualization.php" class="btn btn-success mt-3" role="button"><strong>Data Visualization</strong></a>

     
            </div>
        </div>
    </div>
    </div>
