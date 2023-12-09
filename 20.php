<?php
error_reporting(0);
session_start();
$_SESSION["useragent"] = "Mozilla/5.0 (Linux; Android 10; SM-A750GN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.106 Mobile Safari/537.36";
date_default_timezone_set("Asia/Ho_Chi_Minh");

/***[ Color ]***/
$do="\033[1;91m";
$den="\033[1;33m";
$tim="\033[1;34m";
$luc="\033[1;92m";
$trang="\033[1;97m";
$vang = "\033[1;93m";
$hong = "\033[1;95m";
$xnhac = "\033[1;36m";
$xduong = "\033[1;96m";
/** [ Copyright © 2023 DragonX ] **/
$dragonx = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";
$thanhngang1 = "\033[1;31m────────────────────────────────────────────────────────────\n";
$logo= "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SPAM CMT GROUP NỘI DUNG VÀ ẢNH
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";





$kov =  $do . "[" . $trang . "🥑" . $do . "] " . $trang . "=> ".$luc;

$list_cookie = [];
$list_token = [];
$kho_idgr = [];
$dem = 0;
function x() {
    for ($x = 0; $x < 28; $x++) {
        echo "\033[1;97m- ";
    }
    echo "\n";
}

//echo ID("https://facebook.com/groups/nhungthubinguyentreninternet")."\n";


//die();

//echo " \033[101m\033[1;97m[ TOOL SPAM COMMENT + IMAGE ]\033[0m\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
    for($i = 0; $i < strlen($logo); $i++){echo $logo[$i];usleep(1200);}
} else { 
    @system('cls'); 
    echo $logo;
}




// echo $kov."\033[1;32mLấy User-Agent tại:\033[1;97m http://my-user-agent.com/ \n";
// echo $kov."Nhập User-Agent\033[1;97m:\033[1;93m ";
// $_SESSION["useragent"] = trim(fgets(STDIN));



echo $kov."\033[1;32mNhập Số Lượng Cookie\033[1;97m: \033[1;93m";
$sltk = trim(fgets(STDIN));
for($tk = 1; $tk <= $sltk; $tk++){
    echo $kov."\033[1;32mNhập Cookie Thứ ".$tk."\033[1;97m: \033[1;93m";
    $valua_token = trim(fgets(STDIN));
    array_push($list_cookie, $valua_token);
}

echo $thanhngang1;


echo $kov."\033[1;32mNhập Số Lượng Group\033[1;97m:\033[1;93m ";
$sltk = trim(fgets(STDIN));
for($gr = 1; $gr <= $sltk; $gr++) {
    echo $kov."\033[1;32mNhập Link Group hoặc ID Thứ ".$gr."\033[1;97m:\033[1;93m ";
    $valua_link = trim(fgets(STDIN));
    $id = $valua_link;
    if (strpos($valua_link, 'facebook')) {
		$id = lay_id_gr_kkk($valua_link);
	}
    if ($id == "1") {
        echo "\033[1;91mLink Group Không Tồn Tại. !\n";
    } else {
        array_push($kho_idgr,$id);
    }
}

echo $thanhngang1;





