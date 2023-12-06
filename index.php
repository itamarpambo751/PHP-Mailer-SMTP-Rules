<?php 
require './PHPMailer-PHPMailer/src/PHPMailer.php';
require './PHPMailer-PHPMailer/src/SMTP.php';
require './PHPMailer-PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Pode lançar exceções
$mail->isSMTP();
$mail->Host = 'smtp.seudominio.com';
$mail->SMTPAuth = true;
$mail->Username = 'seu_email@seudominio.com';
$mail->Password = 'sua_senha';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->setFrom('seu_email@gmail.com', 'Seu Nome');
$mail->addAddress('destinatario@gmail.com', 'Nome do Destinatário');

$mail->Subject = 'Assunto do Email';
$mail->Body    = 'Conteúdo do Email em HTML ou texto simples';

try {
    $mail->send();
    echo 'Email enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar o email: {$mail->ErrorInfo}";
}
