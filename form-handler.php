<?php
$name = $_POST['contact-name'];
$visitor_email = $_POST['contact-email'];
$subject = $_POST['contact-subject'];
$message = $_POST['contact-message'];

$email_from = 'info@YOURDOMAIN';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject. \n".
              "User Message: $message .\n";

$to = 'mitsosxou@yahoo.gr';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>