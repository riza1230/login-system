<h1 class="text-center"><b> Sign Up</b></h1>
<form action="" method="post">
    <div><b><h2>Name</h2></b></div>
    <input type="text" class="form-control mb-4" name="name" placeholder="First Name" value="<?php if (isset($_POST['submit'])){ echo $name;} ?>" required>
    <input type="text" class="form-control mb-4" name="middlename" placeholder="Middle Name" value="<?php if (isset($_POST['submit'])){ echo $middlename;} ?>" required>
    <input type="text" class="form-control mb-3" name="lastname" placeholder="Last Name" value="<?php if (isset($_POST['submit'])){ echo $lastname;} ?>" required>
    <label for="" style="color:#6c757d;">Suffix</label>
    <select name="suffix" class="form-control mb-5">
    <option  selected  >N/A </option>
    <option value="">Senior</option>
    <option value="">Junior</option>
    <option value="">III</option>
    <option value="">IV</option>
    <option value="">V</option>
    </select>

    <div><b><h2>Personal Information</h2></b></div>
    <input type="text"  class="form-control mb-4" placeholder="Birthday"  onfocusin="(this.type='date')">
    <input type="number" class="no-spin form-control mb-4" name="schoolID" placeholder="Student ID" value="<?php if (isset($_POST['submit'])){ echo $schoolID;} ?>" required>
    <input type="email" class="form-control mb-4" name="email" placeholder="Email" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" required>
    <input type="text" class="form-control mb-4" name="ethnicity" placeholder="Ethnicity" value="<?php if (isset($_POST['submit'])){ echo $ethnicity;} ?>" required>
    <input type="text" class="form-control mb-4" name="nationality" placeholder="Nationality" value="<?php if (isset($_POST['submit'])){ echo $nationality;} ?>" required>
    <label for="" style="color:#6c757d;">Religion</label>
    <select name="religion" class="form-control mb-5" required>
    <option value=" " disabled selected hidden></option>
    <option value="">Roman Catholic</option>
    <option value=" ">Seventh Day Adventist</option>
    <option value=" ">Islam</option>
    <option value=" ">Evangelicals</option>
    <option value=" ">Iglesia ni Cristo</option>
    <option value=" ">Aglipay</option>
    <option value=" ">Bible Baptist Church</option>
    <option value=" ">Jehovah's Witness</option>
    <option value=" ">Buddhist</option>
    <option value=" ">Church of Crist</option>
    <option value=" ">Tribal Religion</option>
    </select>
    <div><b><h2>Address</h2></b></div>
    <input type="text" class="form-control mb-4" name="province" placeholder="Province" value="<?php if (isset($_POST['submit'])){ echo $province;} ?>" required>
    <input type="text" class="form-control mb-4" name="municipality" placeholder="Municipality" value="<?php if (isset($_POST['submit'])){ echo $municipality;} ?>" required>
    <input type="text" class="form-control mb-4" name="barangay" placeholder="Barangay" value="<?php if (isset($_POST['submit'])){ echo $barangay;} ?>" required>
    <input type="text" class="form-control mb-5" name="street" placeholder="Street" value="<?php if (isset($_POST['submit'])){ echo $street;} ?>" required>

    <div><b><h2>School Information</h2></b></div>
    <?php require_once __DIR__ . './register-extension.php' ?>

  
    <div><b><h2>Password</h2></b></div>
    <input type="password" class="form-control mb-4" name="password" placeholder="Password" required>
    <input type="password" class="form-control mb-5" name="confirm-password" placeholder="Confirm Password" required>

    <div class="d-flex justify-content-center">
    <button name="submit" class="btn btn-primary mb-4" type="submit"><strong> Register</strong></button>
    </div>
</form>
<div class="text-center">Already have an account? <a href="./../index.php"><u>Login here</u></a></div>	