<?php
error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
/**[MÀU TERMUX]**/
$xanh="\033[1;32m";
$cam="\033[1;33m";
$blue="\033[1;34m";
$lam="\033[1;34m";
$tim="\033[1;34m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$do="\033[1;91m";
/**[TIME VN]**/
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$dategio = date("h:i:s");
$phut = date("i");
$giay = date("s");
$gio = date("H");
$today= date('d-m-y');

/**[LOGO TOOL]**/
$ArrayX = array($xanh, $cam, $blue, $lam, $tim, $xnhac, $luc, $vang, $xduong, $hong, $trang, $do, $syan);
$edit = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$edit1 = $do."[".$trang ."=.=".$do."] ".$trang."=> ".$luc;
/***[ Đánh Dấu Bản Quyền ]***/
$edit = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";
$edit1 = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";
$thanh = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";
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
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL CHECK BẢO MẬT FACEBOOK
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
echo $edit."NHẬP COOKIE FB: ".$trang;
$cookie = trim(fgets(STDIN));
$checksdt = CHECKSDT($cookie);
$INFO = GET($cookie);
khang(32);
echo $edit."NICK NAME: ".$INFO["name"]."\n\n";
if($INFO["user"]){
	echo $edit."UID: ".$INFO["id"]."\n\n";
	echo $edit."USERNAME: ".$INFO["user"]."\n";
} else {
	echo $edit."UID: ".$INFO["id"]."\n";
}
khang(32);
$checksdt_mail = CHECKSDTANDMAIL($cookie);
$checkfa = CHECKFA($cookie);
$check_tb_mail = CHECKTBMAIL($cookie);
$check_giay = CHECKGIAYTO($cookie);
$checktb = CHECKTB($cookie);
$checkavt = CHECKAVT($cookie);
$checkpass = CHECKPASS($cookie);
$phantram = 0;
if($checksdt_mail["check"] == 1){
	$phantram += 10;
	echo $edit."TRẠNG THÁI MAIL: ".$xnhac."ĐÃ XÁC NHẬN\n";
} else {
	echo $edit."TRẠNG THÁI MAIL: ".$do."CHƯA XÁC NHẬN\n";
}
khang(32);
if($checksdt["check"] == 1){
	$phantram += 10;
	echo $edit."TRẠNG THÁI SDT: ".$xnhac."ĐÃ XÁC NHẬN\n";
} else {
	echo $edit."TRẠNG THÁI SDT: ".$do."CHƯA XÁC NHẬN\n";
}
khang(32);
if($checkpass["check"] == 1){
	$phantram += 20;
	echo $edit."MẬT KHẨU ĐANG Ở TRẠNG THÁI: ".$xnhac."RẤT MẠNH\n";
} else {
	echo $edit."MẬT KHẨU ĐANG Ở TRẠNG THÁI: ".$do."RẤT YẾU\n";
}
khang(32);
if($checkfa["check"] == 1){
	$phantram += 20;
	echo $edit."TRẠNG THÁI XÁC THỰC 2 YẾU TỐ: ".$xnhac."ĐANG BẬT\n";
} else {
	echo $edit."TRẠNG THÁI XÁC THỰC 2 YẾU TỐ: ".$do."ĐANG TẮT\n";
}
khang(32);
if($check_tb_mail["check"] == 1){
	$phantram += 5;
	echo $edit."TRẠNG THÁI NHẬN TB QUA MAIL: ".$xnhac."ĐANG BẬT\n";
} else {
	echo $edit."TRẠNG THÁI NHẬN TB QUA MAIL: ".$do."ĐANG TẮT\n";
}
khang(32);
if($check_giay["Personalize"] == "1"){
	$phantram += 10;
	echo $edit."TRẠNG THÁI XÁC MINH GIẤY TỜ: ".$xnhac."ĐÃ XÁC MINH\n";
} else {
	echo $edit."TRẠNG THÁI XÁC MINH GIẤY TỜ: ".$do."CHƯA XÁC MINH\n";
}
khang(32);
if($check_giay["Selfie"] == "1"){
	$phantram += 10;
	echo $edit."TRẠNG THÁI XÁC MINH SELFIE(video): ".$xnhac."ĐÃ XÁC MINH\n";
} else {
	echo $edit."TRẠNG THÁI XÁC MINH SELFIE(video): ".$do."CHƯA XÁC MINH\n";
}
khang(32);
if($checktb["check"] == 1){
	$phantram += 10;
	echo $edit."TRẠNG THÁI THÔNG BÁO ĐĂNG NHẬP: ".$xnhac."ĐANG BẬT\n";
} else {
	echo $edit."TRẠNG THÁI THÔNG BÁO ĐĂNG NHẬP: ".$do."ĐAMG TẮT\n";
}
khang(32);
if($checkavt["check"] == 1){
	$phantram += 5;
	echo $edit."TRẠNG THÁI BẢO VỆ AVT: ".$xnhac."ĐANG BẬT\n";
} else {
	echo $edit."TRẠNG THÁI BẢO VỆ AVT: ".$do."ĐANG TẮT\n";
}
khang(32);
echo $edit."ĐỘ BẢO MẬT FB CỦA BN LÀ: ".$vang.$phantram."%\n";

















function CHECKSDT($cookie){
	$url = "https://m.facebook.com/ntdelegatescreen/?params=%7B%22encrypted-contactpoint%22%3A%22AegaY3beK_l6lKvjW7uWarOAf67fEhTxTNsYwp71pxCWS3aXdQ3DSoQTfiqfNulnhoE%22%2C%22encrypted-display-str%22%3A%22Aehc60y8rsl4XGM5kmLTyVWUM72-FSfH6fnYJlRTEdwuxy2ITPp8OyYSlsapj2bMU6c%22%2C%22is-confirmed%22%3Atrue%2C%22is-limited-use%22%3Atrue%2C%22is-primary%22%3Afalse%2C%22is-shared%22%3Afalse%2C%22is-previous%22%3Afalse%2C%22allow-remove%22%3Atrue%2C%22contactpoint-category%22%3A%22security%22%2C%22source%22%3A%22ufac_sms_scarce_v2_challenge%22%2C%22entry-point%22%3A%22settings%22%2C%22screen-id%22%3A%22[%5C%222tnekx%3A0%5C%22%2Cnull]%22%2C%22is-shared-pending%22%3Afalse%2C%22is-from-settings%22%3Atrue%7D&path=%2Fcontact%2Finformation%2F&state";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: m.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	if (strpos ($access, 'Đã xác nhận') !== false){
		return array("check" => 1);
	} else{
		return array("check" => 0);
	}
}
function GET($cookie){
	$url = "https://m.facebook.com/me";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: m.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HEADER => TRUE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	$user = explode("?", explode("location: ", $access)[1])[0];
	if(!$user or strpos ($user, "profile.php") !== false or strpos ($user, "/me") !== false){
		return array(
			"id" => explode(";", explode("c_user=", $cookie)[1])[0],
			"name" => getname(explode(";", explode("c_user=", $cookie)[1])[0], $cookie)
		);
	} else {
		return array(
			"id" => explode(";", explode("c_user=", $cookie)[1])[0],
			"name" => getname(explode(";", explode("c_user=", $cookie)[1])[0], $cookie),
			"user" => explode(".com/", $user)[1]
		);
	}
}
function getname($id, $cookie){
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: mbasic.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://mbasic.facebook.com/profile.php",
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HEADER => TRUE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	$name = explode("</title>", explode("<title>", $access)[1])[0];
	return $name;
}
function CHECKGIAYTO($cookie){
	$url = "https://m.facebook.com/id/settings/?fb4ar=1680408468";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: mbasic.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_ENCODING => '',
		CURLOPT_POST => "443",
		CURLOPT_COOKIE => $cookie,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYHOST => FALSE,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE,
	));
	$access = curl_exec($ch);
	if (strpos ($access, "Chúng tôi đang lưu trữ 0 giấy tờ tùy thân") !== false){
		$tuythan = 0;
	} else {
		$tuythan = 1;
	}
	if (strpos ($access, "Chúng tôi đang lưu trữ 0 video") !== false){
		$video = 0;
	} else {
		$video = 1;
	}
	return array(
		"Personalize" => $tuythan,
		"Selfie" => $video
	);
}
function CHECKSDTANDMAIL($cookie){
	$url = "https://m.facebook.com/ntdelegatescreen/?params=%7B%22encrypted-contactpoint%22%3A%22Aej1MnOBUMbEcCsuS2AIMYFBWeLF9GzuJJVgZ6IjBEpBu9KeugUix6YqMiDKli5sCvVFlIRKAGUL1AI186ZZ1kem%22%2C%22encrypted-display-str%22%3A%22AegdLWLKIPALGbOCCFeNpmlB7aI7taj3Khm5FovW-4xF5cFKrERIecLQKfLMCGh9jf3KS5AZQB8o1fXuzkYpc2Dr%22%2C%22is-confirmed%22%3Atrue%2C%22is-limited-use%22%3Afalse%2C%22is-primary%22%3Atrue%2C%22is-shared%22%3Afalse%2C%22is-previous%22%3Afalse%2C%22allow-remove%22%3Afalse%2C%22contactpoint-category%22%3A%22account%22%2C%22entry-point%22%3A%22settings%22%2C%22screen-id%22%3A%22[%5C%22zoewki%3A0%5C%22%2Cnull]%22%2C%22is-shared-pending%22%3Afalse%2C%22is-from-settings%22%3Atrue%7D&path=%2Fcontact%2Finformation%2F&state";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: m.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	if (strpos ($access, 'Email chính') !== false){
		if (strpos ($access, 'Đã xác nhận') !== false){
			return array("check" => 1);
		} else{
			return array("check" => 0);
		}
	} else {
		return array("check" => 0);
	}
}

