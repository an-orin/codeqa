<?php
error_reporting(0);
session_start();
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;33m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$van = $do."[".$trang ."=.=".$do."] ".$trang."=> ";

$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL UNFOLLOW TIKTOK
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
echo $van."\033[1;32mNhập Cookie Tiktok: ".$vang;

$ck = trim(fgets(STDIN));

@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
$text = get_tt($ck,$van);
echo $van."\033[1;32m";
$us = check_us($ck);
$user_id = $text["data"]["user_id"];
$sec_user_id = $text["data"]["sec_user_id"];
$username = $text["data"]["username"];
echo $van."\033[1;32mID TIKTOK : \033[1;33m".$username." \n";
echo $van."\033[1;32mID Số : \033[1;33m".$user_id." \n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
$url_1 = "https://www.tiktok.com/api/user/list/?aid=1988&app_language=vi-VN&app_name=tiktok_web&battery_info=0.5&browser_language=vi-VN&browser_name=Mozilla&browser_online=true&browser_platform=Linux%20armv8l&browser_version=5.0%20%28Linux%3B%20Android%208.1.0%3B%20CPH1912%20Build%2FO11019%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F109.0.5414.118%20Mobile%20Safari%2F537.36&channel=tiktok_web&cookie_enabled=true&count=30&device_id=7198137736682866178&device_platform=web_mobile&focus_state=true&from_page=user&history_len=4&is_fullscreen=false&is_page_visible=true&maxCursor=0&minCursor=0&os=android&priority_region=VN&referer=https%3A%2F%2Fwww.tiktok.com%2Flogin%2Fphone%2Fdigit-code&region=VN&root_referer=https%3A%2F%2Fwww.tiktok.com%2Flogin%2Fphone-or-email&scene=21&screen_height=760&screen_width=360&secUid=".$sec_user_id."&tz_name=Asia%2FSaigon&verifyFp=verify_ldx2wdap_6oyYOunp_XEuD_43Jp_Bbvy_6B184WI1Lfdj&webcast_language=vi-VN&msToken=qzTM0wnK_WymXntuYRGZ3_H2_bj_sdSSDHW589KDSLeozLGt6zlCA5vtn_6tBthdPV-rBE7gDe48JSo-JZTFTldsJvxECt2M8l-HmbX3BS2Y1752uiH2_qyy3ripFoYiwlt5DlxBYLjplKo=&X-Bogus=DFSzswVueSUANjlxShDTVP4A2FD3&_signature=_02B4Z6wo00001Oe9UjAAAIDBV7drAKnF7PjnvVaAAFoR0a";
$tsm_1 = array(
"Host:www.tiktok.com",
"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.118 Mobile Safari/537.36",
"accept:*/*",
"cookie:".$ck,
);
$tt = 0;

while(true){
	$text_1 = get_link($url_1, $tsm_1);
	$sl = $text_1["total"];
	if ($sl == "0" ){
		echo $van." \033[1;32mTài Khoản Hiện Tại Không Follow Tài Khoản Nào \n";
		exit();
	}
	echo $van." Tìm Thấy ".$sl." Tài Khoản Bạn Đang Follow \n";
	for ($so = 0; $so < 10 ; $so++) {
		$id = $text_1["userList"][$so]["user"]["id"];
		if(!$id){
			echo $van." \033[1;32mKhông Tìm Thấy Tài Khoản \r";
		} else {
		
		$secUid = $text_1["userList"][$so]["user"]["secUid"];
		$uniqueId = $text_1["userList"][$so]["user"]["uniqueId"];
		$tt = $tt+1 ;
		echo"\033[1;31m| \033[1;36m$tt".$do." | ".$vang.$id.$do." | ".$trang.$uniqueId." \n";
		}
		
		if ($us == "V"){
		unfollowv($ck,$id,$secUid);
		}else if ($us == "U"){
			exit(" Acc Us An Chưa Làm Xong ");
		}
		
	}
}



