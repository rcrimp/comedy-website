<!--
`send-feedback.php`
This page receives incoming feedback requests via POST,
and mails them to an email account.
-->

<?php
if (!isset($_POST['message'])) {
  return;
}
$to = 'reuben@dunedincomedy.co.nz';
$subject = 'Dunedin Comedy Email Form';

$email = $_POST['email'];
$message = $_POST['message'];

$headers = "From: contact@dunedincomedy.co.nz";
$message = "Contact form:\n\n"
  . "Senders Email:\n$email\n\n"
  . "Message:\n$message\n\n";

if (mail($to, $subject, $message)) {
} else {
  echo "Unable to send message. Sorry about that :(\n\n";
};
  echo "Message sent 👍\n\n";
?>

<html>
<head>
<meta http-equiv="refresh" content="0; url=index.html" />
</head>
<body>
</body>
</html>