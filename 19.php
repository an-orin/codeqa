error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');


$_SESSION["useragent"] = "Mozilla/5.0 (Linux; Android 10; SM-A750GN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.106 Mobile Safari/537.36";
date_default_timezone_set("Asia/Ho_Chi_Minh");

/***[ Color ]***/
$do="\033[1;91m";
$den="\033[1;33m";
$tim="\033[1;34m";
$luc="\033[1;92m";
$trang="\033[1;97m";
$vang = "\033[1;93m";
$hong = "\033[1;95m";
$xnhac = "\033[1;36m";
$xduong = "\033[1;96m";
/** [ Copyright © 2023 DragonX ] **/
$kov =  "\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> ".$luc;
$thanhngang1 = "\033[1;31m────────────────────────────────────────────────────────────\n";
$logo= "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SPAM BÀI VIẾT
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";

//$logo = logo_kov();

if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
        $len = strlen($logo);
        for ($x = 0; $x < $len; $x++) {
            echo $logo[$x];
            usleep(1200);
        }
    } else { 
        @system('cls'); 
        echo $logo;
    }
    

$khoCK = [];
$khoTK = [];
//echo $kov."Nhập cookie acc dùng để comment\n";

echo $kov."Nhập Cookie Facebook: ".$vang;
$cookie = trim(fgets(STDIN));



if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
        $len = strlen($logo);
        for ($x = 0; $x < $len; $x++) {
            echo $logo[$x];
            usleep(1200);
        }
    } else { 
        @system('cls'); 
        echo $logo;
    }
    


echo $kov."Nhập Nội Dung Cần Spam: ".$trang;
$msg1 = trim(fgets(STDIN));
echo $kov."\033[1;32mBật Chống Phát Hiện Spam CMT \033[1;33m(\033[1;37my/n\033[1;33m)\033[1;97m:\033[1;93m ";
$chongspam = trim(fgets(STDIN));
echo $kov."Nhập ID Bài Viết: ".$trang;
$id = trim(fgets(STDIN));
echo $kov."Nhập Delay: ".$trang;
$SEC = trim(fgets(STDIN));

$token_eaag = tk_clshaenscasjcbascascas($cookie);
$check = req_clshaenscasjcbasjcbsascascas("https://graph.facebook.com/me/?fields=id,name&access_token=" . $token_eaag, $cookie);
$check2 = json_decode($check, true);
if (strpos($check, 'id') == true) {
    $idfb = $check2["id"];
    $tenfb = $check2["name"];
}

echo $thanhngang1;
echo $luc."Đang Chạy ID: ".$trang.$tenfb.$luc." Name: ".$trang.$idfb."\n";
echo $thanhngang1;

$dem = 0;
while(true){
    if($dem % 10 == 0){
        $check = req_clshaenscasjcbasjcbsascascas("https://graph.facebook.com/me/?fields=id,name&access_token=" . $token_eaag, $cookie);
        $check2 = json_decode($check, true);
        if (strpos($check, 'id') == true) {
            $idfb = $check2["id"];
            $tenfb = $check2["name"];
        }
        if($idfb == ""){
            echo $kov.$do."Cookie Die!\n";
            echo $kov."Nhập Cookie Facebook: ".$vang;
            $cookie = trim(fgets(STDIN));
            $token_eaag = tk_clshaenscasjcbascascas($cookie);

            $check = req_clshaenscasjcbasjcbsascascas("https://graph.facebook.com/me/?fields=id,name&access_token=" . $token_eaag, $cookie);
            $check2 = json_decode($check, true);
            if (strpos($check, 'id') == true) {
                $idfb = $check2["id"];
                $tenfb = $check2["name"];
            }
            if($idfb != ""){
            echo $thanhngang1;
            echo $luc."Đang Chạy ID: ".$trang.$tenfb.$luc." Name: ".$trang.$idfb."\n";
            echo $thanhngang1;
            }
        }
    }
    $dem++;
    $time = date("d-m-Y H:i:s");
    if($chongspam == "y" or $chongspam == "Y"){
        $msg = $time."
".$msg1;
    }
    cmt_fb_cookie_new($id,$cookie,$msg);
    echo $do."[".$vang.$dem.$do."]".$luc." | ".$hong.date("H:i:s").$luc." |".$trang.$id.$luc." | ".$xnhac.$msg."\n";
    loadtime_clshaenscasjcbsascascas($SEC);


}
    
