/***
Bản Quyền Của An Orin, Dec Được Bán Thì Nhớ Ghi Bản Quyền Em Ý Thức Là Do Mình Thanks!!
***/
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
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.51 Mobile Safari/537.36";
/***[ Đánh Dấu Bản Quyền ]***/
$ndp_tool = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$dp = $do."[".$trang ."=.=".$do."] ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1200;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Config ]***/
$_SESSION['version'] = "9.5";
$_SESSION['shop'] = "keyvip24h.dev";
$dem = 0;
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SPAM MESSENGER 
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
/***[ Clear + Thông Số Admin ]***/
spam_message($banner, $ndp_tool);
echo $ndp_tool.$luc."Vui Lòng Nhập Cookie Facebook".$trang.":".$vang." ";
$cookie = trim(fgets(STDIN));
# ========= [ API CHECK INFO ]  ========= 
$checklive = thongtin($cookie);
if ($checklive == "die"){
	echo $ndp_tool.$do."Có Vẻ Cookie Bạn Đã Die!!\n"; die;
} else {
    $tenfb = $checklive['name'];
    $idfb = $checklive['id'];
}
@system('clear');
spam_message($banner, $ndp_tool);
echo $ndp_tool.$luc."Nhập ID Facebook Người Muốn Spam".$trang.":".$vang." ";
$idspam = trim(fgets(STDIN));
echo "\e[1;31m".str_repeat('──', 32)."\n";
echo $ndp_tool.$luc."Vui Lòng Nhập Delay Spam".$trang.":".$vang." ";
$timedelay = trim(fgets(STDIN));
echo "\e[1;31m".str_repeat('──', 32)."\n";
echo $ndp_tool.$luc."Vui Lòng Nhập Nội Dung Bạn Muốn Spam".$trang.":".$vang." ";
$noidung = trim(fgets(STDIN));
echo $ndp_tool.$luc."Bạn Muốn Spam Bao Nhiêu Lần Thì Dừng Tool".$trang.":".$vang." ";
$dungtool = trim(fgets(STDIN));
echo "\e[1;31m".str_repeat('──', 32)."\n";
echo $vang."ID FB: ".$luc.$idfb.$do." | ".$vang."Tên FB: ".$luc.$tenfb."".$luc."\n";
echo "\e[1;31m".str_repeat('──', 32)."\n";
while (true){
# =========== [ GET FB_DTSG + JAZOEST ] =========== 
	$header = array( 
	'host:mbasic.facebook.com',
	'referer:https://mbasic.facebook.com/'.$idspam.'?_rdr',
	'sec-ch-ua:"Google Chrome";v="105", "Not)A;Brand";v="8", "Chromium";v="105"',
	'sec-ch-ua-mobile:?0',
	'sec-ch-ua-platform:"Windows"',
	'sec-fetch-dest:document',
	'sec-fetch-mode:navigate',
	'sec-fetch-site:same-origin',
	'sec-fetch-user:?1',
	'upgrade-insecure-requests:1',
	'user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36',
	'cookie: '.$cookie.'',
	);
	$mr = curl_init();
	curl_setopt($mr, CURLOPT_URL, 'https://mbasic.facebook.com/messages/read/?fbid='.$idspam.'&entrypoint=profile_message_button&_rdr');
	curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
	curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
	curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
	$mr2 = curl_exec($mr); 
	curl_close($mr); 
	# TÁCH
	$fb_dtsg = explode('" autocomplete="off" />',explode('<input type="hidden" name="fb_dtsg" value="',$mr2)[1])[0];
	$jazoest = explode('" autocomplete="off" />',explode('<input type="hidden" name="jazoest" value="',$mr2)[1])[0];
# =========== [ BẮT ĐẦU CHAT ] =========== 
	$header = array( 
	'host:m.facebook.com',
	'origin:https://m.facebook.com',
	'referer:https://m.facebook.com/messages/t/'.$idspam.'/',
	'sec-ch-ua:"Google Chrome";v="105", "Not)A;Brand";v="8", "Chromium";v="105"',
	'sec-ch-ua-mobile:?0',
	'sec-ch-ua-platform:"Windows"',
	'sec-fetch-dest:empty',
	'sec-fetch-mode:cors',
	'sec-fetch-site:same-origin',
	'user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36',
	'x-fb-lsd:hEaJzkj73xojygYcQ3Q0UW',
	'x-msgr-region:PNB',
	'x-requested-with:XMLHttpRequest',
	'x-response-format:JSONStream',
	'cookie: '.$cookie.'',
	);
	$data = 'ids%5B'.$idspam.'%5D='.$idspam.'&body='.$noidung.'&waterfall_source=message&fb_dtsg='.$fb_dtsg.'&jazoest='.$jazoest.'&lsd=hEaJzkj73xojygYcQ3Q0UW';
	$mr = curl_init();
	curl_setopt($mr, CURLOPT_URL, 'https://m.facebook.com/messages/send/');
	curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
	curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
	curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
	curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
	$mr2 = curl_exec($mr); 
	curl_close($mr); 
# =========== [ ĐẾM + TIME + NỘI DUNG ] =========== 
	$dem++;
	$time = date("H:i:s");
	echo "".$do."[".$vang.$dem.$do."] ".$do."| ".$xnhac.$time.$do." | ".$vang."SUCCESS".$do." | ".$trang.$idspam.$do." | ".$vang.$noidung."\n";
	delay($timedelay);
if ($dem >= $dungtool){
        echo "\e[1;37m".str_repeat('= ', 35)."\n";
echo $ndp_tool.$luc."Đã Hoàn Thành \033[1;93m".$dem."\033[1;92m Lần Spam\n";
echo $ndp_tool.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool ".$trang."AuTo Spam Message".$luc." Của ".$trang."NguyenDucPhat\n";
        echo "\e[1;37m".str_repeat('= ', 35)."\n";exit;
}
} #đóng while
# =========== [ FUNCTION ] =========== 
function thongtin($cookie) {
    $ch = curl_init();
    $header = array(
        "Host:m.facebook.com",
        "user-agent:Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    $linkbv = 'https://m.facebook.com/me/about';
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
    $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
    $idfb = explode('%',explode('?lst=', $page)[1])[0];
    if ($idfb == '') {
	return "die";
    }
    return ["id" => $idfb, "name" => $tenfb];
}
function delay($delay){
	/* Copyright © 2021 - 2022 : An Orin */
    $trang = "\033[1;37m";
    for($ndp = $delay ;$ndp>= 1;$ndp--){
echo "\r\033[1;37m[\033[1;36mA\033[1;31mN \033[1;32mO\033[1;33mR\033[1;34mI\033[1;35mN\033[1;37m][\033[1;36m|\033[1;37m]\033[1;37m[.......\033[1;37m][\033[1;33m".$ndp."\033[1;37m] "; usleep(150000);
echo "\r\033[1;37m[\033[1;31mA\033[1;32mN \033[1;33mO\033[1;34mR\033[1;35mI\033[1;37mN\033[1;37m][\033[1;31m/\033[1;37m]\033[1;37m[\033[1;36m>\033[1;37m......\033[1;37m][\033[1;33m".$ndp."\033[1;37m]  "; usleep(150000);
echo "\r\033[1;37m[\033[1;32mA\033[1;33mN \033[1;34mO\033[1;35mR\033[1;37mI\033[1;36mN\033[1;37m][\033[1;32m-\033[1;37m]\033[1;37m[\033[1;31m>\033[1;32m>\033[1;37m.....\033[1;37m][\033[1;33m".$ndp."\033[1;37m]   "; usleep(150000);
echo "\r\033[1;37m[\033[1;33mA\033[1;34mN \033[1;35mO\033[1;37mR\033[1;36mI\033[1;31mN\033[1;37m][\033[1;33m\]\033[1;37m[\033[1;36m>\033[1;32m>\033[1;33m>\033[1;37m....\033[1;37m][\033[1;33m".$ndp."\033[1;37m]    "; usleep(150000);
echo "\r\033[1;37m[\033[1;34mA\033[1;35mN \033[1;37mO\033[1;36mR\033[1;31mI\033[1;32mN\033[1;37m][\033[1;34m|\033[1;37m]\033[1;37m[\033[1;36m>\033[1;32m>\033[1;33m>\033[1;34m>\033[1;37m...\033[1;37m][\033[1;33m".$ndp."\033[1;37m]     "; usleep(150000);
echo "\r\033[1;37m[\033[1;35mA\033[1;37mN \033[1;36mO\033[1;31mR\033[1;32mI\033[1;33mN\033[1;37m][\033[1;35m-\033[1;37m]\033[1;37m[\033[1;36m>\033[1;32m>\033[1;33m>\033[1;34m>\033[1;35m>\033[1;37m..\033[1;37m][\033[1;33m".$ndp."\033[1;37m]      "; usleep(150000);
echo "\r\033[1;37m[\033[1;37mA\033[1;36mN \033[1;31mO\033[1;32mR\033[1;33mI\033[1;34mN\033[1;37m][\033[1;37m+\033[1;37m]\033[1;37m[\033[1;36m>\033[1;32m>\033[1;33m>\033[1;34m>\033[1;35m>\033[1;37m>\033[1;36m>\033[1;37m][\033[1;33m".$ndp."\033[1;37m]       "; usleep(150000);
}
echo "\r\e[1;95m    ✨An Orin ✨                       \r";
}
function spam_message($banner, $ndp_tool){
	/* Copyright © 2023 - 2024 : An Orin */
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}