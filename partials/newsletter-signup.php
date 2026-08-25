<?php
// Newsletter signup handler for Peevish Penman
// This handles the form submission from the footer

// Start session for potential CSRF protection (optional)
session_start();

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

// Get and sanitize email
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=error');
    exit;
}

// --- OPTION 1: Save to a file (simple approach) ---
$subscribers_file = __DIR__ . '/data/newsletter-subscribers.txt';

// Create data directory if it doesn't exist
if (!file_exists(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0755, true);
}

// Check if email already exists
$existing_emails = file_exists($subscribers_file) ? file($subscribers_file, FILE_IGNORE_NEW_LINES) : [];

if (!in_array($email, $existing_emails)) {
    // Add timestamp and email
    $entry = date('Y-m-d H:i:s') . ' | ' . $email . PHP_EOL;
    file_put_contents($subscribers_file, $entry, FILE_APPEND | LOCK_EX);
}

// --- OPTION 2: Send email notification to yourself ---
$to = 'carriebaileyallen@gmail.com'; // CHANGE THIS to your email
$subject = 'New Newsletter Signup - Peevish Penman';
$message = "New newsletter signup:\n\nEmail: $email\nDate: " . date('Y-m-d H:i:s') . "\n\nFrom: Peevish Penman website";
$headers = "From: noreply@peevishpenman.com\r\n" . 
           "Reply-To: noreply@peevishpenman.com\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Uncomment to enable email notifications:
// mail($to, $subject, $message, $headers);

// --- OPTION 3: Integration with email service (Mailchimp, ConvertKit, etc.) ---
// Example for Mailchimp API (requires API key and list ID)
/*
function addToMailchimp($email) {
    $api_key = 'YOUR_MAILCHIMP_API_KEY';
    $list_id = 'YOUR_LIST_ID';
    $datacenter = substr($api_key, strpos($api_key, '-') + 1);
    
    $url = "https://{$datacenter}.api.mailchimp.com/3.0/lists/{$list_id}/members";
    
    $data = [
        'email_address' => $email,
        'status' => 'subscribed'
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    
    $result = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return $status === 200;
}

// Uncomment to use Mailchimp:
// addToMailchimp($email);
*/

// Redirect back with success message
header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=success');
exit;