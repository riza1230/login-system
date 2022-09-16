<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ .  './../config/config.php';
require_once __DIR__ . './../vendor/autoload.php';

$mail = new PHPMailer(true);

try 
{
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                     
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
    $mail->Body = $body;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

