<?php
$content = $_POST;
$email_to = 'vpsingh6666@gmail.com';
$subject = 'Simple Cart Order';

$email_from = "noreply@ishwarii.com"; // Enter Sender Email
$sender_name = "Ishwarii"; // Enter Sender Name
require("./PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.ishwarii.com"; // Enter Your Host/Mail Server
$mail->SMTPAuth = true;
$mail->Username = "noreply@ishwarii.com"; // Enter Sender Email
$mail->Password = "varun@123";
//If SMTP requires TLS encryption then remove comment from below
//$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = $email_from;
$mail->FromName = $sender_name;
$mail->Sender = $email_from; // indicates ReturnPath header
$mail->AddReplyTo($email_from, "No Reply"); // indicates ReplyTo headers
$mail->Subject = $subject;
$content = $_POST;
$body = '';
for($i=1; $i < $content['itemCount'] + 1; $i++) {
  $name = 'item_name_'.$i;
  $quantity =  'item_quantity_'.$i;
  $price = 'item_price_'.$i;
  $body .= 'item #'.$i.': ';
  $body .= $content[$name].' '.$content[$quantity].' '.$content[$price];
  $body .= '<br>';
}
$mail->Body = $body;
$mail->AddAddress($email_to);
// If you know receiver name use following
//$mail->AddAddress($email_to, "Recepient Name");
// To send CC remove comment from below
//$mail->AddCC('username@email.com', "Recepient Name");
// To send attachment remove comment from below
//$mail->AddAttachment('files/readme.txt');
/*
Please note file must be available on your
host to be attached with this email.
*/

if (!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
    echo "<div style='color:#FF0000; font-size:20px; font-weight:bold;'>
    An email has been sent to your email address.</div>";
}
?>
