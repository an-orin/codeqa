<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
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
$thanhngan = "\033[1;31m────────────────────────────────────────────────────────────\n";



date_default_timezone_set('Asia/Ho_Chi_Minh');



$logo = DragonX_Logo();

$ngdich = 'vi';



$DragonX_Khock = [];
while (true) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
        $len = strlen($logo);
        for ($x = 0; $x < $len; $x++) {
            echo $logo[$x];
            usleep(1200);
        }
    } else { 
        @system('cls'); 
        echo $logo;
    }
    if (file_exists("File_cookie_TUONGTAC_FB.txt")) {
        

        echo $dragonx . dichh("Nhập", $ngdich) . " " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . dichh("Chạy Cookie Facebook Cũ", $ngdich) . "\n";
        echo $dragonx . dichh("Nhập", $ngdich) . " " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . dichh("Thêm Cookie Facebook", $ngdich) . "\n";
        echo $dragonx . dichh("Nhập", $ngdich) . " " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . dichh("Xóa Cookie Cũ Nhập Lại", $ngdich) . "\n";
        echo  $dragonx . dichh("Nhập số : ", $ngdich) . $vang;
        $DragonX_chonck = trim(fgets(STDIN));
        if ($DragonX_chonck == '3') {
            unlink("File_cookie_TUONGTAC_FB.txt");
        } elseif ($DragonX_chonck == '1') {
            $DragonX_Khock = json_decode(fread(fopen("File_cookie_TUONGTAC_FB.txt", "r"), filesize("File_cookie_TUONGTAC_FB.txt")), true);
            break;
        } elseif ($DragonX_chonck == '2') {
            $DragonX_Khock = json_decode(fread(fopen("File_cookie_TUONGTAC_FB.txt", "r"), filesize("File_cookie_TUONGTAC_FB.txt")), true);
        }
    }

    if (!file_exists("File_cookie_TUONGTAC_FB.txt") or $DragonX_chonck == '2') {
        system("clear");
        echo $logo . "";
        echo $dragonx .  dichh("Nhập Cookie Facebook Muốn Dừng Ấn Enter", $ngdich) . " \n";
        for ($anorin = 1; $anorin < 999999; $anorin++) {
            echo $dragonx . dichh("Nhập Cookie thứ " . $anorin . ":", $ngdich) . " " . $vang;
            $vu2hapck = (string)trim(fgets(STDIN));
            if (strlen($vu2hapck) < 5) {
                break;
            }
            array_push($DragonX_Khock, $vu2hapck);
        }
        $anorin1 = json_encode($DragonX_Khock);
        $anorinck = fopen("File_cookie_TUONGTAC_FB.txt", "a+");
        fwrite($anorinck, $anorin1);
        fclose($anorinck);
        $anorin_tongck = count($DragonX_Khock);
        break;
    }
}
$DragonX_Khock = json_decode(fread(fopen("File_cookie_TUONGTAC_FB.txt", "r"), filesize("File_cookie_TUONGTAC_FB.txt")), true);


if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
        $len = strlen($logo);
        for ($x = 0; $x < $len; $x++) {
            echo $logo[$x];
            usleep(1200);
        }
    } else { 
        @system('cls'); 
        echo $logo;
    }
echo  $dragonx . dichh("Số cookie đã nhập là: " . $trang.count($DragonX_Khock), $ngdich) . "\n";
echo $thanhngan;
echo $dragonx . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . dichh("Cảm Xúc Dạo ", $ngdich) . "\n";
echo $dragonx . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . dichh("Bình Luận Dạo", $ngdich) . "\n";
echo $dragonx . $xnhac . dichh("Có Thể Chọn Nhiều (\033[1;97mVí dụ 1+2\033[1;96m)\033[1;97m", $ngdich) . "\n";
echo $thanhngan;
echo $dragonx . dichh("Nhập Lựa Chọn:", $ngdich) . " " . $vang;
$chonloai = "__+" . trim(fgets(STDIN)) . "+__";



$anorinrrcx = ["1", "2", "3", "4", "5", "6", "7"];

$cainit = '';
if (strpos($chonloai, "1")) {
    echo $thanhngan;
    $cainit = 'y';
    echo $dragonx . "Nhập " . $vang . "[" . $trang . "1" . $vang . "]" . $luc . " Cảm Xúc Like \n";
    echo $dragonx . "Nhập " . $vang . "[" . $trang . "2" . $vang . "]" . $luc . " Cảm Xúc Love \n";
    echo $dragonx . "Nhập " . $vang . "[" . $trang . "3" . $vanv . "]" . $luc . " Cảm Xúc Care \n";
    echo $dragonx . "Nhập " . $vang . "[" . $trang . "4" . $vang . "]" . $luc . " Cảm Xúc Haha \n";
    echo $dragonx . "Nhập " . $vang . "[" . $trang . "5" . $vang . "]" . $luc . " Cảm Xúc Wow \n";
    echo $dragonx . "Nhập " . $vang . "[" . $trang . "6" . $vang . "]" . $luc . " Cảm Xúc Sad \n";
    echo $dragonx . "Nhập " . $vang . "[" . $trang . "7" . $vang . "]" . $luc . " Cảm Xúc Angry \n";
    echo $dragonx . $xnhac . dichh("Có Thể Chọn Nhiều (\033[1;97mVí dụ 1+2\033[1;96m)\033[1;97m", $ngdich) . "\n";
    echo $thanhngan;
    echo $dragonx . dichh("Nhập Lựa Chọn:", $ngdich) . " " . $vang;
    $vu2hapcx = "__+" . trim(fgets(STDIN)) . "+__";

    $anorinrrcx = [];
    if (strpos($vu2hapcx, "1")) {
        array_push($anorinrrcx, "LIKE ");
    }
    if (strpos($vu2hapcx, "2")) {
        array_push($anorinrrcx, "LOVE ");
    }
    if (strpos($vu2hapcx, "3")) {
        array_push($anorinrrcx, "CARE ");
    }
    if (strpos($vu2hapcx, "4")) {
        array_push($anorinrrcx, "HAHA ");
    }
    if (strpos($vu2hapcx, "5")) {
        array_push($anorinrrcx, " WOW ");
    }
    if (strpos($vu2hapcx, "6")) {
        array_push($anorinrrcx, " SAD ");
    }
    if (strpos($vu2hapcx, "7")) {
        array_push($anorinrrcx, "ANGRY");
    }
}

$cainit2 = '';
if (strpos($chonloai, "2")) {
    echo $thanhngan;
    $cainit2 = 'y';
    echo $dragonx . dichh("Nhập Nội Dung, Muốn Dừng Ấn \033[1;97mEnter", $ngdich) . "\n";
    $anorinrrcmt = [];
    $vu = 0;
    while (true) {
        $vu++;
        echo $dragonx . dichh("Nội dung thứ \033[1;97m" . $vu . ":", $ngdich) . " " . "\033[1;9".rand(1,7)."m";
        $vu2dbl = trim(fgets(STDIN));
        if ($vu2dbl == '') {
            break;
        }
        array_push($anorinrrcmt, $vu2dbl);
    }
}

echo $thanhngan;
echo $dragonx . dichh("Tương Tác Bao Nhiêu Lần Thì Đổi Acc:", $ngdich) . " " . $vang;
$doiacc = trim(fgets(STDIN));
echo $dragonx . dichh("Nhập Delay:", $ngdich) . " " . $vang;
$delay = trim(fgets(STDIN));
echo $dragonx . dichh("Tạm Nghỉ Sau Bao Nhiêu Lần Thả Cảm Xúc:", $ngdich) . " " . $vang;
$vu2vnghi = trim(fgets(STDIN));
echo $dragonx . dichh("Thời gian tạm nghỉ:", $ngdich) . " " . $vang;
$thoigiannghi = trim(fgets(STDIN));
echo $dragonx . dichh("Ẩn ID Facebook (Y):", $ngdich) . " " . $vang;
$anorinnid = trim(fgets(STDIN));

echo $thanhngan;

