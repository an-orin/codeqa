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
/***[ USERAGENT ]***/
$useragent = 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36';
/***[ Đánh Dấu Bản Quyền ]***/
$ndp_tool = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$ndp = $do."[".$trang ."=.=".$do."] ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1200;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Config ]***/
$_SESSION['version'] = "1.2";
$_SESSION['shop'] = "Subre69.site";
$job = 10;
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SHARE ẢO MAX SPEED
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
/***[ Clear + Thông Số Admin ]***/
@system('clear');
shareao($banner, $ndp_tool);
while(true){
echo $ndp_tool.$luc."Vui Lòng Nhập Cookie Facebook".$trang.":".$vang." ";
$ck = trim(fgets(STDIN));
$tk = laytoken($ck, $useragent);
if ( $tk == "die" ){
	echo $ndp_tool.$do."Cookie Die Rồi!\n";
	continue;
}else{
	echo $ndp_tool.$xnhac."Get Thông Tin Thành Công...\n";
	break;
}
}
echo "\e[1;31m".str_repeat('──', 32)."\n";
echo $ndp_tool.$luc."Vui Lòng Nhập UID Post".$trang.":".$vang." ";
$id = trim(fgets(STDIN));
echo "\e[1;31m".str_repeat('──', 32)."\n";
echo $ndp_tool.$luc."Bạn Muốn Chạy Bao Nhiêu Share Thì Dừng Tool".$trang.":".$vang." ";
$dung= trim(fgets(STDIN));
# NHẬP DELAY
@system('clear');
shareao($banner, $ndp_tool);
echo $ndp_tool.$luc." UID POST CỦA BẠN LÀ".$trang.": ".$vang.$id." \n";
echo "\e[1;31m".str_repeat('──', 32)."\n";
while(true){
$share = share($tk,$id,$ck);
$id_s = $share["id"] ;
if ( !$id_s ){
	echo $ndp_tool.$do."Share Thất Bại Rồi Kiểm Tra Acc Hoặc ID Bài Viết!!\n";
	
}else{
$time = date("H:i");
$tt = $tt+1;
echo "".$do." [".$vang.$tt.$do."] | ".$xnhac.$time.$do." | ".$vang."SHARE".$do." | ".$trang.$id_s.$do." | \n";
if ( $tt == $dung ){
	echo "\e[1;31m".str_repeat('──', 32)."\n";
	echo $ndp_tool.$xnhac."Đã Chạy Hoàn Thành ".$trang.$tt.$xnhac." Share\n";
	echo "\e[1;31m".str_repeat('──', 32)."\n";
	exit;
}
}
}

function laytoken($cookie, $useragent) {
    $head= array("Connection: keep-alive","Keep-Alive: 300","authority: business.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document");
$ch=curl_init();
	curl_setopt_array($ch , array(
		CURLOPT_URL => "https://business.facebook.com/business_locations",
		CURLOPT_USERAGENT => $useragent,
		CURLOPT_COOKIE => $cookie,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = curl_exec($ch);
	curl_close($ch);
$access_token = 'EAAG'.explode('","', explode('EAAG', $access)[1])[0];
if(strlen($access_token) > 5){
	return $access_token;
} else {
	return 'die';
}
}

function share($tk,$id,$ck) {
 $url = "https://graph.facebook.com/me/feed?link=https://m.facebook.com/".$id."&published=0&access_token=".$tk;
 
 
 $tsm = array (
 'accept: */*',
        'accept-encoding: gzip, deflate',
        'connection: keep-alive',
        'content-length: 0',
        'cookie:'.$ck,
        'host: graph.facebook.com',
 );
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr2,true);
   return $js;
}
function shareao($banner, $ndp_tool){
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}