error_reporting(0);
session_start();
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
/*** [ Copyright © 2023 DragonX ] ***/
$dragonx = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL REG PRO5 + UP AVT
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
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $dragonx."\033[1;32mNhập Cookie FB : \033[1;93m";
$ck = trim(fgets(STDIN));
echo $dragonx."\033[1;32mNhập Delay (".$vang."Lớn Hơn 100s".$luc.") : \033[1;93m";
$delay = trim(fgets(STDIN));
echo $dragonx."\033[1;32mNhập Số Lượng Page : \033[1;93m";
$so_luong_page = trim(fgets(STDIN));
echo $dragonx."\033[1;32mBạn Có Muốn Reg Xong Up Avt Luôn Không? (y/n) : \033[1;93m";
$upavt = trim(fgets(STDIN));
if ($upavt == 'y' || $upavt == 'Y'){
echo $dragonx."\033[1;32mNhập Link Ảnh : \033[1;93m";
$linkanh = trim(fgets(STDIN));
}
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
$dem = 0;
while (true){
$reg = regpage_fb($ck);
if ($reg['status'] == 1){
$dem++;
echo "\033[1;34m[\033[1;33m".$dem."\033[1;34m]\e[1;32m⌠\e[1;33mAN_ORIN\e[1;32m⌡\033[1;91m | \033[1;36m".date("H:i")."\033[1;31m | \033[1;".rand(31,37)."m"." REG\033[1;31m | \033[1;37m".$reg['data']['name']."\033[1;92m | ".$reg['data']['id']."\n";
if ($upavt == 'y' || $upavt == 'Y'){
$json_upavt = json_decode(file_get_contents("https://api-ndpcutevcl.000webhostapp.com/api/upavtpage.php?cookie=".$ck."&id=".$reg['data']['id']."&link_anh=".$linkanh), true);//ké api của dp hehe
echo $luc."\rĐang Tiến Hành Up Avt\r";
if ($json_upavt['status'] == 'success'){
echo $luc." ╰─> UP_AVT_SUCCESS | [UID PAGE: ".$vang.$reg['data']['id'].$luc."]\n";
} else {
echo "\033[1;91m ╰─> UP_AVT_ERROR | [UID PAGE: ".$vang.$reg['data']['id'].$do."]\n";
}
}
if ($dem == $so_luong_page){
echo "\033[1;37m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
	echo $dragonx."Reg Thành Công Tổng : $dem Pages\n";
    echo $dragonx.$xnhac."Cảm ơn Bạn Đã Sử Dụng Tool By DragonX\n";
    echo $dragonx.$xnhac."Có Gì Thắc Mắc Hay Muốn Đề Xuất Gì Thì Bảo Quản Trị Viên Trong Box Zalo Nhé . Cảm Ơn Bạn Rất Nhiều!\n";
    echo "\033[1;37m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
	exit;
}
loadtime($delay);
} else {
echo $do."Kiểm Tra Lại Cookie Hoặc Tài Khoản Đã Bị Block Reg Page\n";exit;
//continue;
}
}


