<?php
require_once __DIR__ . './includes/header.php';
require_once __DIR__ . './../vendor/autoload.php';
require_once __DIR__ . './../controllers/mailer-register.php';

?>

<link rel="stylesheet" href="./../public/css/style.css">

<title>Register</title>
<h2>Register Now</h2>
<?php echo $msg; ?>

<form action="" method="post">
	<input type="text" class="name" name="name" placeholder="Enter Firstname" value="<?php if (isset($_POST['submit'])){ echo $name;} ?>" required>
	<input type="text" name="middlename" placeholder="Enter Middlename">
	<input type="text" name="lastname" placeholder="Enter Lastname">
	<input type="date" name="birthday" id="" placeholder="birthday">
	<input type="email" class="email" name="email" placeholder="Enter Your Email" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" required>
	<input type="number" name="number" autocomplete="off" placeholder="Enter Your ID">
	<input type="number" name="mobile-number" autocomplete="off" placeholder="Enter Your Mobile Number">
	<input type="text" name="Street" autocomplete="off" placeholder="Street Name">
	<input type="text" name="Barangay" autocomplete="off" placeholder="Barangay Name">
	<input type="text" name="city" autocomplete="off" placeholder="City Name">
	<input type="text" name="Province" autocomplete="off" placeholder="Province Name">
	<input type="password" class="password" name="password" placeholder="Enter Your Password" required>
	<input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Confirm Password" required>
	<button name="submit" class="btn" type="submit">Register</button>
</form>
<div>
	Have an account! <a href="./../index.php">Login</a>
</div>
</body>
</html>