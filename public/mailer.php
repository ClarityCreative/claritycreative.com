<?php
  $to = $_POST['to'];
  $subject = 'Contact Message from Clarity';
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $message = $_POST['message'];
  $headers = 'From: no-reply@claritycreative.com' . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  //Quick little email validation to ensure email is real
  if(filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($to, FILTER_VALIDATE_EMAIL)) {
  	mail($to, $subject, "Name: " . $name . "\r\n" . "Email: ". $email . "\r\n" . "Message:" . $message, $headers);
  }
  header('Location: ../contact/thanks.html');
  exit();
 ?>
