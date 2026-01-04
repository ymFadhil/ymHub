<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once __DIR__ . '/brevo_config.php';

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Get form data and sanitize
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8') : '';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject']), ENT_QUOTES, 'UTF-8') : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8') : '';

// Validation
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Additional validation - prevent injection
if (strlen($name) > 100 || strlen($subject) > 200 || strlen($message) > 2000) {
    echo json_encode(['success' => false, 'message' => 'Input too long. Please check your fields.']);
    exit;
}

// Email configuration
$to = BREVO_TO_EMAIL;
$email_subject = "New Message from $name <$email> that was sent from Ym Hub Website Form";

// Create HTML email body for better formatting
$email_body_html = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #6366f1; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .field { margin-bottom: 15px; }
        .field-label { font-weight: bold; color: #6366f1; }
        .field-value { margin-top: 5px; padding: 10px; background-color: white; border-left: 3px solid #6366f1; }
        .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Form Submission</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='field-label'>Name:</div>
                <div class='field-value'>" . $name . "</div>
            </div>
            <div class='field'>
                <div class='field-label'>Email:</div>
                <div class='field-value'>" . $email . "</div>
            </div>
            <div class='field'>
                <div class='field-label'>Subject:</div>
                <div class='field-value'>" . $subject . "</div>
            </div>
            <div class='field'>
                <div class='field-label'>Message:</div>
                <div class='field-value'>" . nl2br($message) . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>This email was sent from your Ym Hub Website contact form.</p>
            <p>Time: " . date('Y-m-d H:i:s') . "</p>
        </div>
    </div>
</body>
</html>
";

// Plain text version for email clients that don't support HTML
$email_body_text = "You have received a new message from your Ym Hub Website form.\n\n";
$email_body_text .= "Name: " . $name . "\n";
$email_body_text .= "Email: " . $email . "\n";
$email_body_text .= "Subject: " . $subject . "\n\n";
$email_body_text .= "Message:\n" . $message . "\n\n";
$email_body_text .= "Time: " . date('Y-m-d H:i:s') . "\n";

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = BREVO_SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = BREVO_SMTP_USERNAME;
    $mail->Password   = BREVO_SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS
    $mail->Port       = BREVO_SMTP_PORT;
    $mail->CharSet    = 'UTF-8';
    
    $mail->setFrom(BREVO_TO_EMAIL, 'Ym Hub');
    $mail->addAddress($to, BREVO_TO_NAME); // TO = your email to receive messages
    $mail->addReplyTo($email, $name); // Reply-to also set to form submitter

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = $email_subject;
    $mail->Body    = $email_body_html;
    $mail->AltBody = $email_body_text; // Plain text fallback

    // Send email
    $mail->send();
    
    echo json_encode([
        'success' => true, 
        'message' => 'Message sent successfully! We will get back to you soon.'
    ]);
    
} catch (Exception $e) {
    // Log error for debugging
    error_log("Brevo SMTP Error: " . $mail->ErrorInfo);
    echo json_encode([
        'success' => false, 
        'message' => 'Failed to send message. Please try again later or contact us directly via WhatsApp.'
    ]);
}
?>
