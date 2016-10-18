<?php

if(isset($_POST)){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $body = "A contact form message from ".$name. "\r\n"
        . "email address: ".$email."\r\n \r\n"
        . "message:\r\n"
        . $message;

  $mailto = "michaelrway@gmail.com";
  $subject = "Contact Form Submission";
  $reply = $email;

  $headers = 'Reply-To: webmaster@example.com' . "\r\n";

  mail($mailto, $subject, $body, $headers);

  echo "Thank you for your message";
}

 ?>
