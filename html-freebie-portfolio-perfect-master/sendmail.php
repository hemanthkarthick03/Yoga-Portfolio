<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "yoga3hk@gmail.com"; // You can replace this with the correct email.
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        // Success message
        echo "<script>
            alert('Message sent successfully!');
            window.location.href = 'index.html'; // Redirect to another page (optional)
        </script>";
    } else {
        // Failure message
        echo "<script>
            alert('Failed to send message. Please try again later.');
            window.location.href = 'index.html'; // Redirect to another page (optional)
        </script>";
    }
}
?>
