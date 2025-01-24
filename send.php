<?php
$to = 'mukeshkotty123@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email from PHP.';
$headers = 'From: no-reply@yourdomain.com' . "\r\n" .
           'Reply-To: no-reply@yourdomain.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Test email sent successfully.';
} else {
    echo 'Error sending test email.';
}
?>
