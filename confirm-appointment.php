<?php
// Include necessary files
require_once 'includes/config.php';
require_once 'includes/db.php';

// Check if appointment confirmation data is submitted via GET method
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["appointment_id"])) {
    // Retrieve appointment ID from GET parameters
    $appointment_id = $_GET["appointment_id"];

    // Prepare SQL statement to fetch appointment details from the database
    $sql = "SELECT * FROM appointments WHERE id = ?";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $appointment_id);

    // Execute the statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Check if appointment exists
    if ($result->num_rows > 0) {
        // Fetch appointment details
        $appointment = $result->fetch_assoc();

        // Display confirmation message with appointment details
        echo "<h1>Appointment Confirmed</h1>";
        echo "<p>Appointment Details:</p>";
        echo "<p>Name: " . $appointment['first_name'] . " " . $appointment['last_name'] . "</p>";
        echo "<p>Phone Number: " . $appointment['phone_number'] . "</p>";
        echo "<p>Email: " . $appointment['email'] . "</p>";
        // Display other appointment details as needed
    } else {
        echo "<h1>Appointment Not Found</h1>";
        echo "<p>The appointment with ID $appointment_id does not exist.</p>";
    }
} else {
    // If appointment ID is not provided or if the request method is not GET, redirect to index.php
    header("Location: index.php");
    exit; // Stop further execution
}
?>
