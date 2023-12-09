<?php
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


$dragonx = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";
$thanhngan = "\033[1;31m────────────────────────────────────────────────────────────\n";
/***[ Logo ]***/
$logo= "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TÌM KẾT BẠN FACEBOOK
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";

$khoCookie = [];
while (true) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
    } else { 
        @system('cls'); 
    }
    echo $logo;
    if (file_exists("File_cookie_KB_FB.txt")) {
        echo $dragonx . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Chạy Cookie Facebook Cũ\n";
        echo $dragonx . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . "Thêm Cookie Facebook\n";
        echo $dragonx . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . "Xóa Cookie Cũ Nhập Lại\n";
        echo  $dragonx . "Nhập số: $vang";
        $choice = trim(fgets(STDIN));
        if ($choice == '3') {
            unlink("File_cookie_KB_FB.txt");
        } elseif ($choice == '1') {
            $khoCookie = json_decode(fread(fopen("File_cookie_KB_FB.txt", "r"), filesize("File_cookie_KB_FB.txt")), true);
            break;
        } elseif ($choice == '2') {
            $khoCookie = json_decode(fread(fopen("File_cookie_KB_FB.txt", "r"), filesize("File_cookie_KB_FB.txt")), true);
        }
    }

    if (!file_exists("File_cookie_KB_FB.txt") or $choice == '2') {
        system("clear");
        echo $logo;
        echo $dragonx . "Nhập Cookie Facebook Muốn Dừng Ấn" . $trang . " Enter \n";
        for ($a = 1; $a < 999999; $a++) {
            echo $dragonx . "Nhập Cookie thứ" . $trang . " $a: " . $vang;
            $nhapck = (string)trim(fgets(STDIN));
            if (strlen($nhapck) < 5) {
                break;
            }
            array_push($khoCookie, $nhapck);
        }
        $js = json_encode($khoCookie);
        $k = fopen("File_cookie_KB_FB.txt", "a+");
        fwrite($k, $js);
        fclose($k);
        $demcki = count($khoCookie);
        break;
    }
}
$khoCookie = json_decode(fread(fopen("File_cookie_KB_FB.txt", "r"), filesize("File_cookie_KB_FB.txt")), true);
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
    } else { 
        @system('cls'); 
    }
    echo $logo;
echo $dragonx . "Đổi Acc Sau _______ Lần Kết Bạn \r";
echo $dragonx . "Đổi Acc Sau __" . $trang;
$doiacc = trim(fgets(STDIN));

echo $dragonx . "Nhập Delay : " . $trang;
$delay = trim(fgets(STDIN));
echo $dragonx . "Tạm nghỉ sau _______ nhiệm vụ \r" . $trang;
echo $dragonx . "Tạm nghỉ sau __" . $trang;
$nvnghi = trim(fgets(STDIN));
echo $dragonx . "Thời gian nghỉ _______ giây \r" . $trang;
echo $dragonx . "Thời gian nghỉ __" . $trang;
$timenghi = trim(fgets(STDIN));

echo $dragonx . "Ẩn ID Facebook \033[1;33m(\033[1;37my/n\033[1;33m): " . $vang;
$anid = trim(fgets(STDIN));


