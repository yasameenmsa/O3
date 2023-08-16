<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send an email to the contact form
  mail('o3guardingltd@gmail.com', 'Contact Form Submission', 'Name: ' . $name . ', Email: ' . $email . ', Message: ' . $message);

  // Redirect the user to the home page
  header('Location: /');
}

?>