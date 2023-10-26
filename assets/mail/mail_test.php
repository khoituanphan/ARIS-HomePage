<?php
$to = 'tuankhoi.phan0820@gmail.com'; // Replace with your email address
$subject = 'Test Mail';
$message = 'This is a test email.';
$headers = 'From: leminhkhanhs1012@gmail.com' . "\r\n" . // Replace with a valid email address
    'Reply-To: tuankhoi.phan0820@gmail.com' . "\r\n" . // Replace with a valid email address
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Email sending failed.';
}
?>
