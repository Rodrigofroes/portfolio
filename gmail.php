<?php
header('Content-Type: application/json');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

define("SMTP_HOST", "smtp.gmail.com");
define("SMTP_PORT", 587);
define("SMTP_USER", "rodrigofroesport@gmail.com");
define("SMTP_PASS", "yjdz qfor jvik dojb"); 

require 'vendor/autoload.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    sendEmail($email, $msg, $name);
} else {
    echo json_encode(["ok" => false, "msg" => "Dados incompletos."]);
}

function sendEmail($email, $msg, $name)
{
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->Port = SMTP_PORT;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0; 

  
        $mail->setFrom('rodrigofroesport@gmail.com', 'Rodrigo Oliveira');
        $mail->addAddress('rodrigofroesport@gmail.com', $name); 

        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de contato';
        $mensagem = 'Olá, você recebeu uma mensagem de contato de: ' . $name . '<br><br> Mensagem: ' . $msg . '<br><br> Email: ' . $email;
        $mail->Body = $mensagem;

        if ($mail->send()) {
            echo json_encode(["ok" => true, "msg" => "Mensagem enviada com sucesso!"]);
        } else {
            echo json_encode(["ok" => false, "msg" => "Erro ao enviar a mensagem."]);
        }
    } catch (Exception $e) {
        echo json_encode(["ok" => false, "msg" => "Erro ao enviar mensagem: " . $mail->ErrorInfo]);
    }
}
?>
