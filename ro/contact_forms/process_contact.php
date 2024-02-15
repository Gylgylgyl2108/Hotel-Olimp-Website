<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent security issues
    $name = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate input (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        // Set recipient email address
        $to = "petrisor.buciutaa@gmail.com";

        // Set subject
        $subject = "Contact Form Submission from $name";

        // Build text and HTML email parts
        $text_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $html_message = <<<EOT
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Message:</b> $message</p>
        EOT;

        // Set additional headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: multipart/alternative; boundary=\"boundary123\"";

        // Build the email body with both text and HTML parts
        $email_body = "--boundary123\r\n";
        $email_body .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
        $email_body .= "Content-Transfer-Encoding: 7bit\r\n\n";
        $email_body .= $text_message . "\r\n\n";
        $email_body .= "--boundary123\r\n";
        $email_body .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
        $email_body .= "Content-Transfer-Encoding: 7bit\r\n\n";
        $email_body .= $html_message . "\r\n\n";
        $email_body .= "--boundary123--";

        // Send email
        $success = mail($to, $subject, $email_body, $headers);

        // Check if mail was sent successfully
        if ($success) {
            header("Location: confirm_email.php");
        } else {
            echo "Oops! Something went wrong, and we couldn't send your message.";
        }
    }
}
?>
