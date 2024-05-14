<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if message is posted
        if(isset($_POST["message"])) {
            $message = $_POST["message"];
        } else {
            echo "Message is missing";
            exit;
        }
        // Validate and sanitize email
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }
        // Set session variables
        $_SESSION['email'] = $email;
        $_SESSION['message'] = $message;
        // Email details
        $to = $email;
        $subject = "The upcoming Annual Conference 2024";
        $headers = "From: smdeep137@gmail.com ";
        if (mail($to, $subject, $message, $headers)) {
            //header("Location: ../view/epam.php");
            echo "Send successfully";
        } else {
            echo "Failed to send email. Please try again later.";
        }
    }
?>
