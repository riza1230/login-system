<?php
require_once __DIR__ . './includes/header.php';
require_once __DIR__ . './../vendor/autoload.php';
require_once __DIR__ . './../controllers/mailer-register.php';

?>
<title>Register</title>
<?php echo $msg; ?>

<div class="container vh-100 mt-3">
	<div class="row d-flex justify-content-center align-items-center h-100">
		<div class="col-md-6">
			<div class="card shadow">
				<div class="card-body p-5">
					<?php require_once __DIR__ . './register/register-form.php' ?>
				</div>
		</div>
	</div>
</div>
