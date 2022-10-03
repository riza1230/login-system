<?php
    require_once __DIR__ . './views/includes/header.php';
    require_once __DIR__ . './controllers/mailer-verification.php';
    if (isset($_SESSION['SESSION_EMAIL'])) 
    { 
        header("Location: ./views/welcome.php"); die();
    }
?>


<title>Home</title>

<?php echo $msg; ?>
<div class="container d-flex min-vh-100 align-items-center justify-content-center flex-grow-1">
    <div class="card text-center ">
        <div class="card-body ">

            <h3 class="">Login Now</h3>

            <form action="" method="POST" class="p-1">
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="username" required>
                <input type="password" class="form-control mt-3" name="password" placeholder="Enter Your Password" autocomplete="current-password" required>
                <button name="submit" class="btn btn-primary mt-3" type="submit"><strong>Login</strong></button>

            </form>

            <span class="">Create Account!</span>
            <a href="./views/register.php">Register</a>
            <a href="./views/forgot-password.php" class="d-block">Forgot Password?</a>

        </div>
    </div>
</div>
</body>
</html>