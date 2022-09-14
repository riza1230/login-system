<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	

	function sendEmail($to, $toName, $subj, $msg) {
		$mail = new PHPMailer(true);
		try {
	    //Server settings
	    $mail->isSMTP();
	    $mail->Host       = SMTP_HOST;
	    $mail->SMTPAuth   = TRUE;
	    $mail->Username   = SMTP_USERNAME;
	    $mail->Password   = SMTP_PASSWORD;
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	    $mail->Port       = SMTP_PORT;

	    //Recipients
	    $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
	    $mail->addAddress($to, $toName);

	    // Content
	    $mail->Subject = $subj;
	    $mail->Body = $msg;
		$mail->IsHTML(true);

	    $mail->send();
	    return true;
		} 
		catch(Exception $e) {
			return false;
		}
	}


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




                    
                    
                    