<?php
// Include the PHPMailer class and any necessary files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                         // Set the SMTP server to Gmail
    $mail->SMTPAuth   = true;                                     // Enable SMTP authentication
    $mail->addAddress('valid-recipient@example.com', 'Recipient Name');
    $mail->Username   = 'erheme80@gmail.com';                   // Your Gmail address
    $mail->Password   = 'zuqn yosr bxqc gmtm';                      // Your Gmail app password (not your Gmail account password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           // Enable TLS encryption
    $mail->Port       = 587;                                      // TCP port to connect to (587 for TLS)

    //Recipients
    $mail->setFrom('your-email@gmail.com', 'Mailer');              // Sender's email
    $mail->addAddress('recipient@example.com', 'Joe User');       // Replace with the recipient's email

    //Content
    $mail->isHTML(true);                                          // Set email format to HTML
    $mail->Subject = 'Here is the subject';                        // Set the email subject
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';  // Set the body of the email

    // Send the email
    $mail->send();
    echo 'Message has been sent';                                  // Success message
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";  // Error message
}