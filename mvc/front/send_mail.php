<?php 
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 //echo smtp_mailer('princekanzariya15@gmail.com','Email Verification','Hello');
// function smtp_mailer($to,$subject,$msg){
//include PHPMailer classes to your PHP file for sending email
require_once __DIR__ . '/src/Exception.php';
require_once __DIR__ . '/src/PHPMailer.php';
require_once __DIR__ . '/src/SMTP.php';
 
// Create an object of the PHPMailer class. Passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);
 
try {
    // Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // You can enable this for detailed debug output
   // $mail->SMTPDebug = 2;
   
    $mail->isSMTP();
    $mail->Host ="smtp.gmail.com";
    $mail->SMTPAuth = true;
   // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail ->SMTPSecure ='tls';
    $mail->Port = '587';  // This is fixed port for gmail SMTP
    
    
    $config_email = 'princekanzariya15@gmail.com';
    $mail->Username = 'princekanzariya15@gmail.com'; // YOUR gmail email which will be used as sender and PHPMailer configuration 
    $mail->Password = 'Prince@15';   // YOUR gmail password for above account
 
    // Sender and recipient settings
    $mail->setFrom($config_email, '');  // This email address and name will be visible as sender of email
    
 
    $mail->addAddress($config_email, '');  // This email is where you want to send the email
    $mail->addReplyTo($config_email, 'Sender name');   // If receiver replies to the email, it will be sent to this email address
 
   // Setting the email content
    $mail->IsHTML(true);  // You can set it to false if you want to send raw text in the body
    $mail->Subject = 'subject line of email';       //subject line of email
    $mail->Body = 'Email body';   //Email body
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';   //Alternate body of email

    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
 
?>
