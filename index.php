<?php
require_once __DIR__ . './config/config.php';
session_start();

if (isset($_SESSION['SESSION_EMAIL']))
{
    header("Location: welcome.php");
    die();
}

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
            $msg = "<div class='alert alert-info'>Verify your account first and try again.</div>";
        }

    }
    else
    {	
        $msg = "<div class='alet alert-danger'>Email or Password do not match</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Login</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="./public/css/style.css">
	</head>

	<body>
		<div class="container">
			<h2>Login Now</h2>
			<?php echo $msg; ?>

			<form action="" method="POST">
				<input type="email" class="email" name="email" placeholder="Enter Your Email" autocomplete="username" required>
				<input type="password" class="password" name="password" placeholder="Enter Your Password" autocomplete="current-password" required>
				<button name="submit" name="submit" class="btn" type="submit">Login</button>
			</form>
				
				<div>
					Create Account! 
					<a href="./views/register.php">Register</a>
				</div>

				<div>
					<a href="./views/forgot-password.php">Forgot Password?</a>
				</div>
		</div>
	</body>
</html>