$FILE_NAME = "Noidung.txt";
if (file_get_contents($FILE_NAME) == false) {
    file_put_contents($FILE_NAME,"<NEW> Đây là nội dung cmt mẫu 1 <BR> xuống dòng rồi nè <PNG>https://ibb.co/NyCmm52</PNG></NEW>
<NEW> Đây là nội dung cmt mẫu 2 <BR> xuống dòng rồi nè <PNG>https://ibb.co/NyCmm52</PNG></NEW>
");
}

echo $kov."\033[1;32mVào Thư Mục Theo Đường Dẫn\033[1;37m ".shell_exec('pwd')."";
echo $kov."\033[1;32mNhập Nội Dung Vào File\033[1;37m Noidung.txt\033[1;32m xong thì ấn Enter\n";
echo $kov."\033[1;32mXem video hướng dẫn tại đây:\033[1;37m \n";
echo $kov."\033[1;32mUpload Ảnh Và Lấy Link Ở Đây:\033[1;37m https://imgbb.com/upload";
$e = trim(fgets(STDIN));
//$messe = file_get_contents("Noidung.txt");//trim(fgets(STDIN));

echo $kov."\033[1;32mDelay Mỗi Comment\033[1;97m:\033[1;93m ";
$SEC = trim(fgets(STDIN));
echo $kov."\033[1;32mSau Bao Nhiêu Nhiệm Vụ Thì Đổi Group\033[1;97m:\033[1;93m ";
$chuyen = trim(fgets(STDIN));
echo $kov."\033[1;32mBật Chống Phát Hiện Spam CMT (Y/N)\033[1;97m:\033[1;93m ";
$Y_TIME = trim(fgets(STDIN));


if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
    for($i = 0; $i < strlen($logo); $i++){echo $logo[$i];usleep(1200);}
} else { 
    @system('cls'); 
    echo $logo;
}
echo $kov."\033[1;32mTool Spam Comment + Ảnh Group\033[1;93m \n";
echo $kov."\033[1;32mTool Bản Quyền\033[1;93m An Orin\n";
echo $kov."\033[1;32mSố Facebook đã thêm\033[1;93m ".count($list_cookie)."\n";
echo $kov."\033[1;32mSố Group đã thêm\033[1;93m ".count($kho_idgr)."\n";
echo $kov."\033[1;32mNội Dung Trong File:\033[1;97m Noidung.txt \n";
echo $kov."\033[1;32mTool Delay:\033[1;93m $SEC \n";
echo $kov."\033[1;32mĐổi Group Sau\033[1;93m $chuyen Nhiệm Vụ\n";
if($Y_TIME == "y" or $Y_TIME == "Y"){
    $chong_sp = "\033[1;93m Đã Bật";
}else{
    $chong_sp = "\033[1;91m Đã Tắt";
}
echo $kov."\033[1;32mChống Phát Hiện Spam:$chong_sp \n";


echo $thanhngang1;