function regpage_fb($ck){
$_SESSION["fb"] = [
"Host:www.facebook.com",
"cache-control:max-age=0",
"viewport-width:980",
"dnt:1",
"upgrade-insecure-requests:1",
"user-agent:Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4093.2 Safari/537.36",
"accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"sec-fetch-site:same-origin",
"sec-fetch-mode:cors",
"sec-fetch-dest:empty",
"cookie: ".$ck
];
    $ho = [
        "Lê",
        "Trần",
        "Nguyễn",
        "Triệu",
        "Đinh",
        "Ngô",
        "Lưu",
        "Bùi",
        "Hào",
        "Hữu",
        "Đoàn",
        "Triều",
        "Lý",
        "Lữ",
        "Đờ",
    ];
    $tendem = [
        "Quang",
        "Phục",
        "Thị",
        "Thế",
        "Chí",
        "Văn",
        "Anh",
        "Lâm",
        "Hồng",
        "Chiến",
        "Phong",
        "Mạnh",
        "Thông",
        "Quốc",
        "Lợi",
        "Đình",
        "Ra",
    ];
    $ten = [
        "Thông",
        "Gióng",
        "Liên",
        "Yến",
        "Tân",
        "Quang",
        "Vũ",
        "Bảo",
        "Phụng",
        "Phương",
        "Trí",
        "Nhã",
        "Trang",
        "Hậu",
        "Linh",
        "Nghĩa",
        "Trọng",
        "Vy",
        "Tường",
        "An",
        "Ngân",
        "Bình",
        "Gonx",
    ];
    $urltl = "https://www.facebook.com/pages/creation/?ref_type=launch_point";
    $data = get_fb($urltl);
    #print_r($data);
    $idme = plo("&__user=", "&__comet_req=15", $data);
    $jazoest = plo("&jazoest=", '","', $data);
    $fb_dtsg = plo('w":0,"f":"', '"', $data);

    $data = [
        "av" => $idme,
        "__user" => $idme,
        "__a" => 1,
        "__dyn" =>
            "7AzHJ16U9ob8ng5K8G6EjBWo2nDwAxu13w8B3odE98K361twYwJyEiwsobo6u3y4o2Gwfi0LVEtwMw65xO2OU7m221FwgolzUO0n2US2G5Usw9m1YwBgK7o884y0Mo4G4Ufo5m1mzXxG1Pxi4UaEW2au1jxS6FobrwKxm5oe8464-5pUfEe88o4Wm7-2K0SEuBwJCwLyESE2KwkQ0z8c84K2e3u362-2B0oobo8o",
        "__csr" =>
            "ginsApi8BOkAWOOR9btT9ttPYlYyXOf4F_AldOkRYyqrnr8B5BQiiyBh5p4iaigFkFeGx5Q-UG4kZvGsCE-8DKXDxCmZedhEXzoOvgcFkEG48yUhy8GUdqUhG5866mUjxmFogxCF8vx-8yovwDwg98dUBxqm4E4K225oS2WexWbwt84K6E7a3u1qwBy8462q1cwuo8EdEG1Nwko9o9E4C482gwAwpU0bE80z200zRo04z20c0w1yG06L405JE09uU06u60DU0MC05hU5W3W",
        "__req" => "1f",
        "__hs" => "19324.HYP:comet_pkg.2.1.0.2.1",
        "dpr" => 3,
        "__ccg" => "GOOD",
        "__rev" => 1006638872,
        "__s" => "o0do3k:5tvm7u:cmx9f1",
        "__hsi" => 7170868554777213061,
        "__comet_req" => 15,
        "fb_dtsg" => $fb_dtsg,
        "jazoest" => $jazoest,
        "lsd" => "M45Q6DwMHo17WV_yTm_P61",
        "__aaid" => 926234441481882,
        "__spin_r" => 1006638872,
        "__spin_b" => "trunk",
        "__spin_t" => 1669597941,
        "fb_api_caller_class" => "RelayModern",
        "fb_api_req_friendly_name" => "AdditionalProfilePlusCreationMutation",
        "variables" =>
            '{"input":{"bio":"DragonX","categories":["2347428775505624"],"creation_source":"comet","name":"' .
            ranm($ho) .
            " " .
            ranm($tendem) .
            " " .
            ranm($ten) .
            '","page_referrer":"launch_point","actor_id":"' .
            $idme .
            '","client_mutation_id":"1"}}',
        "server_timestamps" => 'true',
        "doc_id" => '5903223909690825'
    ];
    $name_page = plo('"name":"', '","', $data["variables"]);
$url = 'https://www.facebook.com/api/graphql/';
$data = post_fb($url,$data);
    $json = json_decode($data, true);
    #print $data;
    #print_r($json);
    if (!$json) {
        $kq = [
            "status" => 0,
            "msg" => "check your account",
        ];
    }
    if ($json) {
        if (
            isset(
                $json["data"]["additional_profile_plus_create"][
                    "additional_profile"
                ]["id"]
            )
        ) {
            $kq = [
                "status" => 1,
                "data" => [
                    "name" => $name_page,
                    "id" =>
                        $json["data"]["additional_profile_plus_create"][
                            "additional_profile"
                        ]["id"],
                ],
            ];
        } else {
            $kq = [
                "status" => 0,
                "msg" => "your account limited",
            ];
        }
    }
    return $kq;
}


function ranm($a)
{
    return $a[array_rand($a, 1)];
}

function post_fb($url, $data)
{
    $fb = $_SESSION["fb"];
     	$ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => trim($url),
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $fb,
        CURLOPT_HEADER => false,
        CURLOPT_ENCODING => true,
    ]);
    $data = curl_exec($ch);
    return $data;
}

function get_fb($url)
{

    $fb = $_SESSION["fb"];
     	$ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => trim($url),
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $fb,
        CURLOPT_HEADER => true,
        CURLOPT_ENCODING => true,
    ]);
    $data = curl_exec($ch);
    return $data;
}
function plo($A, $B, $C) { return explode($B, explode($A, $C)[1])[0]; }
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
?>