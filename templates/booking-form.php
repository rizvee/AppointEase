<?php
// Include necessary files
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <!-- Add your CSS and meta tags here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Booking Form</h2>
        <form action="book-appointment.php" method="post">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <!-- Add more form fields as needed -->
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
