<?php
$name = $_POST['entry.126709077'];
$visitor_email = $_POST['entry.1132009801'];
$grade = $_POST['entry.1214422521'];
$message = $_POST['entry.533436524'];

$email_from = 'evelynchen555@gmail.com';
$email_subject = "New PAWS Sign-Up";
$email_body = "Name: $name.\n".
              "Email: $visitor_email.\n".
              "Grade: $grade.\n".
              "Message: $message.\n";

$to = "412395@bsd48.org";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $header);

header("Location: home.html");
?>
