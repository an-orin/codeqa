<?php
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
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL AUTO ĐÀO PROXY V1
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
echo $lime."\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số Lượng Proxy Cần Lấy : $BWhite";
$sl =trim(fgets(STDIN));
usleep(25000); 
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
while(true){ 
$header = array( 
"Host:pubproxy.com",
"Upgrade-Insecure-Requests:1",
"User-Agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.1.4692.115 Mobile Safari/537.36",
);
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'http://pubproxy.com/api/proxy');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr); 

$id = explode('ip":"', $mr2)[1];
$id = explode('"', $id)[0];
$so++;
echo $BCyan."[$so]$BRed 🌺$BGreen Proxy $BRed 🌺$BGreen $id \n"; echo "\r                                           \r                       \r";
$f = fopen("proxy.txt","a");
$luu = fwrite($f,"\n$id");
fclose($f);
if($id == ''){
echo $BRed." Đã bị Block Thử Lại Sau Ít Phút \n"; die;
}
delay(10);
if($so == $sl){
echo $BGreen."Thành Công Lưu Proxy Tại $BYellow proxy.txt \n"; die;
}
} // vòng lặp
function delay($delay){
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
echo "\r"; 
}
function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);
} echo "\n";
}