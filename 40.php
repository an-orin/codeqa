<?php
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
/***[ Config ]***/
$gioi_han_job = 2;
/***[ USERAGENT ]***/
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";
/***[ Đánh Dấu Bản Quyền ]***/
$thuong = $do."[".$trang."=.=".$do."] ".$trang."=> ";
$tuon = $do."[".$trang."=.=".$do."] ";
$thanh_thang_mau_trang = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1500;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Banner ]***/
date_default_timezone_set('Asia/Ho_Chi_Minh');
error_reporting(0);
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_thang_mau_trang = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
        $_SESSION['load'] = 2000;
        $_SESSION['delay'] = 150000;
} else {
        $_SESSION['load'] = 0;
        $_SESSION['delay'] = 100000;
}
if(!$_SESSION['version']) {
        $_SESSION['version'] = "3.9";
}
/***[ Config ]***/
$job = 8;
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL CHECK XU VIPIG
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
$_SESSION['fck'] = file_exists("VIPIG.txt");
if ($_SESSION['fck'] == '1'){
  unlink("VIPIG.txt");
}
$_SESSION['check'] = file_exists("logVIPIG.txt");
$_SESSION['checklistcc'] = file_exists("ListccVIPIG.txt");
$nhaplaicc = false;
if ($_SESSION['check'] =='1'){
  luachon:
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> ".$xnhac."Vào Tool Luôn".$xnhac." Bấm".$yellow." Enter".$red." |".$xnhac." Đăng Nhập Lại Bấm".$do." Ok:$vang ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='ok' and $_SESSION['nhap'] != 'Ok' and $_SESSION['nhap'] !=''){
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> ".$red."Nhập Sai Vui Lòng Nhập Lại\n";
GOTO luachon;
}
if ($_SESSION['nhap'] =='ok' or $_SESSION['nhap'] =='Ok'){
$my = fopen("logVIPIG.txt", "w+");
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> ".$luc."Tài khoản VIPIG: $trang";
$username =trim(fgets(STDIN));
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> ".$luc."Mật Khẩu VIPIG : $trang";
$password =trim(fgets(STDIN));
$arr = array("username"=> $username, "password"=> $password);
fwrite($my,json_encode($arr));
    $my = file("logVIPIG.txt");
$bb = file_get_contents('logVIPIG.txt');
$cc =json_decode($bb);
$_SESSION['username']= $cc->{"username"};
$_SESSION['password']= $cc->{"password"};
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("logVIPIG.txt");
$cc =json_decode($bb);
$_SESSION['username']= $cc->{"username"};
$_SESSION['password']= $cc->{"password"};
}
} else {
  login:
$my = fopen("logVIPIG.txt","w+");
echo $thuong.$luc."Tài khoản VIPIG : $trang";
$_SESSION["username"]=trim(fgets(STDIN));
echo $thuong.$luc."Mật Khẩu VIPIG : $trang";
$_SESSION['password']=trim(fgets(STDIN));
$arr = array("username"=> $_SESSION["username"], "password"=> $_SESSION['password']);
fwrite($my,json_encode($arr));
}
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$source = getcookieVIPIG($user,$pass,$useragent);
$sou= strlen($source);
if ($sou < 10 ){
  echo $thuong.$luc."Đăng nhập VIPIG thành công ";
  echo $thanhngang;
  // get xu
  $url = "https://vipig.net/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "VIPIG.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
}else{
	echo $thuong.$red."Sai Tài Khoản hoặc Mật Khẩu\n";
	 GOTO login;
}

  choosetr:
if ($_SESSION['nhapcc'] !='ok' and $_SESSION['nhapcc'] !=''){
  @system('ListccVIPIG.txt');
echo $thuong.$red."Nhập Sai Vui Lòng Nhập Lại\n";
GOTO choosetr;
}else if($_SESSION['nhapcc'] ==''){
	$mangcookie =[];
	$listccdaluu = explode("\n",file_get_contents("ListccVIPIG.txt"));
	for($i=0;$i<count($listccdaluu); $i++){
		$access = cookie($listccdaluu[$i],$useragent);
		$configdata = json_decode(trim(explode(';</script>',explode('window._sharedData = ', $access)[1])[0]),true);
		if ($configdata !== null && $configdata['config']['viewer'] !== null)
		{
				array_push($mangcookie,$listccdaluu[$i]);

		}
	}
	$luong = count($mangcookie);
}else if($_SESSION['nhapcc'] =='ok'){
	$nhaplaicc = true;
}
	$nhaplaicc = true;


