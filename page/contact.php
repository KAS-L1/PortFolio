<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kasl.54370906@gmail.com'; // Your Gmail address
    $mail->Password = 'lgrg mpma cwzo uhdv';  // App Password for Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Sanitize and validate form inputs
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Unknown';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : 'No Subject';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : 'No Message';
    $email = isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? htmlspecialchars($_POST['email']) : null;

    if (!$email) {
        throw new Exception('Invalid email address');
    }

    // Set the recipient to your email
    $mail->setFrom('kasl.54370906@gmail.com', 'Im Kasl');
    $mail->addAddress('kasl.54370906@gmail.com'); // Replace with the fixed email where you'd like to receive messages

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message: ' . $subject;
    // Your PHP Mailer Code
    $mail->Body = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-size: 14px;
            line-height: 1.6;
            margin: 10px 0;
        }
        .footer {
            font-size: 12px;
            text-align: center;
            color: #777777;
            margin-top: 20px;
        }
        .footer a {
            color: #6c63ff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Form Message</h2>
        <p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>
        <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
        <p><strong>Subject:</strong> ' . htmlspecialchars($subject) . '</p>
        <p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($message)) . '</p>
        
        <div class="footer">
            <p>Thank you for reaching out! I will get back to you as soon as possible.</p>
            <p>&copy; 2024 Kier Salise | <a href="kasl.netlify.app">kasl.netlify.app</a></p>
        </div>
    </div>
</body>
</html>';


    // Attempt to send the email
    $mail->send();
    echo 'Message has been sent successfully.';
} catch (Exception $e) {
    echo "Message could not be sent. Please try again later.";
    error_log("Mailer Error: {$mail->ErrorInfo}");
}
