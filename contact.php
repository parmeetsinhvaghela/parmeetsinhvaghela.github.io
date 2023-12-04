<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "parmeetsinhvaghela@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
}
header("Location: index.html"); // Redirect back to the homepage
exit();
?>