@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $thuong.$luc."Tài Khoản VIPIG: ".$xnhac.$user."\n";
echo $thuong.$luc."Số Nick Đang Chạy Là: ".$xnhac.$luong."\n";
echo $thuong.$luc."Số Xu Hiện Là: ".$xnhac.$xu." Xu\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
exit;
////if($luong==1){
  echo $thuong.$luc."Hết nhiệm vụ hoặc lỗi thì dừng bao lâu?:$vang ";
  $dl=trim(fgets(STDIN));
  $doi = 99999;


/////$listnv = [];
 ///Job:
//////  echo $thuong.$luc."Chế độ Follow$pink (".$trang."on/".$do."off$pink)".$luc.": $vang";
  $chon1=trim(fgets(STDIN));
  if ($chon1 == 'on' or $chon1 == 'On' or $chon1 == 'ON'){
    array_push($listnv,'sub');
  }
  if (count($listnv) == 0){
    echo $thuong.$red."Chọn tối thiểu 1 loại Job !\n";
  }
  Time_nv:
  echo $thuong.$luc."Thời Gian Delay Tối Thiểu ".$pink."(".$do."30s".$pink.")".$luc.": $vang";
  $timedelay=trim(fgets(STDIN));
  if($timedelay < 30)
    {
      echo $thuong.$red."Thời Gian không hợp lệ, tối thiểu 30s !\n";
      GOTO Time_nv;
        }
       
$q=1;
while (0<1){
for($l=0;$l<count($mangcookie);$l++){
$cookie = $mangcookie[$l];
$access = cookie($cookie,$useragent);
$configdata = json_decode(trim(explode(';</script>',explode('window._sharedData = ', $access)[1])[0]),true);
if ($configdata !== null && $configdata['config']['viewer'] !== null)
{
  $idfb = $configdata['config']['viewerId'];
  $tenfb = $configdata['config']['viewer']['username'];
  $h = datnick($idfb,$useragent);
}else{
  echo "                                     \r";
  echo $thuong.$red."Cookie Die - ĐANG ĐỔI NICK\n";
  array_splice($mangcookie,$l,1);
}

if ($h == '1'){
echo "                                                    \r";
echo $thanhngang;
echo $luc." Đang Cấu Hình Nick Instagram: \033[1;36m$tenfb\n";
echo $thanhngang;
        $i=1;
        $max=0;
 $rand = $listnv[array_rand($listnv,1)];

  if ($rand == 'sub'){
    $loai = 'sub';
    $list = getnv($loai,$useragent);
    $check = count($list);
    if($check <4){
      echo "                                                      \r";
     echo $thuong.$red."Ko đủ 5 Nhiệm Vụ Follow\r";
	 if(count($mangcookie)==1){
          echo "                                                      \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
             echo "\r";
           }
        }
    }else{
	$churk_list = array_chunk($list,5);
	if(count($churk_list[count($churk_list) - 1]) <4){
	$rmd = array_pop($churk_list);
	}
	foreach ($churk_list  as $listid) {
	$idnhanxu ='';
    foreach ($listid  as $id) {

    $id = $id[("soID")];
	$idnhanxu .= $id.",";
	$csf = explode(';',explode('csrftoken=', $cookie)[1])[0];
	$chayfl = follow($id,$cookie,$csf);
	$max=$max+1;
    $g = json_decode($chayfl,true);
    if($g == null || $g['status'] !== 'ok'){
	echo "\r";
    echo "                                              \r";
	echo $thuong.$red."FOLLOW LỖI\n";	
	if(count($mangcookie)==1){
          echo "                                                      \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
             echo "\r";
           }
    }else if(count($mangcookie) > 1){
		echo "\r";
    echo "                                              \r";
	echo $thuong.$blue."ĐANG ĐỔI NICK: $vang\n";
		 break 2;
	}
	}else{
    echo "\r";
    echo "                                              \r";  
	echo "\033[1;93m[\033[1;93m".$dem++."\033[1;93m]\033[1;91m ● \033[1;96m".date("H:i")."\033[1;91m ●\033[1;93m Follow Thành Công \033[1;91m● \033[1;97m".$id."\033[1;91m ●\033[1;92m +600 Xu\e[0m\n";
	}
	loadtime($timedelay);
	
    } // foreach
	$ck = hoanthanhsub(rtrim($idnhanxu,","));
	
	$xu = getxu();
      echo "\r";
      echo "                                              \r";
      

	  if ($max >= $doi){
           $max=0;
           break;
          }
	}
  }
  }
  


}else{
	//echo $h;
}
}
}
if (count($mangcookie)==1 && empty($dl)){
  echo $thuong.$blue."Dừng Thời Gian: ";
  $dl=trim(fgets(STDIN));
}
if (count($mangcookie)==0){
unlink("ListccVIPIG.txt");
echo $thuong.$red."Tất Cả Cookie Đều Die\n";



}
// }



