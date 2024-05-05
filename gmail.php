<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

define("SMTP_HOST", "smtp.gmail.com");
define("SMTP_PORT", 587);
define("SMTP_USER", "rodrigofroesport@gmail.com");
define("SMTP_PASS", "yjdz qfor jvik dojb");

require 'vendor/autoload.php';

function sendEmail($email, $msg, $name)
{
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->Port = SMTP_PORT;
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0;

        $mail->setFrom('rodrigofroesport@gmail.com', 'Rodrio Oliveira');
        $mail->addAddress('rodrigofroesport@gmail.com', $name);

        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de contato';
        $mensagem = 'Olá, você recebeu uma mensagem de contato de: ' . $name . '<br><br> Mensagem: ' . $msg . '<br><br> Email: ' . $email;
        $mail->Body = $mensagem;

        $mail->send();
        echo "<script>alert('Enviado com sucesso!')</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
    }
}
?>