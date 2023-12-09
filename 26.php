<?php
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
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_dep = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
$thanh_xau = $do."[" . $trang . "=.=" . $do . "] ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 2000;
} else {
    $_SESSION['load'] = 0;
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
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL ĐÀO MAIL NGẪU NHIÊN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $thanh_dep.$luc."Nhập Số \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mĐào Mai Ngẫu Nhiên Việt Nam \n";
echo $thanh_dep.$luc."Nhập Số \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mĐào Mai Ngẫu Nhiên Canada \n";
echo $thanh_dep.$luc."Nhập Số \033[1;31m[\033[1;33m3\033[1;31m] \033[1;32mĐào Mai Ngẫu Nhiên Indonesia \n";
echo $thanh_dep.$luc."Nhập Chế Độ : $BWhite";
$cd =trim(fgets(STDIN));
echo $thanh_dep.$luc."Nhập Số Lượng : $BWhite";
$sl =trim(fgets(STDIN));
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo"\033[1;32m";
if($cd == 1){
 $ok = 'vi';
}
if($cd == 2){
 $ok = 'fr_CA';
}
if($cd == 3){
 $ok = 'id_ID';
}
$header = array( 
"Host:randommer.io",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"x-requested-with:XMLHttpRequest",
"user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.1.4692.115 Mobile Safari/537.36",
"origin:https://randommer.io",
"cookie:.AspNetCore.Antiforgery.9TtSrW0hzOs=CfDJ8BcHLuG7rkFCs_Dso3Hovat-2GzQagTslAzRZNwoQBeINDATXIg9MSIHCxUMXt3874Decjzxw3hpW5ENU089b9LSiFAumdxvssJRJhqFNjg_5-sobGW-JXkZKG5JWLJIrFkfyQWKBqQRXbKlaFPVC2s;ezoadgid_232529=-1;ezoref_232529=;ezosuibasgeneris-1=ee92ef02-2c42-48bc-6261-f844cad0800a;ezoab_232529=mod50-c;active_template::232529=pub_site_mobile.1646629484;ezopvc_232529=1;ezepvv=0;ezovid_232529=861186001;lp_232529=https://randommer.io/random-email-address;ezovuuidtime_232529=1646629485;ezovuuid_232529=c167f657-ca6b-45ae-68b5-d3365ca85e4b;ezds=ffid%3D2%2Cw%3D412%2Ch%3D846;ezohw=w%3D412%2Ch%3D670;__qca=P0-302902679-1646629492712;ezux_lpl_232529=1646629493555|8287ea7e-93e1-4a1c-7e71-eb20b15742e4|false;ezux_ifep_232529=true;ezux_et_232529=44;ezux_tos_232529=122",
);
$data = 'number='.$sl.'&culture='.$ok.'&__RequestVerificationToken=CfDJ8BcHLuG7rkFCs_Dso3HovaunZoV0yfM0JmwlAX5Mf5liQ6n1AO9SwJgh29j9I_M0-UOl1jN_RpqfJotDtO3oy9LiJNwtltY3BtH-cuWBlykQNnvkyVhXwP5CHfrlRcoDsjbGDyWwuXvZ13OBoBDZ9Ms&X-Requested-With=XMLHttpRequest';
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://randommer.io/random-email-address');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr); 

$id = explode('["', $mr2)[1];
$id = explode('"]', $id)[0];
echo " $id \n";
$f = fopen("mail.txt","a");
$luu = fwrite($f,"\n$id");
fclose($f);
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo $thanh_dep.$luc."Thành Công Lưu Tại File \033[1;33mmail.txt \n";