$dem = 0;
while (true) {
    $xz = 0;
    DOI_ACC:
    if (count($khoCookie) == 0) {
        THEM_ACC:
        unlink("File_cookie_KB_FB.txt");
        while (true) {
            if (file_exists("File_cookie_KB_FB.txt")) {
                echo $dragonx . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Chạy Cookie Facebook Cũ\n";
                echo $dragonx . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . "Thêm Cookie Facebook\n";
                echo $dragonx . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . "Xóa Cookie Cũ Nhập Lại\n";
                echo  $dragonx . "Nhập số: $vang ";
                $choice = trim(fgets(STDIN));
                if ($choice == '3') {
                    unlink("File_cookie_KB_FB.txt");
                } elseif ($choice == '1') {
                    $khoCookie = json_decode(fread(fopen("File_cookie_KB_FB.txt", "r"), filesize("File_cookie_KB_FB.txt")), true);
                    break;
                } elseif ($choice == '2') {
                    $khoCookie = json_decode(fread(fopen("File_cookie_KB_FB.txt", "r"), filesize("File_cookie_KB_FB.txt")), true);
                }
            }

            if (!file_exists("File_cookie_KB_FB.txt") or $choice == '2') {
                echo $dragonx . "Nhập Cookie Facebook Muốn Dừng Ấn" . $trang . " Enter \n";
                for ($a = 1; $a < 999999; $a++) {
                    echo $dragonx . "Nhập Cookie thứ" . $trang . " $a: " . $vang;
                    $nhapck = (string)trim(fgets(STDIN));
                    if (strlen($nhapck) < 5) {
                        break;
                    }
                    array_push($khoCookie, $nhapck);
                }
                $js = json_encode($khoCookie);
                $k = fopen("File_cookie_KB_FB.txt", "a+");
                fwrite($k, $js);
                fclose($k);
                $demcki = count($khoCookie);
                break;
            }
        }
    }
    while (true) {
        if (count($khoCookie) == 0) {
            goto THEM_ACC;
        }
        $xz++;
        if ($xz == count($khoCookie)) {
            $xz = 0;
        }
        $cookie = $khoCookie[$xz];
        CHECK_CONNECT:
        if (@fsockopen('www.google.com', 80)) {
            $data_me = data_me($cookie);
            if ($data_me == '') {
                goto CHECK_CONNECT;
            } elseif ($data_me == 'die') {
                array_splice($khoCookie, $xz, 1);
                goto DOI_ACC;
            } else {
                $tenfb = $data_me['NAME'];
                $idfb = $data_me['ID'];
            }
            $idfb1 = $idfb;
            if ($anid == 'y' or $anid == 'Y') {
                $idfb1 = "##########" . substr($idfb1, 10);
            }
            echo "\r                            \r";
            echo $thanhngan;
            echo $luc . "Đang Chạy ID:\033[1;37m " . $idfb1 . " " . $luc . "Tên FB:\033[1;37m " . $tenfb . "\n";
            echo $thanhngan;
            while (true) {
                $KQ = kq($cookie);
                if ($KQ == 1) {
                    echo "\r                            \r";
                    echo $thanhngan;
                    echo $luc . " ID:\033[1;31m " . $idfb1 . " " . $luc . "Tên FB:\033[1;31m " . $tenfb . "\n";
                    echo $dragonx . $do . "Đã Bị Block Kết Bạn \n";
                    echo $thanhngan;
                    array_splice($khoCookie, $xz, 1);
                    goto DOI_ACC;
                }
                if ($KQ == '' and $KQ == 0 and $KQ == 1) {
                } else {
                    $id = $KQ;
                    $check_kb = check_kb($cookie, $id);
                    if ($check_kb == "die") {
                        echo "\r                            \r";
                        echo $thanhngan;
                        echo $luc . " ID:\033[1;31m " . $idfb1 . " " . $luc . "Tên FB:\033[1;31m " . $tenfb . "\n";
                        echo $dragonx . $do . "Đã Bị Die Cookie \n";
                        echo $thanhngan;
                        array_splice($khoCookie, $xz, 1);
                        goto DOI_ACC;
                    }
                    if ($check_kb['kq'] == 0) {
                        $check_kq = $do . " CHƯA KẾT BẠN ";
                    } elseif ($check_kb['kq'] == 1) {
                        $check_kq = $luc . "ĐÃ GỬI KẾT BẠN";
                    } elseif ($check_kb['kq'] == 2) {
                        $check_kq = $luc . "  ĐÃ KẾT BẠN  ";
                    }
                    if ($check_kb['kq'] == 1 or $check_kb['kq'] == 2) {
                        $dem++;
                        echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $trang . " | " . $check_kq . $trang . " | " . $vang . $id . $trang . " | " . $xnhac . $check_kb['name'] . "  \r\n";
                    }
                    if($dem > 1 and $dem % $nvnghi == 0){
                        delayx($timenghi);
                    } elseif ($dem % $doiacc == 0) {
                        goto DOI_ACC;
                    } else {
                        delayx($delay);
                    }
                }
            }
        }
    }
}
/*
function delayx($delay)
{
    for ($i = $delay; $i > 1; $i--) {
        echo "\r \033[1;9" . rand(1, 9) . "m Vui Lòng Đợi Sau " . $i . " Giây     \r";
        sleep(1);
    }
    echo "\r\033[1;9" . rand(1, 9) . "m Tool Gửi KB DragonX       \r";
}
*/
function delayx($delay)
{
    for ($i = $delay; $i >= 0; $i--) {
        echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mx.x.x.x.x\033[1;93m]       \r";
        usleep(166666);
        echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.x.x.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.x.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.X.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.X.X\033[1;93m]       \r";
       usleep(166666);
    }
    //echo "\r\033[1;9" . rand(1, 9) . "m " . "Tool Bản Quyền An Orin" . "       \r";
//    kiemtramang_dragonx();
}

