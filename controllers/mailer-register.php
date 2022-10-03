<?php 
$msg = "";



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
        $msg = "<div>{$email} - This email address has been already exists.</div>";
    }
    else
    {
        if ($password === $confirm_password)
        {
            $sql = "INSERT INTO users (name, email, password, code) VALUES ('{$name}', '{$email}', '{$password}', '{$code}')";
            $result = mysqli_query($conn, $sql);

            if ($result)
            {
                $body = '<a href="http://localhost/login-system/?verification=' . $code . '">Click this link to verify</a>';
                require_once __DIR__ . './mailer.php';

                $msg = "<div>We've send a verification link on your email address.</div>";
                header("Location: ./../views/validate.php");
                


            }
            else
            {
                $msg = "<div>Something wrong went.</div>";
            }
        }
        else
        {
            $msg = "<div>Password do not match</div>";
        }
    }
}