while(true) {
    if (count($list_cookie) == 0) {
        echo $thanhngang1;
        echo ($kov."Tất Cả Cookie Được Thêm Không Còn Hoạt Động. !\n");        
        
        $list_cookie = [];
        echo $kov."\033[1;32mNhập Số Lượng Cookie\033[1;97m: \033[1;93m";
        $sltk = trim(fgets(STDIN));
        for($tk = 1; $tk <= $sltk; $tk++){
            echo $kov."\033[1;32mNhập Cookie Thứ ".$tk."\033[1;97m: \033[1;93m";
            $valua_token = trim(fgets(STDIN));
            array_push($list_cookie, $valua_token);
        }
        echo $thanhngang1;
    } else {
        echo $kov."Tổng Số Lượng Cookie Còn Lại: \033[1;97m\033[1;93m ".count($list_cookie)."\n";
        echo $thanhngang1;
    }
    foreach ($kho_idgr as $idgr) {

       
    for ($x = 0; $x < count($list_cookie); $x++) {
        $cookie = $list_cookie[$x];
        $token = GET($cookie);
//        $idgr = $kho_idgr[$x];
        if ($token == "1") {
            echo "\033[1;91mCookie Thứ ".($x + 1)." Die. Error 1 !\n";
            array_splice($list_cookie, $x, 1); 
            break;
        } else {
            $check = reqjasbsbciub("https://graph.facebook.com/me/?fields=id,name&access_token=".$token, $cookie);
            
            $check2 = json_decode($check, true);
            if (strpos($check, 'id') == true){
                $idfb = $check2["id"];
                $namefb = $check2["name"];
            } else {
                echo "\033[1;91mCookie Thứ ".($x + 1)." Die. Error 2 !\n";
                array_splice($list_cookie, $x, 1); 
                break;
            }
            
            echo $kov."\033[1;97m ID: \033[1;93m".$idfb."\033[1;97m NAME: \033[1;93m".$namefb."\n";
            echo $thanhngang1;

            $getjob = reqjasbsbciub("https://graph.facebook.com/".$idgr."/feed?access_token=".$token, $cookie);      
//            echo $idgr."\n";
            $result = json_decode($getjob, true);
            if (array_key_exists("error", $result)) {
                echo "\033[1;91mCookie Thứ ".($x + 1)." Die. Error 3 !\n";
                array_splice($list_cookie, $x, 1); 
                break;
            } else {
                $data_job = $result["data"];
            }
            foreach ($data_job as $data_job) {
                $link_job = $data_job["actions"][0]["link"];
                $id_job = $idgr."_".explode("posts/",$link_job)[1];
                $id_cmt = explode("posts/",$link_job)[1];
                $bytes = random_bytes(5);

                $FILE_NAME = "Noidung.txt";
                $Y_TIME = 'y';
                $msg = rand_cmt_content_($Y_TIME,$FILE_NAME);
                $noidung = $msg['msg'];
                $link_anh = $msg['anh'];
                $check_cmt = auto_cmt_moi_ne($token, $id_cmt, $noidung, $link_anh, $cookie);
                if ($check_cmt == "1") {
                    echo $kov."Không Thể Truy Cập Bài Viết     \r";
//                    sleep(1);
                    continue;
                }

                if ($check_cmt["status"] == "die") {
                    echo "\033[1;91mCookie Thứ ".($x + 1)." Die. Error 4 !\n";
                    array_splice($list_cookie, $x, 1); 
                    break;
                } else {
                    $dem = $dem +1;
                    $uid = $check_cmt["id"];
                    if($link_anh == ""){
                        $tt = $do."[".$vang.$dem.$do."]".$luc." | ".$vang.date("H:i:s").$luc." |".$vang."   COMMENT  ".$luc." | ".$trang.$uid.$luc." | ".$xnhac.$noidung."\n";
                    }else{
                        $tt = $do."[".$vang.$dem.$do."]".$luc." | ".$vang.date("H:i:s").$luc." |".$vang." COMMENT ẢNH".$luc." | ".$trang.$uid.$luc." | ".$xnhac.$noidung."\n";
                    }
                    echo $tt;
                    DELAY($SEC);
                    if($dem % $chuyen == 0) { 
                        $spam = 1;
                        break;
                    }
                }
            }
        }
    }
}
}
            
            


function get_job($access_token, $idgr, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/".$idgr."/feed?access_token=".$access_token);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    $result = json_decode($res, true);
    curl_close ($ch);
    if (array_key_exists("error", $result)) {
        return "1";
    } else {
        return $result;
    }
}
function reqjasbsbciub($url, $cookie) {
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER =>
            array(
                "Cookie:".$cookie,
            ),
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_ENCODING => TRUE,
        )
    );
    $ch = curl_exec($ch);
    return $ch;
}




