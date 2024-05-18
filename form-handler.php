<?php
$name = $_POST['name'];
$visitor_email = $POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'cimanu88@gmail.com';

$email_subject = 'new form submission';

$email_body = "user Name: $name.\n".
              "user email: $visitor_email.\n".
              "subject: $subject.\n".
              "user message: $message.\n";

$to = 'emmanuel.rono22@students.dkut.ac.ke';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>