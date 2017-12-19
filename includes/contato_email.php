<?php
//-----------------------------------------------------------------------------//
//@Author: Marcos Vinicios de Carvalho										   //
//@date: 2017-12-19															   //
//@Description: Formulário de contato (Site pessoal)                           //
//-----------------------------------------------------------------------------//

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');
$nome_cliente  	 =  $_POST["client_name"];
$tel_cliente	 =  $_POST["client_phone"];
$email_cliente 	 = 	$_POST["client_email"];
$assunto_cliente = 	$_POST["client_subject"];
$mensagem		 =  $_POST["client_message"];

$mailer = new PHPMailer();
$mailer->CharSet = 'UTF-8';
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->SMTPSecure = "tls";
$mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
$mailer->Host = 'smtp.live.com';//Endereço do Host do SMTP outlook
$mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP
$mailer->Username = 'marcos.vini.carvalho@hotmail.com'; //Login de autenticação do SMTP
$mailer->Password = 'SuaSenhaAqui'; //Senha de autenticação do SMTP
$mailer->FromName = 'Contato - Site'; //Nome que será exibido para o destinatário
$mailer->From = 'marcos.vini.carvalho@hotmail.com'; //Obrigatório ser a mesma caixa postal configurada no remetente do SMTP
$mailer->AddAddress('marcos.vini.carvalho@hotmail.com','Marcos Carvalho');//Destinatários
$mailer->Subject = 'Contato - Site';//titulo
$mailer->Body = 'Nome:  '.$nome_cliente.'.'.PHP_EOL;//texto
$mailer->Body.= 'Telefone:  '.$tel_cliente.'.'.PHP_EOL;//texto
$mailer->Body.= 'E-mail de contato: '.$email_cliente.PHP_EOL;//texto
$mailer->Body.= 'Assunto: '.$assunto_cliente.PHP_EOL;//texto
$mailer->Body.= 'Mensagem: '.$mensagem.PHP_EOL;//texto

if(!$mailer->Send())
{
	echo "Message was not sent";
	echo "Mailer Error: " . $mailer->ErrorInfo; exit; 
}
print "E-mail enviado!"
?>