function CHECKFA($cookie){
	$url = "https://m.facebook.com/nt/screen/?params=%7B%7D&path=%2Fsecurity%2F2fac_screen%2Fnt%2Fsetup%2Fsecured_action%2F&state";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: m.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_COOKIE => $cookie,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	if (strpos ($access, 'Xác thực 2 yếu tố đang bật') !== false){
		return array("check" => 1);
	} else {
		return array("check" => 0);
	}
}
function CHECKTBMAIL($cookie){
	$url = "https://m.facebook.com/login_alerts/settings/email/?s=security_settings_page&paipv=0&eav=Afb-RLCd0ha5XFThYGWlM3CBZvUpef5uB7SVa12DHBQjvvOo0JVQ4nw3TNxj6RWwpGg";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: m.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	if (strpos ($access, 'class="_6j53" type="checkbox" checked="1"') !== false){
		return array("check" => 1);
	} else {
		return array("check" => 0);
	}
}
function CHECKTB($cookie){
	$url = "https://m.facebook.com/login_alerts/settings/notifications/?s=security_settings_page&paipv=0&eav=AfYHK9fWxrQNZYqxTrMML7OfdCmk9HaBM_CmSbvU8IRIa4GrbJVIGSBdoM0671a5FEk";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: m.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	if (strpos ($access, 'input aria-labelledby="m_check_list_aria_label" class="_6j53" type="radio" checked="1"') !== false){
		return array("check" => 1);
	} else {
		return array("check" => 0);
	}
}