function GET($cookie){
    $head = array("Connection: keep-alive","Keep-Alive: 300","authority: m.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document");
    $ch=curl_init();
	curl_setopt_array($ch , array(
		CURLOPT_URL => "https://business.facebook.com/content_management/",
		CURLOPT_USERAGENT => $_SESSION["useragent"],
		CURLOPT_COOKIE => $cookie,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = curl_exec($ch);
	curl_close($ch);
    $access_token = 'EAAG'.explode('","', explode('EAAG', $access)[1])[0];

    if(strlen($access_token) > 5){
    	return $access_token;
    } else {
    	return "1";
    }
}

function DELAY($SEC) {
    for($tt = $SEC ;$tt>= 1;$tt--){
        echo "\r\033[1;33m   CMT-Group \033[1;31m ~>       \033[1;32m LO      \033[1;31m >   | $tt | "; usleep(150000);
        echo "\r\033[1;31m   CMT-Group \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m >>  | $tt | "; usleep(150000);
        echo "\r\033[1;32m   CMT-Group \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m >>> | $tt | "; usleep(150000);
        echo "\r\033[1;34m   CMT-Group \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m >   | $tt | "; usleep(150000);
        echo "\r\033[1;35m   CMT-Group \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m >>  | $tt | "; usleep(150000);
        echo "\r\033[1;35m   CMT-Group \033[0;33m        ~>\033[0;37m LOADING \033[0;31m >>> | $tt | "; usleep(150000);
        echo "\r\033[1;35m   CMT-Group \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);
    } 
        echo "\r\e[1;95m    🍉 An Orin 🍉      SPAM COMMENT                 \r"; 
}
function load_($a)
{
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        sleep(1);
    }
}
function in_text($a)
{
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(6000);
    }
}
function get_random_string($length)
{
    $valid_chars = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
    $random_string = "";
    $num_valid_chars = strlen($valid_chars);
    for ($i = 0; $i < $length; $i++) {
        $random_pick = mt_Rand(1, $num_valid_chars);
        $random_char = $valid_chars[$random_pick - 1];
        $random_string .= $random_char;
    }
    return $random_string;
}
function logo_tool($link)
{
    $logo = "\033[1;33m                   TOOL PhíVÀ CHẤT LƯỢNG\n\033[1;31m              ____________   __________  ____  __ \n\033[1;32m             /_  __/_  __/  /_  __/ __ \/ __ \/ / \n\033[1;33m              / /   / /      / / / / / / / / / /  \n\033[1;34m             / /   / /      / / / /_/ / /_/ / /___\n\033[1;35m            /_/   /_/      /_/  \____/\____/_____/\n\033[1;36m            Group FB:\033[1;33m https://fb.com/869691053962196\n\033[1;32m            Group Zalo:\033[1;37m https://zalo.me/g/tvgaal551\n\033[1;33m            Youtube:\033[1;33m King Of AOV\n\033[1;37m            Mua key Và Giao Dịch Trung Gian Online\n\033[1;33m            ✅Tại đây:\033[1;36m https://tranthuongtv.name.vn/\n\033[1;32m            Link key free:\033[1;35m " . $link . "\n\033[1;32m ══════════════════════════════════════════════════════════════";
    return $logo;
}



//đợi mạng
function ketnoimangV1(){
    $knod = 0;
    $connect = 'false';

    while($connect == 'false'){
        $knod++;
        $aa = file_get_contents('https://tranthuongtv.name.vn/connect_ketnoimang');
        if($aa != ''){
        $connect = 'true';
        }
        if($knod == 3){
            $knod++;
            echo"\r";
            echo"\r                                         \r";
        echo "\033[1;31m kết nối của bạn tạm thời không ổn địn \r";
        
        }
    }

}

$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
$useragent = 'Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';


function namefb ($cookie){
$name = file_get_contents("https://thuongdz.name.vn/Api_tds/func_fb.php?name_fb&cookie=" . urlencode($cookie));
return $name;
}


function lay_token_moi($cookie)
{
    $token_me =  file_get_contents("https://thuongdz.name.vn/Api_tds/func_fb.php?get_token=EAAG&cookie=" . urlencode($cookie));
    return $token_me;
}

function lay_token_moi_v1($cookie)
{
    $token_me =  file_get_contents("https://thuongdz.name.vn/Api_tds/func_fb.php?get_token=EAAB&cookie=" . urlencode($cookie));
    return $token_me;
}

function get_id_luot_fb($cookie){
$data = file_get_contents("https://thuongdz.name.vn/Api_tds/func_fb.php?id_luot_fb&cookie=" . urlencode($cookie));
return $data;
}

function cmt_fb_cookie_new($id,$cookie,$msg){
$mr = curl_init();
$head = [
    "Host:mbasic.facebook.com",
    'sec-ch-ua:"Google Chrome";v="87", " Not;A Brand";v="99", "Chromium";v="87"',
    "sec-ch-ua-mobile:?1",
    "cache-control:max-age=0",
    "upgrade-insecure-requests:1",
    "dnt:1",
    "save-data:on",
    "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
    "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "sec-fetch-site:same-origin",
    "sec-fetch-mode:navigate",
    "sec-fetch-user:?1",
    "sec-fetch-dest:document",
    "referer:https://mbasic.facebook.com/",
    "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",];
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/$id");
curl_setopt($mr, CURLOPT_COOKIE, $cookie);
curl_setopt($mr, CURLOPT_HTTPHEADER, $head);
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($mr, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($mr, CURLOPT_FOLLOWLOCATION, TRUE);
$mr2 = curl_exec($mr);
$fb_dtsg = explode('"',explode('fb_dtsg" value="',$mr2)[1])[0];
$jazoest = explode('"',explode('jazoest" value="',$mr2)[1])[0];
$cmt = explode('"',explode('action="/a/comment.php?',$mr2)[1])[0];
$text = "fb_dtsg=".$fb_dtsg."&jazoest=".$jazoest."&comment_text=".$msg;
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/a/comment.php?".htmlspecialchars_decode($cmt));
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_POSTFIELDS, $text);
$mr2 = curl_exec($mr);
curl_close($mr);
}

