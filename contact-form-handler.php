<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from='youngtae1386@gmail.com';

    $email_subject="new form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "youngtae1386@gmail.com";
    $headers = "Form: $email_from \r\n";
    $headers .="Reply-To: $visior_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html")


?>