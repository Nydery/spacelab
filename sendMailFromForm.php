<?php
  if (!isset($_POST['submit'])){
    echo "error; you need to submut the form!";
  }
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

if (empty($name) || empty($visitor_email) || empty($message)) {
  echo "Name, Email and message are mandatory!"
  exit;
}

$email_from = "business@space-lab.at";
$email_subject = "Neue Webformularnachricht";
$email_body = "Eine neue Nachricht vom Webformular ist angekommen. \n\nName/Firmenname: $name \nEmail: $visitor_email \nNachricht: \n$message";

$to = $email_from;
$headers = "From: $email_from";

mail($to, $email_subject, $email_body, $headers)

 ?>
