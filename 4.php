error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$nau= "\e[38;5;94m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 200;
} else {
	$_SESSION['load'] = 0;
}
/***[ Đánh Dấu Bản Quyền ]***/
$thanhngang = "\033[1;31m────────────────────────────────────────────────────────────\n";
$thanh_dep = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
$plus = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
$thanh_xau = $do."[" . $trang . "=.=" . $do . "] ";
$thanh_dac_biet= $trang."=> ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 1500;
	$_SESSION['delay'] = 2000;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 1000;
}
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TRAO ĐỔI SUB TIKTOK
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
$k = "0";
$vt = "0";
cls();

if (file_exists('cookietdstt.txt')) {
    @system('rm cookietdstt.txt');
}
function post($url, $tsm, $data)
{
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $mr2;
}
function get_link($url, $tsm)
{
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm,
        CURLOPT_ENCODING => true));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $mr2;
}
cls();


function line($sleep)
{
    echo "\r";
}
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
if (file_exists('tk_tds.txt')) {
    $_SESSION["checktk"] = file_get_contents('tk_tds.txt');
    echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBấm $vang Enter$luc Để Chạy TK: $vang{$_SESSION["checktk"]}\n";
    echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập $vang No $luc Để Nhập Nick Mới: $vang";
    $choice = trim(fgets(STDIN));

    if ($choice == 'no' or $choice == 'No') {
        @system('rm tk_tds.txt');
        @system('rm mk_tds.txt');

        cls();
        logo(0);
        line(0);
        echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mTài Khoản TDS: \033[93m";
        $_SESSION["username"] = trim(fgets(STDIN));
        echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mMật Khẩu  TDS: \033[93m";
        $_SESSION['password'] = trim(fgets(STDIN));

        //goi ham nhap tk mk
    } else {
        $_SESSION["username"] = file_get_contents('tk_tds.txt');
        $_SESSION['password'] = file_get_contents('mk_tds.txt');
    }

} else {
    echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mTài Khoản TDS : \033[93m";
    $_SESSION["username"] = trim(fgets(STDIN));
    echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mMật Khẩu  TDS : \033[93m";
    $_SESSION['password'] = trim(fgets(STDIN));
}

testInternet();

do {
    if ($source == "1" || $_SESSION["username"] == "" || $_SESSION['password'] == "") {
        if (file_exists('tk_tds.txt')) {
            @system('rm tk_tds.txt');
            @system('rm mk_tds.txt');
        }
        echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;31mTài khoản Và Mật Khẩu Không Đúng ! \n";
        line(0);
        echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mTài Khoản TDS: \033[93m";
        $_SESSION["username"] = trim(fgets(STDIN));
        echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mMật Khẩu  TDS: \033[93m";
        $_SESSION['password'] = trim(fgets(STDIN));
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookietdstt.txt");
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
    $login = array('username' => $_SESSION['username'], 'password' => $_SESSION['password'], 'submit' => ' Đăng Nhập');
    curl_setopt($ch, CURLOPT_POST, count($login));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookietdstt.txt");
    $source = curl_exec($ch);
    curl_close($ch);
} while ($source == "1" || $_SESSION["username"] == "" || $_SESSION['password'] == "");

$xxtk = fopen("tk_tds.txt", "w");
fwrite($xxtk, $_SESSION["username"]);
fclose($xxtk);

$xxmk = fopen("mk_tds.txt", "w");
fwrite($xxmk, $_SESSION['password']);
fclose($xxmk);

cls();

$url = "https://traodoisub.com/scr/user.php";
$head = array("Host: traodoisub.com", "accept: application/json, text/javascript, */*; q=0.01", "x-requested-with: XMLHttpRequest", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://traodoisub.com/home/");
$ch = curl_init();
curl_setopt_array($ch,
    array(CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => true));
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
$sodu = $json["xu"];
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
$tktt = $json["idtt"];
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mTài Khoản:\033[93m  " . $_SESSION["username"] . " \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mXu Hiện Tại:\033[93m  $sodu\n";
echo $thanhngang;

/// url
$url_1 = "https://traodoisub.com/view/chtiktok/";
$url_2 = "https://traodoisub.com/scr/tiktok_datnick.php";

$tsm_1 = array(
    "Host:traodoisub.com",
    "upgrade-insecure-requests:1",
    "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
    "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "referer:https://traodoisub.com/view/setting/",

);
$tsm_2 = array(
    "Host:traodoisub.com",
    "content-length:25",
    "x-requested-with:XMLHttpRequest",
    "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
    "content-type:application/x-www-form-urlencoded; charset=UTF-8",
    "sec-fetch-site:same-origin",
    "sec-fetch-mode:cors",
    "sec-fetch-dest:empty",
    "referer:https://traodoisub.com/view/chtiktok/",

);

echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBạn Muốn Chạy Bằng \033[93mid Tiktok\033[92m Nào: \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mChọn Trong Danh Sách \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mTự Nhập \033[93mid \033[92mThủ Công \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mVui Lòng Chọn : \033[1;33m";
do {
    $kieucauhinh = trim(fgets(STDIN));
    if ($kieucauhinh != 1 && $kieucauhinh != 2) {
        echo $plus.$do."Nhập Sai!, Nhập Lại: \033[93m";
    }
} while ($kieucauhinh != 1 && $kieucauhinh != 2);

if ($kieucauhinh == 1) {
    while (true) {

        testInternet();

        $k++;
        $t = $t + 1;
        $ch = get_link($url_1, $tsm_1);
        $link = explode('"', explode('<th class="align-middle text-center white-space-nowrap id"><a href="', $ch)[$k])[0];
        if ($link == "") {
            break;
        } else {

            $tk = explode(' ', explode('https://www.tiktok.com/@', $link)[1])[0];
            echo $plus.$luc ."Tài Khoản " . $do . "" . $k . "" . $luc . ":\033[92m " . $vang . "$tk \n";
        }
    }

    echo $plus . "" . $luc . "Bạn Muốn Chạy Tài Khoản Tiktok Số Mấy: " . $do . "";

    do {
        $numch = trim(fgets(STDIN));

        if ($numch < 1 || $numch >= $k) {
            echo $plus.$do."Nhập Sai Nhập Lại: \033[93m";
        }
    } while ($numch < 1 || $numch >= $k);

    while (true) {

        testInternet();

        $k2++;
        $t = $t + 1;
        $ch = get_link($url_1, $tsm_1);
        $link = explode('"', explode('<th class="align-middle text-center white-space-nowrap id"><a href="', $ch)[$k2])[0];
        if ($link == "") {
            break;
        } else {

            if ($numch == $k2) {
                $data_1 = (explode('"', explode('class="align-middle text-center fs-0 white-space-nowrap action" id="', $ch)[$k2])[0]);
                $tkprin = explode(' ', explode('https://www.tiktok.com/@', $link)[1])[0];
                break;
            }

        }
    }
} else {
    echo $plus . "" . $luc . "Nhập \033[93mid \033[92mTiktok \033[92m: \033[93m";
    $numch = trim(fgets(STDIN));
    while (true) {
        testInternet();
        $k++;
        $t = $t + 1;
        $ch = get_link($url_1, $tsm_1);
        $link = explode('"', explode('<th class="align-middle text-center white-space-nowrap id"><a href="', $ch)[$k])[0];
        if ($link == "") {
            break;
        } else {
            $tk = explode(' ', explode('https://www.tiktok.com/@', $link)[1])[0];

            $id = explode('"', explode('class="align-middle text-center fs-0 white-space-nowrap action" id="', $ch)[$k])[0];

        }

        if ($numch == $tk) {
            $data_1 = explode('"', explode('class="align-middle text-center fs-0 white-space-nowrap action" id="', $ch)[$k])[0];
            $tkprin = explode(' ', explode('https://www.tiktok.com/@', $link)[1])[0];
            break;
        }
    }

}
echo $thanhngang;
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mNhiệm Vụ Tim \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mNhiệm Vụ Follow  \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mChọn Nhiệm Vụ: \033[1;33m";

do {

    $chon = trim(fgets(STDIN));
    if ($chon != "1" && $chon != "2") {
        echo $do."Nhập Sai! Nhập Lại: $vang";
    }

} while ($chon != "1" && $chon != "2");

echo "{$plus}" . $luc . "Nhận Xu Sau Bao Nhiêu Nhiệm Vụ \033[97m(\033[93mNhập 8 Trở Lên\033[97m)".$luc.":\033[93m ";
do {
    $nxu = trim(fgets(STDIN));
    if (!is_numeric($nxu) || $nxu < 8 || $nxu > 40) {
        echo "$do Nhập Sai! Nhập Lại: $vang";
    }
} while (!is_numeric($nxu) || $nxu < 8 || $nxu > 40);

echo "{$plus}" . $luc . "Vui Lòng Nhập Delay:\033[93m ";
$dl = trim(fgets(STDIN));

// echo "" . $plus . "\033[92mKhi Bị Block Like, Follow Hoặc
//         Làm NV không Được Cộng Xu
//    \033[91m[\033[93m1\033[91m] \033[92mTự Động Thoát Tool{$trang}({$vang}đề xuất{$trang})\033[92m.
//    \033[91m[\033[93m2\033[91m] \033[92mVẫn Chạy Tiếp.
// \e[94m┌─[\e[97m\e[42mVui Lòng Chọn \e[0m\e[94m]
// └──╼[ \e[95m=\e[96m>\e[91m>\e[97m> $vang ";
// do {
//     $dienv = trim(fgets(STDIN));
//     if ($dienv != 1 && $dienv != 2) {
//         echo "\033[91mNhập Sai!, Nhập Lại : \033[93m";
//     }
// } while ($dienv != 1 && $dienv != 2);

testInternet();
$data_2 = "iddat=" . $data_1;

$chtt = post($url_2, $tsm_2, $data_2);
if ($chtt == "1") {
  echo $thanhngang;
    echo $luc . " Cấu Hình Thành Công ID:\033[93m $tkprin \n";
    echo $thanhngang;
    sleep(2);
} else {
    echo $plus.$do."Cấu Hình id:$do $data_1 Thất Bại, \033[92mNhập Sai \033[93mid Tiktok \033[92mHoặc
id \033[93m$numch \033[92mChưa Được Thêm Vào Cấu Hình \033[93m{$_SESSION["username"]}\n";
    exit;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
while (true) {
    testInternet();
    if ($chon == "1") {
        $get = get_job("tiktok_like");
        $linklike = $get["data"][0]["link"];
        $idlike = $get["data"][0]["id"];

        $link = explode('?is_from_webapp=1&sender_device=pc', explode('https://www.tiktok.com/@', $linklike)[1])[0];
        if ($linklike == "") {
            echo "\r" . $plus . "Hết Job Rồi                 ";

        } else {
            $vt++;

            $Giojob = date("h:i:s");
            echo "\r\033[1;96m An Orin \033[91m|\033[93m{$vt}\033[91m| \033[96m$Giojob\033[91m | \033[93mTIM\033[91m | \033[93m Thành Công \n";
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {

                echo $plus . "" . $luc . " Đang Chuyển Hướng Tới Tiktok";
                @system('xdg-open https://www.tiktok.com/@' . $link);
            } else {
                echo $plus . "" . $luc . " Đang Chuyển Hướng Tới Tiktok";
                @system('cmd /c start https://www.tiktok.com/@' . $link);
            }

            $idnhan = nhan_3($idlike);
            // $dem = $idnhan["cache"];

            if ($vt % $nxu == 0) {
                for ($m = 2; $m > -1; $m--) {
                    sleep(1);
                    //echo "\r" . $plus . "" . $luc . " Nhận Xu Sau $vang $m $luc Giây Nữa      ";

                }
                $nhan = nhan_2("tiktok_like");
                $xong = $nhan["msg"];
                $xu = get_xu();

                if (explode('thành công ', $xong)[0] == 'Nhận ') {
                    echo "\r";
                    
                    $xujob = $xu - $sodu;
                    $getxu = explode(' xu', explode('Nhận thành công ', $xong)[1])[0];
                    echo $thanhngang;
                    echo "\033[92m Nhận Được: \033[93m+$getxu \033[92mXu \033[91m| \033[92mSố Xu Hiện Tại Là: \033[93m$xu\033[91m \n";
                    echo $thanhngang;
                    if ($xong == "Nhận thành công 0 xu") {
                        echo $plus.$red."Làm NV Không Thành Công, Kiểm Tra Lại Nick!\n";
                        echo "{$plus}" . $luc . "\033[91m[\033[93mEnter\033[91m] \033[92mĐể Chạy Tiếp Tim.\n";
                        echo "{$plus}" . $luc . "\033[92m Nhập\033[91m [\033[93m2\033[91m] \033[92mĐể Chạy NV Follow: \033[93m ";
                        do {
                            $chon = trim(fgets(STDIN));
                            if ($chon != "" && $chon != 2) {
                                echo $plus.$do."Nhập Sai!, Nhập Lại : \033[93m";
                            }
                        } while ($chon != "" && $chon != 2);
                        if ($chon == "") {
                            $chon = 1;
                        }
                        echo $thanhngang;
                    }
                } else {
                    echo $thanhngang;
                    echo "\r \033[91m$xong\n";
                    echo "{$plus}" . $luc . "\033[91m [\033[93mEnter\033[91m] \033[92mĐể Chạy Tiếp Tim.\n";
                    echo "{$plus}" . $luc . "\033[92m Nhập\033[91m [\033[93m2\033[91m] \033[92mĐể Chạy NV Follow: \033[93m ";
                    do {
                        $chon = trim(fgets(STDIN));
                        if ($chon != "" && $chon != 2) {
                            echo "\033[91mNhập Sai!, Nhập Lại: \033[93m";
                        }
                    } while ($chon != "" && $chon != 2);
                    if ($chon == "") {
                        $chon = 1;
                    }
                    line(0);
                }

                if ($dl > 2) {
                    delay($dl - 2);
                }
            } else {
                delay($dl);
            }

        }
    } else { ////////////////////////////////////////////////////////
        $get = get_job("tiktok_follow");
        $linksub = $get["data"][0]["link"];
        $idsub = $get["data"][0]["id"];

        $link = explode(' ', explode('https://www.tiktok.com/@', $linksub)[1])[0];
        if ($link == "") {
            echo "\r" . $plus . "Hết Job Rồi                 ";

        } else {
            $vt++;

            $Giojob = date("h:i:s");
            echo "\r                                                       ";
            echo "\r\033[91m|\033[93m{$vt}\033[91m| \033[96m$Giojob\033[91m | \033[93mFOLLOW\033[91m |\033[93m Thành Công \n";
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                echo $plus . "" . $luc . " Đang Chuyển Hướng Tới Tiktok";
                @system('xdg-open https://www.tiktok.com/@' . $link);
            } else {
                echo $plus . "" . $luc . " Đang Chuyển Hướng Tới Tiktok";
                @system('cmd /c start https://www.tiktok.com/@' . $link);
            }

            $idnhan = nhan_1($idsub, "tiktok_follow", "follow");
            // $dem = $idnhan["cache"];

            if ($vt % $nxu == 0) {

                for ($m = 2; $m > -1; $m--) {
                    sleep(1);
                    //echo "\r" . $plus . "" . $luc . " Nhận Xu Sau $vang $m $luc Giây Nữa      \n";

                }
                $nhan = nhan_2("tiktok_follow");
                $xong = $nhan["msg"];
                $xu = get_xu();

                if (explode('thành công ', $xong)[0] == 'Nhận ') {
                    echo "\r";
                    
                    $xujob = $xu - $sodu;
                    $getxu = explode(' xu', explode('Nhận thành công ', $xong)[1])[0];
                    echo $thanhngang;
                    echo "\033[92m Nhận Được: \033[93m+$getxu \033[92mXu \033[91m| \033[92mSố Xu Hiện Tại Là: \033[93m$xu \n";
                    echo $thanhngang;
                    if ($xong == "Nhận thành công 0 xu") {
                        echo $plus.$red."Làm NV Không Thành Công, Kiểm Tra Lại Nick!\n";
                        echo "{$plus}" . $luc . "\033[91m [\033[93mEnter\033[91m] \033[92mĐể Chạy Tiếp Follow.\033[93m \n";
                        echo "{$plus}" . $luc . "\033[92m Nhập\033[91m [\033[93m1\033[91m] \033[92mĐể Chạy NV Tim: \033[93m ";
                        do {
                            $chon = trim(fgets(STDIN));
                            if ($chon != "" && $chon != 1) {
                                echo "\033[91mNhập Sai!, Nhập Lại : \033[93m";
                            }
                        } while ($chon != "" && $chon != 1);
                        if ($chon == "") {
                            $chon = 2;
                        }
                        echo $thanhngang;
                    }
                } else {
                    echo $thanhngang;
                    echo "\r \033[91m$xong\n";
                    echo "{$plus}" . $luc . "\033[91m[\033[93mEnter\033[91m] \033[92mĐể Chạy Tiếp Follow.\033[93m \n";
                    echo "{$plus}" . $luc . "\033[92m Nhập\033[91m [\033[93m1\033[91m] \033[92mĐể Chạy NV Tim: \033[93m ";
                    do {
                        $chon = trim(fgets(STDIN));
                        if ($chon != "" && $chon != 1) {
                            echo "\033[91mNhập Sai!, Nhập Lại : \033[93m";
                        }
                    } while ($chon != "" && $chon != 1);
                    if ($chon == "") {
                        $chon = 2;
                    }
                    echo $thanhngang;

                }

                if ($dl > 2) {
                    delay($dl - 2);
                }
            } else {
                delay($dl);
            }
        }
    }

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////get job

function get_job($type)
{

    $url = "https://traodoisub.com/ex/" . $type . "/load.php";
    $tsm = array(
        "Host:traodoisub.com",
        "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
        "accept:*/*",
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:cors",
        "sec-fetch-dest:empty",
        "referer:https://traodoisub.com/ex/" . $type . "/",

    );

    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm,
        CURLOPT_ENCODING => true));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);

    return $json;
}

function nhan_1($id, $type, $loai)
{
    $tsm = array(
        "Host:traodoisub.com",
        "content-length:55",
        "accept:*/*",
        "x-requested-with:XMLHttpRequest",
        "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:cors",
        "sec-fetch-dest:empty",
        "referer:https://traodoisub.com/ex/" . $type . "/",

    );
    $url = "https://traodoisub.com/ex/" . $type . "/cache.php";
    $data = "id=" . $id . "&type=" . $loai . "";
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $json;
}
function nhan_2($type)
{
    $tsm = array(
        "Host:traodoisub.com",
        "content-length:18",
        "accept:*/*",
        "x-requested-with:XMLHttpRequest",
        "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:cors",
        "sec-fetch-dest:empty",
        "referer:https://traodoisub.com/ex/" . $type . "/",

    );
    $url = "https://traodoisub.com/ex/" . $type . "/nhantien.php";
    $data = "key=0257272C744254";
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $json;
}

function nhan_3($id)
{
    $tsm = array(
        "Host:traodoisub.com",
        "content-length:53",
        "accept:*/*",
        "x-requested-with:XMLHttpRequest",
        "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:cors",
        "sec-fetch-dest:empty",
        "referer:https://traodoisub.com/ex/tiktok_like/",
    );
    $url = "https://traodoisub.com/ex/tiktok_like/cache.php";
    $data = "id=$id&type=love";
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $json;
}
function get_xu()
{
    $url = "https://traodoisub.com/scr/user.php";
    $head = array("Host: traodoisub.com", "accept: application/json, text/javascript, */*; q=0.01", "x-requested-with: XMLHttpRequest", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://traodoisub.com/home/");
    $ch = curl_init();
    curl_setopt_array($ch,
        array(CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_COOKIEFILE => "cookietdstt.txt",
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_ENCODING => true));
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    $sodu = $json["xu"];
    return $sodu;
}

function testInternet()
{

    while (!$sock = @fsockopen('www.google.com', 80)) {
        $load = "\r\033[91m Vui Lòng Kiểm Tra Kết Nối Internet";
        $string = strlen($load);for ($j = 0; $j <= $string; $j++) {
            echo $load[$j];
            usleep(5000);}
        sleep(1);
        echo "\r                                   ";
        $load = "\r\033[92m Đang Thử Kết Nối Lại...";
        $string = strlen($load);for ($j = 0; $j <= $string; $j++) {
            echo $load[$j];
            usleep(20000);}
        sleep(3);
        echo "\r                                   ";
        $load = "\r\033[92m Đang Thử Kết Nối Lại...";
        $string = strlen($load);for ($j = 0; $j <= $string; $j++) {
            echo $load[$j];
            usleep(20000);}
        sleep(3);
        echo "\r                        ";
    }

}

function delay($delay)
{
    $a = "111000";
    $b = "112000";
    if ($delay == 0) {
        $a = "0";
        $b = "0";
    }

    $plus = "\033[97m~\033[91m[\033[92m●\033[91m] \033[97m➻➤";
    for ($time = $delay; $time > -1; $time--) {
        echo "\r\033[1;93m An Orin\033[1;96m ~>        \033[1;95mL         \033[1;91m[\033[1;93m $time\033[1;91m ]";
        usleep($a);
        echo "\r\033[1;91m An Orin\033[0;93m  ~>       \033[0;96mLO        \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;92m An Orin\033[0;91m   ~>      \033[0;93mLOA       \033[0;91m[\033[0;93m $time\033[0;91m ]  ";
        usleep($a);
        echo "\r\033[1;93m An Orin\033[0;92m    ~>     \033[0;91mLOAD      \033[0;91m[\033[0;93m $time\033[0;91m ]   ";
        usleep($a);
        echo "\r\033[1;94m An Orin\033[0;93m     ~>    \033[0;92mLOADI     \033[0;91m[\033[0;93m $time\033[0;91m ]    ";
        usleep($a);
        echo "\r\033[1;95m An Orin\033[0;94m      ~>   \033[0;93mLOADIN    \033[0;91m[\033[0;93m $time\033[0;91m ]   ";
        usleep($a);
        echo "\r\033[1;96m An Orin\033[0;95m       ~>  \033[0;94mLOADING.  \033[0;91m[\033[0;93m $time\033[0;91m ]  ";
        usleep($a);
        echo "\r\033[1;93m  An Orin\033[0;95m        ~> \033[0;95mLOADING.. \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;91m  An Orin\033[0;95m         ~>\033[0;96mLOADING...\033[0;91m[\033[0;93m $time\033[0;91m ]";
        usleep($b);
    }
}
function cls()
{
    for ($i = 0; $i <= 200; $i++) {
        echo "\n";
    }
    echo "\e[H\e[J";
}