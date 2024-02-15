<?php
$subject = "Rezervare client";
$formular = "De la formularul de rezervare.";

$checkin=$_POST["CheckInDate"];
$checkout=$_POST["CheckOutDate"];
$oaspeti=$_POST["oaspeti"];
$copii=$_POST["copii"];
$nume = $_POST["nume"];
$prenume = $_POST["prenume"];
$email = $_POST["email"];
$telefon = $_POST["phone"];
$mesaj = $_POST["mesaj"];
$camera = $_POST["room"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $camera = htmlspecialchars($_POST["room"]);


    // Validate input (you can add more validation as needed)
    // Set recipient email address
    $to = "petrisor.buciutaa@gmail.com";

    // Set subject
    $subject = "Contact from Hotel Website by $name";

    // Build text and HTML email parts
    $text_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $html_message = <<<EOT
        <p style="font-size: 20px"><b>Pagina:</b> $formular<br></br></p>
        <p style="font-size: 20px"><b>CheckIn:</b> $checkin <br></br></p>
        <p style="font-size: 20px"><b>CheckOut:</b> $checkout <br></br></p>
        <p style="font-size: 20px"><b>Oaspeti:</b> $oaspeti <br></br></p>
        <p style="font-size: 20px"><b>Copii:</b> $copii <br></br></p>
        <p style="font-size: 20px"><b>Nume:</b> $nume<br></br></p>
        <p style="font-size: 20px"><b>Prenume:</b> $prenume<br></br></p>
        <p style="font-size: 20px"><b>Email:</b> $email<br></br></p>
        <p style="font-size: 20px"><b>Telefon:</b> $telefon<br></br></p>
        <p style="font-size: 20px"><b>Camera:</b> $camera<br></br></p>
        <p style="font-size: 20px"><b>Message:</b> $mesaj<br></br></p>
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
        header("Location: ../confirm_reservation.php");
    } else {
        echo "<h1 style='font-size: 50px color=red'>Oops! Something went wrong, and we couldn't send your message.</h1>";
    }
}
?>
