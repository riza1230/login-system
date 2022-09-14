<?php
require_once __DIR__ . './includes/header.php';
require_once __DIR__ . './../vendor/autoload.php';
require_once __DIR__ . './../controllers/mailer-register.php';

?>


<title>Register</title>
<h2>Register Now</h2>
<?php echo $msg; ?>

<form action="" method="post">
	<input type="text" class="name" name="name" placeholder="Enter Your Name" value="<?php if (isset($_POST['submit'])){ echo $name;} ?>" required>
	<input type="email" class="email" name="email" placeholder="Enter Your Email" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" required>
	<input type="password" class="password" name="password" placeholder="Enter Your Password" required>
	<input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Confirm Password" required>
	<button name="submit" class="btn" type="submit">Register</button>
</form>
<div>
	Have an account! <a href="./../index.php">Login</a>
</div>
</body>
</html>