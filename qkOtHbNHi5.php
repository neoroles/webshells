<?php
$sender = "localhost";

$recipient = isset ($_POST["to"]) ? $_POST["to"] : null;
$subject = isset ($_POST["subject"]) ? $_POST["subject"] : null;
$message = isset ($_POST["msg"]) ? $_POST["msg"] : null;
$headers = "From:" . $sender;

if(mail($recipient, $subject, $message, $headers))
{return  "Check your test email";}
else{return "BAD!";}
?>