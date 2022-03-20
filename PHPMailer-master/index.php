<?php
exit();
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'webmail.balmerlawrie.in';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'balmerlawrie\enquiryve';                 // SMTP username
$mail->Password = 'Outlook@2013';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                     // TCP port to connect to 


$mail->setFrom('enquiryve@balmerlawrie.in', 'Balmerlawrie');
//$mail->addAddress('fionna.xavier@vacationsexotica.com', 'Fionna');     // Add a recipient
$mail->addAddress('Mail.admin@balmerlawrie.in', 'Mail Admin');     // Add a recipient 

#$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('damini@runtime-solutions.com', 'Damini');
$mail->addCC('damini@runtime-solutions.com');
$mail->addBCC('juned@runtime-solutions.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'SMTP test mail';
$mail->Body    = 'This is SMTP test mail.';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}