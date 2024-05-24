<?php
  action_page.php

  Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["psw"];
    $repeat_password = $_POST["psw-repeat"];

    // Validate input
    if (empty($email) || empty($password) || empty($repeat_password)) {
      echo "Please fill in all fields.";
    } elseif ($password != $repeat_password) {
      echo "Passwords do not match.";
    } else {
      // Create account
      // TO DO: implement account creation logic here
      echo "Account created successfully.";
    }
  }
?>