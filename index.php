<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = trim(htmlspecialchars($_POST["fullname"]));
    $email = trim(htmlspecialchars($_POST["email"]));
    $message = trim(htmlspecialchars($_POST["message"]));
    // Validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
    } else {
        // Validate and process data
        if (!empty($name) && !empty($email) && !empty($message)) {
            echo "Name: $name\n";
            echo "Email: $email\n";
            echo "Message: $message\n";
        } else {
            echo "Please fill in all fields.";
        }
    }
} else
{
    echo "Invalid request method.";
}
