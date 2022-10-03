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
    <div class="card text-center ">
        <div class="card-body">

             <h2>Forgot Password</h2>


            <form action="" method="POST" class="p-1">
               <input type="email" class="form-control mt-3" name="email" placeholder="Enter Your Email" required>
               <button name="submit" class="btn btn-primary mt-3 mb-3 " type="submit">Send Reset Link</button>
            </form>
            Back to! <a href="./../index.php">Login</a>

        </div>
    </div>
</div>

</body>
</html>