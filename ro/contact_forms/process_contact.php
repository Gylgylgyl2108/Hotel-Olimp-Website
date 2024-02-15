<?php
$subject = "Rezervare client";
$formular = "De la formularul de contact.";

$nume = $_POST["nume"];
$prenume = $_POST["prenume"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$mesaj = $_POST["mesaj"];

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "mail.hotel-olimp.ro";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

$mail->Username = "testing@hotel-olimp.ro";
$mail->Password = "testingtesting";

$mail->setFrom($email, $nume);
$mail->addAddress("testing@hotel-olimp.ro");

$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = <<<EOT
<p style="font-size: 20px"><b>Pagina:</b> $formular<br></br></p>
<p style="font-size: 20px"><b>Nume:</b> $nume<br></br></p>
<p style="font-size: 20px"><b>Prenume:</b> $prenume<br></br></p>
<p style="font-size: 20px"><b>Email:</b> $email<br></br></p>
<p style="font-size: 20px"><b>Telefon:</b> $phone<br></br></p>
<p style="font-size: 20px"><b>Message:</b> $mesaj<br></br></p>
EOT;

$mail->SMTPDebug = 4;
$mail->send();

header("Location: ../confirm_email.php");