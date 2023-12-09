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
$cyan= "\e[1;36m";
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_xau = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$thanh_dep = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$thanh = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$vinh = $trang . "\033[1;31m────────────────────────────────────────────────────────────\n";
$_SERVER["host_tool"] = ".   ";
/***[ Key Free ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL AUTO ĐÀO PROXY
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
home:
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $thanh.$do."Lưu Ý: ".$luc."Tool Sẽ Đào Và Check Proxy Die Hay Live Nhé!!!\n";
echo $thanh_dep.$luc."Nhập Số Lượng Proxy Muốn Đào: $vang";
$sl = trim(fgets(STDIN));
echo $thanh_dep.$luc."Lưu Proxy Live: $vang";
$filelive = trim(fgets(STDIN));
echo $vinh;
$get = json_decode(file_get_contents("https://proxylist.geonode.com/api/proxy-list?limit=".$sl."&page=1&sort_by=lastChecked&sort_type=desc&protocols=http,https,socks4,socks5"),true);
for($xz=0;$xz<count($get["data"]);$xz++){
	$ip = $get["data"][$xz]["ip"];
	$port = $get["data"][$xz]["port"];
	$qgia = $get["data"][$xz]["country"];
	$proxy = $ip.":".$port;
	$code = laycode($proxy);
	$data =  file_get_contents("http://www.proxy-checker.org/checkproxy.php?proxy=".$proxy."&code=".$code);
	$ip = explode("</td>",explode("/></td><td>", $data)[1])[0];
	$port = explode("</td>",explode($ip."</td><td>", $data)[1])[0];
	$work = explode("</td>",explode($port."</td><td>", $data)[1])[0];
	$level = explode("</td>",explode($work."</td><td>", $data)[1])[0];
	$country = explode("</td>",explode($level."</td><td>", $data)[1])[0];
	$dem++;
    if ($work == "working"){
            echo $thanh."\033[1;34m[\033[1;33m".$dem."\033[1;34m]".$luc."Proxy LIVE: ".$vang.$proxy.$trang." | ".$luc."Country:".$trang.$country."\n";
            $k = fopen($filelive,"a");
			fwrite($k, $proxy." | ".$country.PHP_EOL);
			fclose($k);
            } else {
            echo $thanh."\033[1;34m[\033[1;33m".$dem."\033[1;34m]".$do."Proxy DIE: ".$do.$proxy.$trang." | ".$luc."Country: ".$trang.$country."\n";
            }
}
if($dem % $sl == 0){
		unset($dem);
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			echo $thanh_dep.$luc."Cảm Ơn Bạn Đã Sử Dụng ".$vang."An Orin\n";
			exit;
		}
	}
function laycode($proxy){
$header = array( 
"accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"host:www.proxy-checker.org",
"origin:http://www.proxy-checker.org
proxy-connection:keep-alive",
"referer:http://www.proxy-checker.org/",
"upgrade-insecure-requests:1",
"user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36"
);
$data = 'list='.$proxy;
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'http://www.proxy-checker.org/result.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
$access = curl_exec($mr);
curl_close($mr);
$code = explode("'>", explode("code='", $access)[1])[0];
return $code;
}