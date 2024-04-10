<?php
// Include necessary files
require_once 'includes/config.php';
require_once 'includes/db.php';

// Start a session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include script to handle form submission
    include 'book-appointment.php';
    exit; // Stop execution after handling form submission
}

// Set page title
$page_title = "Appointment Booking and Scheduling";

// Include header template
include 'templates/header.php';
?>

<main class="d-flex min-vh-100">
    <div class="card uneek-wizard-card">
        <div class="card-body">
            <!-- Include booking form template -->
            <?php include 'templates/booking-form.php'; ?>
        </div>
    </div>
</main>

<?php
// Include footer template
include 'templates/footer.php';
?>
