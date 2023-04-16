<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  // Process the form data and send an email, for example
  // ...
  
  // Return a response to the client
  echo 'Form submitted successfully!';
}
?>
