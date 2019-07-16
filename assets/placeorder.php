<?php
ob_start();

require_once "PHPMailerAutoload.php";

$mail = new PHPMailer;
// $mail->From = "darshandjey@gmail.com";
//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "sg2plcpnl0095.prod.sin2.secureserver.net";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "noreply@ishwarii.com";
$mail->Password = "varun@123";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "noreply@ishwarii.com";
$mail->FromName = "Ishwarii";

$mail->addAddress("shubhsinghss@gmail.com", "Recepient Name");

$mail->isHTML(true);

$mail->Subject = "Order Placed";
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
$mail->AltBody = "Something went wrong";

if(!$mail->send())
{
    header("Location: ../checkout.php");
}
else
{
    header("Location: ../success.php");
}
?>