$vuprovip = 0;
while (true) {
    if (count($DragonX_Khock) == 0) {
        $DragonX_Khock = [];
        while (true) {
            if (file_exists("File_cookie_TUONGTAC_FB.txt")) {


                echo $dragonx . dichh("Nhập", $ngdich) . " " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . dichh("Chạy Cookie Facebook Cũ", $ngdich) . "\n";
                echo $dragonx . dichh("Nhập", $ngdich) . " " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . dichh("Thêm Cookie Facebook", $ngdich) . "\n";
                echo $dragonx . dichh("Nhập", $ngdich) . " " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . dichh("Xóa Cookie Cũ Nhập Lại", $ngdich) . "\n";
                echo  $dragonx . dichh("Nhập số :", $ngdich) . $vang;
                $DragonX_chonck = trim(fgets(STDIN));
                if ($DragonX_chonck == '3') {
                    unlink("File_cookie_TUONGTAC_FB.txt");
                } elseif ($DragonX_chonck == '1') {
                    $DragonX_Khock = json_decode(fread(fopen("File_cookie_TUONGTAC_FB.txt", "r"), filesize("File_cookie_TUONGTAC_FB.txt")), true);
                    break;
                } elseif ($DragonX_chonck == '2') {
                    $DragonX_Khock = json_decode(fread(fopen("File_cookie_TUONGTAC_FB.txt", "r"), filesize("File_cookie_TUONGTAC_FB.txt")), true);
                }
            }

            if (!file_exists("File_cookie_TUONGTAC_FB.txt") or $DragonX_chonck == '2') {
                echo $dragonx .  dichh("Nhập Cookie Facebook Muốn Dừng Ấn Enter", $ngdich) . " \n";
                for ($anorin = 1; $anorin < 999999; $anorin++) {
                    echo $dragonx . dichh("Nhập Cookie thứ " . $anorin . ":", $ngdich) . " " . $vang;
                    $vu2hapck = (string)trim(fgets(STDIN));
                    if (strlen($vu2hapck) < 5) {
                        break;
                    }
                    array_push($DragonX_Khock, $vu2hapck);
                }
                $anorin1 = json_encode($DragonX_Khock);
                $anorinck = fopen("File_cookie_TUONGTAC_FB.txt", "a+");
                fwrite($anorinck, $anorin1);
                fclose($anorinck);
                $anorin_tongck = count($DragonX_Khock);
                break;
            }
        }
        $DragonX_Khock = json_decode(fread(fopen("File_cookie_TUONGTAC_FB.txt", "r"), filesize("File_cookie_TUONGTAC_FB.txt")), true);
    }

    for ($vuprovip1 = 0; $vuprovip1 < count($DragonX_Khock); $vuprovip1++) {
        $vuprovip15435678 = $DragonX_Khock[$vuprovip1];
        $vuprovip15435864 = vuprovip15435422($vuprovip15435678);
        if ($vuprovip15435864 == '') {
        } elseif ($vuprovip15435864 == 'die') {
            array_splice($DragonX_Khock, $vuprovip1, 1);
            continue;
        } else {
            $namefb = $vuprovip15435864['NAME'];
            $vudfb = $vuprovip15435864['ID'];

            $vudfb1 = $vudfb;
            if ($anorinnid == 'y' or $anorinnid == 'Y') {
                $vudfb1 = "##########" . substr($vudfb1, 10);
            }
            echo "\r                            \r";
           // echo $thanhngan;
            echo $luc . "Đang Chạy ID:\033[1;37m " . $vudfb1 . " " . $luc . "Tên FB:\033[1;37m " . $namefb . "\n";
            echo $thanhngan;

            while (true) {
                $vuprovip15435152 = array_rand($anorinrrcx, 1);
                $vuprovip1543586423 = $anorinrrcx[$vuprovip15435152];
                $vud = vuprovip9642689073($vuprovip15435678, ($vuprovip15435152 + 1), $cainit);
                if ($vud != '') {
                    if ($vud == 'block') {
                        echo $thanhngan;
                        echo $luc . " ID:\033[1;31m " . $vudfb1 . " " . $luc . "Tên FB:\033[1;31m " . $namefb . "\n";
                        echo $anorinckov . $do . "Đã Bị Block Kết Bạn \n";
                        echo $thanhngan;
                        array_splice($DragonX_Khock, $vuprovip1, 1);
                        continue;
                    }
                    if (strtolower($cainit) == "y") {
                        $vuprovip++;
                        echo "\r" . $do . "[" . $vang . $vuprovip . $do . "] " . $xnhac . date("H:i:s") . $trang . " | " . $xnhac . $vud . $trang . " | " . $vang . $vuprovip1543586423 . "\n";
                    }
                    if (strtolower($cainit) == "y") {
                        $vuprovip098643367 = $anorinrrcmt[array_rand($anorinrrcmt, 1)];
                        vuprovip098643367delay($delay);
                        vuprovip09864336797434($vud, $vuprovip15435678, $vuprovip098643367);
                        $vuprovip++;
                        echo "\r" . $do . "[" . $vang . $vuprovip . $do . "] " . $xnhac . date("H:i:s") . $trang . " | " . $xnhac . $vud . $trang . " | " . $luc . $vuprovip098643367 . "\n";
                    }
                    vuprovip098643367delay($delay);
                }
                if ($vuprovip > 1 and $vuprovip % $doiacc == 0) {
                    break;
                }
                if ($vuprovip > 1 and $vuprovip % $vu2vnghi == 0) {
                    vuprovip098643367delay($thoigiannghi);
                }
            }
        }
    }
}

function vuprovip15435422($vuprovip15435678)
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
        CURLOPT_COOKIE => $vuprovip15435678,
        CURLOPT_SSL_VERIFYPEER => TRUE,
        CURLOPT_HTTPHEADER => $head
    ));
    $anorinccess = curl_exec($ch);
    //file_put_contents("fb.html", $anorinccess);

    if (strpos($anorinccess, 'Đăng nhập') !== false) {
        return 'die';
    } else {
        $vu2ame = explode('</title>', explode('xhtml"><head><title>', $anorinccess)[1])[0];
        $vud = explode('%', explode('/profile.php?lst=', $anorinccess)[1])[0];
        return array("NAME" => $vu2ame, "ID" => $vud);
    }
}



function vuprovip09864336797434($vud, $vuprovip15435678, $vuprovip098643367)
{
    $vuprovip098643367 = date("Y-m-d H:i:s") . "\n" . $vuprovip098643367;
    $link = req("https://mbasic.facebook.com/" . $vud, $vuprovip15435678);
    $data = req2($link, $vuprovip15435678);
    if (strpos($data, "ft_ent_identifier=") == true && strpos($data, 'fb_dtsg" value="') == true && strpos($data, 'jazoest" value="') == true) {
        $ft_ent_identifier = html_entity_decode(explode('"', explode('ft_ent_identifier=', $data)[2])[0]);
        $fb_dtsg = explode('"', explode('fb_dtsg" value="', $data)[1])[0];
        $jazoest = explode('"', explode('jazoest" value="', $data)[1])[0];
        $vuprovip098643367 = urlencode($vuprovip098643367);
        $data = 'fb_dtsg=' . $fb_dtsg . '&jazoest=' . $jazoest . '&comment_text=' . $vuprovip098643367;
        $header = array(
            "Host: m.facebook.com",
            "content-length: " . strlen($data),
            "origin: https://m.facebook.com",
            "x-requested-with: XMLHttpRequest",
            "user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36",
            "x-response-format: JSONStream",
            "content-type: application/x-www-form-urlencoded",
            "accept: */*",
            "referer: https://m.facebook.com/"
        );
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => 'https://mbasic.facebook.com/a/comment.php?fs=8&actionsource=2&comment_logging&ft_ent_identifier=' . $ft_ent_identifier,
                CURLOPT_FOLLOWLOCATION => TRUE,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_COOKIE => $vuprovip15435678,
                CURLOPT_HTTPHEADER => $header,
                CURLOPT_ENCODING => TRUE
            )
        );
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    return '';
}


function req($url, $vuprovip15435678)
{
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    while (true) {
        //echo $url . "\n\n";
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => $url,
                CURLOPT_FOLLOWLOCATION => false,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_POST => 1,
                CURLOPT_HTTPGET => true,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTPHEADER => $head,
                CURLOPT_HEADER => true,
                CURLOPT_COOKIE => $vuprovip15435678,
                CURLOPT_ENCODING => TRUE
            )
        );
        $data = curl_exec($ch);
        if (strpos($data, 'ocation: ')) {
            $url = explode('&_rdr', explode("ocation: ", $data)[1])[0] . "&_rdr";
            return $url;
        } else if (strpos($data, 'link: <https://')) {
            $url = explode('>;', explode("link: <https://", $data)[1])[0] . "&_rdr";
            return $url;
        } else {
            break;
        }
    }
    return $data;
}


