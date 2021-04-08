<?php
require_once __DIR__.'/vendor/autoload.php';
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);
 
try {
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->SMTPSecure = '';
	$mail->Host = '';
	$mail->SMTPAuth = true;
	$mail->Username = 'seucontato@provider.com.br';
	$mail->Password = 'senha';
	$mail->Port = 465;
 
	$mail->setFrom('seucontato@provider.com.br');
	$mail->addAddress('seucontato@provider.com.br');
 
	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via via PHP mailer funcionou';
	$mail->Body = 'Chegou o email teste do <strong>PHP MAILER</strong>';
	$mail->AltBody = 'Chegou o email teste do PHPMAILER';
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}