function cookie($cookie,$useragent){
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: www.instagram.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT,$useragent );
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);

return $access;
}
function follow($id,$cookie,$csrftoken = null){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/friendships/'.$id.'/follow/');
	$headers = [
    'x-requested-with: XMLHttpRequest',
    'x-ig-www-claim: hmac.AR2KtRYzNVfelijR0GD6-VLJU3G-vRVGUezuXpjzaQ5m4MmZ',
    'x-ig-app-id: 936619743392459',
    'x-csrftoken: '.$csrftoken.'',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36',
    'x-instagram-ajax: bd344c4b4f36',
    'referer: https://www.instagram.com/'
];
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS,array());
	$access = curl_exec($ch);
	curl_close($ch);
	return $access;
}

function loadtime($time){
        for ( $x = $time; $x--; $x ) {
echo "                                                      \r";
echo "\r\033[1;92mLàm Nhiệm Vụ Tiếp Theo Sau:\033[1;93m $x\033[1;93m Giây ";
usleep(133333);
echo $do."Loading";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ● ";
usleep(133333);
echo "$res  \r";
}
}

function getcookieVIPIG($user,$pass,$useragent){
  $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "VIPIG.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login =array('username' => $user,'password' => $pass,'submit' => 'ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "VIPIG.txt");
$source=curl_exec($ch);
curl_close($ch);
return $source;
}
function datnick($idfb,$useragent){
$dat=http_build_query(array('iddat[]'=> $idfb));
$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL,'https://vipig.net/cauhinh/datnick.php');
	$head[]='Host: vipig.net';
	$head[]='content-length: '.strlen($dat);
	$head[]='accept: */*';
	$head[]='origin: https://vipig.net';
	$head[]='x-requested-with: XMLHttpRequest';
	$head[]='save-data: on';
	$head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
	$head[]='referer: https://vipig.net/cauhinh/index.php';
	$head[]='accept-language: vi-VN, vi;q=0.9,fr-FR;q=0.8,fr;q=0.7, en-US;q=0.6,en;q=0.5,zh-CN;q=0.4.zh;q=0.3';
	$head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$dat);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"VIPIG.txt");
	$h = curl_exec($ch);
	curl_close($ch);
	return $h;
}

function getnv($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://vipig.net/kiemtien/'.$loai.'cheo/getpost.php');
 $head[]='Host: vipig.net';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36';
 $head[]='referer: https://vipig.net/kiemtien/'.$loai.'cheo';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "VIPIG.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}

function getxu(){
  $url = "https://vipig.net/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "VIPIG.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
  return $xu; 
}

function hoanthanhsub($id)
{
    $url  = "https://vipig.net/kiemtien/subcheo/nhantien2.php";
    $data= ('id=').$id;
    $head = array(
        "Host: vipig.net",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://vipig.net",
        "referer: https://vipig.net/kiemtien/subcheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "VIPIG.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}