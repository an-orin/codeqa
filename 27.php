error_reporting(0);
system('clear');
$do="\033[1;31m";
$xl="\033[1;32m";
$vang="\033[1;33m";
$xn="\033[1;34m";
$hong="\033[1;35m";
$nau="\033[1;36m";
$den= "\e[1;47;30m";
$xn2= "\033[1;96m";
$do2="\033[1;91m";
$luc="\033[1;92m";
$vang3="\033[1;93m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$tim="\033[0;35m";
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TUBEROCKET
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
if(file_exists("TokenTubeRocket.php")!=true){
$tk=readline("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Token Tuberocket: ");
$file=fopen("TokenTubeRocket.php","w");
fwrite($file,"<?php\n");
fwrite($file,"$"."token='$tk';\n");
fclose($file);
}
include("TokenTubeRocket.php");
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mĐã lưu Token Tuberocket vào file: \033[1;33mTokenTubeRocket.php\n";
sleep(1);
system('clear');
$url = "http://mutupipe.westus2.cloudapp.azure.com:3000/api/version-check";
$head = array(
  "Host:mutupipe.westus2.cloudapp.azure.com:3000",
  "token:$token",
  "User-Agent:okhttp/3.12.0",
  "Content-Type:application/json; charset=utf-8",
  );
  $mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "3000",
  CURLOPT_URL => "http://mutupipe.westus2.cloudapp.azure.com:3000/api/member",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$ten = explode('"',explode('email":"',$mr2)[1])[0];
$coin = explode(',',explode('coin":',$mr2)[1])[0];
//////////////
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mtên tài khoản: \033[1;33m$ten\n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32msố coin: \033[1;33m$coin\n";
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
while(true){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "3000",
  CURLOPT_URL => "http://mutupipe.westus2.cloudapp.azure.com:3000/api/video",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$sai = explode('"',explode('"retMessage":"',$mr2)[1])[0];
if($sai =="Token Invalid"){
  echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;31mToken die vui lòng xóa file TokenTubeRocket.php xong thử lại\n";
  exit;
}
$id = explode('videoId":"', $mr2)[1];
$id = explode('"', $id)[0];
$time = explode('playSecond":', $mr2)[1];
$time = explode('}', $time)[0];
for ($time=$time;$time>-1;$time--){
 echo "{$xn}video{$do} còn $time{$luc} giây{$xn} [|] 😋\r";
usleep(250000);
echo "{$do}video{$xn} còn $time{$vang} giây{$do} [/] 😘\r";
usleep(250000);
echo "{$vang}video{$luc} còn $time{$do} giây{$vang} [—] 😆\r";
usleep(250000);
echo "{$luc}video{$vang} còn $time{$xn} giây{$luc} [\] 😎 \r";
usleep(250000);
echo "\r";
}
///////////nhan
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "3000",
  CURLOPT_URL => "http://mutupipe.westus2.cloudapp.azure.com:3000/api/video",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_POSTFIELDS => '{"id":"'.$id.'","playCount":0,"playSecond":0,"boost":0,"status":""}',
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$bao = explode('retMessage":"', $mr2)[1];
$bao = explode('"', $bao)[0];
//////
$nhan = explode('"coin":', $mr2)[1];
$nhan = explode('}', $nhan)[0];
$so++;
$t = date('H:i:s');
echo"\033[1;31m[\033[1;33m$so\033[1;31m] \033[1;31m| \033[1;36m$t \033[1;31m| \033[1;33mXEM VIDEO \033[1;31m| \033[1;37m$nhan \033[1;31m| \n";
}