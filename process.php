<?php
require_once 'config.php';

/*
 * Live-site compatible contact endpoint.
 *
 * The current live site posts these fields via AJAX from contact_script.js:
 * firstName, lastName, email, message.
 *
 * Delivery is intentionally conservative here: this endpoint validates the
 * same payload and returns a plain-text response for the frontend. Wire mail()
 * or database storage here when deploying with real server credentials.
 */
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

// TODO: Connect this to the production mail/database backend.
echo 'Thank you. Your message has been received.';