function vuprovip9642689073($vuprovip15435678, $vuprovip1543586423, $cainit)
{
    while (true) {
        $pagefb = req2('https://mbasic.facebook.com/', $vuprovip15435678);
        if ($pagefb == 'die') {
            return 'die';
        }
        if (strpos($pagefb, "/reactions/picker/?")) {
            $reac1 = explode("/reactions/picker/?", $pagefb)[1];
            $link_cxbv = 'https://mbasic.facebook.com/reactions/picker/?' . html_entity_decode(explode('"', $reac1)[0]);
            $vudcx = req3("https://m.facebook.com/" . explode('&', explode('?ft_id=', $link_cxbv)[1])[0]);
            if (strtolower($cainit) == 'y') {
            } else {
                return $vudcx;
            }
            $data_cx = req2($link_cxbv, $vuprovip15435678);
            //VuHoangDev
            if (strpos($data_cx, '/ufi/reaction/?')) {
                $chontype = explode('"', explode('/ufi/reaction/?', $data_cx)[$vuprovip1543586423])[0];
                $link_clickcx = 'https://mbasic.facebook.com/ufi/reaction/?' . html_entity_decode($chontype);
                $data_clickcx = req2($link_clickcx, $vuprovip15435678);
                if (strpos($data_clickcx, "Tài khoản của bạn hiện bị hạn chế")) {
                    return 'block';
                } else {
                    $data_cx = req2($link_cxbv, $vuprovip15435678);
                    if (strpos($data_cx, '(Gỡ)')) {
                        return $vudcx;
                    } else {
                        return "false";
                    }
                }
            }
            break;
        }
        vuprovip098643367delay(3);
    }
    return "";
}


function req3($link)
{
    $data = 'link=' . urlencode($link);
    $useragent = useragent();
    $header = array(
        "Host:id.traodoisub.com",
        'content-length:' . strlen($data),
        "upgrade-insecure-requests:1",
        "origin:https://id.traodoisub.com",
        "content-type:application/x-www-form-urlencoded",
        "user-agent:" . $useragent,
        "referer:https://id.traodoisub.com/",
    );

    $vu1r = curl_init();
    curl_setopt($vu1r, CURLOPT_URL, "https://id.traodoisub.com/api.php");
    curl_setopt($vu1r, CURLOPT_RETURNTRANSFER, TRUE);
    //curl_setopt($vu1r, CURLOPT_COOKIE, $vuprovip15435678);
    curl_setopt($vu1r, CURLOPT_POSTFIELDS, $data);
    curl_setopt($vu1r, CURLOPT_HTTPHEADER, $header);
    curl_setopt($vu1r, CURLOPT_USERAGENT, $useragent);
    $vu1r2 = curl_exec($vu1r);
    curl_close($vu1r);
    //file_put_contents("data.php", $vu1r2);
    $vu1r2 = json_decode($vu1r2, true);
    return $vu1r2['id'];
}



function DragonX_Logo()
{
    $do="\033[1;91m";
    $den="\033[1;33m";
    $tim="\033[1;34m";
    $luc="\033[1;92m";
    $trang="\033[1;97m";
    $vang = "\033[1;93m";
    $hong = "\033[1;95m";
    $xnhac = "\033[1;36m";
    $xduong = "\033[1;96m";
    $logo= "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL THẢ CẢM XÚC, BÌNH LUẬN DẠO
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";

    return $logo;
}

