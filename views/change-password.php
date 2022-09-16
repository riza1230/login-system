<?php

require_once __DIR__ . './includes/header.php';
require_once __DIR__ . './../controllers/mailer-change-password.php';

?>


<h2>Change Password</h2>
<?php echo $msg; ?>

<form action="" method="post">
    <input type="password" class="password" name="password" patterns="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" placeholder="Enter Your Password" required>
    <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Confirm Password" required>
    <button name="submit" class="btn" type="submit">Change Password</button>
</form>

<div class="social-icons">
    <p>Back to! <a href="index.php">Login</a>.</p>
</div>


</body>
</html>