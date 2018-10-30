<?php

$message = "
<h3>Olá $nome,seu cadastro foi concluído</h3><br/>
    <p><b>Username: $username</b></p>
    <p><b>Nome: $nome</b></p>
    <p><b>Idade: $idade</b></p>
    <p><b>Rua: $rua</b></p>
    <p><b>Bairro: $bairro</b></p>
    <p><b>Numero: $numero</b></p>
    <p><b>Complemento: $complemento</b></p>
    <p><b>Cidade: $cidade</b></p>
    <p><b>Estado: $estado</b></p>
    <p><b>E-mail: $email</b></p>
    <p><b>Telefone: $telefone</b></p>
    <p><b>RG: $rg</b></p>
    <p><b>CPF: $cpf</b></p>
";


$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sistemacandidatoempresa@gmail.com';
$mail->Password = 'candidato123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = 'sistemacandidatoempresa@gmail.com';
$mail->FromName = 'Sistema do candidato';

$mail->addAddress($email, $nome);
$mail->Subject = 'Sistema de candidato';

$mail->Body = $message;

if ($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;
