<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $_SESSION['contact'] = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];

    echo "Thank you for your message, $name. We will get back to you at $email.";
}
