<?php
// Include necessary files
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/mailer.php'; // Include script to handle email sending

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an array to store errors, if any
    $errors = array();

    // Sanitize and validate form data
    // Example validation, you can add more validation rules as needed
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $pnumber = trim($_POST["pnumber"]);
    $email = trim($_POST["email"]);
    // Add more fields as needed

    // Perform server-side validation
    if (empty($fname)) {
        $errors[] = "First name is required.";
    }
    // Validate other fields similarly

    // If no errors, proceed to booking appointment
    if (empty($errors)) {
        // Prepare SQL statement to insert appointment details into database
        $sql = "INSERT INTO appointments (first_name, last_name, phone_number, email) 
                VALUES (?, ?, ?, ?)";
        
        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $fname, $lname, $pnumber, $email);

        // Execute the statement
        if ($stmt->execute()) {
            // Send email notification
            sendEmailNotification($fname, $lname, $email); // Implement this function in mailer.php
            
            // Redirect to confirmation page
            header("Location: confirmation.php");
            exit; // Stop further execution
        } else {
            $errors[] = "Failed to book appointment. Please try again later.";
        }
    }
}

// If form data is not submitted or if there are errors, redirect back to index.php
header("Location: index.php");
exit; // Stop further execution
?>
