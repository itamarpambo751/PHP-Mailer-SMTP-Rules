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
