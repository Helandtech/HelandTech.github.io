<?php
$name= $_POST['name'];
$surname= $_POST['surname'];
$visitor_email = $_POST['email'];
$message = $_POST['extrainfo'];

$email_from = 'uniprojects2020@gmail.com'
$email_subject = 'New Form Submission' 
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n";

$to = 'uniprojects2020@gmail.com'
$headers = "from: $email_from\r\n";

$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>