function logo_kov(){
if(file_get_contents("https://thuongdz.name.vn/tool_11_8/encode.php?code=60466".filesize(basename($_SERVER['PHP_SELF']))) != '741380241.29293'){
}
$logo = "\033[1;37m                   TOOL MIỄN PHÍ VÀ CHẤT LƯỢNG\n\033[1;31m              ____________   __________  ____  __ \n\033[1;32m             /_  __/_  __/  /_  __/ __ \/ __ \/ / \n\033[1;33m              / /   / /      / / / / / / / / / /  \n\033[1;34m             / /   / /      / / / /_/ / /_/ / /___\n\033[1;35m            /_/   /_/      /_/  \____/\____/_____/\n\033[1;36m            Group FB:\033[1;33m https://fb.com/869691053962196\n\033[1;32m            Group Zalo:\033[1;37m https://zalo.me/g/tvgaal551\n\033[1;33m            Youtube:\033[1;33m King Of AOV\n\033[1;37m            Mua key Và Giao Dịch Trung Gian Online\n\033[1;33m            ✅Tại đây:\033[1;36m https://tranthuongtv.name.vn/\n\033[1;32m            Link key free:\033[1;35m \n\033[1;32m ══════════════════════════════════════════════════════════════";
return $logo;
}


function share_token($access_token, $id)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    $data = array(
        'privacy' => '{"value":"EVERYONE"}',
        'message' => '',
        'link' => 'https://mbasic.facebook.com/' . $id . '',
        'access_token' => $access_token
    );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $a = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $a;
}

function share_cookie($id, $cookie)
{
    file_get_contents("https://thuongdz.name.vn/Api_tds/func_fb.php?share&cookie=" . urlencode($cookie)."&id=".$id."&msg=");

}


function share_msg($id, $cookie, $msg)
{
    file_get_contents("https://thuongdz.name.vn/Api_tds/func_fb.php?share&cookie=" . urlencode($cookie)."&id=".$id."&msg=".$msg);
}


function SONICKTT_TTC($cauhinh, $kov)
{
    $get = explode('<ul id ="dsnicktt" class="list-group" style="max-height: 415px; overflow-y: scroll;">', $cauhinh)[1];
    $get1 = explode('<button class="btn btn-success" id="datnicktt">Đặt làm nick chạy</button>', $get)[0];
    $nick = explode("<h4>DANH SÁCH NICK TIK TOK</h4></div>", $cauhinh)[1];
    $nick1 = explode("<img src=''/", $nick)[1];
    $nick2 = explode("> ", $nick1)[1];
    $nick_sd = explode("</a", $nick2)[0];
    $st = 1;
    $het = 0;
    $a = "TOOL BY King Of Aov";
    echo $kov."TikTok Đã Được Thêm - chọn số để cấu hình \n";
    $list_TT = [];
    $dem_us_tt = 1;
    while (true) {
        $a = explode("value=", $get1)[$st];
        $idtt = explode("'", $a)[1];
        $us = explode("<img src=''/>", $a)[1];
        $us1 = explode("</label>", $a)[0];
        $usertt = explode("/><img src=''/> ", $us1)[1];
        if ($usertt == "") {
            break;
        }
        echo $kov ."\033[1;91m[\033[1;93m" .$dem_us_tt."\033[1;91m]\033[1;95m " . $usertt . "\n";
        array_push($list_TT, $usertt);
        $st = $st + 1;
        $dem_us_tt++;
    }
    $stt = 1;
    $id_dat = "King Of Aov";
    while (true) {
        if ($het == 0) {
            echo $kov . "Nhập số\033[1;97m:\033[1;93m ";
            $NhapCH = trim(fgets(STDIN));
            $NhapCH = $list_TT[$NhapCH-1];
            $_SESSION['_TT_CH'] = $NhapCH;
        }
        $a = explode("value=", $get1)[$stt];
        $idtt = explode("'", $a)[1];
        $us = explode("<img src=''/>", $a)[1];
        $us1 = explode("</label>", $a)[0];
        $usertt = explode("/><img src=''/> ", $us1)[1];
        if ($usertt == $NhapCH) {
            $IDTIKTOK = $idtt;
            break;
        }
        if ($usertt == "") {
            break;
        }
        $stt = $stt + 1;
        $het = 1;
    }

    return $IDTIKTOK;
}