function unfollowv($ck,$id,$secUid){
	$url_1 = "https://www.tiktok.com/api/commit/follow/user/";
	$tsm_1 = array(
	"Host:www.tiktok.com",
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.118 Mobile Safari/537.36",
	"x-secsdk-csrf-version:1.2.11",
	"x-secsdk-csrf-request:1",
	"accept:*/*",
	"cookie:".$ck,
	);
	$text_1 = get_link2($url_1, $tsm_1);
	$xx = explode(',',explode('x-ware-csrf-token: 0,',$text_1)[1])[0];
	$tt_token = explode(';',explode('tt_csrf_token=',$ck)[1])[0];
	$s_v_web_id = explode(';',explode('s_v_web_id=',$ck)[1])[0];
	if (!$s_v_web_id ){
	$url_2 = "https://www.tiktok.com/api/commit/follow/user/?aid=1988&app_language=vi-VN&app_name=tiktok_web&battery_info=0.76&browser_language=vi-VN&browser_name=Mozilla&browser_online=true&browser_platform=Linux%20armv8l&browser_version=5.0%20%28Linux%3B%20Android%2010%3B%20M40_EEA%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F110.0.5397.208%20Mobile%20Safari%2F537.36&channel=tiktok_web&channel_id=0&cookie_enabled=true&device_id=7200334878171219461&device_platform=web_mobile&focus_state=true&from=18&fromWeb=1&from_page=user&from_pre=0&history_len=12&is_fullscreen=false&is_page_visible=true&os=android&priority_region=VN&referer=https%3A%2F%2Fwww.tiktok.com%2F%3Flang%3Dvi-VN&region=VN&root_referer=https%3A%2F%2Fwww.tiktok.com%2F%3Flang%3Dvi-VN&screen_height=760&screen_width=360&sec_user_id=".$secUid."&type=0&tz_name=Asia%2FSaigon&user_id=".$id."&webcast_language=vi-VN&msToken=_R4c-Yhg7pcsL1rOZ3zPflOgLYYUncDJt3b9LAKpUYMRD_pnHenyjY4cHvIzK4qdcyu4Ia3YQljCt8sKTogDfOff28tjAgeFyetQnhV1i_CBn5S091Jccc4a0g0n7B8oT2YGMRtXp32sxkaceQ==&X-Bogus=DFSzswVuxjzANnsPSgATXse3sUXY&_signature=_02B4Z6wo00001XS09-QAAIDAfYvCQVCIpml0tPNAAD7i24";
	}else{
		$url_2 = "https://www.tiktok.com/api/commit/follow/user/?aid=1988&app_language=vi-VN&app_name=tiktok_web&battery_info=0.7&browser_language=vi-VN&browser_name=Mozilla&browser_online=true&browser_platform=Linux%20armv8l&browser_version=5.0%20%28Android%2010.3%3B%20Tablet%3B%20rv%3A122.0%29%20Gecko%2F122.0%20Firefox%2F122.0&channel=tiktok_web&channel_id=0&cookie_enabled=true&device_id=7200334878171219461&device_platform=web_mobile&focus_state=true&from=18&fromWeb=1&from_page=user&from_pre=0&history_len=19&is_fullscreen=false&is_page_visible=true&os=android&priority_region=VN&referer=https%3A%2F%2Fwww.tiktok.com%2Flogin%2Fphone-or-email%2Femail&region=VN&root_referer=https%3A%2F%2Fwww.tiktok.com%2F%3Flang%3Dvi-VN&screen_height=760&screen_width=360&sec_user_id=".$secUid."&type=0&tz_name=Asia%2FSaigon&user_id=".$id."&verifyFp=".$s_v_web_id."&webcast_language=vi-VN&msToken=ya711hcOXjV_Qz7tmNgiuxnRTSlyQFVfbzxHQgC75j5WIKBrv_O7KHLqCNQHFFYDbBvCjfLmuyO7v1eI5ocpLQqG5MoU0ae2BGNQ3RKo21sq6tF81W1IRIsZjtYoZdcXs2XEuMoblDGqZ5On&X-Bogus=DFSzKIVu6oiANtqiSgUI22e3sUXx&_signature=_02B4Z6wo00001Wwg7BQAAIDAZR.ZsXAFFZFsMeiAADj.03";
		
	}
	$tsm_2 = array(
	"Host:www.tiktok.com",
	"content-length:0",
	"x-secsdk-csrf-token:".$xx,
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.118 Mobile Safari/537.36",
	"content-type:application/x-www-form-urlencoded",
	"sec-ch-ua-mobile:?1",
	"tt-csrf-token:".$tt_token,
	"accept:*/*",
	"cookie:".$ck,
	);
	$text_2 = post_type2($url_2, $tsm_2);
	
	
	
}
function get_tt($ck,$van){
	$url = "https://www.tiktok.com/passport/web/account/info/?aid=1459&app_language=vi-VN&app_name=tiktok_web&battery_info=0.5&browser_language=vi-VN&browser_name=Mozilla&browser_online=true&browser_platform=Linux%20armv8l&browser_version=5.0%20%28Linux%3B%20Android%208.1.0%3B%20CPH1912%20Build%2FO11019%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F109.0.5414.118%20Mobile%20Safari%2F537.36&channel=tiktok_web&cookie_enabled=true&device_id=7198137736682866178&device_platform=web_mobile&focus_state=true&from_page=user&history_len=4&is_fullscreen=false&is_page_visible=true&os=android&priority_region=VN&referer=https%3A%2F%2Fwww.tiktok.com%2Flogin%2Fphone%2Fdigit-code&region=VN&root_referer=https%3A%2F%2Fwww.tiktok.com%2Flogin%2Fphone-or-email&screen_height=760&screen_width=360&tz_name=Asia%2FSaigon&verifyFp=verify_ldx2wdap_6oyYOunp_XEuD_43Jp_Bbvy_6B184WI1Lfdj&webcast_language=vi-VN&msToken=Ar1ih3zGbvc0JptQHzHtu2oAJzWPqDqVu_a7PgNP9rZOzFVwsxxqWVwAJiIGbrRuIIr4YOuyJtUT_97LfCZy60ZorUJ2TwTWScGOd0eQcbqXdO6w5cFE_6RllzbNSGoM86mKMUqvQNhUsM4=&X-Bogus=DFSzswVOlLkANtt3ShDTcP4A2Fkb&_signature=_02B4Z6wo00001f3e-wAAAIDATdTCMwN5.-n93v-AAByVac";
	$tsm = array(
	"Host:www.tiktok.com",
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.118 Mobile Safari/537.36",
	"accept:*/*",
	"cookie:".$ck,
	);
	$text = get_link($url, $tsm);
	
	if ( $text["message"]== "success" ){
		echo $van." \033[1;32mGet Thông Tin Thành Công";
		sleep(1);
  echo "\r                                         \r";
		
	}else{
		echo $van." \033[1;31mGet Thông Tin Thất Bại \n";
		exit();
	}
	
	return $text;
	
}

