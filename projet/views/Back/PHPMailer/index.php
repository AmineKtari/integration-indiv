
<?php
 
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


                       $email=htmlspecialchars(urldecode($_GET['subject']));
                       $sujet=htmlspecialchars(urldecode($_GET['sujet']));
                       $bodycontent=htmlspecialchars(urldecode($_GET['msg']));

$mail = new PHPMailer;
 

$mail->isSMTP();
$mail->IsHTML(true);
$mail->CharSet = "utf-8";

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Set the hostname of the mail server
$mail->Host = 'ssl://smtp.gmail.com:465';
$mail->Port = 587;

$mail->SMTPSecure = 'tls';


$mail->SMTPAuth = true;

$mail->Username = "mahdijarraya4@gmail.com";

$mail->Password = "tavolata1";

$mail->setFrom('mahdijarraya4@gmail.com', 'Kalthita');
// $mail->addReplyTo( "mahmoud.chebil@esprit.tn" , 'Stint');

$mail->addAddress($email, 'Gajanand Rathor');
 $mail->Subject = $sujet;

$mail->Body = $bodycontent;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
       
     
  
}

