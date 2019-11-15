<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "ter-lou@live.nl";
  $headers = "From: info@befitbyash.com";
  $txt = $message;

  $sendmail = mail($mailTo, $subject, $txt, $headers);

  header("Location: contact?mailsend");
}

?>
