<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $email_from = "fenettles@gmail.com";
    $email_subject = "New Contact";
    $email_body = "Message from $name. \n email: $email \n Here is the message: \n $message";
    $to = "fenettles@gmail.com";
    $headers = "From: $email_from \r\n";
    mail($to, $email_subject, $email_body, $headers);
?>
