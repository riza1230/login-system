<?php

require_once __DIR__ . './includes/header.php';
require_once __DIR__ . './../controllers/mailer-forgot-password.php';

if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: welcome.php");
    die();
}
    
?>


<title>Forgot Password</title>

<div class="container">
    <h2>Forgot Password</h2>
    <?php echo $msg; ?>

    <form action="" method="post">
        <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
        <button name="submit" class="btn" type="submit">Send Reset Link</button>
    </form>

    <div>
        Back to! <a href="./../index.php">Login</a>
    </div>
</div>

</body>
</html>