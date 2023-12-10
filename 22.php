session_start();
error_reporting(0);
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
$thanhngang = "\033[1;31m────────────────────────────────────────────────────────────\n";
/*** [ Copyright © 2023 DragonX ] **/
$dragonx = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";

/***[ Logo ]***/
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL BUFF THÀNH VIÊN BẰNG PRO5
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
hometoolbuffmem($logo);
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
echo $dragonx.$do."Không Thể Tìm Thấy Page !\n";
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
echo $dragonx.$do."Không Thể Tìm Thấy Page !\n";
die;
}
echo $dragonx."Tìm Thấy " . $trang . count($list_id_name_page) . $luc . " Page Pro5\n";
echo $dragonx."Nhập Link Group : $vang";
$linkgr = trim(fgets(STDIN));
$data = getid($linkgr);
if (isset($data['success'])) {
    $id_gr = $data['id'];
} else {
    exit($dragonx.$do."Có vẻ như Link Group sai, vui lòng kiểm tra lại!!\n");
}
hometoolbuffmem($logo);
echo $dragonx."ID Group".$trang.": ".$id_gr."\n";
echo $thanhngang;
$stt = 0;
for ($x = 0; $x < count($list_id_name_page); $x++) {
    $stt++;
    $time = date("H:i:s");
    $uid_page = explode('|', $list_id_name_page[$x])[0];
    $name_page = explode('|', $list_id_name_page[$x])[1];
    $list1 = "i_user=".$uid_page.";";
    $cookie9 = $cookie.$list1;
    $tsm = array(
        'authority: www.facebook.com',
        'accept: */*',
        'accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
        'origin: https://www.facebook.com',
        'referer: https://www.facebook.com/groups/' . $id_gr,
        'sec-ch-prefers-color-scheme: light',
        'sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
        'viewport-width: 1221',
        'x-fb-friendly-name: GroupCometJoinForumMutation',
        'x-fb-lsd: 1CWQYotunk8BXwcjavghDO',
        'cookie: ' . $cookie9,
    );

    $data = array(
        'av' => $uid_page,
        '__user' => $uid_page,
        '__a' => '1',
        '__dyn' => '7AzHxqU5a5Q1ryaxG4VuC0BVU98nwgU765QdwSwMwNw9G2Saxa1NwJwpUe8hw6vwb-q7oc81xoswMwto88422y11xmfz83WwgEcHzoaEnxO0Bo7O2l2Utwwwi831wiEjwZwlo5qfK6E7e58jwGzEaE5e7oqBwJK2W5olwUwlu5pUfE2FBx_y8lz83VBwJCwLyES0Io88cA0z8c84qifxe3u362-2B0oobo8o',
        '__csr' => 'gT3c9Tf4Ph3lndq9E8btWdIy8B6OFTAFqZuBpWIDkDYLF8HWhaKiB9qhqHB-yAFpRXyqWV4dWpaBiHZ7J9d4G5V8GmV9u9CgGK4oKVu4agtG5quFoy9zkeBGucHAmbGnKnyonykmErBg84ubyU6e4FGxa10zpo42axi1AwNzp8C13wIz98a8O6U9UiG2-48bU3fCK19wPwpoOdwKwsrwCw-wk85q1swu84C4E1gE0aJE09kE031nw2780oow8q0S8ANO06fg0F-05mE0m4y3Q0cnwtyw0r1oW0A81oE1981VE0-K0L82xw',
        '__req' => 's',
        '__hs' => '19323.HYP:comet_pkg.2.1.0.2.1',
        'dpr' => '1',
        '__ccg' => 'EXCELLENT',
        '__rev' => '1006638605',
        '__s' => 'g46m30:o2pr1z:3yzc8j',
        '__hsi' => '7170501783158722778',
        '__comet_req' => '15',
        'fb_dtsg' => $_SESSION['fb_dtsg'],
        'jazoest' => $_SESSION['jazoest'],
        'lsd' => '1CWQYotunk8BXwcjavghDO',
        '__aaid' => '497084035286445',
        '__spin_r' => '1006638605',
        '__spin_b' => 'trunk',
        '__spin_t' => '1669512545',
        'fb_api_caller_class' => 'RelayModern',
        'fb_api_req_friendly_name' => 'GroupCometJoinForumMutation',
        'variables' => '{"feedType":"DISCUSSION","groupID":"'.$id_gr.'","imageMediaType":"image/x-auto","input":{"action_source":"GROUP_MALL","attribution_id_v2":"CometGroupDiscussionRoot.react,comet.group,via_cold_start,1669512546874,734244,2361831622,","group_id":"'.$id_gr.'","group_share_tracking_params":{"app_id":"2220391788200892","exp_id":"null","is_from_share":false},"actor_id":"'.$uid_page.'","client_mutation_id":"1"},"inviteShortLinkKey":null,"isChainingRecommendationUnit":false,"isEntityMenu":true,"scale":1,"source":"GROUP_MALL","renderLocation":"group_mall","__relay_internal__pv__GroupsCometEntityMenuEmbeddedrelayprovider":true,"__relay_internal__pv__GlobalPanelEnabledrelayprovider":true}',
        'server_timestamps' => 'true',
        'doc_id' => '5608919199222447',
        'fb_api_analytics_tags' => '["qpl_active_flow_ids=431626709"]',
    );

    $url = "https://www.facebook.com/api/graphql/";
    $run = post_type2($url, $tsm, $data);
    echo "\033[1;31m[\033[0;93m".$stt."\033[1;31m] | \033[1;36m".$time." \033[1;31m| \033[0;93mSUCCESS \033[1;31m| \033[1;35m".$uid_page." \033[1;31m| \033[1;34m".$name_page." \033[1;31m| \033[1;37m".$id_gr." \n";
}
echo $thanhngang; 
echo"\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ \033[1;32m SUCCESS \n";
exit;
function hometoolbuffmem($logo)
{
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
    } else { 
        @system('cls'); 
    }
    $len = strlen($logo);
    for ($x = 0; $x < $len; $x++) {
        echo $logo[$x];
        usleep(150);
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
 //   file_put_contents(".mr2.php",$mr2);
    $js = json_decode($mr2,true);
    return $js;
}
function getid($linkgr){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://id.traodoisub.com/api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "link=".$linkgr);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Authority: id.traodoisub.com';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'Accept-Language: vi,en;q=0.9,en-GB;q=0.8,en-US;q=0.7';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://id.traodoisub.com';
$headers[] = 'Referer: https://id.traodoisub.com/';
$headers[] = 'Sec-Ch-Ua: \"Chromium\";v=\"106\", \"Microsoft Edge\";v=\"106\", \"Not;A=Brand\";v=\"99\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.37';
$headers[] = 'X-Requested-With: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
//file_put_contents(".result.php",$result);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return json_decode($result,true);
}
?>