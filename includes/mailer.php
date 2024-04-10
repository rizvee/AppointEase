<?php
// Include the configuration file
require_once 'config.php';

// Function to send appointment confirmation email
function sendEmailNotification($fname, $lname, $email) {
    // Email subject
    $subject = "Appointment Confirmation";

    // Email message
    $message = "Dear $fname $lname,\n\n";
    $message .= "Your appointment has been successfully booked.\n";
    // Add more details or instructions as needed

    // Headers
    $headers = "From: " . EMAIL_FROM . "\r\n";
    $headers .= "Reply-To: " . EMAIL_FROM . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($email, $subject, $message, $headers)) {
        // Email sent successfully
        return true;
    } else {
        // Email sending failed
        return false;
    }
}
?>
