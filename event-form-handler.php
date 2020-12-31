<?php
$name = $_POST['name'];
$grade = $_POST['grade'];
$idea = $_POST['idea'];
$cost = $_POST['cost'];
$details = $_POST['details'];
$other = $_POST['other'];

$email_from = 'evelynchen555@gmail.com';
$email_subject = "New PAWS Event Idea";
$email_body = "Name: $name.\n".
              "Email: $visitor_email.\n".
              "Idea: $idea.\n".
              "Estimated Cost: $cost.\n".
              "Details: $details.\n".
              "Additional Comments: $other.\n";

$to = "412395@bsd48.org";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $header);

header("Location: events.html");
?>
