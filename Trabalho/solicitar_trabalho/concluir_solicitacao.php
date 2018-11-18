<?php

require_once '../PHPMailer-6.0.5/src/PHPMailer.php';
require_once '../PHPMailer-6.0.5/src/Exception.php';
require_once '../PHPMailer-6.0.5/src/SMTP.php';
require_once '../PHPMailer-6.0.5/src/POP3.php';
require_once '../PHPMailer-6.0.5/src/OAuth.php';
require_once '../PHPMailer-6.0.5/src/class.phpmailer.php';
require_once '../PHPMailer-6.0.5/src/class.smtp.php';
require_once '../PHPMailer-6.0.5/src/PHPMailerAutoload.php';
include_once '../conectar.php';

$id = $_GET['id'];
$id_profissional = $_GET['id_profissional'];
$sql = "update solicitar_trabalho set id_profissional = $id_profissional, atendido = 2 where id = $id";
mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) > 0) {
    $info_solicitacao = "select * from solicitar_trabalho where id = $id";
    $retorno_informacao = mysqli_query($conexao, $info_solicitacao);
    $resultado_informacao = mysqli_fetch_array($retorno_informacao);
    $id_nome_prof = $resultado_informacao['id_profissional'];
    $voltar_nome_profissional = "select * from usuario where $id_nome_prof";
    $retorno_voltar_nome = mysqli_query($conexao, $voltar_nome_profissional);
    $resultado_voltar_nome = mysqli_fetch_array($retorno_voltar_nome);
    $email_destinatario = $resultado_informacao['email'];
    $nome_usuario = $resultado_informacao['nome'];
    $email = $resultado_informacao['email'];
    $nome_profissional = $resultado_voltar_nome['username'];

    $message = "
    <p>Olá $nome_usuario, seu pedido de trabalho foi passado para concluído por $nome_profissional.</p>";

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
    $mail->Subject = 'Não responda a esse e-mail';
    $mail->Body = $message;
    if (!$mail->send()) {
        $sql = "update solicitar_trabalho set id_profissional = $id_profissional, atendido = 1 where id = $id";
        mysqli_query($conexao, $sql);
        header("Location: ./modal_erro_atender.php?id=$id");
    } else {
        header("Location: ./modal_sucesso_concluir.php");
    }
} else {
    $sql = "update solicitar_trabalho set id_profissional = $id_profissional, atendido = 1 where id = $id";
    mysqli_query($conexao, $sql);
    header("Location: ./modal_erro_concluir.php?id=$id");
}