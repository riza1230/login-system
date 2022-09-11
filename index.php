<?php
session_start();
require_once __DIR__ . './views/includes/header.php';
require_once __DIR__ . './controllers/mailer-verification.php';

if (isset($_SESSION['SESSION_EMAIL']))
{
    header("Location: ./views/welcome.php");
    die();
}
?>


<title>Home</title>
<div class="container">
    <?php echo $msg; ?>
    <h2>Login Now</h2>
    <form action="" method="POST">
        <input type="email" class="email" name="email" placeholder="Enter Your Email" autocomplete="username" required>
        <input type="password" class="password" name="password" placeholder="Enter Your Password" autocomplete="current-password" required>
        <button name="submit" class="btn" type="submit">Login</button>
    </form>
    
    <div>
        <span>Create Account!</span>
        <a href="./views/register.php">Register</a>
    </div>
    <div>
        <a href="./views/forgot-password.php">Forgot Password?</a>
    </div>
</div>
</body>
</html>