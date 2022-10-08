<?php 
    require_once "./../includes/header.php";
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
    $row = mysqli_fetch_assoc($query);


?>
<a href="./../logout.php">Logout</a>


<div class="container d-flex min-vh-100 align-items-center justify-content-center ">
  <div class="card text-center ">
    <div class="card-body ">
      <div class=" d-flex flex-column justify-content-center align-items-center">
        <button class="btn btn-secondary">
          <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
        </button>
        <span class="name mt-3"><?php echo $row['name']; ?></span>
        <span class="idd"><?php echo $row['email']; ?></span>
        <div class="d-flex flex-row justify-content-center align-items-center gap-2">
          <span class="idd1"><?php echo $row['id']; ?></span>
          <span>
            <i class="fa fa-copy"></i>
          </span>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center mt-3">
          <span class="number">1069 <span class="follow">Followers</span>
          </span>
        </div>
        <div class=" d-flex mt-2">
          <button class="btn1 btn-dark">Edit Profile</button>
        </div>
        <div class="text mt-3">
          <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork. <br>
            <br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>