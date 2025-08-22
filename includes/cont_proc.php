<?php
require_once 'config.php';

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// Verify CSRF token
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    exit('Invalid security token');
}

try {
    // Sanitize and validate input
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $website = sanitize_input($_POST['website'] ?? '');
    $message = sanitize_input($_POST['msg'] ?? '');

    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        throw new Exception('Required fields are missing');
    }

    if (!validate_email($email)) {
        throw new Exception('Invalid email address');
    }

    // Prepare email content
    $subject = "New Support Request from " . htmlspecialchars($name);
    $emailBody = "New support request received:\n\n";
    $emailBody .= "Name: " . htmlspecialchars($name) . "\n";
    $emailBody .= "Email: " . htmlspecialchars($email) . "\n";
    $emailBody .= "Website: " . htmlspecialchars($website) . "\n";
    $emailBody .= "Message: " . htmlspecialchars($message) . "\n\n";
    $emailBody .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
    $emailBody .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

    // Email headers
    $headers = [
        'From' => 'noreply@mastergraphiks.com',
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion(),
        'Content-Type' => 'text/plain; charset=UTF-8'
    ];

    // Send email
    $mailSent = mail(ADMIN_EMAIL, $subject, $emailBody, $headers);

    if (!$mailSent) {
        throw new Exception('Failed to send email');
    }

    // Log successful submission (optional)
    error_log("Support request submitted successfully from: $email");

    // Return success response
    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'message' => 'Support request submitted successfully!'
    ]);

} catch (Exception $e) {
    // Log error
    error_log("Support request error: " . $e->getMessage());
    
    // Return error response
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>