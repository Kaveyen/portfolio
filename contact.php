<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Parax Contact Form'; 
    $to = 'example@gmail.com'; 
    $subject = $_POST['subject']; 
    
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "Error sending email. Please try again later.";
    }
}
?>