function NHANTIEN_TTCTT($LIST_NHAN, $TYPE)
{
    while (true) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_PORT, "443");
        curl_setopt($ch, CURLOPT_URL, "https://tuongtaccheo.com/tiktok/" . $TYPE . "/nhantien.php");
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        $DATA = http_build_query(
            array(
                "id" => $LIST_NHAN,
            )
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $DATA);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array("Host: tuongtaccheo.com", "content-length:" . strlen($DATA), "x-requested-with: XMLHttpRequest", "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36", "content-type: application/x-www-form-urlencoded; charset=UTF-8",)
        );
        curl_setopt($ch, CURLOPT_COOKIEFILE, "CookieTTC.txt");
        $NHAN_JB = curl_exec($ch);
        if ($NHAN_JB == '0') {
            if ($cdlogin == "1") {
                $LOGIN = LOGINACS($TOKEN_TTC);
            } else {
                $LOGIN = LOGINUSR($TAIKHOAN, $MATKHAU);
            }
            if ($LOGIN == true) {
                echo "\033[1;32m TÀI KHOẢN BỊ LOGOUT AUTO LOGIN THÀNH CÔNG\n";
                continue;
            } else {
                echo "\033[1;31m TÀI KHOẢN BỊ LOOGUT AUTO LOGIN THẤT BẠI\n";
                die;
            }
        } else {
            return json_decode($NHAN_JB, true);
        }
    }
}



function LOGIN_TDSTT($TK, $MK) {
    $DATA = http_build_query(
        array(
            "username"=>$TK,
            "password"=>$MK,
        )
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://traodoisub.com/scr/login.php",
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_COOKIEJAR => "TDS.txt",
        CURLOPT_HTTPHEADER => array("Host:traodoisub.com","content-length:".strlen($DATA),"accept:application/json, text/javascript, */*; q=0.01","x-requested-with:XMLHttpRequest","user-agent:Mozilla/5.0 (Linux; Android 10; SM-A750GN Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36","content-type:application/x-www-form-urlencoded; charset=UTF-8",),
        CURLOPT_POSTFIELDS => $DATA,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HEADER => true,
        CURLOPT_ENCODING => TRUE
    ));
    curl_exec($ch);
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://traodoisub.com/view/setting/load.php",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => array("Host:traodoisub.com","user-agent:Mozilla/5.0 (Linux; Android 10; SM-A750GN Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36","accept:application/json, text/javascript, */*; q=0.01","x-requested-with:XMLHttpRequest","referer:https://traodoisub.com/view/setting/",),
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_ENCODING => TRUE
    ));
    $MR2 = curl_exec($ch);
    if ($MR2 == true) {
        $INFO = json_decode($MR2, true);
        $_SESSION["xu"] =        $INFO["xu"];
        $_SESSION["user"] =      $INFO["user"];
        $tokentds = $INFO["tokentds"];
    } else {
        die("tài khoản & mật khẩu sai !\n");
    }
    return $tokentds; 
}
function lay_id_gr_kkk($valua_link){
    $valua_link = $str = str_replace("/?ref=share", "", $valua_link);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://id.traodoisub.com/api.php');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.56 Safari/537.36');
    $da = 'link=' . $valua_link;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $da);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $jk = curl_exec($ch);
    curl_close($ch);
    // $id = explode('id":', $id)[1];
    // $id = explode(',', $id)[0];
    if (strpos($jk, '"id":"')) {
        $id = explode('id":"', $jk)[1];
        $id = explode('"', $id)[0];
    } else {
        $id = explode('id":', $jk)[1];
        $id = explode(',', $id)[0];
    }
    if($id == ''){
        $id = 1;
    }
    return $id;
}

