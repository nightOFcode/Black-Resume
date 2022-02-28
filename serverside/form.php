<?php
/*REQUIRING PHPMAILER*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*COMPOSER AUTOLOAD*/
require 'vendor/autoload.php';

include 'style/email-style.php';

$mail = new PHPMailer();
if (isset($_POST['send'])) {
    /*SENDER INFORMATION POST METHOD*/
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    /*HOST SMTP INFORMATION*/
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'a.h.shirazi1380.20@gmail.com';
    $mail->Password = '09388383405';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    /*GMAIL INFORMATION*/
    /*SENDER*/
    $mail->setFrom($email, $name);
    $mail->addReplyTo($email, $name);
    /*RECEIVER*/
    $mail->addAddress('a.h.shirazi1380.20@gmail.com');

    /*MAIL HTML*/
    $mail->isHTML(true);

    /*MAIL BODY CONTENT*/
    /*MAIL SUBJECT*/
    $subject = 'Black Resume Contact';
    $mail->Subject = $subject;

    /*MAIL BODY*/
    $bodyContent =
        '<div style="color: white;text-align: center;background: #0e0f13;border-radius: 5px">'
        . '<div style="text-align: center;font-size: 25px;margin: 10px;padding: 10px">' . '<b>' . 'Black Resume site'. '</b>' .'</div>'
        . '<div style="text-align: center;font-size: 20px;padding: 10px;margin: 10px;">'
        . 'From' . ':' . ' ' . $name . '</div>'
        . '<div style="text-align: center;padding: 10px;margin: 10px;font-size: 18px;">'
        . $message . ' </div>'
        . '</div>';
    $mail->Body = $bodyContent;


    if (!$mail->send()) {
        echo 'message failed';
    } else {
        echo 'message send';
    }
}
