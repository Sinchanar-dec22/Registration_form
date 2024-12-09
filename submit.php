<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize user input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $address = htmlspecialchars(trim($_POST['address']));

    // Check for missing fields
    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        echo "<p style='color:red;'>All fields are required.</p>";
        exit;
    }

    // Display formatted output
    echo "<h2>Submitted Information</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    echo "<p style='color:red;'>Invalid request method.</p>";
}

