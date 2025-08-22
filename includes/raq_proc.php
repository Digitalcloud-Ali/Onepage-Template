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
    $country = sanitize_input($_POST['country'] ?? '');
    $scope = sanitize_input($_POST['scope'] ?? '');
    $budget = sanitize_input($_POST['budget'] ?? '');
    $time = sanitize_input($_POST['time'] ?? '');
    $message = sanitize_input($_POST['msg'] ?? '');

    // Validation
    if (empty($name) || empty($email) || empty($country) || empty($message)) {
        throw new Exception('Required fields are missing');
    }

    if (!validate_email($email)) {
        throw new Exception('Invalid email address');
    }

    // Prepare email content
    $subject = "New Quote Request from " . htmlspecialchars($name);
    $emailBody = "New quote request received:\n\n";
    $emailBody .= "Name: " . htmlspecialchars($name) . "\n";
    $emailBody .= "Email: " . htmlspecialchars($email) . "\n";
    $emailBody .= "Country: " . htmlspecialchars($country) . "\n";
    $emailBody .= "Scope: " . htmlspecialchars($scope) . "\n";
    $emailBody .= "Budget: " . htmlspecialchars($budget) . "\n";
    $emailBody .= "Timeframe: " . htmlspecialchars($time) . "\n";
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
    error_log("Quote request submitted successfully from: $email");

    // Return success response
    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'message' => 'Quote request submitted successfully!'
    ]);

} catch (Exception $e) {
    // Log error
    error_log("Quote request error: " . $e->getMessage());
    
    // Return error response
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>