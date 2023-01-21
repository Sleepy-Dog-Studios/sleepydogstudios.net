<?php
    $firstName = $_POST['firstName'];
    $lastInitial = $_POST['lastInitial'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = $email;

    $email_subject = $subject;

    $email_body = "Name: $firstName $lastInitial\n".
                    "Email: $email\n\n".
                        "Message: $message\n";

    $to = "sleepydogstudiosvr@gmail.com";

    $headers = "From: $email \r\n";

    $headers .= "Reply-To: $email \r\n";

    mail($to, $email_subject,$email_body,$headers);

    header("Location: index.html");
?>