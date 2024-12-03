<?php
// Validate the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $country_code = $_POST['country_code'];
    $phone_number = $_POST['phone_number'];

    // Check if the phone number is valid (10 digits)
    if (preg_match('/^\d{10}$/', $phone_number)) {
        // Redirect to the OTP page
        header("Location: otp.php?phone=" . urlencode($country_code . $phone_number));
        exit;
    } else {
        // If invalid, redirect back with an error message
        header("Location: index.php?error=invalid_number");
        exit;
    }
} else {
    // Redirect to the main page if accessed directly
    header("Location: index.php");
    exit;
}
?>
