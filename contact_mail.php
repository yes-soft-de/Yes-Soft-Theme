<?php
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 2;
$mail->SMTPAuth = TRUE;
$mail->SMTPAutoTLS = false;
$mail->SMTPSecure = false;
$mail->Port     = 2525;  
$mail->Username = "agent@yes-soft.de";
$mail->Password = "Agent1234";
$mail->Host     = "smtp.hostinger.com";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["userEmail"], $_POST["userName"]);
$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress("agent@yes-soft.de");	
$mail->Subject = $_POST["subject"];
$mail->WordWrap   = 80;
$mail->MsgHTML($_POST["content"]);

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Contact Mail Sent.</p>";
}	
?>