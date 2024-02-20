<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['recaptcha_response'])) {
    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LeS_3MpAAAAAFpMAGckDYSJbYFN3nR3nIvmJ4Fp';
    $recaptcha_response = $_POST['recaptcha_response'];
    
    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
    
    // Sanitize user input to prevent security issues
    $checkin = htmlspecialchars($_POST["CheckInDate"]);
    $checkout = htmlspecialchars($_POST["CheckOutDate"]);
    $oaspeti = htmlspecialchars($_POST["oaspeti"]);
    $copii = htmlspecialchars($_POST["copii"]);
    $name = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);
    $room = htmlspecialchars($_POST["room"]);
    
    $subject = "Rezervare camera de la Website Hotel de catre $name";

    // Validate input (you can add more validation as needed)
    // Set recipient email address
    $to = "office@hotel-olimp.ro";

    echo $checkin;
    echo "<br>";
    echo $checkout;
    echo "<br>";

    // Format dates
    $datetime_checkin = new DateTime(strval($checkin));
    $datetime_checkout = new DateTime(strval($checkout));

    echo $checkin;
    echo "<br>";
    echo $checkout;
    echo "<br>";

    // Assuming $dateTime is your DateTime object
    $dateTime = new DateTime("2024-02-20");

    // Format the DateTime object as a string
    $stringRepresentation = $dateTime->format("d F Y");

    // Now $stringRepresentation holds the formatted string
    echo $stringRepresentation; // Output: 20 February 2024

    // Build text and HTML email parts
    $text_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $html_message = <<<EOT
        <p style="font-size: 20px"><b>CheckIn:</b> $datetime_checkin </p>
        <p style="font-size: 20px"><b>CheckOut:</b> $datetime_checkout </p>
        <p style="font-size: 20px"><b>Oaspeti:</b> $oaspeti </p>
        <p style="font-size: 20px"><b>Copii:</b> $copii </p>
        <p style="font-size: 20px"><b>Nume:</b> $name</p>
        <p style="font-size: 20px"><b>Prenume:</b> $surname</p>
        <p style="font-size: 20px"><b>Email:</b> $email</p>
        <p style="font-size: 20px"><b>Telefon:</b> $phone</p>
        <p style="font-size: 20px"><b>Camera:</b> $room</p>
        <p style="font-size: 20px"><b>Mesajul:</b> $message</p>
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
    // $success = mail($to, $subject, $email_body, $headers);

    // Check if mail was sent successfully
    if ($success && $recaptcha->score >= 0.5) {
        // header("Location: ../confirm_reservation.php");
    } else {
        // header("Location: ../error.php");
    }
}
?>
