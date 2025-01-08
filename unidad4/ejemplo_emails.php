<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendVerificationEmail($email, $verificationCode) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'live.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'a96da40ebfa5be9fbc62fb629fbae586';
        $mail->Password = 'aa815e39f627c163d11eff546ae435e5';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('pablogalvil53@gmail.com', 'Your Website');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'Email Verification';
        $mail->Body    = "Your verification code is: $verificationCode";

        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Algo ha fallado";
        var_dump($e);
        return false;
    }
}
?>