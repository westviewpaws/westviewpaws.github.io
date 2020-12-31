<?php
$name = $_POST['entry.1111631721'];
$visitor_email = $_POST['entry.561036712'];
$grade = $_POST['entry.427432208'];
$message = $_POST['entry.1998317372'];

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
