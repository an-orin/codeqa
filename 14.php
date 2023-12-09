<?php
@system('clear');
error_reporting(1);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
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
/***[ Đánh Dấu Bản Quyền ]***/
$dp_tool = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$ndp = $do."[".$trang ."=.=".$do."] ";
$thanh_thang_mau_trang = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1200;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL HỦY FOLOW FACEBOOK
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
huytheodoi($banner, $dp_tool, $thanh_thang_mau_trang);
echo $dp_tool.$luc."Nhập Cookie Facebook".$trang.": $vang";
$cookie=trim(fgets(STDIN));
system('clear'); 
huytheodoi($banner, $dp_tool, $thanh_thang_mau_trang);
$urlcheckfb = "https://mbasic.facebook.com/home.php?";
$headersfb = array ( "Host: mbasic.facebook.com", "upgrade-insecure-requests: 1", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*"."/"."*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: same-origin", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cookie: $cookie", ); 
$curlcheckfb = curl_init(); 
curl_setopt_array($curlcheckfb, 
array( CURLOPT_URL => "$urlcheckfb",
CURLOPT_ENCODING => "", 
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => $headersfb ));
$curlcheckfb1 = curl_exec($curlcheckfb);
curl_close($curlcheckfb); 
$uid1 = explode('/><input type="hidden" name="target" value="',$curlcheckfb1)[1];
$uid = explode('"',$uid1)[0]; 
$url1 = "https://m.facebook.com/timeline/app_collection/?collection_token=$uid%3A2356318349%3A33&_rdr";
echo $dp_tool.$luc."Vui Lòng Nhập Delay Hủy Theo Dõi".$trang.": $vang";
$time=trim(fgets(STDIN)); 
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
while (true){ 
  $head_fb=array( "Host:mbasic.facebook.com", "cache-control:max-age=0", "upgrade-insecure-requests:1", "save-data:on", "user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36", "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site:cross-site", "sec-fetch-mode:navigate", "sec-fetch-user:?1", "sec-fetch-dest:document", "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cookie:$cookie", ); 
  $mr = curl_init();
  curl_setopt_array($mr, 
  array( CURLOPT_URL => $url1,
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30, 
  CURLOPT_CUSTOMREQUEST => "GET", 
  CURLOPT_HTTPHEADER => $head_fb)); 
  $mr2 = curl_exec($mr); 
  curl_close($mr); 
  $so=explode('<span class="bc by bz ca">',$mr2); 
  $so=explode("</span>",$so[1]);
  $link=explode('<a href=',$mr2); 
  $link=explode('"',$link[5]); 
  $ch = curl_init();
  curl_setopt_array ($ch, array ( CURLOPT_URL => "https://mbasic.facebook.com/".htmlspecialchars_decode($link[1]),
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_HTTPGET => true, 
  CURLOPT_SSL_VERIFYPEER => 0, 
  CURLOPT_HTTPHEADER => $head_fb,
  CURLOPT_HEADER => true,
  CURLOPT_ENCODING => TRUE)); 
  $data = curl_exec($ch);
  $ten=explode ("<head><title>",$data); 
  $ten=explode("</title>",$ten[1]); 
  $hien=$ten[0]; 
  if ($hien=="Giờ bạn chưa dùng được tính năng này\n"){ exit($lightred."Bạn Bị Dính Spam!!\n"); } 
  if ($hien=="Đăng nhập Facebook" or $hien=="Facebook - Đăng nhập hoặc đăng ký"){ exit($lightred."Die Cookie Rồi!!\n"); }
  $tim=explode("/mbasic/more/?",$data); 
  $tim=explode('"',$tim[1]); 
  $ch = curl_init();
  curl_setopt_array ($ch, array ( CURLOPT_URL => "https://mbasic.facebook.com/mbasic/more/?".htmlspecialchars_decode($tim[0]),
  CURLOPT_FOLLOWLOCATION => false, 
  CURLOPT_RETURNTRANSFER => 1, 
  CURLOPT_POST => 1, 
  CURLOPT_HTTPGET => true, 
  CURLOPT_SSL_VERIFYPEER => 0, 
  CURLOPT_HTTPHEADER => $head_fb,
  CURLOPT_HEADER => true,
  CURLOPT_ENCODING => TRUE));
  $data = curl_exec($ch); 
  $un=explode("/a/subscriptions/remove?",$data); 
  $un=explode('"',$un[1]); $ch = curl_init();
  curl_setopt_array ($ch, array ( CURLOPT_URL => "https://mbasic.facebook.com/a/subscriptions/remove?".htmlspecialchars_decode($un[0]),
  CURLOPT_FOLLOWLOCATION => false, 
  CURLOPT_RETURNTRANSFER => 1, 
  CURLOPT_POST => 1, 
  CURLOPT_HTTPGET => true, 
  CURLOPT_SSL_VERIFYPEER => 0, 
  CURLOPT_HTTPHEADER => $head_fb, 
  CURLOPT_HEADER => true, 
  CURLOPT_ENCODING => TRUE));
  $data = curl_exec($ch); $job++; 
  echo $xnhac."[".$vang.$job.$xnhac."] ".$do."| ".$vang."Hủy Theo Dõi Thành Công ".$do." | ".$trang.$hien.$do." |".$vang." Còn ".$trang.$so[0].$vang." Người\n";
  $dung=1; if ( $so[0] == $dung ) { 
    echo $dp_tool.$luc."Đã Unfollow Xong\n"; 
    exit;} 
    for ($hk=$time;$hk>-1;$hk--){ 
echo "\r\033[1;33m   Un-follow \033[1;31m ~>       \033[1;32m LO      \033[1;31m >   | $hk | ";
        usleep(150000);
        echo "\r\033[1;31m   Un-follow \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m >>  | $hk | ";
        usleep(150000);
        echo "\r\033[1;32m   Un-follow \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m >>> | $hk | ";
        usleep(150000);
        echo "\r\033[1;34m   Un-follow \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m >   | $hk | ";
        usleep(150000);
        echo "\r\033[1;35m   Un-follow \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m >>  | $hk | ";
        usleep(150000);
        echo "\r\033[1;35m   unfollow \033[0;33m        ~>\033[0;37m LOADING \033[0;31m >>> | $hk | ";
        usleep(150000);
        echo "\r\033[1;35m   Un-follow \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $hk | ";
        usleep(150000);
    }
    echo "\r\e[1;95m    🍉AN ORIN🍉    Hủy Follow              \r";
}

function huytheodoi($banner, $dp_tool, $thanh_thang_mau_trang){
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}