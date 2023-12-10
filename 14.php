error_reporting(0);
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
/**[ TIME ]**/
$ngay = date("d-m-Y"); 
$TIME=`date "+%H:%M"`; 
/**[ Bản Quyền ]**/
$dp_tool = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$ndp = $do."[".$trang ."=.=".$do."] ";
/***[ Thanh Trắng ]***/
$thanh_thang_mau_trang = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
/***[ USERAGENT ]***/
$useragent="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36";
$wait = $green."Đợi";
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
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL AUTO CHẤP NHẬN KẾT BẠN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
@system('clear'); 
autokb($banner, $dp_tool, $thanh_thang_mau_trang);
echo $dp_tool.$luc."Nhập Cookie Cần Chạy\033[1;37m: $trang";
$khocookie = (string)trim(fgets(STDIN));
system('clear');
autokb($banner, $dp_tool, $thanh_thang_mau_trang);
echo $dp_tool.$luc."Nhập Delay: $vang ";
$a = trim(fgets(STDIN));
echo $dp_tool.$luc."Chấp Nhận Bao Nhiêu Chống Block\033[1;37m: $vang";
$dungblock = trim(fgets(STDIN));
echo $dp_tool.$luc."Nhập Thời Gian Nghỉ Chống Block\033[1;37m: $vang";
$delaybl = trim(fgets(STDIN));
echo $dp_tool.$luc."Chấp Nhận Bao Nhiêu KB Thì Dừng Tool\033[1;37m: $vang";
$dungtool = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
while (true) {
$header = array( "Host: mbasic.facebook.com", "upgrade-insecure-requests: 1", "save-data: on", "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1803) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site:same-origin", "sec-fetch-mode:navigate", "sec-fetch-user:?1", "sec-fetch-dest:document", "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cookie: $khocookie", );
$url = "https://mbasic.facebook.com/";
$data = '{"Email":"cuonghataycu@gmail.com"}';
$mr = curl_init();
curl_setopt_array($mr, array( CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $header ));
$mr2 = curl_exec($mr);
curl_close($mr);
$json = json_decode($mr2, true);
$c = explode('/a/notifications.php?', $mr2)[1];
$c = explode('"', $c)[0]; $id = explode('/a/notifications.php?confirm=', $mr2)[1];
$id = explode('&', $id)[0];
if ($id == "") {
echo $do . "• Đã Hết Lời Mời Kết Bạn\n";
   echo $dp_tool.$cyan."Nhập Cookie Cần Chạy: $trang";
$khocookie = (string)trim(fgets(STDIN));}
sleep(3);
$url = 'https://mbasic.facebook.com/a/notifications.php?' . htmlspecialchars_decode($c) . '';
$data = '{"Email":"phat96616@gmail.com"}';
$mr = curl_init();
curl_setopt_array($mr, array( CURLOPT_PORT => "443", CURLOPT_URL => "$url", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $header ));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2, true);
$t = random_int(31,37);
    $mau = "\e[1;$t"."m";
    $stt=$stt+1;
    $gio = date("H:i:s");
    echo $vang."[$stt]$do | $xnhac$gio \033[1;31m|$luc Đã chấp nhận \033[1;91m|$mau $id \n";
for ($i = $a; $i >-1 ; $i--) {
echo "\r\033[1;33m   AUTO \033[1;31m ~>       \033[1;32m LO      \033[1;31m >   | $tt | ";
        usleep(150000);
        echo "\r\033[1;31m   AUTO \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m >>  | $tt | ";
        usleep(150000);
        echo "\r\033[1;32m  AUTO \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m >>> | $tt | ";
        usleep(150000);
        echo "\r\033[1;34m   AUTO \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m >   | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m   AUTO \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m >>  | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m   AUTO \033[0;33m        ~>\033[0;37m LOADING \033[0;31m >>> | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m  AUTO \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";
        usleep(150000);
    }
    echo "\r\e[1;95m    🍉AN ORIN🍉    TOOL AUTO CHẤP NHẬN KẾT BẠN              \r";
}
           if ( $stt >= $dungtool ){
    echo $thanh_thang_mau_trang; echo $dp_tool.$luc."Đã Chấp Nhận \033[1;93m".$stt."\033[1;92m Bạn Bè\n";
    echo $dp_tool.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool$vang Chấp Nhận Lời Mời Kết Bạn$trang Của An Orin \n";
    exit;}
                      
                     if($stt % $dungblock == 0 ){
                      delay2($delaybl);
                    } 
           
           function delay2($delaybl){
  $green="\e[1;32m";
  $yellow="\e[1;33m";
  for($j = $delaybl;$j> 0;$j--){
    echo "\r";
    echo "                                                      \r";
    echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
      
           }
  echo "\r";
  echo "                                                      \r";
}
function autokb($banner, $dp_tool, $thanh_thang_mau_trang){
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}