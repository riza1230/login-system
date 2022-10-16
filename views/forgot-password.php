<?php
require_once __DIR__ . './includes/header.php';
require_once __DIR__ . './../controllers/mailer-forgot-password.php';
if (isset($_SESSION['SESSION_EMAIL'])) 
{
    header("Location: welcome.php");
    die();
}
?>


<title>Forgot Password</title>
            <?php echo $msg; ?>

<div class="container d-flex min-vh-100 align-items-center justify-content-center flex-grow-1 ">
    <div class="card text-center h-100 p-4 ">
        <div class="card-body">
             <h3> <b> Forgot Password</b></h3>

            <form action="" method="POST" class="   ">
               <input type="email" class="form-control mt-3" name="email" placeholder="Enter Your Email" required>
               <button name="submit" class="btn btn-primary mt-3 mb-3 " type="submit"><strong>Send Reset Link</strong> </button>
            </form>
            Back to <a href="./../index.php"><u>Login</u> </a>

        </div>
    </div>
</div>

</body>
</html>