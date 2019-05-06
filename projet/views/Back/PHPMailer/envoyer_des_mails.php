<?php
 
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

                       $email=htmlspecialchars(urldecode($_GET['subject']));

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
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;

$mail->SMTPSecure = 'tls';


$mail->SMTPAuth = true;

$mail->Username = "soukehw@gmail.com";

$mail->Password = "Bigboss2007";

$bodycontent = '<html>
<body>
        <div align="center">
            <img src="http://www.keejob.com/media/recruiter/recruiter_6816/logo-6816-20170406-140228.jpg"/>
            <br />
            <a href="http://localhost/admin-panel/super_accueil.php?email='.$_GET['subject'].'&confirmkey='.$_GET['key'].'">confirmer votre compte</a>
            <br />
            <img src="http://www.primfx.com/mailing/separation.png"/>
        </div>
     </body></html>';
$mail->setFrom('gajanand.kgn@gmail.com', 'Stint');
 $mail->addReplyTo( $email , 'Stint');

$mail->addAddress($email, 'Gajanand Rathor');
 $mail->Subject = 'RESET';

$mail->Body = $bodycontent;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
        header('location:../super_accueil.php');
     
  
}

