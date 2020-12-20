<!--
`send-feedback.php`
This page receives incoming feedback requests via POST,
and mails them to an email account.
-->

<?php
$voteremaillist = array(						
	"024de771-c736-4972-b6c1-cefc25f111e1" => "chewie_nz@orcon.net.nz",
	"03eba4b7-6256-4476-9d80-d018223dec27" => "elsadaisy@gmail.com",
	"1d6e2403-fdcd-4f38-83c1-561ae3abe0ed" => "rename.gerard@gmail.com",
	"2391ce85-4594-485c-be38-cdf07cbddc2f" => "harriet_moir@hotmail.com",
	"27c67446-7e79-4f20-bab6-ba704eb07ac8" => "jbagman46@gmail.com",
	"2be0a261-d712-407d-b253-1bf83eb1af33" => "jonfalco@gmail.com",
	"331f7a8f-c757-4b28-bfb9-7c1e425f4188" => "josh@dunedincomedy.co.nz",
	"3fe8fd53-31a5-4cfd-b71a-ae6e6c9c35b3" => "kate.hansen0@gmail.com",
	"4babb548-3b2f-4027-9ec4-230a0d81b612" => "reubencrimp@gmail.com",
	"51c3cbb7-97be-4d90-8177-73c182310b4e" => "rex.jacobus@gmail.com",
	"5b4605b9-9b17-47d1-8b36-fbdaedd516f6" => "nzrobmclennan@gmail.com",
	"61c0f8d7-fab3-4436-b348-6325a438b92a" => "sarperd@gmail.com",
	"70593f22-4b7b-499b-8c44-794ec896dcc1" => "elisalaughs@yahoo.com",
	"7d870605-0ee3-4551-b69d-6a74e11bd870" => "az.davies87@gmail.com",
	"92dcdf94-254f-48f5-a436-29d8cda1a7f2" => "carrie.ankerstein@otago.ac.nz",
	"948d1e83-76d4-45f9-a401-84fee7d63239" => "jenny.beatrix@outlook.com",
	"9d8d3b8d-9cae-4879-aed1-a5154f07c1d2" => "nicola@nicolabrown.co",
	"a9c49081-8632-469d-bf73-787631477b68" => "warwi639@student.otago.ac.nz",
	"acbea2ff-e446-4315-b17c-c81e0370134e" => "ianloff@yahoo.com.au",
	"b487265a-0921-4316-98a1-a45fa6a09890" => "whyisnick@gmail.com",
	"bd284da5-2ffb-4043-9e82-2554d1da04be" => "skingsleyholmes@ymail.com",
	"c145d29a-9b0c-454d-8a6d-131a36db7e97" => "roslyn.n@xtra.co.nz",
	"ccbe09a4-3143-403c-9070-fa9edeeb6618" => "mikeeyt1@gmail.com",
	"cdab2186-03b0-41e8-8519-2c1c1de1ade9" => "danielbrader@hotmail.com",
	"91f0a002-6dd6-46f8-be2d-7eb8737e98b6" => "nomd_rocks@hotmail.com",
	"6b9f4df5-e8b0-4c31-9ba2-0fdd212d9b35" => "Mabha921@gmail.com",
	"69420694-6942-6942-6952-694206942069" => "test@mail.com"
);

$voterid = $_POST['voterid'];
$email = $voteremaillist[$voterid];

$ballot = "";
foreach ($_POST as $key => $value) {
  $ballot .= htmlspecialchars($key).": ".htmlspecialchars($value)."\n\n";
}

$to = 'reuben@dunedincomedy.co.nz';
$subject = 'Dunedin Comedy Vote Ballot';

$headers = "From: vote@dunedincomedy.co.nz";
$message = "Vote ballot:\n\n"
  . "Voter's Email:\n$email\n\n"
  . "Votes:\n$ballot\n\n";

if (mail($to, $subject, $message)) {
} else {
  echo "Unable to submit your vote. Sorry about that :(\n\n";
};
  echo "Vote Submitted 👍\n\n";
?>

<html>
<head>
<!-- <meta http-equiv="refresh" content="0; url=index.html" /> -->
</head>
<body>
</body>
</html>