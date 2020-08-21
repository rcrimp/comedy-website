<!--
`send-feedback.php`
This page receives incoming feedback requests via POST,
and mails them to an email account.
-->

<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if (!isset($_POST['message'])) {
  return;
}
$to = 'reubencrimp@gmail.com';
$subject = 'Dunedin Comedy Website';

// $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = "From: hello@dunedincomedy.co.nz";
$message = "Contact Us:\n\n"
  // . "Name:\n$name\n\n"
  . "Contact details:\n$email\n\n"
  . "Feedback:\n$message\n\n";

if (mail($to, $subject, $message)) {
  echo "Thank you for your message.\n\n";
} else {
  echo "We could not send your message. We're sorry about that.\n\n";
};
  echo "You will be redirected back shortly.";
?>

<html>
<head>
</head>
<body>
</body>
</html>