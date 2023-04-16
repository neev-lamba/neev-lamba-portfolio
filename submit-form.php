<?php
if (isset($_POST['submit'])) {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set recipient email address
  $to = "nlamba@umich.edu";

  // Set email subject
  $subject = "New contact form submission";

  // Set email content
  $content = "Name: $name\nEmail: $email\nMessage: $message";

  // Set email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

  // Send email
  if (mail($to, $subject, $content, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }
}
?>
