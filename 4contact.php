<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load Composer dependencies

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Debugging: Print the POST data
    error_log(print_r($_POST, true));

    // Validate input
    $name    = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email   = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Connect to DB
    $conn = new mysqli("localhost", "root", "", "portfolio_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        // Send email
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPDebug = 0;
            $mail->Username = 'gavhaleshashwati@gmail.com';
            $mail->Password = 'tijh yuvh ghnn ntov';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

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
            echo "Message sent and saved to database!";
        } catch (Exception $e) {
            echo "Message saved, but email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Database error: Could not save message.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request. Please submit the form via POST.";
}
?>
