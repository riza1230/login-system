<?php 
$msg = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_SESSION['SESSION_EMAIL']))
{
    header("Location: welcome.php");
    die();
}

if (isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0)
    {
        $msg = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
    }
    else
    {
        if ($password === $confirm_password)
        {
            $sql = "INSERT INTO users (name, email, password, code) VALUES ('{$name}', '{$email}', '{$password}', '{$code}')";
            $result = mysqli_query($conn, $sql);

            if ($result)
            {
                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try
                {
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
                    $mail->isSMTP(); 
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'mdvh28@gmail.com'; 
                    $mail->Password = 'lwtmegvsvdvafuds'; 
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port = 465; 
                    $mail->setFrom('mdvh28@gmail.com');
                    $mail->addAddress($email);
                    $mail->isHTML(true); 
                    $mail->Subject = 'no reply';
                    $mail->Body = 
    				'<a href="http://localhost/login-system/?verification=' . $code . '">Click this link to verify</a>';

                    $mail->send();
                    echo 'Message has been sent';
                }
                catch(Exception $e)
                {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";
                $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
            }
            else
            {
                $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
            }
        }
        else
        {
            $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
        }
    }
}