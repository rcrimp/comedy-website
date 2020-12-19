<!--
`send-feedback.php`
This page receives incoming feedback requests via POST,
and mails them to an email account.
-->

<?php
$ballot = "";
foreach ($_POST as $key => $value) {
  $ballot .= htmlspecialchars($key).": ".htmlspecialchars($value)."<br>";
}

$to = 'reuben@dunedincomedy.co.nz';
$subject = 'Dunedin Comedy Vote Ballot';

$email = $_POST['voter'];
$message = $ballot;

$headers = "From: vote@dunedincomedy.co.nz";
$message = "Vote ballot:\n\n"
  . "Voter's Email:\n$email\n\n"
  . "Votes:\n$message\n\n";

if (mail($to, $subject, $message)) {
} else {
  echo "Unable to submit your vote. Sorry about that :(\n\n";
};
  echo $ballot . "Vote Submitted 👍\n\n";
?>

<html>
<head>
<!-- <meta http-equiv="refresh" content="0; url=index.html" /> -->
</head>
<body>
</body>
</html>