function check_us($cookie){
	$url = "https://www.tiktok.com/?lang=vi-VN";
	$tsm = array(
	"Host:www.tiktok.com",
	"upgrade-insecure-requests:1",
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.5481.65 Mobile Safari/537.36",
	"accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
	"cookie:".$cookie,
	);
	$text = get_lin($url, $tsm);
	$i = explode('"}',explode('","domain":"',$text)[1])[0];
	if ( $i  == "mon-va.byteoversea.com" ){
    echo"\033[1;32mAcc Việt \n";
		$us = "V";
	}else if ( $i == "mon.us.tiktokv.com" ){
		print (" Acc Us \n");
		$us = "U";
	}else{
		exit (" \033[1;31mKHÔNG ĐỊNH DẠNG RÕ US HAY VIỆT ");
	}
	return $us;
}

function get_link($url, $tsm){
	##$ip = explode(':',$ipp);
  $mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  ##CURLOPT_PROXY => $ip[0],
  ##CURLOPT_PROXYPORT => $ip[1],
  ###CURLOPT_HEADER => true ,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
return $json;
}
function get_lin($url, $tsm){
	##$ip = explode(':',$ipp);
  $mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  ##CURLOPT_PROXY => $ip[0],
  ##CURLOPT_PROXYPORT => $ip[1],
  ###CURLOPT_HEADER => true ,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
return $mr2;
}
function get_link2($url, $tsm){
	##$ip = explode(':',$ipp);
  $mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  ##CURLOPT_PROXY => $ip[0],
  ##CURLOPT_PROXYPORT => $ip[1],
  CURLOPT_HEADER => true ,
  CURLOPT_CUSTOMREQUEST => "HEAD",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
return $mr2;
}
function post_type2($url, $tsm){
	##$ip = explode(':',$ipp);
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  ##CURLOPT_PROXY => $ip[0],
  ##CURLOPT_PROXYPORT => $ip[1],
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr2,true);
return $mr2;
}