function rand_cmt_content_($Y_TIME,$FILE_NAME)
{
if (file_get_contents($FILE_NAME) == false) {
    file_put_contents($FILE_NAME,"Xin chào các bạn
đây là ví dụ 1
xem những tool mới nhất tại kênh:
https://www.youtube.com/channel/UCFPCSDuKIm7PpIC-RdjRfww

Hello hello
đây là ví dụ 2
tải tool tại web: https://www.tranthuongtv.name.vn/King_Of_Aov/
https://ibb.co/z4F6KG9

Chào đây là ví dụ comment 3

Đây là ví dụ 4
https://ibb.co/TRTTfVP");
}
for($i = 0; $i< 3; $i++ ){
    $messe = file_get_contents($FILE_NAME);
    $xuongdong = "

";
    $messe_code = str_replace($xuongdong,'<br/>',$messe);
    $xuongdong = "
";
    $messe_code = str_replace($xuongdong,'\n',$messe_code);
    $xuongdong = "
";
    $messe_code = str_replace('<br/>',$xuongdong,$messe_code);
    $fl_ct = fopen('Noidung_code.txt', "w");
    
    fwrite($fl_ct, $messe_code);
    
    fclose($fl_ct);
    }
    //$list_dem = [];
    $file = 'Noidung_code.txt';
    $sodong = count(file($file));
    for ($i = 0; $i < 2; $i++) {
        $row = rand(1,$sodong);
    }

    $file = fopen($file, "r");
    for ($i = 0; $i < $row; $i++) {
        $content = fgets($file);
    }

    $xuongdong = "
";
$msg = str_replace('\n',$xuongdong,$content);

if($Y_TIME == 'y' || $Y_TIME == 'Y'){
    date_default_timezone_set("Asia/Ho_Chi_Minh");
$msg1 = date("d/m/Y H:i:s")."
".$msg;
}else{
    $msg1 = $msg;
}

if (strpos($msg1, "https://ibb.co") == true){
    file_put_contents("ND_tam.txt",$msg1);
    $sodong = count(file("ND_tam.txt"));
    $file = fopen("ND_tam.txt", "r");
    for ($i = 0; $i < $sodong; $i++) {
        $link_anh = fgets($file);
    }
    //$anh = $link_anh;// get_link_anh_msg($msg1);
    $link = file_get_contents(trim($link_anh));
    //file_put_contents("test_html.html",$link);
    $anh =  explode('"',explode('<img src="',$link)[1])[0];

    $content1 = '';
    file_put_contents("ND_tam.txt",$msg);
    $sodong = count(file("ND_tam.txt"));
    $file = fopen("ND_tam.txt", "r");
    for ($i = 0; $i < $sodong-1; $i++) {
        $content = fgets($file);
        $content1 = $content1.$content;
    }
    $msg1 = $content1;//get_nd_anh_msg($msg1);
}else{
    $anh =  "";
}
$arr_msg = [];
$arr_msg = array("msg" => $msg1,
               "anh" => $anh);
    unlink("ND_tam.txt");
    unlink("Noidung_code.txt");
    return $arr_msg;
}


function auto_cmt_moi_ne($access_token, $idpost, $mess, $img, $cookie) {
    if($img == "no" or $img == "" or $img == " ") {
        $data = array(
            "access_token" => $access_token,
            "message" => $mess
        );
    } else {
        $data = array(
            "access_token" => $access_token,
            "message" => $mess,
            "attachment_url" => $img
        );
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION["useragent"]);
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/".$idpost."/comments");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
//    echo$res."\n";
    if (strpos($res, "An unknown error occurred") == true) {
        return "1";
    } else if (strpos($res, '"fbtrace_id":') == true) {
        return "1";
     }
    $result = json_decode($res,true);
    curl_close ($ch);
    if (array_key_exists("error", $result)) {
        $kq = $result["error"]["message"];
        $msg = json_encode(["status"=>"die","msg"=>$kq]);
        return json_decode($msg, true);
    } else {
        return $result;
    }
}













function _share_ao($loai_nhap_id, $_token_fb, $cookie, $block, $xxx, $x, $dem, $id)
{
    $DIE_TK = 0;
    global $link_bv;
    global $_token_fb;
    global $cookie;
    global $block;
    global $xxx;
    global $x;
    global $dem;
    global $id;
    global $so_url;
    global $hòa;
    global $main;
    global $hex;
    global $block;
    global $DIE_TK;
    global $curl_all_arr;
    global $loai_nhap_id;
    if ($loai_nhap_id == "1") {
    $id   = trim(fread(fopen("ID_Share_Ao.txt", "r"), filesize("ID_Share_Ao.txt")));
    }
    $link_bv = "https://facebook.com/" . $id . "";
    $url_array = curl_setshare($link_bv, $_token_fb);
    $so_url = count($url_array);
    $curl_all_arr = array();
    $main = curl_multi_init();
    for ($hex = 0; $hex < $so_url; $hex++) {
        $url = $url_array[$hex];
        $curl_all_arr[$hex] = curl_init($url);
        curl_setopt($curl_all_arr[$hex], CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_all_arr[$hex], CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl_all_arr[$hex], CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl_all_arr[$hex], CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_all_arr[$hex], CURLOPT_COOKIE, "$cookie");
        curl_multi_add_handle($main, $curl_all_arr[$hex]);
    }
}

function curl_setshare($link_bv, $_token_fb)
{
    $url_array = array(
        "https://graph.facebook.com/me/feed?link=" . $link_bv . "&published=0&access_token=" . $_token_fb,
    );
    return $url_array;
}


function req($url, $cookie)
{
    $ch   = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER =>
            array(
                "Cookie:" . $cookie,
            ),
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_ENCODING => TRUE,
        )
    );
    $ch = curl_exec($ch);
    return $ch;
}




