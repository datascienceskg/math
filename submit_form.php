<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form fields are named 'name', 'email', and 'message'
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here, you should add your code to process the data. For example, save it to a database or send an email.

    // Redirect or send a message back to the user
    echo "Thank you $name, we have received your message.";
} else {
    // If the form is not submitted via POST, send a 405 Method Not Allowed header
    header("HTTP/1.1 405 Method Not Allowed");
    exit;
}
?>
