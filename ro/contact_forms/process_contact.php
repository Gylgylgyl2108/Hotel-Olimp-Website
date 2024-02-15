<?php

// Set subject
$subject = "Contact de la Website Hotel de catre $name";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['g-recaptcha-response'])){
        $token = $_POST['g-recaptcha-response'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => '6LdECnQpAAAAAKrDNnS-7MKDfOjpXYiI7nuwaAC8',
            'response' => $token
        );

        $options = array(
            'http' => array (
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);

        /*
        - google response score is between 0.0 to 1.0
        - if score is 0.5, it's a human
        - if score is 0.0, it's a bot
        - google recommend to use score 0.5 for verify human
        */
        if ($response->success && $response->score >= 0.5) {
            echo json_encode(array('success' => true, "msg"=>"You are not a robot!", "response"=>$response));
        } else {
            /*
            * if score is less than 0.5, you can do following things
            * login => 	With low scores, require 2-factor-authentication or email verification to prevent credential stuffing attacks.
            * social =>     With low scores, require additional verification steps, such as a CAPTCHA or email verification.
            *              - Limit unanswered friend requests from abusive users and send risky comments to moderation.
            * e-commerce => Put your real sales ahead of bots and identify risky transactions.
            * */
            echo json_encode(array('success' => false, "msg"=>"You are a robot!", "response"=>$response));
        }
    }
    
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
