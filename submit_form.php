<?php
require_once('config.php');
require('smtp/PHPMailerAutoload.php'); // Include PHPMailer library

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $ipAddress = gethostbyname(gethostname());
    
    $insertQuery = "INSERT INTO contact_form (fullname, phone, email, subject, message, ip_address, submission_time)
                    VALUES ('$fullname', '$phone', '$email', '$subject', '$message', '$ipAddress', NOW())";
    
    if ($conn->query($insertQuery) === TRUE) {
        // Send email notification using PHPMailer
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->Username = "smtktm098@gmail.com";
        $mail->Password = "vqexgkoydvcdcufg";
        $mail->SetFrom("smtktm098@gmail.com");
        $mail->AddAddress($email);
        $mail->AddAddress("test@techsolvitservice.com");
        $mail->Subject = "Form submitted successfully. Thank you!";
        $emailMessage = "Form submitted successfully. Thank you!:\n"
                        . "Full Name: $fullname\n"
                        . "Phone: $phone\n"
                        . "Email: $email\n"
                        . "Subject: $subject\n"
                        . "Message: $message\n"
                        . "IP Address: $ipAddress\n";
        $mail->Body = $emailMessage;
        
        if ($mail->Send()) {
            header("Location: index.php?success=true");
            exit();
        } else {
            echo "Error sending email: " . $mail->ErrorInfo;
        }
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
    
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
