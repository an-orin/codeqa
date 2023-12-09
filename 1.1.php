<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
@system('clear');


$xnhac = "\033[1;96m";
$luc = "\033[1;92m";
$hong = "\033[1;95m";
$do = "\033[1;31m";
$vang = "\033[1;93m";
$trang = "\033[1;97m";
$logo = logo_kov();

/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
        $_SESSION['load'] = 2000;
        $_SESSION['delay'] = 150000;
} else {
        $_SESSION['load'] = 0;
        $_SESSION['delay'] = 100000;
}

if(!$_SESSION['version']) {
        $_SESSION['version'] = "3.9";
}
$job = 8;


$tool = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
$tool1= $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";

echo $banner1;

while (true){            
    system("clear");
    echo $logo."\n";
    
    if (file_exists("configttc.txt")){
            if(file_get_contents("configttc.txt") == ''){
                    unlink("configttc.txt"); continue;
            }
            $_SESSION['token'] = fread(fopen("configttc.txt", "r"), filesize("configttc.txt"));
            $login = logintoken();
            if($login == false){
                    unlink("configttc.txt"); continue;
            }

            echo $tool1.$luc."Nhập ".$vang."[".$trang."1".$vang."] ".$luc."Giữ Lại Tài Khoản ".$vang.$_SESSION['user']."\n";
            echo $tool1.$luc."Nhập ".$vang."[".$trang."2".$vang."] ".$luc."Nhập Access_Token TTC Mới \n";
            echo $tool1.$luc."Nhập ".$trang."===>: $vang";
            $chon_tk = trim(fgets(STDIN));
        if ($chon_tk == "2") {
            unlink("configttc.txt");
            loadyt();
            } else if ($chon_tk == "1") {
        } else {
                    echo $do." Lựa chọn không xác định !!!\n";
                    loadyt(); continue;
        }
    }
    if(!file_exists("configttc.txt")){
        echo $luc."Lấy Access_Token TTC Tại: ".$trang."https://tuongtaccheo.com/api/ \n";
        echo $tool1.$luc."Nhập Access_Token TTC: $vang";
                $tokenacc = trim(fgets(STDIN));
        fwrite(fopen("configttc.txt", "w+"), $tokenacc);
    }
    $_SESSION['token'] = fread(fopen("configttc.txt", "r"), filesize("configttc.txt"));
    $login = logintoken();
    if($login == true){
            echo $xnhac." Đăng Nhập Thành Công.       \n";
                break;
        } else {
                //echo $do." Access_Token TTC Sai \n";
                unlink("configttc.txt");
                loadyt();
        }
}
//youtube


while (true){            
    system("clear");
    echo $logo."\n";
    
    if (file_exists("configytb.txt")){
            if(file_get_contents("configytb.txt") == ''){
                    unlink("configytb.txt"); continue;
            }
            echo $tool1.$luc."Nhập ".$vang."[".$trang."1".$vang."] ".$luc."Chạy cookie Youtube cũ\n";
            echo $tool1.$luc."Nhập ".$vang."[".$trang."2".$vang."] ".$luc."Nhập Cookie Youtube Mới \n";
            echo $tool1.$luc."Nhập ".$trang."===>: $vang";
            $chon_tk = trim(fgets(STDIN));
        if ($chon_tk == "2") {
            unlink("configytb.txt");
            loadyt();
            } else if ($chon_tk == "1") {
            break;
        } else {
                    echo $do." Lựa chọn không xác định !!!\n";
                    loadyt(); continue;
        }
    }
    if(!file_exists("configytb.txt")){
        //echo $luc."Lấy Access_Token TTC Tại: ".$trang."https://tuongtaccheo.com/api/ \n";
        echo $tool1.$luc."Nhập Cookie Youtube: $vang";
        $cookie = trim(fgets(STDIN));
        echo $tool1.$luc."Nhập Authorization Youtube: $vang";
        $authorization = trim(fgets(STDIN));

        fwrite(fopen("configytb.txt", "w+"), $cookie."|".$authorization);
        break;
    }
}

    $content_ck = fread(fopen("configytb.txt", "r"), filesize("configytb.txt"));
    $cookie = explode("|",$content_ck)[0];
    $authorization = explode("|",$content_ck)[1];



    @system('clear');
    echo $logo."\n";

    echo $tool1.$luc."Vào cấu hình tương tác chéo cấu hình acc muốn chạy rồi ấn enter $vang";
    trim(fgets(STDIN));


