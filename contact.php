<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Composer autoload

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email   = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    if (empty($name) || empty($email) || empty($subject) || empty($message) || !$email) {
        echo "All fields are required and email must be valid.";
        exit;
    }

    // Database connection
    $conn = new mysqli("localhost", "root", "", "portfolio_db");
    if ($conn->connect_error) {
        echo "Database connection failed: " . $conn->connect_error;
        exit;
    }

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        // Send email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->SMTPDebug  = 0;
            $mail->Username   = 'gavhaleshashwati@gmail.com';
            $mail->Password   = 'tijh yuvh ghnn ntov';  // Note: Use environment variable for security in production
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('gavhaleshashwati@gmail.com', 'FixFast');
            $mail->addAddress('gavhaleshashwati@gmail.com', 'FixFast Admin');

            $mail->isHTML(true);
            $mail->Subject = 'New Contact Message';
            $mail->Body    = "
                <h3>New Contact Request</h3>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Subject:</strong> {$subject}</p>
                <p><strong>Message:</strong><br>{$message}</p>
            ";

            $mail->send();
            echo "Message sent successfully!";
        } catch (Exception $e) {
            echo "Message saved, but email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Failed to save message to database.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request. Please submit the form via POST.";
}
?>