function CHECKKHIEN($cookie){
	$url = "https://www.facebook.com/me";
	$head = array(
		"Host: www.facebook.com",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
		"dnt: 1",
		"x-requested-with: mark.via.gp",
		"sec-fetch-site: none",
		"sec-fetch-mode: navigate",
		"sec-fetch-user: ?1",
		"sec-fetch-dest: document",
		"accept-encoding: gzip, deflate",
		"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
		"cookie: ".$cookie
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	if (strpos ($access, 'suppress_xac_groups":true') !== false){
		return array("check" => 1);
	} else {
		return array("check" => 0);
	}
}

function CHECKAVT($cookie){
	$url = "https://mbasic.facebook.com/profile.php";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: mbasic.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	$file1 = fopen("test.html", "w+");
	fwrite($file1, "".$access);
	fclose($file1);
	if (explode('</div>', explode('profile picture" /><div ', $access)[1])[0]){
		return array("check" => 1);
	} else {
		return array("check" => 0);
	}
}
function CHECKPASS($cookie){
	$url = "https://m.facebook.com/nt/screen/?params=%7B%22entry_point%22%3A%22recommended_settings%22%7D&path=security-checkup%2Fhub%2F&paipv=0&eav=AfbQ3UDOaolvVyhfFxyUZiccWXHF2k8vQeDpw9YRtRZoBK8MGbdXlfGSpl7ON7WPmkE";
	$head = array(
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
		"accept-encoding: gzip, deflate, br",
		"accept-language: en-US,en;q=0.9",
		"cache-control: max-age=0",
		"connection: keep-alive",
		"cookie: ".$cookie,
		"host: m.facebook.com",
		"referer: https://m.facebook.com/ntdelegatescreen/?params=%7B%22entry-point%22%3A%22settings%22%7D&path=%2Fcontacts%2Fmanagement%2F&paipv=0&eav=AfY8FOIw2H0-T2coJOlRxnGpEVMklztJZNo17o6WmyuIH5pHC69OFwVRhdMt5kjgUGk",
		"sec-fetch-dest: document",
		"sec-fetch-mode: navigate",
		"sec-fetch-site: same-origin",
		"sec-fetch-user: ?1",
		"upgrade-insecure-requests: 1",
		"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_ENCODING => "",
		CURLOPT_FOLLOWLOCATION => true
	));
	$access = curl_exec($ch);
	if (strpos ($access, 'Mật khẩu OK') !== false){
		return array("check" => 1);
	} else {
		return array("check" => 0);
	}
}









function khang($khang){
	$trang="\033[1;97m";
	for($i=0; $i<=$khang; $i++){
		echo $do."─ ";
		usleep(5000);
	}
	echo "\n";
}