function check_kb($cookie, $id)
{
    $useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
    $ch = curl_init();
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://mbasic.facebook.com/profile.php?id=' . $id,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_USERAGENT => $useragent,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_SSL_VERIFYPEER => TRUE,
        CURLOPT_HTTPHEADER => $head
    ));
    $access = curl_exec($ch);
    file_put_contents(base64_decode("X19fRFJBR09OWF9fXw"), base64_decode("X19fRFJBR09OWF9fXw"));
    if (strpos($access, 'Đăng nhập') !== false) {
        return 'die';
    } else {
        if (strpos($access, '/friendrequest/cancel/?subject_id=' . $id)) {
            return array("kq" => 1, "name" => explode("</title>", explode("<title>", $access)[1])[0]); //da gui loi moi kb
        } elseif (strpos($access, '/friends/profile/add/?subject_id=' . $id)) {
            return array("kq" => 0, "name" => explode("</title>", explode("<title>", $access)[1])[0]);; //chua kb
        } elseif (strpos($access, 'removefriend.php?friend_id=' . $id)) {
            return array("kq" => 2, "name" => explode("</title>", explode("<title>", $access)[1])[0]); //da kb
        }
    }
}

function data_me($cookie)
{
    $useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
    $ch = curl_init();
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://mbasic.facebook.com/profile.php',
        CURLOPT_TIMEOUT => 60,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_USERAGENT => $useragent,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_SSL_VERIFYPEER => TRUE,
        CURLOPT_HTTPHEADER => $head
    ));
    $access = curl_exec($ch);
    //file_put_contents("fb.html", $access);

    if (strpos($access, 'Đăng nhập') !== false) {
        return 'die';
    } else {
        $name = explode('</title>', explode('xhtml"><head><title>', $access)[1])[0];
        $id = explode('%', explode('/profile.php?lst=', $access)[1])[0];
        return array("NAME" => $name, "ID" => $id);
    }
}




function kq($cookie)
{

    $cc = array('an', 'nhi', 'linh', 'ngan', 'Nhung', 'Anh', 'Vy', 'Chi', 'Trinh', 'Duyen', 'Bich', 'Hoa', 'Truc', 'Tuong', 'Ngoc', 'Ha', 'Hoa', 'Thay', 'Ngoc', 'Chau', 'Nhung', 'Khanh', 'Linh', 'Diem', 'Thao', 'Trang', 'Quyen', 'Huong', 'Thu', 'Tu', 'Lien', 'Chau', 'My', 'Quynh', 'Dung', 'Minh', 'Kien', 'Ken', 'Thanh', 'Khoa', 'Thang', 'Tai', 'Trung', 'Huy', 'Dang', 'Hoang', 'Cuong', 'Phi', 'Khoi', 'Phuoc', 'Vi', 'Quang', 'Quan', 'Tung', 'Manh', 'Hung', 'Huy', 'Tung');
    $name = strtolower($cc[array_rand($cc, 1)]);
    //echo $name . "\n\n";
    $kq_tim = kq_tim('https://mbasic.facebook.com/search/top/?q=' . $name . '&refid=8&_rdr', $cookie);

    for ($it = 0; $it < 7; $it++) {
        if (strpos($kq_tim, "/a/friends/add/?encrypted_id=")) {
            break;
        }
        if (strpos($kq_tim, "/graphsearch/str/" . $name . "/keywords_users?")) {
            $link_timban = "https://mbasic.facebook.com/graphsearch/str/" . $name . "/keywords_users?" . html_entity_decode(explode('"', explode("/graphsearch/str/" . $name . "/keywords_users?", $kq_tim)[1])[0]);
            $kq_tim = kq_tim($link_timban, $cookie);
            sleep(1);
        } else {
            break;
        }
    }
    $link_kb = "https://mbasic.facebook.com/a/friends/add/?encrypted_id=" . html_entity_decode(explode('"', explode("/a/friends/add/?encrypted_id=", $kq_tim)[1])[0]);
    //echo $link_kb;
    $id_kb = explode('&', explode('subject_id=', $link_kb)[1])[0];
    //echo "\n\n" . $id_kb;
    $cc = kq_tim($link_kb, $cookie);
    if (strpos($cc, 'Tài khoản của bạn hiện bị hạn chế')) {
        return 1; //'Bị block kết bạn';
    }else{
        return $id_kb;
    }
}


function kq_tim($url, $cookie)
{
    $useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Authority: business.facebook.com';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"95\", \"Chromium\";v=\"95\", \";Not A Brand\";v=\"99\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: ' . $useragent;
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cookie: ' . $cookie;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $access = curl_exec($ch);
    if (curl_errno($ch)) {
        return 'die';
    }
    curl_close($ch);
    return $access;
}
?>