<?php 
    require_once "./../includes/header.php";
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
    $row = mysqli_fetch_assoc($query);
?>


<title>Profile</title>
<nav class="navbar navbar-expand border shadow-sm">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./profile.php">
		  <i class="fa-solid fa-house-user"></i>
		  <b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="./edit-profile.php">
		  <i class="fa-regular fa-pen-to-square"></i>
		  <b> Edit Profile</b></a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="./../logout.php">
		  <i class="fa-solid fa-right-from-bracket"></i>	
		  <b> Logout</b></a>
        </li>
    </div>
  </div>
</nav>


<div class="container py-5 mt-3">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-md-4">
				<div class="card shadow">
					<div class="card-body text-center">
          <span class="name mt-3"><?php echo $row['name']; ?></span>
		  <div>
          <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
		  </div>

					<form id="generate-form">
						<input type="text" id="input" class="d-block" style="visibility: hidden;" value="<?php echo $row['name']; ?>" />
						<select name="size" id="size" style="display:none;">
							<option value="200" selected>200x200</option>
						</select>
						<button type="submit" id="generate-btn" class="btn btn-primary mb-4">Generate Qrcode</button>
					</form>
					<div id="qrcode" class="mb-2 d-flex justify-content-center "></div>
					<div id="generated"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="./qr-code-generator/js/script.js" ></script>
<script type="text/javascript" src="./qr-code-generator/js/qrcode.min.js"></script>
</body>
</html>