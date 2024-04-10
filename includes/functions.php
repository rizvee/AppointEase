<?php
// Include the database connection script
require_once 'db.php';

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

// Function to validate email address
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to display success message and redirect
function displaySuccessMessage($message, $redirectUrl) {
    echo '<script>alert("' . $message . '"); window.location.href="' . $redirectUrl . '";</script>';
    exit;
}

// Function to display error message and redirect
function displayErrorMessage($message, $redirectUrl) {
    echo '<script>alert("' . $message . '"); window.location.href="' . $redirectUrl . '";</script>';
    exit;
}

// Add more helper functions as needed
?>
