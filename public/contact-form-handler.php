<<?php

if (isset($_POST['Button'])) {
  $name = $_POST['Naam'];
  $subject = $_POST['Onderwerp'];
  $mailFrom = $_POST['Email'];
  $message = $_POST['Bericht'];

  $mailTo = "ter-lou@live.nl";
  $headers = "From: ".$mailFrom;
  $txt = $message;

  mail($mailTo, $subject, $txt, $headers);

  header("Location: {{route('contact')}}");
}


?>
