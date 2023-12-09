<?php
@system('clear');
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
/***[ Đánh Dấu Bản Quyền ]***/
$dp_tool = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
$ndp = $do."[" . $trang . "=.=" . $do . "] ";
$thanh_thang_mau_trang = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
/***[ USERAGENT ]***/
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.51 Mobile Safari/537.36";
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
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL KHIÊN AVATAR FB
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
batkhien($banner, $dp_tool, $thanh_thang_mau_trang);
echo $dp_tool.$luc."Vui Lòng Nhập Token Facebook$trang:$vang ";
$token =trim(fgets(STDIN));
@system('clear');
batkhien($banner, $dp_tool, $thanh_thang_mau_trang); 
echo $dp_tool."".$luc."Nhập Số ".$do."[".$vang."1".$do."] ".$luc."Để Bật Khiên Avatar\n";
echo $dp_tool."".$luc."Nhập Số ".$do."[".$vang."2".$do."] ".$luc."Để Bật Tắt Khiên Avatar\n";
echo $thanh_thang_mau_trang;
echo $dp_tool.$luc."Vui Lòng Nhập Lựa Chọn$trang:$vang ";
$cd =trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
if($cd == '1'){
	$nv = 'true';
	$nt = 'Bật Khiên Avatar Thành Công';
}
if($cd == '2'){
	$nv = 'false';
	$nt = 'Tắt Khiên Avatar Thành Công';
}
$header = array( 
"Host:tuongtaccheo.com",
"upgrade-insecure-requests:1",
"origin:https://tuongtaccheo.com",
"content-type:application/x-www-form-urlencoded",
"user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
"referer:https://tuongtaccheo.com/batkhienavatar.php",
);
$data = 'tokencai='.$token.'&online='.$nv.'&caidat=C%C3%A0i+%C4%91%E1%BA%B7t';
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtaccheo.com/batkhienavatar.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr); 

$ok = explode('</nav><script>alert("', $mr2)[1];
$ok = explode('"', $ok)[0];
if($ok == 'Cài đặt thành công'){
echo $BGreen." $nt \n";
}else{
echo $do."Token Die, Vui Lòng Kiểm Tra Lại!! \n";
}
function batkhien($banner, $dp_tool, $thanh_thang_mau_trang){
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}