<?php

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
require '../PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email exists in the users table
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email exists, create a reset token
        $token = bin2hex(random_bytes(32)); // Generate a secure token
        $expires_at = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token valid for 1 hour

        // Store token in the database
        $stmt = $conn->prepare("INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE token = VALUES(token), expires_at = VALUES(expires_at)");
        $stmt->bind_param("sss", $email, $token, $expires_at);
        $stmt->execute();

        // Send reset email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.office365.com'; // Outlook SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'loicminecraft2.0@outlook.fr'; // Your Outlook email
            $mail->Password = 'Minecraftgamer2.0'; // Your Outlook password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption
            $mail->Port = 587; // TCP port for TLS

            // Sender and recipient
            $mail->setFrom('loicminecraft2.0@outlook.fr', 'Your Website Name');
            $mail->addAddress($email); // The user's email

            // Email content
            $reset_link = "localhost/Portfolio/portfolio/reset_password.php?token=" . $token;
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request';
            $mail->Body = 'To reset your password, please click the following link: <a href="' . $reset_link . '">' . $reset_link . '</a>';
            
            // Send the email
            $mail->send();
            echo "<center><p>If the email is registered, you will receive a password reset link.</p></center>";
        } catch (Exception $e) {
            echo "<center><p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p></center>";
        }

    } else {
        echo "<center><p>Email not found.</p></center>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Password Reset</title>
</head>
<body>
    <center>
        <h2>Forgot Password</h2>
        <form action="request_reset.php" method="post">
            <label for="email">Enter your email:</label><br><br>
            <input type="email" name="email" id="email" required><br><br>
            <input type="submit" value="Request Reset">
        </form>
    </center>
</body>
</html>
