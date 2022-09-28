<?php  
    $msg = "";

    if (isset($_GET['verification']))
    {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM  users  WHERE code='{$_GET['verification']}'")) > 0);
        $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");

        if ($query)
        {
            $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
        }
        else
        {
            header("Location:index.php");
        }
    }

    if (isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));

        $sql = "SELECT * FROM users WHERE email ='{$email}' AND password='{$password}' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);

            if (empty($row['code']))
            {
                $_SESSION['SESSION_EMAIL'] = $email;
                header("Location: ./views/welcome.php");
            }
            else
            {
                $msg = "<div>Verify your account first and try again.</div>";
            }

        }
        else
        {   
            $msg = "<div>Email or Password do not match</div>";
        }
    }
?>

