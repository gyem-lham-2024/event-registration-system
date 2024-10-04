<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Example: Sending email (uncomment and configure the mail function)
    // $to = "info@eventregistration.com"; // Your email address
    // $subject = "New Contact Form Submission";
    // $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    // $headers = "From: $email";

    // if (mail($to, $subject, $body, $headers)) {
    //     echo "Message sent successfully!";
    // } else {
    //     echo "Message could not be sent. Please try again later.";
    // }

    // For testing, just display the submitted data
    echo "<h2>Thank you for your message!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    // Redirect to the contact page if the form is not submitted correctly
    header("Location: contact.php");
    exit;
}
?>
