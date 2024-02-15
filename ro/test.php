<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent security issues
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    // Validate input (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        // Set recipient email address
        $to = "your-email@gmail.com";

        // Set subject
        $subject = "Contact Form Submission from $name";

        // Build text and HTML email parts
        $text_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $html_message = "<html><body>";
        $html_message .= "<p><strong>Name:</strong> $name</p>";
        $html_message .= "<p><strong>Email:</strong> $email</p>";
        $html_message .= "<p><strong>Message:</strong> $message</p>";
        $html_message .= "</body></html>";

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
            echo "Thank you for your message. We will get back to you soon!";
        } else {
            echo "Oops! Something went wrong, and we couldn't send your message.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="message">Message:</label>
        <textarea name="message" rows="5" required></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>