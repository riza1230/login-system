<?php
require_once __DIR__ . './views/includes/header.php';
require_once __DIR__ . './controllers/mailer-verification.php';

    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ./views/welcome.php");
        die();
    }

?>

<style>
    <?php require_once __DIR__ . './public/css/style.css';?>
</style>
<title>Home</title>

<div class="d-flex min-vh-100 align-items-center justify-content-center flex-grow-1">
    <div class="card">
        <div class="card-body">

            
            <?php echo $msg; ?>
            <h2>Login Now</h2>
            <form action="" method="POST">
                <div class="form-outline">
                    <input type="email" class="email" name="email" placeholder="Enter Your Email" autocomplete="username" required>
                </div>
                <input type="password" class="password" name="password" placeholder="Enter Your Password" autocomplete="current-password" required>
                <button name="submit" class="btn btn-primary" type="submit">Login</button>
            </form>

            <div>
            <span>Create Account!</span>
            <a href="./views/register.php">Register</a>
            </div>

            <div>
            <a href="./views/forgot-password.php">Forgot Password?</a>
            </div>
        
        </div>
    </div>
</div>
</body>
</html>