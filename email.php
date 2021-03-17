<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'shofiamumtazah16@gmail.com';
$mail->Password = 'malaysia2020';
$mail->SetFrom('no-reply@speakup.org');
$mail->Subject = 'Hello Opi';
$mail->Body = 'Test Mail';
$mail->AddAddress('squishyfluffy11@gmail.com');

$mail->Send();

 ?>