function useragent()
{
    $anorinckhous = json_decode('["TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjBRd2FudE1vYmlsZS80LjI=","TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvMTAzLjAuMC4wIFNhZmFyaS81MzcuMzYgTW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjBNb3ppbGxhLzUuMCAoTGludXg7IEFuZHJvaWQgMTIp","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjBNb3ppbGxhLzUuMCAoTGludXg7IEFuZHJvaWQgMTIp","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAwLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAwLjAuMg==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMC4wLjI=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAwLjAuMQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMC4wLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjEwMC4wKSBHZWNrby8xMDAuMCBGaXJlZm94LzEwMC4wIFtpcDo5My40Mi40NS45OF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDAuMCkgR2Vja28vMTAwLjAgRmlyZWZveC8xMDAuMCBbaXA6MzcuMTYzLjE2Ny4yMjRd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjAgW2lwOjUuMTcwLjI0NC4xMzVd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDAuMCkgR2Vja28vMTAwLjAgRmlyZWZveC8xMDAuMCBbaXA6MzcuMTYzLjYwLjk2XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjAgW2lwOjM3LjE2MS41Mi4yNTRd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjAgW2lwOjM3LjE2Mi44Ny4yMzRd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjAgW2lwOjE1MS42OC4zMS4yMDVd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjAgW2lwOjEuMS4xLjFdXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDAuMCkgR2Vja28vMTAwLjAgRmlyZWZveC8xMDAuMCBbaXA6MTUxLjM4Ljk1LjEzM10=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjAgW2lwOjM3LjE2MS4xNjEuODRd","TW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDExOyBNb2JpbGU7IHJ2OiAxMDAuMCkgR2Vja28vMTAwLjAgRmlyZUZveC8xMDAuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAwLjApIEdlY2tvLzEwMC4wIEZpcmVmb3gvMTAwLjAgW2lwOjEyNy4wLjAuMV1d","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTA4LjApIEdlY2tvLzEwOC4wIEZpcmVmb3gvMTA4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTA3LjApIEdlY2tvLzEwNy4wIEZpcmVmb3gvMTA3LjA=","TW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDk7IExNLVgxMjAgQnVpbGQvUEtRMS4xODA5MDQuMDAxOyB3dikgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgVmVyc2lvbi80LjAgQ2hyb21lLzEwNi4wLjUyNDkuMTI2IE1vYmlsZSBTYWZhcmkvNTM3LjM2IFtGQl9JQUIvRkI0QTtGQkFWLzM4OC4wLjAuMzIuMTA1O10=","TW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDk7IExNLVgxMjAgQnVpbGQvUEtRMS4xODA5MDQuMDAxOyB3dikgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgVmVyc2lvbi80LjAgQ2hyb21lLzg2LjAuNDI0MC4xOTggTW9iaWxlIFNhZmFyaS81MzcuMzZbRkJBTi9FTUE7RkJMQy9pdF9JVDtGQkFWLzIyNS4wLjAuOS4xMTQ7XSBbaXA6ODAuMTE2LjE3LjQ4XQ==","TW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDk7IExNLVgxMjAgQnVpbGQvUEtRMS4xODA5MDQuMDAxOyB3dikgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgVmVyc2lvbi80LjAgQ2hyb21lLzg1LjAuNDE4My4xMjcgTW9iaWxlIFNhZmFyaS81MzcuMzYgW0ZCX0lBQi9PcmNhLUFuZHJvaWQ7RkJBVi8yODMuMC4wLjE2LjEyMDtd","TW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDguMS4wOyBMRy1NMjU1IEJ1aWxkL09QTTEuMTcxMDE5LjAyNjsgd3YpIEFwcGxlV2ViS2l0LzUzNy4zNiAoS0hUTUwsIGxpa2UgR2Vja28pIFZlcnNpb24vNC4wIENocm9tZS82Ni4wLjMzNTkuMTI2IE1vYmlsZSBTYWZhcmkvNTM3LjM2IFtGQl9JQUIvRkI0QTtGQkFWLzIzMC4wLjAuMzYuMTE3O10=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgTEctTTI1NTsgcnY6NjQuMCkgR2Vja28vNjQuMCBGaXJlZm94LzY0LjA=","TW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDcuMDsgVlM1MDEgQnVpbGQvTlJEOTBVOyB3dikgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgVmVyc2lvbi80LjAgQ2hyb21lLzcwLjAuMzUzOC44MCBNb2JpbGUgU2FmYXJpLzUzNy4zNiBbRkJfSUFCL0ZCNEE7RkJBVi8yMjguMC4wLjQxLjEyNDtd","TW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDk7IExNLVgxMjAgQnVpbGQvUEtRMS4xODA5MDQuMDAxOyB3dikgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgVmVyc2lvbi80LjAgQ2hyb21lLzEwNC4wLjUxMTIuOTcgTW9iaWxlIFNhZmFyaS81MzcuMzYgW0ZCX0lBQi9GQjRBO0ZCQVYvMzgyLjAuMC4zMy4xMTE7XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTA0LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAxLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAxLjAuMQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAzLjAuMg==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAzLjAuMQ==","TW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDk7IExNLVgxMjAgQnVpbGQvUEtRMS4xODA5MDQuMDAxOyB3dikgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgVmVyc2lvbi80LjAgQ2hyb21lLzEwNC4wLjUxMTIuNjkgTW9iaWxlIFNhZmFyaS81MzcuMzYgW0ZCX0lBQi9GQjRBO0ZCQVYvMzc5LjAuMC4yNC4xMDk7XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAxLjEpIEdlY2tvLzEwMS4xIEZpcmVmb3gvMTAxLjE7IFNBSUQgNjE2NzNjNDU0MjI4YTk3Mw==","TW96aWxsYS81LjAgKE1vYmlsZTsgcnY6MzcuMDsgNDA0NFYpIEdlY2tvLzY4LjAgRmlyZWZveC8xMDEuMCBLYWlPUy8xLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMS4wLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6MTAxLjApIEdlY2tvLzEwMS4wIEZpcmVmb3gvMTAxLjAgW2lwOjkzLjM0LjIzOS4yMDBd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6MTAxLjApIEdlY2tvLzEwMS4wIEZpcmVmb3gvMTAxLjAgW2lwOjUuOTAuOC41NV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjEwMS4wKSBHZWNrby8xMDEuMCBGaXJlZm94LzEwMS4wIFtpcDoyLjE5OC4xMzMuMTIzXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjEwMS4wKSBHZWNrby8xMDEuMCBGaXJlZm94LzEwMS4wIFtpcDoxMDkuNTMuMTQuODhd","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjEwMS4wKSBHZWNrby8xMDEuMCBGaXJlZm94LzEwMS4wIFtpcDo1LjE3MS4yMDcuNThd","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjEwMS4wKSBHZWNrby8xMDEuMCBGaXJlZm94LzEwMS4wIFtpcDo1LjE3MS4xOTUuNTRd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDEuMCkgR2Vja28vMTAxLjAgRmlyZWZveC8xMDEuMCBbaXA6MTkwLjIuMTMzLjIyNF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgcnY6MTAxLjApIEdlY2tvLzEwMS4wIEZpcmVmb3gvMTAxLjAgW2lwOjkzLjQxLjEwMC41XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDEuMCkgR2Vja28vMTAxLjAgRmlyZWZveC8xMDEuMCBbaXA6ODkuMTg3LjE3MC4xNjld","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDEuMCkgR2Vja28vMTAxLjAgRmlyZWZveC8xMDEuMCBbaXA6OTEuODAuMi4xNTRd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTAxLjApIEdlY2tvLzEwMS4wIEZpcmVmb3gvMTAxLjAgW2lwOjIwNS4yMDEuNTUuMTQ2XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgVGFibGV0OyBydjoxMDEuMCkgR2Vja28vMTAxLjAgRmlyZWZveC8xMDEuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTAxLjApIEdlY2tvLzEwMS4wIEZpcmVmb3gvMTAxLjAgW2lwOjE1MS4zMC4yNTIuMjM4XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDEuMCkgR2Vja28vMTAxLjAgRmlyZWZveC8xMDEuMCBbaXA6Mi4xOTguMTYyLjIwM10=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAxLjApIEdlY2tvLzEwMS4wIEZpcmVmb3gvMTAxLjAgW2lwOjUuMTY4LjQzLjE4OF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMi4yLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjAgWW91QnJvd3Nlci8xLjEuOQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDIuMCkgR2Vja28vMTAyLjAgRmlyZWZveC8xMDIuMCBZb3VCcm93c2VyLzEuMS4z","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMi4wLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjEuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjAgW2lwOjM3LjE2Mi41MC4yMjVd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjAuMQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMi4xLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wOyBNb2JpbGU7IHJ2OjEwMi4wKSBHZWNrby8xMDIuMCBGaXJlZm94LzEwMi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjAgWW91QnJvd3Nlci8xLjEuNQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjAgWW91QnJvd3Nlci8xLjEuMw==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjAgWW91QnJvd3Nlci8xLjEuMw==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDIuMCkgR2Vja28vMTAyLjAgRmlyZWZveC8xMDIuMCBbaXA6MTc2LjIwMC4xNDEuMTA0XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDIuMCkgR2Vja28vMTAyLjAgRmlyZWZveC8xMDIuMCBbaXA6MTg1LjEwNy41Ni44MF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xOyBNb2JpbGU7IHJ2OjEwMi4wKSBHZWNrby8xMDIuMCBGaXJlZm94LzEwMi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDIuMCkgR2Vja28vMTAyLjAgRmlyZWZveC8xMDIuMCBbaXA6NS45MS40MS4xMzRd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAyLjAgW2lwOjE1MS41NS4yNy4yMzRd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6MTAzLjApIEdlY2tvLzEwMy4wIEZpcmVmb3gvMTAzLjAgW2lwOjE1MS40My4yMzEuMzdd","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjEwMy4wKSBHZWNrby8xMDMuMCBGaXJlZm94LzEwMy4wIFtpcDoxNTEuMzQuMjQuMTI4XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xOyBNb2JpbGU7IHJ2OjEwMy4wKSBHZWNrby8xMDMuMCBGaXJlZm94LzEwMy4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTAzLjApIEdlY2tvLzEwMy4wIEZpcmVmb3gvMTAzLjAgW2lwOjUuMTcwLjY4LjI5XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDMuMCkgR2Vja28vMTAzLjAgRmlyZWZveC8xMDMuMCBbaXA6NjIuMTguMzIuNTBd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDMuMCkgR2Vja28vMTAzLjAgRmlyZWZveC8xMDMuMCBbaXA6NS45MS40MC4xNDVd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMDsgTW9iaWxlOyBydjoxMDMuMCkgR2Vja28vMTAzLjAgRmlyZWZveC8xMDMuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMy4wLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAzLjApIEdlY2tvLzEwMy4wIEZpcmVmb3gvMTAzLjAgW2lwOjk1LjI1MS4yMzguNDVd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDMuMCkgR2Vja28vMTAzLjAgRmlyZWZveC8xMDMuMCBbaXA6MTUxLjgyLjEyNi4xMDBd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTAzLjApIEdlY2tvLzEwMy4wIEZpcmVmb3gvMTAzLjAgW2lwOjE1MS42My4xNTIuMV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTAzLjApIEdlY2tvLzEwMy4wIEZpcmVmb3gvMTAzLjAgW2lwOjg0LjIyMy4yMi45OV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTAzLjApIEdlY2tvLzEwMy4wIEZpcmVmb3gvMTAzLjAgW2lwOjM3LjE2MC40Ni40Ml0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwMy4wLjI=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6MTAyLjApIEdlY2tvLzEwMi4wIEZpcmVmb3gvMTAzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDMuMCkgR2Vja28vMTAzLjAgRmlyZWZveC8xMDMuMCBbaXA6NS45MS4zOS4xMjVd","TW96aWxsYS81LjAgKEFuZHJvaWQgOS4wOyBNb2JpbGU7IHJ2OjEwMy4wKSBHZWNrby8xMDMuMCBGaXJlZm94LzEwMy4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDMuMCkgR2Vja28vMTAzLjAgRmlyZWZveC8xMDMuMCBbaXA6NS45MS40MS4xMF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwNC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94LzEwNC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgcnY6MTA0LjApIEdlY2tvLzEwNC4wIEZpcmVmb3gvMTA0LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwNC4wTW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDEzOyBTTS1HOTYwVSkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzEwNS4wLjUxOTUuNzkgTW9iaWxlIFNhZmFyaS81MzcuMzY=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTA0LjApIEdlY2tvLzEwNC4wIEZpcmVmb3gvMTA0LjAgW2lwOjM3LjE2Mi4xNjIuMTYwXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTA0LjApIEdlY2tvLzEwNC4wIEZpcmVmb3gvMTA0LjAgW2lwOjgyLjU3LjE0NC44MF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTA0LjApIEdlY2tvLzEwNC4wIEZpcmVmb3gvMTA0LjAgW2lwOjM3LjE2Mi4xNDguMjUyXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDQuMCkgR2Vja28vMTA0LjAgRmlyZWZveC8xMDQuMCBbaXA6NS45MS4zOC4xMjld","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xOyBNb2JpbGU7IHJ2OjEwNC4wKSBHZWNrby8xMDQuMCBGaXJlZm94LzEwNC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTA0LjApIEdlY2tvLzEwNC4wIEZpcmVmb3gvMTA0LjAgW2lwOjIuMTk4LjIzMC4xNDJd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDQuMCkgR2Vja28vMTA0LjAgRmlyZWZveC8xMDQuMCBbaXA6NS45MS40NS4yNDRd","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wOyBNb2JpbGU7IHJ2OjEwNC4wKSBHZWNrby8xMDQuMCBGaXJlZm94LzEwNC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgcnY6MTA0LjApIEdlY2tvLzEwNC4wIEZpcmVmb3gvMTA0LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjEwNC4wKSBHZWNrby8xMDQuMCBGaXJlZm94LzEwNC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwNC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDQuMCkgR2Vja28vMTA0LjAgRmlyZWZveC8xMDQuMCBbaXA6NS45MS40NS4yMl0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTEuMDsgTW9iaWxlOyBydjoxMDQuMCkgR2Vja28vMTA0LjAgRmlyZWZveC8xMDQuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6MTA0LjApIEdlY2tvLzEwNC4wIEZpcmVmb3gvMTA0LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjI7IE1vYmlsZTsgcnY6MTA0LjApIEdlY2tvLzEwNC4wIEZpcmVmb3gvMTA0LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xLjE7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjI7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzEwNS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xOyBNb2JpbGU7IHJ2OjEwNS4wKSBHZWNrby8xMDUuMCBGaXJlZm94LzEwNS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgWFBFUklBLUU1OyBydjoxMDAuMCkgR2Vja28vMTAwLjAgRmlyZWZveC8xMDUuME1vemlsbGEvNS4wIChMaW51eDsgQW5kcm9pZCAxMik=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjEwNS4wKSBHZWNrby8xMDUuMCBGaXJlZm94LzEwNS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wOyBNb2JpbGU7IHJ2OjEwNS4wKSBHZWNrby8xMDUuMCBGaXJlZm94LzEwNS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQ7IE1vYmlsZTsgcnY6MTA1LjBlc3IpIEdlY2tvLzEwNS4wZXNyIEZpcmVmb3gvMTA1LjBlc3I=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjI7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTEuMDsgTW9iaWxlOyBydjoxMDUuMCkgR2Vja28vMTA1LjAgRmlyZWZveC8xMDUuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTEuNDsgVGFibGV0OyBydjoxMDUuMCkgR2Vja28vMTA1LjAgRmlyZWZveC8xMDUuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjoxMDUuMCkgR2Vja28vMTA1LjAgRmlyZWZveC8xMDUuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wLjE7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQ7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTA1LjApIEdlY2tvLzEwNS4wIEZpcmVmb3gvMTA1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTM7IE1vYmlsZTsgcnY6MTA2LjApIEdlY2tvLzEwNi4wIEZpcmVmb3gvMTA2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6MTA2LjApIEdlY2tvLzEwNi4wIEZpcmVmb3gvMTA2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6MTA2LjApIEdlY2tvLzEwNi4wIEZpcmVmb3gvMTA2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6MTA2LjApIEdlY2tvLzEwNi4wIEZpcmVmb3gvMTA2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQ7IFRhYmxldDsgcnY6MTA2LjBlc3IpIEdlY2tvLzEwNi4wZXNyIEZpcmVmb3gvMTA2LjBlc3I=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6MTA2LjApIEdlY2tvLzEwNi4wIEZpcmVmb3gvMTA2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6MTA2LjApIEdlY2tvLzEwNi4wIEZpcmVmb3gvMTA2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IFRhYmxldDsgcnY6NjguMi4xKSBHZWNrby82OC4yLjEgRmlyZWZveC82OC4yLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguOS4wKSBHZWNrby82OC45LjAgRmlyZWZveC82OC45LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNC40LjI7IFRhYmxldDsgcnY6NjguMTEuMCkgR2Vja28vNjguMTEuMCBGaXJlZm94LzY4LjExLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2OjY4LjIuMSkgR2Vja28vNjguMi4xIEZpcmVmb3gvNjguMi4x","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4xOyBTYXBwaGlyZSA4IEJ1aWxkL0xNWTQ3STsgTW9iaWxlOyBydjo2OC4wKSBHZWNrby82OC4wIEZpcmVmb3gvNjguMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjI7IFJlZG1pIFkxIExpdGUgQnVpbGQvTjJHNDdIOyBNb2JpbGU7IHJ2OjY4LjApIEdlY2tvLzY4LjAgRmlyZWZveC82OC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE45NTE3IEJ1aWxkL05NRjI2VjsgTW9iaWxlOyBydjo2OC4wKSBHZWNrby82OC4wIEZpcmVmb3gvNjguMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IFRVUktDRUxMIFQ4MCBCdWlsZC9OTUYyNkY7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzY4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjI7IFNlb3VsIFM4IEJ1aWxkL04yRzQ3SDsgTW9iaWxlOyBydjo2OC4wKSBHZWNrby82OC4wIEZpcmVmb3gvNjguMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBJbmZpbml0eV9lMyBCdWlsZC9OUkQ5ME07IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzY4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IFRhYmxldDsgcnY6NjguMTAuMSkgR2Vja28vNjguMTAuMSBGaXJlZm94LzY4LjEwLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgNC40LjU7IFRhYmxldDsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzY4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6NjguNi4wKSBHZWNrby82OC42LjAgRmlyZWZveC82OC42LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMTAuMSkgR2Vja28vNjguMTAuMSBGaXJlZm94LzY4LjEwLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xOyBNb2JpbGU7IHJ2OjY4LjEpIEdlY2tvLzY4LjEgRmlyZWZveC82OC4x","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzY4LjAgW2lwOjM3LjE2Mi4xMTguMTE5XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgNC40LjI7IFRhYmxldDsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzY4LjAgW2lwOjE1MS4zNC40My4xOV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgNC40LjI7IE1vYmlsZTsgcnY6NjguMS4xKSBHZWNrby82OC4xLjEgRmlyZWZveC82OC4xLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xLjE7IE1vYmlsZTsgcnY6NjguMS4xKSBHZWNrby82OC4xLjEgRmlyZWZveC82OC4xLjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgTW90byBaICgyKTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzY4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjM3LjE2Mi4xMzcuMjA5XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjQ5LjIzNi4zMS4zOF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjUuMTcxLjIzMS4yMDJd","TW96aWxsYS81LjAgKEFuZHJvaWQ7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjE1MS4xOC4xMzcuNjNd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5OC4wKSBHZWNrby85OC4wIEZpcmVmb3gvOTguMCBbaXA6OTMuNTYuMTY1Ljg3XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5OC4wKSBHZWNrby85OC4wIEZpcmVmb3gvOTguMCBbaXA6MzcuMTU5Ljc4LjUxXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5OC4wKSBHZWNrby85OC4wIEZpcmVmb3gvOTguMCBbaXA6NS45MC4xNS4yMl0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjM3LjE2Mi4yNi44OV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjE3Ni4yMDAuMTYzLjE4OF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjEwOS41My4xOC4xMDhd","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjUuMTcxLjIxMS4xMTVd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjAgW2lwOjM3LjE2My41MS4xMF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xOyBNb2JpbGU7IHJ2Ojk4LjApIEdlY2tvLzk4LjAgRmlyZWZveC85OC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wLjA7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wOyBNb2JpbGU7IHJ2Ojk4LjApIEdlY2tvLzk4LjAgRmlyZWZveC85OC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wOyBNb2JpbGU7IHJ2Ojk4LjApIEdlY2tvLzk4LjAgRmlyZWZveC85OC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjI7IE1vYmlsZTsgcnY6OTguMCkgR2Vja28vOTguMCBGaXJlZm94Lzk4LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMDsgTW9iaWxlOyBydjo5OC4wKSBHZWNrby85OC4wIEZpcmVmb3gvOTguMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgVGFibGV0OyBydjo5OS4wKSBHZWNrby85OS4wIEZpcmVmb3gvOTkuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5OS4wKSBHZWNrby85OS4wIEZpcmVmb3gvOTkuMCBZb3VCcm93c2VyLzEuMC45","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgWW91QnJvd3Nlci8xLjAuOQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5OS4wKSBHZWNrby85OS4wIEZpcmVmb3gvOTkuMCBbaXA6MTUxLjIwLjE1LjIyMV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5OS4wKSBHZWNrby85OS4wIEZpcmVmb3gvOTkuMCBbaXA6MTUxLjIwLjM1LjIxMl0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgW2lwOjg2LjIxMS43Ny43OF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgWW91QnJvd3Nlci8xLjAuOQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgW2lwOjM3LjE2Mi4xOTUuMjQ1XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgWW91QnJvd3Nlci8xLjAuNQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgW2lwOjYyLjI0MC4xMzUuNDRd","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2Ojk5LjApIEdlY2tvLzk5LjAgRmlyZWZveC85OS4wIFtpcDo1Ljc3LjEwMS4xODRd","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgW2lwOjE1MS41Ny45OC4xNDhd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgW2lwOjgyLjg0Ljg5LjIyNV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY5OS4wKSBHZWNrby85OS4wIEZpcmVmb3gvOTkuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5OS4wKSBHZWNrby85OS4wIEZpcmVmb3gvOTkuMCBbaXA6MTUxLjIwLjU0LjJd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgW2lwOjM3LjE2MC4xMS4yMzld","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgW2lwOjM3LjE2MC4xMjIuMTgyXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5OS4wKSBHZWNrby85OS4wIEZpcmVmb3gvOTkuMCBbaXA6MTg1LjEyMS4yMDAuMTE5XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgcnY6OTkuMCkgR2Vja28vOTkuMCBGaXJlZm94Lzk5LjAgW2lwOjgwLjExNi4xODkuMTczXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2Ojk5LjApIEdlY2tvLzk5LjAgRmlyZWZveC85OS4wIFtpcDo1LjExLjEwOS4xNDld","TW96aWxsYS81LjAgKE1vYmlsZTsgTFlGL0YyMTBRL0xZRi1GMjEwUS0wMDAtMDAtMTAtMTExMjE5OyBBbmRyb2lkOyBydjo4My4wKSBHZWNrby84My4wIEZpcmVmb3gvODMuMCBLQUlPUy8yLjUgWW91VHViZS8xLjkyLjUyLko=","TW96aWxsYS81LjAgKEFuZHJvaWQgOS4wOyBNb2JpbGU7IHJ2OjgzLjApIEdlY2tvLzgzLjAgRmlyZWZveC84My4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjE7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjQ5LjE5OS4yMzUuMjI2XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjYyLjIwMi4xODkuMTIzXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjI7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjUuOTAuMjE0LjEwXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjkzLjMzLjUyLjEzN10=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xOyBNb2JpbGU7IHJ2OjgzLjApIEdlY2tvLzgzLjAgRmlyZWZveC84My4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4My4wKSBHZWNrby84My4wIEZpcmVmb3gvODMuMCBbaXA6MTk1LjIyMy4zMC44XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjg4LjIxNy4xODEuMTk2XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjkzLjQwLjU2LjExOF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjE3Ni4yMDEuMTU2LjE1OV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wLjE7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjc5LjUxLjExLjI4XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4My4wKSBHZWNrby84My4wIEZpcmVmb3gvODMuMCBbaXA6MTUxLjQ2LjkxLjUxXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjkzLjQ0Ljg0LjEwN10=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wOyBNb2JpbGU7IHJ2OjgzLjApIEdlY2tvLzgzLjAgRmlyZWZveC84My4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4My4wKSBHZWNrby84My4wIEZpcmVmb3gvODMuMCBbaXA6ODAuMTgwLjE2MS4zNF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODMuMCkgR2Vja28vODMuMCBGaXJlZm94LzgzLjAgW2lwOjM3LjE1OS4xOS4yMjNd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4My4wKSBHZWNrby84My4wIEZpcmVmb3gvODMuMCBbaXA6MzcuMTYyLjEzNi4yNDNd","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wLjE7IE1vYmlsZTsgcnY6ODYuMSkgR2Vja28vODYuMSBGaXJlZm94Lzg2LjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2Ojg2LjEpIEdlY2tvLzg2LjEgRmlyZWZveC84Ni4x","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xOyBNb2JpbGU7IHJ2Ojg2LjApIEdlY2tvLzg2LjAgRmlyZWZveC84Ni4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wOyBNb2JpbGU7IHJ2Ojg2LjApIEdlY2tvLzg2LjAgRmlyZWZveC84Ni4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wOyBNb2JpbGU7IHJ2Ojg2LjEpIEdlY2tvLzg2LjEgRmlyZWZveC84Ni4x","TW96aWxsYS81LjAgKEFuZHJvaWQgOS4wOyBNb2JpbGU7IHJ2Ojg2LjEpIEdlY2tvLzg2LjEgRmlyZWZveC84Ni4x","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wOyBNb2JpbGU7IHJ2Ojg2LjEpIEdlY2tvLzg2LjEgRmlyZWZveC84Ni4x","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjI7IE1vYmlsZTsgcnY6ODYuMSkgR2Vja28vODYuMSBGaXJlZm94Lzg2LjE=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODYuMCkgR2Vja28vODYuMCBGaXJlZm94Lzg2LjAsZ3ppcChnZmUp","TW96aWxsYS81LjAgKEFuZHJvaWQgNTsgTW9iaWxlOyBydjo2OC4wKSBHZWNrby82OC4wIEZpcmVmb3gvODYuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94Lzg2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xOyBNb2JpbGU7IHJ2Ojg2LjApIEdlY2tvLzg2LjAgRmlyZWZveC84Ni4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODYuMCkgR2Vja28vODYuMCBGaXJlZm94Lzg2LjAgTW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODYuMCkgR2Vja28vODYuMCBGaXJlZm94Lzg2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjE7IE1vYmlsZTsgcnY6ODYuMCkgR2Vja28vODYuMCBGaXJlZm94Lzg2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNC40OyBNb2JpbGU7IHJ2Ojg2LjApIEdlY2tvLzg2LjAgRmlyZWZveC84Ni4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgcnY6ODYuMCkgR2Vja28vODYuMCBGaXJlZm94Lzg2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjI7IE1vYmlsZTsgcnY6ODYuMCkgR2Vja28vODYuMCBGaXJlZm94Lzg2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xLjE7IE1vYmlsZTsgcnY6ODYuMCkgR2Vja28vODYuMCBGaXJlZm94Lzg2LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xOyBNb2JpbGU7IHJ2Ojg2LjApIEdlY2tvLzg2LjAgRmlyZWZveC84Ni4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMDsgTW9iaWxlOyBydjo4Ni4wKSBHZWNrby84Ni4wIEZpcmVmb3gvODYuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgT1BQTyBBNzM7IHJ2Ojg5LjApIEdlY2tvLzg5LjAgRmlyZWZveC84OS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IExHNTIwOyBNb2JpbGU7IHJ2Ojg5LjApIEdlY2tvLzg5LjAgRmlyZWZveC84OS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNjsgTW9iaWxlOyBTTS1HNTMyRyBydjo4OS4wKSBHZWNrby84OS4wIEZpcmVmb3gvODkuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMDsgTW9iaWxlOyBydjo4OS4wKSBHZWNrby84OS4wIEZpcmVmb3gvODkuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOS4wOyBNb2JpbGU7IHJ2Ojg5LjApIEdlY2tvLzg5LjAgRmlyZWZveC84OS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMC45OTsgTW9iaWxlOyBydjo4OS4wKSBHZWNrby84OS4wIEZpcmVmb3gvODkuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODkuMDsgVGVzc2VyYWN0LzEuMCkgR2Vja28vODkuMCBGaXJlZm94Lzg5LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xOyBNb2JpbGU7IHJ2Ojg5LjApIEdlY2tvLzg5LjAgRmlyZWZveC84OS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMTsgTW9iaWxlOyBydjo4OS4wKSBHZWNrby84OS4wIEZpcmVmb3gvODkuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wOyBNb2JpbGU7IHJ2Ojg5LjApIEdlY2tvLzg5LjAgRmlyZWZveC84OS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjE7IE1vYmlsZTsgcnY6ODkuMCkgR2Vja28vODkuMCBGaXJlZm94Lzg5LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xOyBNb2JpbGU7IHJ2Ojg5LjApIEdlY2tvLzg5LjAgRmlyZWZveC84OS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNC40OyBNb2JpbGU7IHJ2Ojg5LjApIEdlY2tvLzg5LjAgRmlyZWZveC84OS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjIgW0RNSCBEZXZdOyBNb2JpbGU7IHJ2Ojg5LjApIEdlY2tvLzg5LjAgRmlyZWZveC84OS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjI7IE1vYmlsZTsgcnY6ODkuMCkgR2Vja28vODkuMCBGaXJlZm94Lzg5LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xLjE7IE1vYmlsZTsgcnY6ODkuMCkgR2Vja28vODkuMCBGaXJlZm94Lzg5LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6ODkuMCkgR2Vja28vODkuMCBGaXJlZm94Lzg5LjA=","T3BlcmEvOS44MCAoV2luZG93cyBOVCA1LjA7IFU7IE1vemlsbGEvNS4wIChBbmRyb2lkIDExOyBNb2JpbGU7IHJ2OjY4LjApIEdlY2tvLzY4LjAgRmlyZWZveC84OS4wOyBlbikgUHJlc3RvLzIuMTAuMjg5IFZlcnNpb24vMTIuMDA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4OS4wKSBHZWNrby84OS4wIEZpcmVmb3gvODkuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6ODkuMCkgR2Vja28vODkuMCBGaXJlZm94Lzg5LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMDsgVGVzc2VyYWN0LzEuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjk0LjEzNC4xNzcuNTJd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjg1LjAuMTk5LjE0MV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4Mi4wKSBHZWNrby84Mi4wIEZpcmVmb3gvODIuMCBbaXA6NzcuMzIuMzMuMjVd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4Mi4wKSBHZWNrby84Mi4wIEZpcmVmb3gvODIuMCBbaXA6MjE3LjE3MS42Ni4xMzJd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4Mi4wKSBHZWNrby84Mi4wIEZpcmVmb3gvODIuMCBbaXA6NS45MC4xMzUuMzRd","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjg3LjUuNjcuMTMwXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjM3LjE2My4yMzIuODdd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjE1MS40Ny42NC4xMzdd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4Mi4wKSBHZWNrby84Mi4wIEZpcmVmb3gvODIuMCBbaXA6NS4xMS4xMTMuNDhd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjk1LjIzMS4yOC4yMF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4Mi4wKSBHZWNrby84Mi4wIEZpcmVmb3gvODIuMCBbaXA6NS45MC4xMzguMjM3XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjE3Ni4yMDEuMjIyLjE5M10=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjM3LjE4My40My4yMDhd","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjIuMzkuMzcuMjQ5XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo4Mi4wKSBHZWNrby84Mi4wIEZpcmVmb3gvODIuMCBbaXA6NS45MC4yMjEuNzld","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjg3LjEuNTMuNTld","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjUuOTEuMTYzLjIyM10=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjM3LjIwMS4xNjkuODVd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6ODIuMCkgR2Vja28vODIuMCBGaXJlZm94LzgyLjAgW2lwOjM3LjE2MC4yLjE5NF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjE7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzkyRkQ=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTEuMDsgTW9iaWxlOyBydjo5Mi4wKSBHZWNrby85Mi4wIEZpcmVmb3gvOTIuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTIuMGVzcikgR2Vja28vOTIuMGVzciBGaXJlZm94LzkyLjBlc3I=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMS4xOyBNb2JpbGU7IHJ2OjkyLjApIEdlY2tvLzkyLjAgRmlyZWZveC85Mi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOS40OyBUYWJsZXQ7IHJ2OjkyLjApIEdlY2tvLzkyLjAgRmlyZWZveC85Mi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMDsgTW9iaWxlOyBydjo5Mi4wKSBHZWNrby85Mi4wIEZpcmVmb3gvOTIuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wOyBNb2JpbGU7IHJ2OjkyLjApIEdlY2tvLzkyLjAgRmlyZWZveC85Mi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xOyBNb2JpbGU7IHJ2OjkyLjApIEdlY2tvLzkyLjAgRmlyZWZveC85Mi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjE7IE1vYmlsZTsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjI7IE1vYmlsZTsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wOyBNb2JpbGU7IHJ2OjkyLjApIEdlY2tvLzkyLjAgRmlyZWZveC85Mi4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjAsZ3ppcChnZmUp","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xLjE7IE1vYmlsZTsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQ7IFRhYmxldDsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5Mi4wKSBHZWNrby85Mi4wIEZpcmVmb3gvOTIuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjI7IE1vYmlsZTsgcnY6OTIuMCkgR2Vja28vOTIuMCBGaXJlZm94LzkyLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjAgW2lwOjM3LjE2MC4zOS4xODhd","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjAgW2lwOjkzLjM0LjIzMy4yMjhd","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5My4wKSBHZWNrby85My4wIEZpcmVmb3gvOTMuMCBbaXA6OTMuNDUuMTc0LjU4XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xLjE7IE1vYmlsZTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjAgW2lwOjE3Ni4yMDEuOTMuMTUwXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMC45OTsgTW9iaWxlOyBydjo5My4wKSBHZWNrby85My4wIEZpcmVmb3gvOTMuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQ7IFRhYmxldDsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgU00tRzk5OEIgOyBydjo4OC4wKSBHZWNrby85My4wIEZpcmVmb3gvOTMuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IFRhYmxldDsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4xOyBNb2JpbGU7IHJ2OjkzLjApIEdlY2tvLzkzLjAgRmlyZWZveC85My4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IFRhYmxldDsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgTEctTTI1NTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKExpbnV4OyBVOyBNb2JpbGU7IEFuZHJvaWQgMTI7IFRhYmxldDsgeDY0OyBydjo5My4wKSBHZWNrby85My4wIEZpcmVmb3gvOTMuMCBTYWZhcmkvNjA1LjEuMTU=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xLjE7IE1vYmlsZTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wOyBNb2JpbGU7IHJ2OjkzLjApIEdlY2tvLzkzLjAgRmlyZWZveC85My4w","TW96aWxsYS81LjAgKG1vYmlsZTsgcnY6OTMuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC85My4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5My4wKSBHZWNrby85My4wIEZpcmVmb3gvOTMuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjI7IE1vYmlsZTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgcnY6OTMuMCkgR2Vja28vOTMuMCBGaXJlZm94LzkzLjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgU00tRzk3NUY7IHJ2Ojk0LjApIEdlY2tvLzk0LjAgRmlyZWZveC85NC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjM3LjE2Mi41NS4yMDld","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjM3LjE2Mi4yLjExNF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjUuOTAuMTAzLjY4XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjUuOTAuOTcuNjVd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjM3LjE2MC4xNDkuMjld","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjE7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjIxNy4xNzEuNzkuMTIxXQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjUuOTAuMTg4LjE5MV0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjE1MS40NC44OS4xMDRd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjUuMTcxLjQ2LjIyNl0=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5NC4wKSBHZWNrby85NC4wIEZpcmVmb3gvOTQuMCBbaXA6MTQ4LjI1My4xOS40NF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjk1LjI1Mi4xNDIuMzJd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjg0LjIyMS4yMTcuMTk1XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjUuOTAuMTY0LjEwOF0=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjEzMC4yNS4yNTIuNDhd","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjAgW2lwOjEwOS41My43LjE2XQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wOyBNb2JpbGU7IHJ2Ojk0LjApIEdlY2tvLzk0LjAgRmlyZWZveC85NC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjIgeDY0OyBNb2JpbGU7IHJ2Ojk0LjApIEdlY2tvLzk0LjAgRmlyZWZveC85NC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgTTIwMTBKMTlDRyBCdWlsZC9RS1ExLjIwMDgzMC4wMDI7IHJ2Ojk0LjApIEdlY2tvLzk0LjAgRmlyZWZveC85NC4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IE1vYmlsZTsgTTIwMTBKMTlDRzsgcnY6OTQuMCkgR2Vja28vOTQuMCBGaXJlZm94Lzk0LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5NS4wKSBHZWNrby85NS4wIEZpcmVmb3gvOTUuMCBbaXA6NS45MC4zNi4xMDVd","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wLjE7IE1vYmlsZTsgcnY6OTUuMCkgR2Vja28vOTUuMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNC40OyBNb2JpbGU7IHJ2Ojk1LjApIEdlY2tvLzk1LjAgRmlyZWZveC85NS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTA7IFRhYmxldDsgcnY6OTUuMCkgR2Vja28vOTUuMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgMTE7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOS4wOyBNb2JpbGU7IHJ2Ojk1LjApIEdlY2tvLzk1LjAgRmlyZWZveC85NS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4wOyBNb2JpbGU7IHJ2Ojk1LjApIEdlY2tvLzk1LjAgRmlyZWZveC85NS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgMTAuMDsgTW9iaWxlOyBydjo5NS4wKSBHZWNrby85NS4wIEZpcmVmb3gvOTUuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjI7IE1vYmlsZTsgcnY6OTUuMCkgR2Vja28vOTUuMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wOyBNb2JpbGU7IHJ2Ojk1LjApIEdlY2tvLzk1LjAgRmlyZWZveC85NS4w","TW96aWxsYS81LjAgKExpbnV4OyBVOyBNb2JpbGU7IEFuZHJvaWQgMTI7IFRhYmxldDsgeDY0KSBBcHBsZVdlYktpdC82MDUuMS4xNSAoS0hUTUwsIGxpa2UgR2Vja28pIEZpcmVmb3gvOTUuMCBNb2JpbGUvMTVFMTQ4IFNhZmFyaS82MDUuMS4xNQ==","TW96aWxsYS81LjAgKEFuZHJvaWQgMTI7IE1vYmlsZTsgcnY6NjguMCkgR2Vja28vNjguMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKFdpbmRvd3MgMTAgTW9iaWxlOyBNb2JpbGU7IHJ2Ojk1LjApIEdlY2tvLzk1LjAgRmlyZWZveC85NS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgOTsgTW9iaWxlOyBydjo5NS4wKSBHZWNrby85NS4wIEZpcmVmb3gvOTUuMA==","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4xLjA7IE1vYmlsZTsgcnY6OTUuMCkgR2Vja28vOTUuMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgOC4wLjA7IE1vYmlsZTsgcnY6OTUuMCkgR2Vja28vOTUuMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4xLjE7IE1vYmlsZTsgcnY6OTUuMCkgR2Vja28vOTUuMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNy4wOyBNb2JpbGU7IHJ2Ojk1LjApIEdlY2tvLzk1LjAgRmlyZWZveC85NS4w","TW96aWxsYS81LjAgKEFuZHJvaWQgNi4wLjE7IE1vYmlsZTsgcnY6OTUuMCkgR2Vja28vOTUuMCBGaXJlZm94Lzk1LjA=","TW96aWxsYS81LjAgKEFuZHJvaWQgNS4xOyBNb2JpbGU7IHJ2Ojk1LjApIEdlY2tvLzk1LjAgRmlyZWZveC85NS4w"]', true);
    $user_agent = base64_decode($anorinckhous[array_rand($anorinckhous, 1)]);
    if (strpos($user_agent, "[ip:")) {
        $user_agent = explode('[ip:', $user_agent)[0];
        $user_agent = $user_agent . '[ip:' . rand(1, 300) . '.' . rand(1, 300) . '.' . rand(1, 300) . '.' . rand(1, 300) . ']';
    }
    return $user_agent;
}
/*

function vuprovip098643367delay($delay)
{
    for ($vu = $delay; $vu > 1; $vu--) {
        echo "\r \033[1;9" . rand(1, 9) . "m Vui Lòng Đợi Sau " . $vu . " Giây     \r";
        sleep(1);
    }
    echo "\r\033[1;9" . rand(1, 9) . "m Tool Tương Tác DragonX       \r";
}
*/
function vuprovip098643367delay($delay)
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