@system('clear');
$xu = coin($tool1);
echo $logo."\n";
echo $tool1.$luc."Tool Auto Subscribe TTC Youtube\n";
echo $tool1.$luc."Bản quyền Vựa Buff\n";
loadyt();
echo $tool1.$luc."Tên Tài Khoản: ".$vang.$_SESSION['user']."\n";
echo $tool1.$luc."Xu hiện tại: ".$vang.$xu."\n";
loadyt();
$dem = 0;
$stt = 0;
        while (true) {
        echo $tool1.$luc."Nhập Delay: $vang";
                $delay = trim(fgets(STDIN));
        if($delay == '' || !is_numeric($delay)){
            echo $do." Delay Không Xác Định  \n";
        } if($delay < 15) {
            echo $do." Delay Tối Thiểu 15s  \n";
        } else {
            break;
        }
    }
    loadyt();
    while (true){
            for($i = 0; $i < 3; $i++){
                $listsub = get_yt("/subcheo");
                // print_r($listsub);
                if($listsub == ''){
                    $login = logintoken();
                    if($login == true){
                        echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \r";
                        sleep(2); continue;
                    } else {
                            echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; die;
                    }
                    }
                    echo $luc." Đã Tìm Thấy ".$vang.count($listsub).$luc." Nhiệm Vụ Follow     \r";
                    if(count($listsub) !==  0){ break; }
                    sleep(2);
            }
            if(count($listsub) < $job){
                        echo $do."\n Nhiệm Vụ Quá Ít, Không Thể Nhận Xu Khi Làm          \n"; sleep (2);
                        loadyt(); break;
                }
                $list = '';
                $stt = $job*(floor(count($listsub)/$job));
                //echo "\n".$stt."\n";
            for($lap = 0; $lap < $stt; $lap++){
                $id = $listsub[$lap]["idpost"];
                $link = $listsub[$lap]["link"];
                //echo $link;
                if(isset($link)){
                    if(curl_subscribe_youtube($link,$cookie,$authorization) == 1){
                        $xu = coin($tool1);
                        $dem++;
                        $kl = "\033[1;31m[\033[1;33m".$dem."\033[1;31m]\033[1;92m | \033[1;36m".date("H:i:s")."\033[1;92m | \033[1;93m"."FOLLOW\033[1;92m ✔ \033[1;37m".$link." \n";
                                for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1500);}
                                delay($delay);
                        $list = $list.$id.",";
                        if($dem % $job == 0){
                                $list = substr($list, 0, (strlen($list) - 1));
                                $nhantien = nhantien($list, "/subcheo");
                                if($nhantien["mess"]){
                                        $xujob = $nhantien["sodu"];
                                        $xu = $xu + $xujob;
                                    $kl = "\e[1;32m⌠\e[1;33mTTC YOUTUBE\e[1;32m⌡\e[1;35m✔\e[1;36m✔\e[1;92m✔\033[1;36m Nhận Thành Công ".($xujob/2000)." Nhiệm Vụ\033[1;92m ✔ \033[1;92m+$xujob Xu \033[1;92m✔\033[1;32m $xu \n";
                                                for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
                                                echo "\033[1;33m".str_repeat('- ', 35)."\n";
                                } else {
                                        sleep (1);
                                        echo $do.$nhantien["error"]."          \n";
                                }
                                $list = '';
                        }
                    }
                    
                }
            }
        }

