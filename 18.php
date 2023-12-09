<?php
@system("clear");
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
/***[ USERAGENT ]***/
$useragent = 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36';
/***[ Đánh Dấu Bản Quyền ]***/
$dp_tool = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$ndp = $do."[".$trang ."=.=".$do."] ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1200;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Banner ]***/
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL CHỌC BẠN BÈ ĐỂ LẤY TƯƠNG TÁC
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";



$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";


echo $logo;
echo $dp_tool.$luc."Nhập Cookie Facebook\033[1;37m: $vang";
     $cookie = trim(fgets(STDIN));
    echo"\033[1;31m────────────────────────────────────────────────────────────\n";
    #nhập delay
    echo $dp_tool.$luc."Để Delay Trên ".$trang."10 ".$luc."Để Tránh Tình Trạng Checkpoint Nhé!\n";
    echo $dp_tool.$luc."Nhập Thời Gian Chọc\033[1;37m: $vang";
    $a = trim(fgets(STDIN));
    echo"\033[1;31m────────────────────────────────────────────────────────────\n";
    echo $dp_tool.$luc."Số Lần Chọc: $vang";
    $stop = trim(fgets(STDIN));
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
$page = thongtin('me', $cookie, $useragent);
#tách tên
$tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
#tách id
$idfb = explode('%',explode('?lst=', $page)[1])[0];
#chạy job
echo $vang."Đang Cấu Hình ID: ".$luc.$idfb.$do." | ".$vang."Tên FB: ".$luc.$tenfb."".$res."\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
      while (true) {
        $url = "https://mbasic.facebook.com/";
        $header = array(
            "Host: mbasic.facebook.com",
            "upgrade-insecure-requests: 1",
            "save-data: on",
            "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1803) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-site:same-origin",
            "sec-fetch-mode:navigate",
            "sec-fetch-user:?1",
            "sec-fetch-dest:document",
            "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
            "cookie:$cookie",
        );
        $url = "https://mbasic.facebook.com/pokes/?ref_component=mbasic_bookmark&ref_page=XMenuController";
        $data = '{"Email":"phatcutis1tg@gmail.com"}';
        $mr = curl_init();
        curl_setopt_array($mr, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => "$url",
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $mr2 = curl_exec($mr);
        curl_close($mr);
        $json = json_decode($mr2, true);
        $id = explode('/pokes/inline/?', $mr2)[1];
        $id = explode('"', $id)[0];
        $ok = explode('poke_target=', $mr2)[1];
        $ok = explode('&', $ok)[0];
        $url = 'https://mbasic.facebook.com/pokes/inline/?' . htmlspecialchars_decode($id) . '';
 
        $mr = curl_init();
        curl_setopt_array($mr, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => "$url",
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $mr2 = curl_exec($mr);
        curl_close($mr);
        $json = json_decode($mr2, true);
        $stt=$stt+1;
        $rd = rand(1, 7);
        echo "\033[1;31m[\033[1;33m".$stt."\033[1;31m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;33mSUCCESS\033[1;31m | \033[1;37m$ok\n";
        if ( $stt >= $stop ){ echo $do."Đã Chọc Thành Công \033[1;37m$stop \033[1;31mBạn Bè \n";
        exit;
        }

        
for ($i=$a;$i>-1;$i--){
echo "\r\033[1;31m   Đang Đợi Chọc \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m | $i | "; usleep(150000);
echo "\r\033[1;32m   Đang Đợi Chọc \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m | $i | "; usleep(150000);
echo "\r\033[1;34m   Đang Đợi Chọc \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m | $i | "; usleep(150000);
echo "\r\033[1;35m   Đang Đợi Chọc \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m | $i | "; usleep(150000);
echo "\r\033[1;35m   Đang Đợi Chọc \033[0;33m        ~>\033[0;37m LOADING \033[0;31m | $i | "; usleep(150000);
echo "\r\033[1;35m   Đang Đợi Chọc \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $i | ";usleep(150000);
}
echo "\r\e[1;95m    🍉 An Orin 🍉  Đã Xong                  \r"; 
}
function thongtin($id, $cookie, $useragent)
{

    $ch = curl_init();
    $header = array(
        "Host:m.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    $linkbv = 'https://m.facebook.com/' . $id . '/about';
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    $page1 = json_decode($page);

    return $page;
}
function chocbb($banner, $dp_tool ){
    /* Copyright © 2023 - 2024 : An Orin */
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}