function req2($url, $vuprovip15435678)
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
    $headers[] = 'Cookie: ' . $vuprovip15435678;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $anorinccess = curl_exec($ch);
    if (strpos($anorinccess, "<title>Facebook – log in or sign up</title>")) {
        return 'die';
    }
    curl_close($ch);
    return $anorinccess;
}



function dichh($vuprovip098643367, $vu2n_dich)
{

    $vu2n_goc = 'vi';

    if ($vu2n_dich == $vu2n_goc) return $vuprovip098643367;
    $vuprovip098643367 = urlencode($vuprovip098643367);
    $useragent = useragent();
    $url = 'https://translate.google.com.vn/m?sl=' . $vu2n_goc . '&tl=' . $vu2n_dich . '&hl=' . $vu2n_dich . '&q=' . $vuprovip098643367;
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER =>
        array(
            "Host:translate.google.com.vn",
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'accept-encoding: gzip, deflate, br',
            'accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
            'cache-control: max-age=0',
            'user-agent:' . $useragent,
            'referer: ' . $url
        ),
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_ENCODING => TRUE,
    ));
    $ch = curl_exec($ch);
    if ($ch == '' || strpos($ch, 'result-container">') == false) {
        return $vuprovip098643367;
    }
    //echo $ch;
    $anorinckq = html_entity_decode(explode('</div>', explode('result-container">', $ch)[1])[0]);
    return $anorinckq;
    //return json_decode($ch, true);
}


