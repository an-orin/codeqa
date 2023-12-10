error_reporting(0);
/***[ Color ]***/
$nau= "\e[38;5;94m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$xnhac= "\033[1;96m";
$luc="\033[1;92m";
$hong="\033[1;95m";
$white= "\033[0;37m";
$green="\033[1;32m";
$do="\033[1;31m";
$vang="\033[1;93m";
$res="\033[0m";
$nau= "\e[38;5;24m";
@system('clear');
/***[ Đánh Dấu Bản Quyền ]***/
$plus = "\033[1;97m~\033[1;37m[".$nau."✙\033[1;37m] \033[1;37m➩ ";
$duytool2 = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> " . $luc;
$thanh_dep = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> " . $luc;
$thanhngang = "\033[1;37m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ \n";
$thanhngang1 = "\033[1;37m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ \n";
$daucau = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> " . $luc;
$daucauc = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> " . $luc;
$khotoken=[];
{
$khond=[];
$khotoken=[];
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SPAM CMT PRO5
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
//echo $thanh_xau."Bạn Muốn Nhập Bao Nhiêu Token Facebook Pro 5 : $vang";
	$sock = 999;
	echo $duytool2.$xnhac."Có Thể Dùng Token FB Hoặc Token PRO5 - PAGE \n";
while ($a < $sock){$a++;
print "$duytool2\033[1;32mNhập Token Thứ $trang$a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khotoken,$nhapck); 
}
for($i = 0; $i < strlen($thanhchay); $i++){print $thanhchay[$i];usleep(1000);}
print "$duytool2 \033[1;32mNhập Nội Dung Comment : $vang";
$nhapnd = trim(fgets(STDIN));
array_push($khond,$nhapnd); 
}
$soacc=count($khotoken);
// Thông Tin 
@system('clear');
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
print "$duytool2 \033[1;32mNhập Bài Viết ID Cần Spam: $vang";
	$id=trim(fgets(STDIN));
print "$duytool2 \033[1;32mNhập Delay : $vang";
	$_SESSION['delay'] = trim(fgets(STDIN));
print "$duytool2 \033[1;32mSau Bao Nhiêu Nhiệm Vụ Thì Chuyển Acc : $vang";
$yyy=trim(fgets(STDIN));
print "$duytool2 \033[1;32mNhập Số Lần Spam : $vang";
$i=trim(fgets(STDIN));
//start
while (true){
for($xz=0;$xz<count($khotoken);$xz++){
$access_token = $khotoken[$xz];
$msg = $khond[$xz];
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
for($i = 0; $i < strlen($thanhchay); $i++){print $thanhchay[$i];usleep(1000);}
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo"\033[1;32mĐang Chạy ID : \033[1;33m".$idfb."\033[1;31m \033[1;32mTên Page: \033[1;33m".$tenfb."\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
for($i = 0; $i < strlen($thanhchay); $i++){print $thanhchay[$i];usleep(1000);}
$spam=0;
while (true){
if ($spam == 1) {break; }
//lÃ m nv
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    $g =json_decode($access);
// check lá»—i token
   if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break; }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
$spam = 1; break;}
date_default_timezone_set('Asia/Ho_Chi_Minh');
$t = date('H:i');
$dem++;
   	$rd = rand(1, 7);
         $tt = " \033[1;31m[\033[1;37m".$dem."\033[1;31m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;32m SPAM COMMENT ID \033[1;31m | \033[1;37m".$id."\n";
          for($i=1;$i<(strlen($tt)+1);$i++){print $tt[$i];
  usleep(1500);
       }
loadtime('delay');
if($dem % $yyy == 0){$spam = 1; break; }
if ($dem == $i ){ echo $luc." Đã Hoàn Thành Comment Thành Công $id \n"; exit; }}}} //while lá»›n
function chayspamshare($a) {
for ($x = 0; $x <= $a; $x++) {
echo "\e[1;96m"."=";usleep(5000);
echo "\e[1;96m"."=";usleep(5000);}echo "\n";}
function delayspamshare($delay) {
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$res="\033[0m";
$tim="\033[0;35m";
$red="\033[0;31m";
$green="\033[0;32m";
$yellow="\033[0;33m";
$white= "\033[0;37m";
}
	function loadtime($loai)
{
        for ( $x = $_SESSION[''.$loai.'']; $x--; $x ) {
        print "\033[1;36m   \033[1;31m>[\033[0;36m|\033[1;31m]<              \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m      \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m|\033[1;31m]< \033[0;36mV            \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m\\\033[1;31m]< \033[0;36mVu           \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m\\\033[1;31m]< \033[0;36mVui          \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● \r";
        usleep( 50000 );  
        print "\033[1;36m   \033[1;31m>[\033[0;36m-\033[1;31m]< \033[0;36mVui          \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● \r";
        usleep( 100000 );   
        print "\033[1;36m   \033[1;31m>[\033[0;36m-\033[1;31m]< \033[0;36mVui          \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m/\033[1;31m]< \033[0;36mVui L        \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m/\033[1;31m]< \033[0;36mVui L        \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m|\033[1;31m]< \033[0;36mVui Lò       \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m|\033[1;31m]< \033[0;36mVui Lòn      \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m\\\033[1;31m]< \033[0;36mVui Lòn      \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m\\\033[1;31m]< \033[0;36mVui Lòng     \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ● \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m-\033[1;31m]< \033[0;36mVui Lòng Đ   \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ● \r";
        usleep( 50000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m-\033[1;31m]< \033[0;36mVui Lòng Đợ  \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ●  \r";
        usleep( 100000 );
        print "\033[1;36m   \033[1;31m>[\033[0;36m/\033[1;31m]< \033[0;36mVui Lòng Đợi \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;36m ● ● ●  \r";
        usleep( 50000 );
        print "\r                                          \r";
                }
}