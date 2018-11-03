<?php

require_once '../PHPMailer-6.0.5/src/PHPMailer.php';
require_once '../PHPMailer-6.0.5/src/Exception.php';
require_once '../PHPMailer-6.0.5/src/SMTP.php';
require_once '../PHPMailer-6.0.5/src/POP3.php';
require_once '../PHPMailer-6.0.5/src/OAuth.php';
require_once '../PHPMailer-6.0.5/src/class.phpmailer.php';
require_once '../PHPMailer-6.0.5/src/class.smtp.php';
require_once '../PHPMailer-6.0.5/src/PHPMailerAutoload.php';

$nome_admin = $_POST['nome_admin'];
$email_destinatario = 'siccsistema@gmail.com';
$nome_usuario = $_POST['nome'];
$senha_usuario = $_POST['senha'];
$email = $_POST['email'];
$descricao = $_POST['descricao'];

$message = "
    <p><b>Nome: $nome_usuario</b></p>
    <p><b>E-mail: $email</b></p>
    <p><b>Mensagem: $descricao</b></p>
";

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = TRUE;
$mail->SMTPDebug = 1;
$mail->SMTPAutoTLS = FALSE;
$mail->SMTPSecure = 'ssl';
$mail->Username = 'siccsistema@gmail.com';
$mail->Password = 'sicc12345';
$mail->Port = 465;
$mail->addAddress($email_destinatario, $nome_usuario);
$mail->setFrom($email_destinatario);
$mail->addReplyTo($email);
$mail->isHTML();
$mail->Subject = 'Sistema de contato com o administrador';
$mail->Body = $message;
if (!$mail->send()) {
    header('Location: modal_erro.php');
} else {
    header('Location: modal_sucesso.php');
}