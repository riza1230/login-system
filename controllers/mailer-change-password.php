<?php  
$msg = "";
if (isset($_GET['reset']))
{
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['reset']}'")) > 0)
    {
        if (isset($_POST['submit']))
        {
            $password = mysqli_real_escape_string($conn, md5($_POST['password']));
            $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

            if ($password === $confirm_password)
            {
                $query = mysqli_query($conn, "UPDATE users SET password='{$password}', code='' WHERE code='{$_GET['reset']}'");

                if ($query)
                {
                    header("Location: ./../index.php");
                }
            }
            else
            {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
            }
        }
    }
    else
    {
        $msg = "<div class='alert alert-danger'>Reset Link do not match.</div>";
    }
}
else
{
    header("Location: forgot-password.php");
}