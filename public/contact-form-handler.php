<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "ter-lou@live.nl";
  $headers = "From: ".$mailFrom;
  $txt = $message;

  $sendmail = mail($mailTo, $subject, $txt, $headers);

  if ($sendmail) {
      header("Location: contact?mailnotsend");
  } else {
      header("Location: contact?mailsend");
  }

}

?>
