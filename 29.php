error_reporting(0);
session_start();
system ('clear');
$xnhac = "\033[1;96m"; 
$den = "\033[1;90m";
$luc = "\033[1;92m"; 
$vang = "\033[1;93m"; 
$xduong = "\033[1;94m"; 
$hong = "\033[1;95m"; 
$trang = "\033[1;97m"; 
$do = "\033[1;91m"; 
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL RANDOM PASSWORD
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
$daucau = $do."[".$trang ."-_-".$do."] ".$trang."=> ";
function random_password($length, $mode) {
    $lowercase_chars = str_split('abcdefghijklmnopqrstuvwxyz');
    $uppercase_chars = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $number_chars = str_split('0123456789');
    $symbol_chars = str_split('~!@#$%^&*()_+-={}[]|\:;"<>,.?/');

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        switch ($mode) {
            case 1:
                $password .= $lowercase_chars[array_rand($lowercase_chars)];
                break;
            case 2:
                $password .= $uppercase_chars[array_rand($uppercase_chars)];
                break;
            case 3:
                $password .= $number_chars[array_rand($number_chars)];
                break;
            case 4:
                $password .= $symbol_chars[array_rand($symbol_chars)];
                break;
            case 5:
                $random_mode = rand(1, 4);
                switch ($random_mode) {
                    case 1:
                        $password .= $lowercase_chars[array_rand($lowercase_chars)];
                        break;
                    case 2:
                        $password .= $uppercase_chars[array_rand($uppercase_chars)];
                        break;
                    case 3:
                        $password .= $number_chars[array_rand($number_chars)];
                        break;
                    case 4:
                        $password .= $symbol_chars[array_rand($symbol_chars)];
                        break;
                }
                break;
            default:
                return 'Vui Lòng Chọn Lại';
        }
    }

    return $password;
}
echo $logo;
while(true){
echo $daucau.$luc."Nhập số lượng kí tự muốn random: $vang";
$soluong = trim(fgets(STDIN));
$length = $soluong;
echo $daucau.$luc."Nhập ".$vang."[".$do."1".$vang."]".$luc." để random chữ thường \n";
echo $daucau.$luc."Nhập ".$vang."[".$do."2".$vang."]".$luc." để random chữ hoa \n";
echo $daucau.$luc."Nhập ".$vang."[".$do."3".$vang."]".$luc." để random số \n";
echo $daucau.$luc."Nhập ".$vang."[".$do."4".$vang."]".$luc." để random kí tự \n";
echo $daucau.$luc."Nhập ".$vang."[".$do."5".$vang."]".$luc." để random tất cả \n";
echo $daucau.$xnhac."Mời lụa chọn: $vang";
$chatluong = trim(fgets(STDIN));
$mode = $chatluong;

echo $daucau.$luc."Password là:  $vang" . random_password($length, $mode)."\n";}