/*
function loadtime_clshaenscasjcbsascascas($SEC)
{
    for($tt = $SEC ;$tt>= 1;$tt--){
        echo "\r\033[1;33m   SPAM CMT \033[1;31m ~>       \033[1;32m LO      \033[1;31m >   | $tt | "; usleep(150000);
        echo "\r\033[1;31m   SPAM CMT \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m >>  | $tt | "; usleep(150000);
        echo "\r\033[1;32m   SPAM CMT \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m >>> | $tt | "; usleep(150000);
        echo "\r\033[1;34m   SPAM CMT \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m >   | $tt | "; usleep(150000);
        echo "\r\033[1;35m   SPAM CMT \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m >>  | $tt | "; usleep(150000);
        echo "\r\033[1;35m   SPAM CMT \033[0;33m        ~>\033[0;37m LOADING \033[0;31m >>> | $tt | "; usleep(150000);
        echo "\r\033[1;35m   SPAM CMT \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);
    } 
        echo "\r\e[1;95m    🍉 DragonX Tool 🍉      SPAM COMMENT                 \r"; 
}
*/
function loadtime_clshaenscasjcbsascascas($SEC)
{
    for ($i = $SEC; $i >= 0; $i--) {
        echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mx.x.x.x.x\033[1;93m]       \r";
        usleep(166666);
        echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.x.x.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.x.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.X.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.X.X\033[1;93m]       \r";
       usleep(166666);
    }
    //echo "\r\033[1;9" . rand(1, 9) . "m " . "Tool Bản Quyền An Orin" . "       \r";
//    kiemtramang_dragonx();
}

function req_clshaenscasjcbasjcbsascascas($url, $cookie)
{
    $ch   = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER =>
            array(
                "Cookie:" . $cookie,
            ),
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_ENCODING => TRUE,
        )
    );
    $ch = curl_exec($ch);
    return $ch;
}






function tk_clshaenscasjcbascascas($cookie)
{
    $useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.facebook.com/adsmanager/manage/campaigns');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Authority: business.facebook.com';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"95\", \"Chromium\";v=\"95\", \";Not A Brand\";v=\"99\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: ' . $useragent;
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cookie: ' . $cookie;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $access = curl_exec($ch);
    if (curl_errno($ch)) {
        return 'die';
    }
    curl_close($ch);


    $ch = curl_init();
    $link = explode('&nav_source', explode('campaigns?act=', $access)[1])[0];
    curl_setopt($ch, CURLOPT_URL, 'https://www.facebook.com/adsmanager/manage/campaigns?act=' . $link . '&nav_source=no_referrer');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Authority: business.facebook.com';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"95\", \"Chromium\";v=\"95\", \";Not A Brand\";v=\"99\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: ' . $useragent;
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cookie: ' . $cookie;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $access1 = curl_exec($ch);
    $access_token = explode('";', explode('accessToken="', $access1)[1])[0];
    if ($access_token != '') {
        return $access_token;
    } else {
        return 'die';
    }
}
function cmt_fb_cookie_new($id,$cookie,$msg){
$mr = curl_init();
$head = [
    "Host:mbasic.facebook.com",
    'sec-ch-ua:"Google Chrome";v="87", " Not;A Brand";v="99", "Chromium";v="87"',
    "sec-ch-ua-mobile:?1",
    "cache-control:max-age=0",
    "upgrade-insecure-requests:1",
    "dnt:1",
    "save-data:on",
    "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
    "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "sec-fetch-site:same-origin",
    "sec-fetch-mode:navigate",
    "sec-fetch-user:?1",
    "sec-fetch-dest:document",
    "referer:https://mbasic.facebook.com/",
    "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",];
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/$id");
curl_setopt($mr, CURLOPT_COOKIE, $cookie);
curl_setopt($mr, CURLOPT_HTTPHEADER, $head);
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($mr, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($mr, CURLOPT_FOLLOWLOCATION, TRUE);
$mr2 = curl_exec($mr);
$fb_dtsg = explode('"',explode('fb_dtsg" value="',$mr2)[1])[0];
$jazoest = explode('"',explode('jazoest" value="',$mr2)[1])[0];
$cmt = explode('"',explode('action="/a/comment.php?',$mr2)[1])[0];
$text = "fb_dtsg=".$fb_dtsg."&jazoest=".$jazoest."&comment_text=".$msg;
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/a/comment.php?".htmlspecialchars_decode($cmt));
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_POSTFIELDS, $text);
$mr2 = curl_exec($mr);
curl_close($mr);
}
