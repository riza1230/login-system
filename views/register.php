<?php
require_once __DIR__ . './includes/header.php';
require_once __DIR__ . './../vendor/autoload.php';
require_once __DIR__ . './../controllers/mailer-register.php';

?>

<?php echo $msg; ?>

<div class="container d-flex min-vh-100 align-items-center justify-content-center flex-grow-1">
<title>Register</title>
<div class="card mt-2 text-center">
	<div class="card-body">
	<h2 class="text-center">Register Now</h2>
	<form action="" class="row p-4 g-3" method="post">
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="name" placeholder="Enter Firstname" value="<?php if (isset($_POST['submit'])){ echo $name;} ?>" required>
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="middlename" placeholder="Enter Middlename">
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="lastname" placeholder="Enter Lastname">
	<input type="date" class="col-md-3 py-2 mt-4 mr-2 " name="birthday" id="" placeholder="birthday">

	<select name="sex" class="col-md-3 py-2 mt-4 mr-2 " id="">
		<option value="male">male</option>
		<option value="female">female</option>
	</select>
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="ethnicity" autocomplete="off" placeholder="Enter Ethnicity">
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="religion" autocomplete="off" placeholder="Enter Religion">
	<input type="email" class="col-md-3 py-2 mt-4 mr-2 " name="email" placeholder="Enter Your Email" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" required>
	<input type="number" class="col-md-3 py-2 mt-4 mr-2 " name="number" autocomplete="off" placeholder="Enter Your ID">
	<input type="number" class="col-md-3 py-2 mt-4 mr-2 " name="mobile-number" autocomplete="off" placeholder="Enter Your Mobile Number">
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="Street" autocomplete="off" placeholder="Street Name">
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="Barangay" autocomplete="off" placeholder="Barangay Name">
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="city" autocomplete="off" placeholder="City Name">
	<input type="text" class="col-md-3 py-2 mt-4 mr-2 " name="Province" autocomplete="off" placeholder="Province Name">
	<input type="password" class="col-md-3 py-2 mt-4 mr-2 " name="password" placeholder="Enter Your Password" required>
	<input type="password" class="col-md-3 py-2 mt-4 mr-2 " name="confirm-password" placeholder="Enter Your Confirm Password" required>
	<button name="submit" class="btn btn-primary mt-4 col-md-4 mx-auto" type="submit">Register</button>
</form>
<div>
	Have an account! <a href="./../index.php">Login</a>
</div>
	</div>
</div>
	
</div>
</body>
</html>