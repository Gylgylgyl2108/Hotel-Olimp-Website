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

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "petrisor.buciutaa@gmail.com";
$mail->Password = "vzhtdybhrznmlefe";

$mail->setFrom($email, $nume);
$mail->addAddress("petrisor.buciutaa@gmail.com");

$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = <<<EOT
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

$mail->send();

header("Location: ../confirm_reservation.php");