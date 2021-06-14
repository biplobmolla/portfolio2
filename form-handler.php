<?php
    $name = "name";
    $visitor_email = "email";
    $subject = "subject";
    $message = "message";

    $email_from = "ahmedtamim317@gmail.com";
    $email_subject = "New Email Submitted.";
    $email_body = "Username: $name.\n".
                  "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $message.\n";
    $to = "freelancinginstitute0@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

?>