<?php

session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: welcome.php");
    die();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ .  './../config/config.php';
require_once __DIR__ . './../vendor/autoload.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE users SET code='{$code}' WHERE email='{$email}'");

        if ($query) {        
            echo "<div style='display: none;'>";
            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
                $mail->isSMTP();                                           
                $mail->Host       = 'smtp.gmail.com';                     
                $mail->SMTPAuth   = true;                                  
                $mail->Username   = 'mdvh28@gmail.com';                    
                $mail->Password   = 'lwtmegvsvdvafuds';                              
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
                $mail->Port       = 465;                                   

                $mail->setFrom('mdvh28@gmail.com');
                $mail->addAddress($email);

                $mail->isHTML(true);                                 
                $mail->Subject = 'no reply';
                $mail->Body    = 'Here is the verification link <b><a href="http://localhost/com/change-password.php?reset='.$code.'">http://localhost/login/change-password.php?reset='.$code.'</a></b>';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "</div>";        
            $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>$email - This email address do not found.</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../public/css/style.css" type="text/css" media="all" />
</head>

<body>
   
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