function reg_page_c($idpageme, $name_page, $cookiefb, $token_con)
{   
    
    $number   = rand(0, 9999999999);
    $name_page = $name_page . $number;
    $data = [
        '_reqName' => 'object:page/locations',
        '_reqSrc' => 'LocationManagerUtils',
        'always_open' => 'false',
        'differently_open_offerings' => '{}',
        'id' => $idpageme,
        'ignore_warnings' => 'true',
        'is_franchise' => 'false',
        'locale' => 'vi_VN',
        'location' => '{"city_id":2590099,"latitude":"10.' . rand(0, 99999) . '","longitude":"104.' . rand(0, 99999) . '","street":"' . $name_page . '","zip":"10000"}',
        'method' => 'post',
        'permanently_closed' => 'false',
        'phone' => '+84982242243',
        'pickup_options' => '[]',
        'place_topics' => '["123377808095874","530553733821238"]',
        'pretty' => '0',
        'store_name' => $name_page,
        'store_number' => rand(0, 1789273828),
        'suppress_http_code' => '1',
    ];
    $data = http_build_query($data);
    $ch   = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://graph.facebook.com/v11.0/' . $idpageme . '/locations?access_token=' . $token_con,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER =>
            array(
                "content-type:application/x-www-form-urlencoded",
                "Cookie:" . $cookiefb,
            ),
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_ENCODING => TRUE,
        )
    );
    $ch = curl_exec($ch);
    return $ch;
}


function id_page_me($cookie)
{
    $useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: business.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://business.facebook.com/business_locations",
        CURLOPT_USERAGENT => $useragent,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_FOLLOWLOCATION => TRUE
    ));
    $access = curl_exec($ch);
    curl_close($ch);
    $id = explode('URL=/business_locations/?page_id=', $access)[1];
    $id = explode('&', $id)[0];
    return $id;
}


?>