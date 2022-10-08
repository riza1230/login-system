<?php 
    require_once "./../includes/header.php";
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
    $row = mysqli_fetch_assoc($query);
?>


<a href="./../logout.php">Logout</a>

<div class="container d-flex min-vh-100 align-items-center justify-content-center">
  <div class="card text-center p-3">
    <div class="card-body ">
      <div class=" d-flex flex-column justify-content-center align-items-center">
        <button class="btn btn-secondary">
          <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
        </button>
        <span class="name mt-3"><?php echo $row['name']; ?></span>
        <span class="idd"><?php echo $row['email']; ?></span>
        <div class="d-flex flex-row justify-content-center align-items-center gap-2">
          <span class="idd1"><?php echo $row['id']; ?></span>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center ">
          <span class="number">1069 <span class="follow">Followers</span>
          </span>
        </div>
        <div class=" d-flex mt-2">
          <button class="btn1 btn-dark">Edit Profile</button>
        </div>
            <form id="generate-form">
              <input type="text" id="input" class="d-block" style="visibility: hidden;" value="<?php echo $row['name']; ?>" />
              <select name="size" id="size" style="display:none;">
                <option value="200" selected>200x200</option>
              </select>
              <button type="submit" id="generate-btn" class="mb-2">Generate Qrcode</button>
            </form>
          <div id="qrcode" class="mb-2"></div>
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