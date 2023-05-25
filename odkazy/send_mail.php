<?php

if (isset($_POST['submit'])) {
$name = $_POST["name"];
$code = $_POST["code"];
$mail = $_POST["mail"];
$message = $_POST["message"];

$mailTo = "lovicfilip@gmail.com";
$headers = "From: ".$mail;
$txt = "You have received an e-mail from".$name."./n/n".$message;

mail($mail, $code, $txt, $headers);
header("Location: index.php?mailsend");
}
?>