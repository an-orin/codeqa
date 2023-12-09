<?php
error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$xam = "\033[1;90m";
$xnhac = "\033[1;96m";
$do = "\033[1;91m";

$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$baotri = $do." (Bảo trì)";
$thanh_xau= $do."[".$luc."●\033[1;91m] \033[1;97m=> ";
$thanh_dep= $do."[".$luc."●\033[1;91m] \033[1;97m=> ";
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL CHECK XU TDS V1
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────";
    $tool = $do . "[" . $luc . "✔\033[1;31m] \033[1;37m=> " . $luc;
    $daucau2 = $do . "[" . $luc . "✔\033[1;31m] \033[1;37m=> " . $luc;

    $useragent = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
    $thanhngang = "\033[1;97m ══════════════════════════════════════════════════════════════\n";

    $sooo = rand(525, 537) . '.' . rand(0, 37);
    $useragent = "Mozilla/5.0 (Linux; Android " . rand(7, 11) . "; SM-A750GN) AppleWebKit/" . $sooo . " (KHTML, like Gecko) Chrome/98.0.4758.87 Mobile Safari/" . $sooo;

    $khoToken = [];

    while (true) {
        system("clear");
        echo $logo . "\n";

        if (file_exists("Access_token_TDS.txt")) {
            echo $daucau2 . "Bạn Đã Từng Nhập Access_token\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . " Chạy Access_token Đã Nhập\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . " Nhập Thêm Access_token \n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . " Xóa Access_token Cũ Và Nhập Lại \n";
            echo  $luc . "Nhập số: $vang ";
            $nhapso = trim(fgets(STDIN));
            if ($nhapso == '3') {
                unlink("Access_token_TDS.txt");
                $khoToken = [];
            } else if ($nhapso == '2') {
                $khoToken = json_decode(fread(fopen("Access_token_TDS.txt", "r"), filesize("Access_token_TDS.txt")), true);
                unlink("Access_token_TDS.txt");
            } else {
                break;
            }
        }

        if (!file_exists("Access_token_TDS.txt")) {
            system("clear");
            echo $logo . "\n";
            echo $daucau2 . "Tool Check Xu TDS\n";
            echo $daucau2 . "Nhập" . $trang . " Access_token" . $luc . " Trao Đổi Sub Muốn Dừng Ấn" . $trang . " Enter\n";
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
            $k = fopen("Access_token_TDS.txt", "a+");
            fwrite($k, $js);
            fclose($k);
        }
    }


    $khoToken = json_decode(fread(fopen("Access_token_TDS.txt", "r"), filesize("Access_token_TDS.txt")), true);
    $dem_tk = count($khoToken);



    system("clear");
    echo $logo . "\n";
    echo $daucau2 . "Tool Check Xu TDS Vựa Buff\n";
    echo $daucau2 . "Bạn Đã Nhập " . $trang . $dem_tk . $luc . " Access_token\n";
    echo $thanhngang;


    while (true) {
        $dem = 0;
        for ($ii = 0; $ii < count($khoToken); $ii++) {
            $dem++;
            $token = $khoToken[$ii];
            $kq2 = check_Access_token_TDS($token);
            $user = $kq2['data']['user'];
            $xu =  $kq2['data']['xu'];
            $xudie = $kq2['data']['xudie'];
            echo $luc . " Token ".$do . "[" . $vang . $dem . $do . "]".$luc.": " . $trang . $token . "\n";
            echo $luc . " User: " . $trang . $user . $luc . $vang . " - " . $luc . "Xu: " . $trang . tien($xu) . $vang . " - " . $luc . "Xudie: " . $trang . tien($xudie) . $vang . "\n";
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
function check_Access_token_TDS($token)
{
    $kq = file_get_contents('https://traodoisub.com/api/?fields=profile&access_token=' . $token);
    return json_decode($kq, true);
}
function tien($price)
{
    return str_replace(",", ".", number_format($price));
}