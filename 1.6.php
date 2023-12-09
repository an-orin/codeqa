<?php
error_reporting(0);
session_start();


date_default_timezone_set("Asia/Ho_Chi_Minh");
$Ngay=`date "+%d/%m/%Y"`;

$xanh="\033[1;32m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;33m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$van = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$vanv = "".$do."➤➤ ".$luc;

$tong_id = [];
$tong_name = [];

$tt="0";
$dem = "0";
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL BUFF FOLLOW BẰNG PROFILE
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


echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Cookie Facebook Có Pgae PROFILE: ".$vang;
$ck = trim(fgets(STDIN));
##$ck = "sb=-yoyYwSmR5EpHsjfDBFEC3U5;datr=-yoyY67-L94j4wRGiGjtFOqz;m_pixel_ratio=2;fr=03sQxO3ZVYnUGp8Kd.AWWYteCXWBocwHXSDpKUGNEc5BQ.BjYMgr.Cg.AAA.0.0.BjbR0a.AWWJsKOzMM4;c_user=100087598114269;xs=43%3AcuGknhNow3YuQA%3A2%3A1668095258%3A-1%3A11309;fbl_ci=2576606119140499;m_page_voice=100087598114269;presence=C%7B%22t3%22%3A%5B%5D%2C%22utc3%22%3A1668325698022%2C%22v%22%3A1%7D;x-referer=eyJyIjoiL250L3NjcmVlbi8%2FcGFyYW1zPSU3QiU3RCZwYXRoPSUyRnBhZ2VzJTJGbnRfbGF1bmNocG9pbnRfcmVkZXNpZ24lMkZob21lc2NyZWVuJTJGbXRvdWNoJTJGJnBhaXB2PTAmZWF2PUFmYi1WbU9rcmxWcy1rWjdkWHRkZ0ZLNXRpd1pPUy1VQUtzbGdjZW1qYS1CR0lQcXk2YWt3SFRBWEoxSzJOLVA0d0kiLCJoIjoiL250L3NjcmVlbi8%2FcGFyYW1zPSU3QiU3RCZwYXRoPSUyRnBhZ2VzJTJGbnRfbGF1bmNocG9pbnRfcmVkZXNpZ24lMkZob21lc2NyZWVuJTJGbXRvdWNoJTJGJnBhaXB2PTAmZWF2PUFmYi1WbU9rcmxWcy1rWjdkWHRkZ0ZLNXRpd1pPUy1VQUtzbGdjZW1qYS1CR0lQcXk2YWt3SFRBWEoxSzJOLVA0d0kiLCJzIjoibSJ9;dpr=2;locale=vi_VN;fbl_st=100425614%3BT%3A27845539;fbl_cs=AhCNaVvEdO89SOijXV%2Fm8gOmGGlqajU4QzIwamI1Z1pENnc2NThRSERuYg;vpd=v1%3B760x360x2";
echo $van."\033[1;32mĐang Check Cookie...!";

$sb_1 = explode(';', explode('sb=', $ck)[1])[0];
$sb_2 = explode(';', explode('datr=', $ck)[1])[0];
$sb_3 = explode(';', explode('c_user=', $ck)[1])[0];
$sb_4 = explode(';', explode('xs=', $ck)[1])[0];
$sb_5 = explode(';', explode('fr=', $ck)[1])[0];
$sb_6 = explode(';', explode('wd=', $ck)[1])[0];
$id_pro = get_pro5($ck);

@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}


$sl = count($id_pro);
echo $van."\033[1;32mTÌM Thấy : ".$trang.$sl.$luc." PAGE PROFILE \n";