function listnn()
{
    $list = '[{"m":"ar","n":"\u1ea2 R\u1eadp"},{"m":"sq","n":"Albania"},{"m":"am","n":"Amharic"},{"m":"en","n":"Anh"},{"m":"hy","n":"Armenia"},{"m":"as","n":"Assam"},{"m":"ay","n":"Aymara"},{"m":"az","n":"Azerbaijan"},{"m":"pl","n":"Ba Lan"},{"m":"fa","n":"Ba T\u01b0"},{"m":"bm","n":"Bambara"},{"m":"xh","n":"Bantu"},{"m":"eu","n":"Basque"},{"m":"be","n":"Belarus"},{"m":"bn","n":"Bengal"},{"m":"bho","n":"Bhojpuri"},{"m":"bs","n":"Bosnia"},{"m":"pt","n":"B\u1ed3 \u0110\u00e0o Nha"},{"m":"bg","n":"Bulgaria"},{"m":"ca","n":"Catalan"},{"m":"ceb","n":"Cebuano"},{"m":"ny","n":"Chichewa"},{"m":"co","n":"Corsi"},{"m":"ht","n":"Creole (Haiti)"},{"m":"hr","n":"Croatia"},{"m":"dv","n":"Dhivehi"},{"m":"iw","n":"Do Th\u00e1i"},{"m":"doi","n":"Dogri"},{"m":"da","n":"\u0110an M\u1ea1ch"},{"m":"de","n":"\u0110\u1ee9c"},{"m":"et","n":"Estonia"},{"m":"ee","n":"Ewe"},{"m":"tl","n":"Filipino"},{"m":"fy","n":"Frisia"},{"m":"gd","n":"Gael Scotland"},{"m":"gl","n":"Galicia"},{"m":"ka","n":"George"},{"m":"gn","n":"Guarani"},{"m":"gu","n":"Gujarat"},{"m":"nl","n":"H\u00e0 Lan"},{"m":"af","n":"H\u00e0 Lan (Nam Phi)"},{"m":"ko","n":"H\u00e0n"},{"m":"ha","n":"Hausa"},{"m":"haw","n":"Hawaii"},{"m":"hi","n":"Hindi"},{"m":"hmn","n":"Hmong"},{"m":"hu","n":"Hungary"},{"m":"el","n":"Hy L\u1ea1p"},{"m":"is","n":"Iceland"},{"m":"ig","n":"Igbo"},{"m":"ilo","n":"Ilocano"},{"m":"id","n":"Indonesia"},{"m":"ga","n":"Ireland"},{"m":"jw","n":"Java"},{"m":"kn","n":"Kannada"},{"m":"kk","n":"Kazakh"},{"m":"km","n":"Khmer"},{"m":"rw","n":"Kinyarwanda"},{"m":"gom","n":"Konkani"},{"m":"kri","n":"Krio"},{"m":"ku","n":"Kurd (Kurmanji)"},{"m":"ckb","n":"Kurd (Sorani)"},{"m":"ky","n":"Kyrgyz"},{"m":"lo","n":"L\u00e0o"},{"m":"la","n":"Latinh"},{"m":"lv","n":"Latvia"},{"m":"ln","n":"Lingala"},{"m":"lt","n":"Litva"},{"m":"lg","n":"Luganda"},{"m":"lb","n":"Luxembourg"},{"m":"ms","n":"M\u00e3 Lai"},{"m":"mk","n":"Macedonia"},{"m":"mai","n":"Maithili"},{"m":"mg","n":"Malagasy"},{"m":"ml","n":"Malayalam"},{"m":"mt","n":"Malta"},{"m":"mi","n":"Maori"},{"m":"mr","n":"Marathi"},{"m":"mni-Mtei","n":"Meiteilon (Manipuri)"},{"m":"lus","n":"Mizo"},{"m":"mn","n":"M\u00f4ng C\u1ed5"},{"m":"my","n":"Myanmar"},{"m":"no","n":"Na Uy"},{"m":"ne","n":"Nepal"},{"m":"ru","n":"Nga"},{"m":"ja","n":"Nh\u1eadt"},{"m":"or","n":"Odia (Oriya)"},{"m":"om","n":"Oromo"},{"m":"ps","n":"Pashto"},{"m":"sa","n":"Ph\u1ea1n"},{"m":"fr","n":"Ph\u00e1p"},{"m":"fi","n":"Ph\u1ea7n Lan"},{"m":"pa","n":"Punjab"},{"m":"qu","n":"Quechua"},{"m":"eo","n":"Qu\u1ed1c t\u1ebf ng\u1eef"},{"m":"ro","n":"Rumani"},{"m":"sm","n":"Samoa"},{"m":"cs","n":"S\u00e9c"},{"m":"nso","n":"Sepedi"},{"m":"sr","n":"Serbia"},{"m":"st","n":"Sesotho"},{"m":"sn","n":"Shona"},{"m":"sd","n":"Sindhi"},{"m":"si","n":"Sinhala"},{"m":"sk","n":"Slovak"},{"m":"sl","n":"Slovenia"},{"m":"so","n":"Somali"},{"m":"su","n":"Sunda"},{"m":"sw","n":"Swahili"},{"m":"tg","n":"Tajik"},{"m":"ta","n":"Tamil"},{"m":"tt","n":"Tatar"},{"m":"es","n":"T\u00e2y Ban Nha"},{"m":"te","n":"Telugu"},{"m":"th","n":"Th\u00e1i"},{"m":"tr","n":"Th\u1ed5 Nh\u0129 K\u1ef3"},{"m":"sv","n":"Th\u1ee5y \u0110i\u1ec3n"},{"m":"ti","n":"Tigrinya"},{"m":"zh-CN","n":"Trung (Gi\u1ea3n th\u1ec3)"},{"m":"zh-TW","n":"Trung (Ph\u1ed3n th\u1ec3)"},{"m":"ts","n":"Tsonga"},{"m":"tk","n":"Turkmen"},{"m":"ak","n":"Twi"},{"m":"uk","n":"Ukraina"},{"m":"ur","n":"Urdu"},{"m":"ug","n":"Uyghur"},{"m":"uz","n":"Uzbek"},{"m":"vi","n":"Vi\u1ec7t"},{"m":"cy","n":"X\u1ee9 Wales"},{"m":"it","n":"\u00dd"},{"m":"yi","n":"Yiddish"},{"m":"yo","n":"Yoruba"},{"m":"zu","n":"Zulu"}]';
    return json_decode($list, true);
}
?>