function curl_subscribe_youtube($link,$cookie,$authorization)
{
    $data = file_get_contents($link);
    $link = "http://m.youtube.com/channel/".explode('"',explode('http://www.youtube.com/channel/',$data)[1])[0];
    //echo $link;
    $data = sub_yt($link, $cookie, $authorization);
    return $data;
}
function logo_kov(){
$xam = "\033[1;90m";
$xnhac = "\033[1;96m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$logo = "
\033[1;34m         █████╗  ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
        \033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
        \033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
        \033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
        \033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
        \033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;33mTOOL TTC YOUTUBE \033[1;37m(\033[1;33mAuto\033[1;37m)
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────";
return $logo;
}
function logintoken(){
        $data = 'access_token='.$_SESSION['token'];
        $head[] = 'Content-type: application/x-www-form-urlencoded';
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://tuongtaccheo.com/logintoken.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEJAR => "TTC.txt",
                CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $login = json_decode(curl_exec($ch));
    if($login->status == 'success'){
            $xu = $login->data->sodu;
            $_SESSION['user'] = $login->data->user;
            $js = fopen($_SESSION['user'].".txt", "a+");
            file_put_contents($_SESSION['user'].".txt", file_get_contents("TTC.txt"));
            unlink("TTC.txt");
            return true;
    } else if($login->status == 'fail'){
        echo "\033[1;31m ".$login->mess."\n";
        sleep(1);
        return false;
    } else {
        echo "\033[1;31m Kiểm Tra VPN (không đc sử dụng ip nước ngoài)\n";
            return false;
    }
}
function cauhinh($idtik){
        while (true){
        $data = "iddat[]=".$idtik."&loai=yt";
        $head = array(
            "Host: tuongtaccheo.com",
            "content-length: ".strlen($data),
            "accept: */*",
            "origin: https://tuongtaccheo.com",
            "x-requested-with: XMLHttpRequest",
            "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
            "content-type: application/x-www-form-urlencoded; charset=UTF-8",
            "referer: https://tuongtaccheo.com/cauhinh/index.php"
        );
        $ch = curl_init();
        curl_setopt_array($ch, array(
                CURLOPT_URL => 'https://tuongtaccheo.com/cauhinh/datnick.php',
                CURLOPT_FOLLOWLOCATION => TRUE,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
                CURLOPT_HTTPHEADER => $head,
                CURLOPT_ENCODING => TRUE
        ));
        $access = curl_exec($ch);
        if(strpos($access, 'Chưa đăng nhập !!!') !== false){
            $login = logintoken();
            if($login == true){
                echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \r"; continue;
            } else {
                echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; die;
            }
            } else {
            return $access;
            }
    }
}
function get_yt($type){
    $url  = "https://tuongtaccheo.com/youtube/kiemtien".$type."/getpost.php";
    $head = array(
        "Host: tuongtaccheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "referer: https://tuongtaccheo.com/tiktok/kiemtien/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = json_decode(curl_exec($ch), true);
    return $data;
}
function nhantien($id,$type){
    while (true){
        $url  = "https://tuongtaccheo.com/youtube/kiemtien".$type."/nhantien.php";
        $data = "id=".$id;
        $head = array(
            "Host: tuongtaccheo.com",
            "content-length: " . strlen($data),
            "x-requested-with: XMLHttpRequest",
            "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
            "content-type: application/x-www-form-urlencoded; charset=UTF-8",
            "origin: https://tuongtaccheo.com",
            "referer: https://tuongtaccheo.com/tiktok/kiemtien/"
        );
        $ch   = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
        if($data == '0'){
            $login = logintoken();
            if($login == true){
                    echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \r"; continue;
            } else {
                    echo "\033[1;31m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; die;
                    }
        } else {
            return json_decode($data, true);
        }
    }
}
function coin($tool1){
    while (true){
            $ch = curl_init();
        curl_setopt_array($ch, array(
                CURLOPT_URL => 'https://tuongtaccheo.com/home.php',
                CURLOPT_PORT => "443",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
        ));
        $access = curl_exec($ch);
        curl_close($ch);
        $xu = explode('"soduchinh">', explode('</strong>', $access)[0])[1];
        if (strpos ($access, "Chào mừng") == false){
                $login = logintoken();
            if($login == true){
                echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \r"; continue;
            } else {
                echo "\033[1;31m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; die;
            }
        } else if ($xu !== ''){
            return $xu;
        } else {
            echo "\033[1;31m Lỗi Không Xác Định                  \r";
        }
    }
}
function REQUEST($url) {
        $ch = curl_init();
        curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_USERAGENT => $_SESSION['useragent'],
                CURLOPT_FOLLOWLOCATION => TRUE,
                CURLOPT_ENCODING => '',
                CURLOPT_AUTOREFERER => TRUE,
                CURLOPT_CONNECTTIMEOUT => 15,
                CURLOPT_TIMEOUT => 15,
                CURLOPT_MAXREDIRS => 5,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HEADER => FALSE
        ));
    $access = curl_exec($ch);
    return json_decode($access);
}
function delay ($delay){
        for($tt = $delay ;$tt>= 1;$tt--){
        echo "\r\033[1;33m   TTC YOUTUBE \033[1;31m ~>       \033[1;32m LO      \033[1;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;31m   TTC YOUTUBE \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;32m   TTC YOUTUBE \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;34m   TTC YOUTUBE \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;35m   TTC YOUTUBE \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;35m   TTC YOUTUBE \033[0;33m        ~>\033[0;37m LOADING \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;35m   TTC YOUTUBE \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep($_SESSION['delay']);}
        echo "\r\e[1;95m    🍉An Orin🍉      TTC Youtube                 \r";
    }
function hienthi($dem, $loai, $id, $xujob, $xu){
    date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
        $kl = "\033[1;34m[\033[1;33m".$dem."\033[1;34m]\033[1;91m ✔ \033[1;36m".date("H:i:s")."\033[1;31m ✔ \033[1;".rand(31,37)."m".$loai."\033[1;31m ✔ \033[1;37m".$id."\033[1;31m ✔ \033[1;32m$xujob \033[1;31m✔\033[1;32m $xu \n";
    for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
}
function loadyt() {
    echo"\033[1;37m══════════════════════════════════════════════════════════════\n";
}
function sub_yt($url, $cookie, $authorization)
{
    $url = str_replace("www","m",$url);
    $url = str_replace("https://youtube","https://m.youtube",$url);
    $url = str_replace("http:","https:",$url);
    $head_g = ["user-agent:Mozilla/5.0 (Linux; Android 9; RMX1811) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36", "cookie: " . $cookie];
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://m.youtube.com",
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head_g,
        CURLOPT_ENCODING => true
    ));
    $dlg = curl_exec($ch);
    curl_close($ch);
    $authuser = explode('"', explode('authuser\u003d', $dlg) [1]) [0];
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head_g,
        CURLOPT_ENCODING => true
    ));
    $tim_id  = curl_exec($ch);
    curl_close($ch);
    $id_cn = explode('"', explode('channelId" content="', $tim_id) [1]) [0];
    if ($id_cn == false)
    {
        $id_cn = explode('"', explode('"channelId":"', $tim_id) [1]) [0];
    }
    $link = 'https://m.youtube.com/channel/' . $id_cn;
    if ($id_cn != false)
    {
        //echo ("Link Channel: " . $link . "\n");
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $link,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head_g,
            CURLOPT_ENCODING => true
        ));
        $dlg = curl_exec($ch);
        curl_close($ch);
        $context = explode('}},', explode('"INNERTUBE_CONTEXT":', $dlg) [1]) [0];
        $pageid = explode('"', explode('"DELEGATED_SESSION_ID":"', $dlg) [1]) [0];
        $url = 'https://m.youtube.com/youtubei/v1/subscription/subscribe?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8&prettyPrint=false';
        if ($pageid != false)
        {
            $head_p = ["origin:https://m.youtube.com", "authorization:$authorization", "x-goog-authuser:$authuser", "content-type:application/json", "x-goog-pageid:$pageid", "accept:*/*", "cookie: " . $cookie];
        }
        else
        {
            $head_p = ["origin:https://m.youtube.com", "authorization:$authorization", "x-goog-authuser:$authuser", "content-type:application/json", "accept:*/*", "cookie: " . $cookie];
        }
        $data = '{
  "context": ' . $context . '},
    "adSignalsInfo": {
      "params": [
        {
          "key": "dt",
          "value": "1659697776258"
        },
        {
          "key": "flash",
          "value": "0"
        },
        {
          "key": "frm",
          "value": "0"
        },
        {
          "key": "u_tz",
          "value": "420"
        },
        {
          "key": "u_his",
          "value": "5"
        },
        {
          "key": "u_h",
          "value": "895"
        },
        {
          "key": "u_w",
          "value": "424"
        },
        {
          "key": "u_ah",
          "value": "895"
        },
        {
          "key": "u_aw",
          "value": "424"
        },
        {
          "key": "u_cd",
          "value": "24"
        },
        {
          "key": "bc",
          "value": "31"
        },
        {
          "key": "bih",
          "value": "759"
        },
        {
          "key": "biw",
          "value": "424"
        },
        {
          "key": "brdim",
          "value": "0,0,0,0,424,0,424,759,424,759"
        },
        {
          "key": "vis",
          "value": "1"
        },
        {
          "key": "wgl",
          "value": "true"
        },
        {
          "key": "ca_type",
          "value": "image"
        }
      ]
    }
  },
  "channelIds": [
    "' . $id_cn . '"
  ],
  "params": "EgIIAhgA"
}';
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $head_p,
            CURLOPT_ENCODING => true
        ));
        $BA = curl_exec($ch);
        $kq = json_decode($BA, true);
        if (strpos(json_encode($kq, true) , "\u0110\u00e3 \u0111\u0103ng k\u00fd k\u00eanh") == true)
        {
          return "1";
        }
        else
        {
          return "0";
        }
        return true;
    }
    else
    {
        return false;
    }
}