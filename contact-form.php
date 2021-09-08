<?php

//echo "Let's put some PHP code\n";

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

$mailTo = "website@domain.com";
$headers = "From: ".$mailFrom;
$txt = "Here is the info:".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contact.html?mailsend");
}