while (true){
	$so_i = $so_i +1 ;
	echo $van."\033[1;32mNhập ID Facebook Cần Follow Thứ ".$do.$so_i.$luc." : ".$vang;
	$idddd = trim(fgets(STDIN));
	if (!$idddd){
		break;
	}else{
	array_push($tong_id,$idddd);
	}
}
while (true){
	for ($so_id = 0; $so_id < $so_i ; $so_id++) {
		$so_d = $so_i -2 ;
		$id_fl = $tong_id[$so_id];
		echo"\033[1;31m────────────────────────────────────────────────────────────\n";
		echo"\033[1;32mĐang Buff Bằng ID : ".$vang.$id_fl." \n";
		echo"\033[1;31m────────────────────────────────────────────────────────────\n";
		for ($so = 0; $so < $sl ; $so++) {
			$id_5 = $id_pro[$so]["profile"]["id"];
			$name = $id_pro[$so]["profile"]["name"];
			$ck_pro5 = "sb=".$sb_1."; datr=".$sb_2."; c_user=".$sb_3."; wd=".$sb_6."; xs=".$sb_4."; fr=".$sb_5."; i_user=".$id_5.";";
			$fl = follow($ck_pro5, $id_5, $id_fl);
			$tt = $tt +1;
    		echo "".$do."[".$BBlue.$tt.$do."] ".$luc.$id_5.$do." | ".$trang.$name.$do." | ".$vang."FOLLOW".$do." | ".$luc.$id_fl.$do." |\n";
    	}
    if ( $so_d == $so_id ){
    	echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mFOLLOW SUCCESS \n";
    	exit();
    }
	}### trong

}##ngoài 

function get_pro5($ck){
$url_1 = "https://mbasic.facebook.com/";
$tsm = array(
'authority:mbasic.facebook.com',
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'accept-language:vi,en;q=0.9,vi-VN;q=0.8,fr-FR;q=0.7,fr;q=0.6,en-US;q=0.5',
        'cache-control:max-age=0',
        'cookie:'.$ck,
        'origin:https://www.facebook.com',
        'referer:https://www.facebook.com',
        'sec-ch-ua:"Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
        'sec-ch-ua-mobile:?0',
        'sec-ch-ua-platform:"Windows"',
        'sec-fetch-dest:document',
        'sec-fetch-mode:navigate',
        'sec-fetch-site:none',
        'sec-fetch-user:?1',
        'upgrade-insecure-requests:1',
        'user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
);
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url_1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$_SESSION['fb_dtsg'] = explode('"', explode('<input type="hidden" name="fb_dtsg" value="', $mr2)[1])[0];
$_SESSION['jazoest'] = explode('"', explode('<input type="hidden" name="jazoest" value="', $mr2)[1])[0];

$url_2 = "https://www.facebook.com/api/graphql/";
$data = array(
'fb_dtsg' => $_SESSION['fb_dtsg'] ,
'jazoest' => $_SESSION['jazoest'],
'variables' => '{"showUpdatedLaunchpointRedesign":true,"useAdminedPagesForActingAccount":false,"useNewPagesYouManage":true}',
'doc_id' => '5300338636681652',
);
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url_2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm));
$mr3 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr3,true);
$id_pro = $js['data']['viewer']['actor']['profile_switcher_eligible_profiles']['nodes'];

$sl = count($id_pro);

return $id_pro ;
}
function follow($ck, $id_page, $id_fl){
$url = "https://www.facebook.com/api/graphql/";
$data = array(
            'fb_dtsg' => $_SESSION['fb_dtsg'] ,
            'jazoest' => $_SESSION['jazoest'],
            'fb_api_caller_class' =>'RelayModern',
            'fb_api_req_friendly_name' => 'CometUserFollowMutation',
            'variables' => '{"input":{"attribution_id_v2":"ProfileCometTimelineListViewRoot.react,comet.profile.timeline.list,via_cold_start,1667114418950,431532,190055527696468,","subscribe_location":"PROFILE","subscribee_id":"'.$id_fl.'","actor_id":"'.$id_page.'","client_mutation_id":"1"},"scale":1}',
            'server_timestamps' => 'true',
            'doc_id' => '5032256523527306',
);
$tsm = array(
                'authority:www.facebook.com',
                'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
                'accept-language:vi',
                'cookie:'.$ck,
                'sec-ch-prefers-color-scheme:light',
                'sec-ch-ua:"Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
                'sec-ch-ua-mobile:?0',
                'sec-ch-ua-platform:"Windows"',
                'sec-fetch-dest:document',
                'sec-fetch-mode:navigate',
                'sec-fetch-site:none',
                'sec-fetch-user:?1',
                'upgrade-insecure-requests:1',
                'user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
                'viewport-width:1366',
            );
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm));
$mr3 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr3,true);

$check = $js["data"]["actor_subscribe"]["subscribee"]["subscribe_status"];
$id_1 = $js["data"]["actor_subscribe"]["subscribee"]["id"];

	return $mr3;


}

