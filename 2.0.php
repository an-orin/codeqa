session_start();
//error_reporting(0);
date_default_timezone_set("Asia/Ho_Chi_Minh");

$do="\033[1;91m";
$den="\033[1;33m";
$tim="\033[1;34m";
$luc="\033[1;92m";
$trang="\033[1;97m";
$vang = "\033[1;93m";
$hong = "\033[1;95m";
$xnhac = "\033[1;36m";
$xduong = "\033[1;96m";
$thanhngang = "\033[1;37m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
/*** [ Copyright © 2023 DragonX ] **/
$dragonx =  "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ $luc";

/***[ Logo ]***/
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL BUFF CẢM XÚC STORY BẰNG PRO5
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
hometoolbuffcx($logo);
echo $dragonx."Nhập Cookie Facebook Chứa Page Pro5 : $vang";
$cookie = trim(fgets(STDIN));
$url_1 = "https://mbasic.facebook.com/";
$tsm = array(
'authority:mbasic.facebook.com',
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'accept-language:vi,en;q=0.9,vi-VN;q=0.8,fr-FR;q=0.7,fr;q=0.6,en-US;q=0.5',
        'cache-control:max-age=0',
        'cookie:'.$cookie,
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
$mr3 = curl_exec($mr); 
$js = json_decode($mr3,true);
$get_id_page = $js['data']['viewer']['actor']['profile_switcher_eligible_profiles']['nodes'];
curl_close($mr);
if (!isset($get_id_page)){
echo $dragonx.$do."Không Thể Tìm Thấy Page\n";
die;
}
$list_id_name_page = [];
foreach ($get_id_page as $item){
    $uid_page = $item['profile']['id'];
    $name_page = $item['profile']['name'];
    $gomlist = $uid_page . '|' . $name_page;
    array_push($list_id_name_page, $gomlist);
}
if (count($list_id_name_page) == 0){
echo $dragonx.$do."Không Thể Tìm Thấy Page\n";
die;
}
echo $dragonx."Tìm Thấy " . $trang . count($list_id_name_page) . $luc . " Page Pro5\n";
echo $dragonx."Nhập Link Story : $vang";
$linkstr = trim(fgets(STDIN));
$dataurlstr = explode('/', explode('/', $linkstr)[5])[0];
echo $thanhngang;
//echo $dragonx."Nhập Delay : $vang";
//$delay = trim(fgets(STDIN));
echo $dragonx."Nhập \033[1;31m[\033[1;33m1\033[1;31m]$luc LIKE \n";
echo $dragonx."Nhập \033[1;31m[\033[1;33m2\033[1;31m]$luc LOVE \n";
echo $dragonx."Nhập \033[1;31m[\033[1;33m3\033[1;31m]$luc CARE \n";
echo $dragonx."Nhập \033[1;31m[\033[1;33m4\033[1;31m]$luc HAHA \n";
echo $dragonx."Nhập \033[1;31m[\033[1;33m5\033[1;31m]$luc WOW \n";
echo $dragonx."Nhập \033[1;31m[\033[1;33m6\033[1;31m]$luc SAD \n";
echo $dragonx."Nhập \033[1;31m[\033[1;33m7\033[1;31m]$luc ANGRY \n";
echo $thanhngang;
echo $dragonx.$xnhac."Chọn 1 Loại cảm xúc\n"; 
echo $dragonx."Nhập Lựa Chọn : $vang";
$cx = trim(fgets(STDIN));
$listcx = [];

if (strpos($cx, '1') !== false) {
    array_push($listcx, '👍');
}
if (strpos($cx, '2') !== false) {
    array_push($listcx, '❤️');
}
if (strpos($cx, '3') !== false) {
    array_push($listcx, '🤗');
}
if (strpos($cx, '4') !== false) {
    array_push($listcx, '😆');
}
if (strpos($cx, '5') !== false) {
    array_push($listcx, '😮');
}
if (strpos($cx, '6') !== false) {
    array_push($listcx, '😢');
}
if (strpos($cx, '7') !== false) {
    array_push($listcx, '😡');
}
echo $dragonx."Nhập Delay : $vang";
$delay = trim(fgets(STDIN));
echo $dragonx."Số Lượng Cảm Xúc Cần Tăng : $vang";
$soluong = trim(fgets(STDIN));
hometoolbuffcx($logo);
$stt = 0;
while (true){
    for ($x = 0; $x < count($list_id_name_page); $x++) {
        $stt++;
        $camxuc = $listcx[0];
        $time = date('H:i:s');
        $uid_page = explode('|', $list_id_name_page[$x])[0];
        $name_page = explode('|', $list_id_name_page[$x])[1];
        $list1 = "i_user={$uid_page};";
        $cookie9 = $cookie . $list1;
        
        $tsm = array(
            'authority: www.facebook.com',
            'accept: */*',
            'accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
            'origin: https://www.facebook.com',
            'referer: ' . $linkstr,
            'sec-ch-prefers-color-scheme: light',
            'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
            'sec-ch-ua-mobile: ?0',
            'sec-ch-ua-platform: "Windows"',
            'sec-fetch-dest: empty',
            'sec-fetch-mode: cors',
            'sec-fetch-site: same-origin',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
            'viewport-width: 1221',
            'x-fb-friendly-name: useStoriesSendReplyMutation',
            'x-fb-lsd: 4CR-snjduLBRfA-cdgjhg_',
            'cookie: ' . $cookie9,
        );
        
        $data = array(
            'fb_dtsg' => $_SESSION['fb_dtsg'],
            'jazoest' => $_SESSION['jazoest'],
            'lsd' => '4CR-snjduLBRfA-cdgjhg_',
            '__aaid' => '497084035286445',
            '__spin_r' => '1006641324',
            '__spin_b' => 'trunk',
            '__spin_t' => '1669734368',
            'fb_api_caller_class' => 'RelayModern',
            'fb_api_req_friendly_name' => 'useStoriesSendReplyMutation',
            'variables' => '{"input":{"attribution_id_v2":"StoriesCometSuspenseRoot.react,comet.stories.viewer,via_cold_start,1669734368520,55579,,","lightweight_reaction_actions":{"offsets":[0],"reaction":"' . $camxuc . '"},"message":"' . $camxuc . '","story_id":"' . $dataurlstr . '","story_reply_type":"LIGHT_WEIGHT","actor_id":"100088148974138","client_mutation_id":"2"}}',
            'server_timestamps' => 'true',
            'doc_id' => '4826141330837571',
        );
        
    
        $url = "https://www.facebook.com/api/graphql/";
        $run = post_type2($url, $tsm, $data);
        if (strpos($run, 'data') !== false) {
            echo "\033[1;31m[\033[0;93m" . $stt . "\033[1;31m] | \033[1;36m" . $time . " \033[1;31m| \033[0;93mSUCCESS \033[1;31m| \033[1;34m" . $uid_page . " \033[1;31m| \033[1;35m" . $name_page . " \033[1;31m| \033[1;37m" . $camxuc . " \033[1;31m| \033[1;37m" . $dataurlstr . " \n";
        } else {
            echo $dragonx."\033[1;31mTăng Cảm Xúc Thất Bại, Có Vẻ ACC Bạn Đã Bị Block!!\n";
        }
        if ($soluong == $stt){
            echo $thanhngang; 
            echo "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ \033[1;32m SUCCESS \n";
            exit;
        }
        loadtime($delay);
    }
}
echo $thanhngang; 
echo"\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ \033[1;32m SUCCESS \n";
exit;
function hometoolbuffcx($logo)
{
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
    } else { 
        @system('cls'); 
    }
    $len = strlen($logo);
    for ($x = 0; $x < $len; $x++) {
        echo $logo[$x];
        usleep(800);
    }
}
function loadtime($delay)
{
        for ( $x = $delay; $x--; $x ) {
        print "\033[1;36m   \033[1;31m>[\033[0;36m|\033[1;31m]<              \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m      \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m|\033[1;31m]< \033[0;36mV            \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m\\\033[1;31m]< \033[0;36mVu           \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m\\\033[1;31m]< \033[0;36mVui          \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● \r";
        usleep( 50000 );  
        print "\033[1;36m   \033[1;31m>[\033[0;36m-\033[1;31m]< \033[0;36mVui          \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● \r";
        usleep( 100000 );   
        print "\033[1;36m   \033[1;31m>[\033[0;36m-\033[1;31m]< \033[0;36mVui          \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m/\033[1;31m]< \033[0;36mVui L        \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m/\033[1;31m]< \033[0;36mVui L        \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m|\033[1;31m]< \033[0;36mVui Lò       \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m|\033[1;31m]< \033[0;36mVui Lòn      \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m\\\033[1;31m]< \033[0;36mVui Lòn      \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m\\\033[1;31m]< \033[0;36mVui Lòng     \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ● \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m-\033[1;31m]< \033[0;36mVui Lòng Đ   \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m-\033[1;31m]< \033[0;36mVui Lòng Đợ  \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ●  \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m/\033[1;31m]< \033[0;36mVui Lòng Đợi \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ●  \r";
        usleep( 50000 );
        print "\r                                          \r";
                }
}
function post_type2($url, $tsm, $data){
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
    $mr2 = curl_exec($mr); curl_close($mr);
    //file_put_contents(".mr2.php",$mr2);
    $js = json_decode($mr2,true);
    return $mr2;
}