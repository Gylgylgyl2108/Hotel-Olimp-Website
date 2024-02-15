
<?php
$recaptcha_secret = '6LeS_3MpAAAAAFpMAGckDYSJbYFN3nR3nIvmJ4Fp';
$recaptcha_response = $_POST['g-recaptcha-response'];

$verify_url = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}";
$verify_response = file_get_contents($verify_url);
$captcha_data = json_decode($verify_response);

if ($captcha_data->success) {
    // Process the form data
    // Your form processing code goes here
} else {
    // Handle reCAPTCHA verification failure
    echo "reCAPTCHA verification failed.";
}


// Set subject
$subject = "Contact de la Website Hotel de catre $name";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize user input to prevent security issues
    $name = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate input (you can add more validation as needed)
    // Set recipient email address
    $to = "office@hotel-olimp.ro";

    // Build text and HTML email parts
    $text_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $html_message = <<<EOT
    <p style="font-size: 20px;"><b>Nume:</b> $name</p>
    <p style="font-size: 20px;"><b>Prenume:</b> $surname</p>
    <p style="font-size: 20px;"><b>Email:</b> $email</p>
    <p style="font-size: 20px;"><b>Telefon :</b> $phone</p>
    <p style="font-size: 20px;"><b>Mesajul:</b> $message</p>
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
        header("Location: ../confirm_email.php");
    } else {
        echo "<h1 style='font-size: 50px color=red'>Oops! Something went wrong, and we couldn't send your message.</h1>";
    }
}
?>
