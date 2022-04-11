<?php
session_start();

/*REQUIRING PHPMAILER*/

use PHPMailer\PHPMailer\PHPMailer;

/*COMPOSER AUTOLOAD*/
require 'vendor/autoload.php';

$errors = [];
$response = [];

$mail = new PHPMailer();
if (isset($_POST['send'])) {
    /*SENDER INFORMATION POST METHOD*/
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    /*CAPTCHA VALIDATION*/
    if (isset($_POST['g-recaptcha-response'])) {
        /*GOOGLE SECRET API*/
        $secretAPIkey = 'your secret key';
        /*RECAPTCHA VERIFICATION RESPONCE*/
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretAPIkey . '&response=' . $_POST['g-recaptcha-response']);
        /*DECODE RESPONCE DATA (JSON)*/
        $responce = json_decode($verifyResponse);
        if ($responce->success) {

            /*HOST SMTP INFORMATION*/
            $mail->isSMTP();
            /*smtp host*/
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your gmail';
            $mail->Password = 'your smtp or gmail password';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            /*GMAIL INFORMATION*/
            /*SENDER*/
            $mail->setFrom($email, $name);
            $mail->addReplyTo($email, $name);
            /*RECEIVER*/
            $mail->addAddress('your gmail');

            /*MAIL HTML*/
            $mail->isHTML(true);

            /*MAIL BODY CONTENT*/
            /*MAIL SUBJECT*/
            $subject = 'Black Resume Contact';
            $mail->Subject = $subject;

            /*MAIL BODY*/
            $bodyContent =
                '<div style="color: white;text-align: center;background: #0e0f13;border-radius: 5px">'
                . '<div style="text-align: center;font-size: 25px;margin: 10px;padding: 10px">' . '<b>' . 'Black Resume site' . '</b>' . '</div>'
                . '<div style="text-align: center;font-size: 20px;padding: 10px;margin: 10px;">'
                . 'From' . ':' . ' ' . $name . '</div>'
                . '<div style="text-align: center;padding: 10px;margin: 10px;font-size: 18px;">'
                . $message . ' </div>'
                . '</div>';
            $mail->Body = $bodyContent;

            /*MESSAGE SEND FAILED*/
            if (!$mail->send()) {
                $_SESSION['error'] = "Sending Email Failed!";
            } else {
                $_SESSION['success'] = "Thanks For Contacting Us";
            }
            /*RECAPTCHA FAILED*/
        } else {
            $_SESSION['error'] = "Captcha Failed!";
        }
    }
}