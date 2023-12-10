error_reporting(1);
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$BGreen="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
@system('clear');
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.51 Mobile Safari/537.36";
@system('clear');
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL CHECK XU TDS
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
echo $logo;
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Tài Khoản : $BWhite";
$tk =trim(fgets(STDIN));
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Mật Khẩu : $BWhite";
$mk =trim(fgets(STDIN));
@system('clear');
echo $logo;
// login
$header = array( 
'accept:application/json, text/javascript, */*; q=0.01',
'accept-language:en-US,en;q=0.9',
'connection:keep-alive',
'content-type:application/x-www-form-urlencoded; charset=UTF-8',
'host:traodoisub.com',
'origin:https://traodoisub.com',
'referer: https://traodoisub.com/',
'sec-ch-ua: "Google Chrome";v="105", "Not)A;Brand";v="8", "Chromium";v="105"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36',
'x-requested-with:XMLHttpRequest',
);
$data = 'username='.$tk.'&password='.$mk.'';
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEJAR, 'file.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr); 

// check 
$header = array( 
'accept:application/json, text/javascript, */*; q=0.01',
'accept-language:en-US,en;q=0.9',
'connection:keep-alive',
'content-type:application/x-www-form-urlencoded; charset=UTF-8',
'host:traodoisub.com',
'referer: https://traodoisub.com/view/setting/',
'sec-ch-ua: "Google Chrome";v="105", "Not)A;Brand";v="8", "Chromium";v="105"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36',
'x-requested-with:XMLHttpRequest',
);
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/view/setting/load.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr); 

$xu = explode('xu":"', $mr2)[1];
$xu = explode('"', $xu)[0];

$name = explode('user":"', $mr2)[1];
$name = explode('"', $name)[0];

$tk = explode('tokentds":"', $mr2)[1];
$tk = explode('"', $tk)[0];

$so++;
echo $BCyan."[$so]$BRed ★$BGreen Tên Nick $BRed ★$BGreen $name $BRed ★$BGreen Xu $BRed ★$BGreen $xu $BRed ★$BGreen Token $BRed ★$BGreen $tk \n";

function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);
} echo "\n";
}