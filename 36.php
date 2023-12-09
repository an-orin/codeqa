<?php
/****
Bản Quyền           :   An Orin
Loại Code.          :   TOOL SPAM TIN NHẮN TELEGRAM 
Ngôn Ngữ Lập Trình. :   PHP
Facebook            :   https:www.facebook.com/anorintool
SĐT - MOMO          :   0777374145
_____________________________________________________________________________

- Tool By: An Orin 
- API Tool By: An Orin
- Sửa Gì Thì Sửa, Không Xóa Bản Quyền Để Tôn Trọng Tác Giả!!

***/
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$dp_tool = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";

    $thanh_xau= "\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
    $thanh_dep= "\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
    $thanhngang ="\n\033[1;32m ══════════════════════════════════════════════════════════════\n";
    $thanhngang1 ="\033[1;32m ══════════════════════════════════════════════════════════════\n";
    $daucau = "\n\033[1;31m [\033[1;37m✅\033[1;31m] \033[1;37m";
    $daucauc = "\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SPAM TIN NHẮN TELEGRAM 
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
/***[ Clear + Thông Số Admin ]***/
$gioHienTai = date('H');
if ($gioHienTai % 2 == 0) {
} else {
    die($dp_tool.$do."Tool Hiện Đang Đóng Vui Lòng Quay Lại Sau 1 Giờ Nữa!! ");
}
echo $dp_tool.$luc."Nhập Nội Dung Muốn Spam".$trang.":$vang ";
$sdt_spam = trim(fgets(STDIN));
    echo $dp_tool.$luc."Vui Lòng Nhập Delay$trang:$vang ";
    $delay = trim(fgets(STDIN));
    echo $dp_tool.$luc."Spam Bao Nhiêu Lần Thì Dừng Tool$trang:$vang ";
    $stop = trim(fgets(STDIN));
    echo"\033[1;31m────────────────────────────────────────────────────────────\n";
    echo "\r\033[1;33mĐang Spam Vui Lòng Đợi...!";
    while (true) {
    $json = json_decode(file_get_contents("https://api.telegram.org/bot5999551394:AAEjkbc_pa4dn73r8FnkcPcSmOMuCG5_Co0/sendMessage?chat_id=-1001929402777&text=".$sdt_spam), true);
    $dem++;
echo "\r\033[1;31m[\033[1;33m".$dem."\033[1;31m] \033[1;31m| \033[1;36m".date("H:i:s")." \033[1;31m| \033[1;33mSPAM THÀNH CÔNG \033[1;31m| \033[1;37m".$sdt_spam." \033[1;31m| \033[1;35mTELEGRAM\n";
if ($dem >= $stop ){ echo $xnhac."Đã Spam Thành Công \033[1;37m".$stop." \033[1;36mLần \n"; exit; }
delay($delay);
}


/***[ function ]***/
function delay($delay){
/* Copyright © 2023 - 2024 : An Orin */
for($time=$delay;$time>-1;$time--){ 
echo "\r"; 
        echo "\r\033[1;36m   >\033[1;31m[\033[1;31m|\033[1;37m]\033[1;36m< \033[1;30m~\033[1;33m>      \033[1;33mL    \033[1;31m| \033[1;33m$time \033[1;31m|        ";
        usleep(150000);
        echo "\r"; 
        echo "\r\033[1;36m   >\033[1;37m[\033[1;31m/\033[1;37m]\033[1;36m<  \033[1;31m~\033[1;33m>     \033[1;35mLO   \033[1;31m| \033[1;33m$time \033[1;31m|        ";
        usleep(150000);
        echo "\r"; 
        echo "\r\033[1;36m   >\033[1;37m[\033[1;31m-\033[1;37m]\033[1;36m<   \033[1;32m~\033[1;33m>    \033[1;36mLOA  \033[1;31m| \033[1;33m$time \033[1;31m| \033[1;31m●      ";
        usleep(150000);
        echo "\r"; 
        echo "\r\033[1;36m   >\033[1;37m[\033[1;31m\]\033[1;36m<    ~\033[1;33m>   \033[1;37mLOAD \033[1;31m| \033[1;33m$time \033[1;31m| ●\033[1;33m●     ";
        usleep(150000);
        echo "\r"; 
        echo "\r\033[1;36m   >\033[1;37m[\033[1;31m|\033[1;37m]\033[1;36m<     \033[1;33m~\033[1;33m>  \033[1;32mLOAD \033[1;31m| \033[1;33m$time \033[1;31m| ●●\033[1;35m●    ";
        usleep(150000);
        echo "\r"; 
        echo "\r\033[1;36m   >\033[1;37m[\033[1;31m-\033[1;37m]\033[1;36m<      \033[1;34m~\033[1;33m> \033[1;33mLOAD \033[1;31m| \033[1;33m$time \033[1;31m| ●●\033[1;32m●●   ";
        usleep(150000);
        echo "\r"; 
        echo "\r\033[1;36m   >\033[1;37m[\033[1;31m+\033[1;37m]\033[1;36m<       \033[1;35m~\033[1;33m>\033[1;36mLOAD \033[1;31m| \033[1;33m$time \033[1;31m| ●●●●\033[1;36m●  ";
        usleep(150000);
}
echo "\r\e[1;95m    ✨An Orin✨                       \r";
}
function spammomo($banner, $dp_tool, $thanh_thang_mau_trang){
    /* Copyright © 2022 - 2023 : An Orin */
    don_rac();
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}

function don_rac(){
  system('clear');
}