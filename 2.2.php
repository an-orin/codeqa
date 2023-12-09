<?php
error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$luc = "\033[1;92m";
$do = "\033[1;31m";
$vang = "\033[1;93m";
$trang = "\033[1;97m";
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL CHECK TTC V1
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────";
    $daucau2 = $do . "[" . $luc . "✔\033[1;31m] \033[1;37m=> " . $luc;
    $thanhngang = "\033[1;97m ══════════════════════════════════════════════════════════════\n";
    $khoToken = [];
    while (true) {
        system("clear");
        echo $logo . "\n";
        if (file_exists("Access_token_TTC.txt")) {
            echo $daucau2 . "Bạn Đã Từng Nhập Access_token\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . " Chạy Access_token Đã Nhập\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . " Nhập Thêm Access_token \n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . " Xóa Access_token Cũ Và Nhập Lại \n";
            echo  $luc . "Nhập số: $vang ";
            $nhapso = trim(fgets(STDIN));
            if ($nhapso == '3') {
                unlink("Access_token_TTC.txt");
                $khoToken = [];
            } else if ($nhapso == '2') {
                $khoToken = json_decode(fread(fopen("Access_token_TTC.txt", "r"), filesize("Access_token_TTC.txt")), true);
                unlink("Access_token_TTC.txt");
            } else {
                break;
            }
        }
        if (!file_exists("Access_token_TTC.txt")) {
            system("clear");
            echo $logo . "\n";
            echo $daucau2 . "Tool Check Xu TTC\n";
            echo $daucau2 . "Nhập" . $trang . " Access_token" . $luc . " Tương Tác Chéo Muốn Dừng Ấn" . $trang . " Enter\n";
            $dem_tds = 0;
            while (true) {
                $dem_tds++;
                echo $daucau2 . "Nhập" . $trang . " Access_token" . $luc . " Thứ " . $trang . $dem_tds . $luc . ":" . $vang . " ";
                $nhap_tk = trim(fgets(STDIN));
                if (strlen($nhap_tk) < 10) {
                    break;
                }
                array_push($khoToken, $nhap_tk);
            }
            $js = json_encode($khoToken);
            $k = fopen("Access_token_TTC.txt", "a+");
            fwrite($k, $js);
            fclose($k);
        }
    }
    $khoToken = json_decode(fread(fopen("Access_token_TTC.txt", "r"), filesize("Access_token_TTC.txt")), true);
    $dem_tk = count($khoToken);
    system("clear");
    echo $logo . "\n";
    echo $daucau2 . "Tool Check Xu TTC Vựa Buff\n";
    echo $daucau2 . "Bạn Đã Nhập " . $trang . $dem_tk . $luc . " Access_token\n";
    echo $thanhngang;


    while (true) {
        $dem = 0;
        for ($ii = 0; $ii < count($khoToken); $ii++) {
            $dem++;
            $token = $khoToken[$ii];
            $kq2 = [];
            $kq2 = check_Access_token_TTC($token);
            $user = $kq2['data']['user'];
            $xu =  $kq2['data']['sodu'];
            echo $luc . " Token " . $do . "[" . $vang . $dem . $do . "]" . $luc . ": " . $trang . $token . "\n";
            echo $luc . " User: " . $trang . $user . $luc . $vang . " - " . $luc . "Xu: " . $trang . tien($xu) . "\n";
            echo "\033[1;93m --------------------------------------------------------------\n";
        }
        echo $thanhngang;
        echo $daucau2 . "Đã Check Tất Cả Access_token\n";
        echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . " Check Lại Access_token\n";
        echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . " Dừng Tool \n";
        echo  $luc . "Nhập số: $vang ";
        $nhapdi = trim(fgets(STDIN));
        if ($nhapdi == 2) {
            die();
        }
    }
function check_Access_token_TTC($token)
{
    $sooo = rand(525, 537) . '.' . rand(0, 37);
    $useragent = "Mozilla/5.0 (Linux; Android " . rand(7, 11) . "; SM-A750GN) AppleWebKit/" . $sooo . " (KHTML, like Gecko) Chrome/98.0.4758.87 Mobile Safari/" . $sooo;
    $dataPost = array(
        "access_token" => $token,
        "user-agent" => $useragent
    );
    $ch = curl_init('https://tuongtaccheo.com/logintoken.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}
function tien($price)
{
    return str_replace(",", ".", number_format($price));
}