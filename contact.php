<?php
require_once 'includes/auth.php';

// Set JSON header
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Get JSON input
        $rawInput = file_get_contents('php://input');
        $input = json_decode($rawInput, true);
        
        if ($input && json_last_error() === JSON_ERROR_NONE) {
            // JSON request from JavaScript
            $name = sanitize_input($input['name'] ?? '');
            $email = sanitize_input($input['email'] ?? '');
            $subject = sanitize_input($input['subject'] ?? '');
            $message = sanitize_input($input['message'] ?? '');
        } else {
            // Fallback to POST data
            $name = sanitize_input($_POST['name'] ?? '');
            $email = sanitize_input($_POST['email'] ?? '');
            $subject = sanitize_input($_POST['subject'] ?? '');
            $message = sanitize_input($_POST['message'] ?? '');
        }

        // Validate inputs
        $errors = [];
        if (empty($name)) $errors[] = 'Name is required';
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
        if (empty($subject)) $errors[] = 'Subject is required';
        if (empty($message)) $errors[] = 'Message is required';

        if (empty($errors)) {
            // Insert into database
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message, created_at) VALUES (:name, :email, :subject, :message, NOW())");
            
            $success = $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':subject' => $subject,
                ':message' => $message
            ]);

            if ($success) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Thank you! Your message has been sent successfully.'
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Failed to save your message. Please try again.'
                ]);
            }
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => implode(', ', $errors)
            ]);
        }

    } catch (Exception $e) {
        error_log("Contact form error: " . $e->getMessage());
        echo json_encode([
            'status' => 'error',
            'message' => 'An error occurred. Please try again later.'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
}
exit;
?>
