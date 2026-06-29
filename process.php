<?php
require_once 'config.php';

// Contact form endpoint. Receives firstName, lastName, email and message
// (posted via AJAX), validates them and returns a plain-text response.
header('Content-Type: text/plain; charset=UTF-8');

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    http_response_code(405);
    echo 'Invalid request method.';
    exit;
}

$firstName = trim($_POST['firstName'] ?? '');
$lastName  = trim($_POST['lastName'] ?? '');
$email     = trim($_POST['email'] ?? '');
$message   = trim($_POST['message'] ?? '');

if ($firstName === '' || $lastName === '' || $email === '' || $message === '') {
    http_response_code(422);
    echo 'please fill all the fields';
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo 'Please enter a valid email address.';
    exit;
}

echo 'Thank you. Your message has been received.';
