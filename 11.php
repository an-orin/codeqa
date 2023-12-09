<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
@system('clear');
/***[ USERAGENT ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$banner1 = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TTC YOUTUBE
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
        $_SESSION['load'] = 2000;
        $_SESSION['delay'] = 150000;
} else {
        $_SESSION['load'] = 0;
        $_SESSION['delay'] = 100000;
}

/***[ Config ]***/
$job = 8;
$thanh_dep = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
/***[ Clear + Thông Số Admin ]***/
echo $banner1;
while (true){
    if (file_exists("configttc.txt")){
            if(file_get_contents("configttc.txt") == ''){
                    unlink("configttc.txt"); continue;
            }
            $_SESSION['token'] = fread(fopen("configttc.txt", "r"), filesize("configttc.txt"));
            $login = logintoken();
            if($login == false){
                    unlink("configttc.txt"); continue;
            }
            echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."1".$vang."] ".$luc."Giữ Lại Tài Khoản ".$vang.$_SESSION['user']."\n";
            echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."2".$vang."] ".$luc."Nhập Access_Token TTC Mới \n";
            echo $thanh_dep.$luc."Nhập ".$trang."===>: $vang";
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
        echo $thanh_dep.$luc."Nhập Access_Token TTC: $vang";
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
@system('clear');
$xu = coin($thanh_dep);
echo $banner1;

echo $thanh_dep.$luc."Tên Tài Khoản: ".$vang.$_SESSION['user']."\n";
echo $thanh_dep.$luc."Xu hiện tại: ".$vang.$xu."\n";
loadyt();
$dem = 0;
$stt = 0;
while (true){
    echo $thanh_dep.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Commment \n";
    echo $thanh_dep.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow\n";
    echo $thanh_dep.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
            $nhiemvu = trim(fgets(STDIN));
        while (true) {
        echo $thanh_dep.$luc."Nhập Delay: $vang";
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
    // echo $thanh_dep.$luc."Nhập User Youtube: $vang";
           // $useryt = trim(fgets(STDIN));
        //loadyt();
        // $datnick = cauhinh($idtik);
        // if($datnick == '1'){
        //     echo $luc." Đang Cấu Hình ID: ".$vang.$idtik.$luc. " User: ".$vang.$useryt." \n"; break;
        // } else if($idtik == ''){
            //     break;
        // } else {
            //     echo $luc." Cấu Hình Thất Bại    \n"; continue;
        // }
    while (true){
        if($nhiemvu == 1){
                //đóng
                        echo $do." Tạm Dừng Đợi Auto Request.   \n";
                        loadyt(); break;
            $listcmt = get_yt("/cmtcheo");
                        print_r($listcmt); die;
            if($listcmt == ''){
                $login = logintoken();
                if($login == true){
                    echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \n"; continue;
                } else {
                        echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; die;
                }
                } else if(count($listcmt) < 10){
                        echo $do." Đã Hết Nhiệm Vụ Comment           \n"; sleep (2);
                        loadyt(); break;
                }
                $list = '';
                $stt = $job*(floor(count($listcmt)/$job));
            for($lap = 0; $lap < $stt; $lap++){
                $id = $listcmt[$lap]["idpost"];
                $link = $listcmt[$lap]["link"];
                                $msg = json_decode($listcmt["nd"])[0];
                if(isset($link)){
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                        @system('xdg-open '.$link);
                    } else {
                        @system('cmd /c start '.$link);
                    }
                    $xu = coin($thanh_dep);
                    $dem++;
                    $kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m"." TIM \033[1;31m | \033[1;37m".$id." \n";
                            for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1500);}
                            delay($delay);
                    $list = $list.$id.",";
                    if($dem % $job == 0){
                            $list = substr($list, 0, (strlen($list) - 1));
                            $nhantien = nhantien($list, "");
                            if($nhantien["mess"]){
                                    $xujob = $nhantien["sodu"];
                                    $xu = $xu + $xujob;
                                    $kl = "\033[1;36m Nhận Thành Công ".($xujob/500)." Nhiệm Vụ\033[1;31m | \033[1;32m+$xujob Xu \033[1;31m|\033[1;33m $xu \n";
                                            for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
                                            echo "\033[1;37m".str_repeat('= ', 35)."\n";
                            } else {
                                    $stt = 0;
                                    $list = explode (',', $list);
                                            for($lap = 0; $lap < (count($list) - 1); $lap++){
                                                    $id = $list[$lap];
                                                    echo $thanh_xau.$luc.$id."     \r"; usleep (10000);
                                                    $nhantien2 = nhantien($id, "");
                                            if($nhantien2["mess"]){
                                                    $stt += 1;
                                            }
                                            }
                                            $xu = coin($thanh_dep);
                                            if($stt > 0){
                                                    $kl = "\033[1;36m Nhận Thành Công ".$stt." Nhiệm Vụ\033[1;31m | \033[1;32m+".($stt * 500)." Xu \033[1;31m|\033[1;33m $xu \n";
                                                    for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
                                            } else {
                                            echo $do.$nhantien["error"]."          \n";
                                            fwrite (fopen("luutim.txt", "a+"), $list.",");
                                            sleep (1);
                                    }
                            }
                            $list = '';
                            }
                }
            }
        } else if ($nhiemvu == 2){
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
                if(isset($link)){
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                        @system('xdg-open '.$link);
                    } else {
                            @system('cmd /c start '.$link);
                    }
                    $xu = coin($thanh_dep);
                    $dem++;
                    $kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m"."FOLLOW\033[1;31m | \033[1;37m".$id." \n";
                            for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1500);}
                            delay($delay);
                    $list = $list.$id.",";
                    if($dem % $job == 0){
                            $list = substr($list, 0, (strlen($list) - 1));
                            $nhantien = nhantien($list, "/subcheo");
                                //              print_r($nhantien);
                            if($nhantien["mess"]){
                                    $xujob = $nhantien["sodu"];
                                    $xu = $xu + $xujob;
                                $kl = "\033[1;36m Nhận Thành Công ".($xujob/2000)." Nhiệm Vụ\033[1;31m | \033[1;32m+$xujob Xu \033[1;31m|\033[1;33m $xu \n";
                                            for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
                                            echo "\033[1;37m".str_repeat('= ', 35)."\n";
                            } else {
                                    sleep (1);
                                    echo $do.$nhantien["error"]."          \n";
                            }
                            $list = '';
                    }
                }
            }
        } else {
                echo $do." Vui Lòng Chọn Nhiệm Vụ     \n";
                loadyt(); break;
        }
    }
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
function coin($thanh_dep){
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
        echo "\r\033[1;33m   ⚡An Orin ⚡ \033[1;31m ~>       \033[1;32m LO      \033[1;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;31m   ⚡An Orin ⚡ \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;32m   ⚡An Orin ⚡ \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;34m   ⚡An Orin ⚡ \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;35m   ⚡An Orin ⚡ \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;35m   ⚡An Orin ⚡ \033[0;33m        ~>\033[0;37m LOADING \033[0;31m | $tt | "; usleep($_SESSION['delay']);
        echo "\r\033[1;35m   ⚡An Orin ⚡ \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep($_SESSION['delay']);}
echo "\r\e[1;95m    ⚡An Orin⚡                       \r";
}
function hienthi($dem, $loai, $id, $xujob, $xu){
    date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
        $kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m".$loai."\033[1;31m | \033[1;37m".$id."\033[1;31m | \033[1;32m$xujob \033[1;31m|\033[1;32m $xu \n";
    for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
}
function loadyt() {
    for ($x = 0; $x <= 35; $x++) {
        echo "\033[1;37m= ";usleep($_SESSION['load']);
    }
    echo"\n";}
    