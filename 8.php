error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$do="\033[1;91m";
$den="\033[1;33m";
$tim="\033[1;34m";
$luc="\033[1;92m";
$trang="\033[1;97m";
$vang = "\033[1;93m";
$hong = "\033[1;95m";
$xnhac = "\033[1;36m";
$xduong = "\033[1;96m";
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_dep = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$thanh_xau = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 2000;
} else {
	$_SESSION['load'] = 0;
}
/***[ Banner ]***/
$banner= "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL VIPIG
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────";
logofull($banner);
echo "\n";
$listnv = [];
while (true){
if (file_exists("configvipig.txt")){
	$_SESSION['token'] = fread(fopen("configvipig.txt", "r"), filesize("configvipig.txt"));
	$login = logintoken();
	echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."1".$vang."] ".$luc."Giữ Lại Tài Khoản ".$vang.$_SESSION['user']."\n";
	echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."2".$vang."] ".$luc."Nhập Access_Token VIPIG Mới \n";
	echo $thanh_dep.$luc."Nhập ".$trang."===>: $vang";
    	$chon_tk = trim(fgets(STDIN));
    if ($chon_tk == "2") {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
			@system("rm configvipig.txt");
		} else {
			@system("del configvipig.txt");
		}
        echo "\033[1;31m────────────────────────────────────────────────────────────\n";
	} else if ($chon_tk == "1") {
    } else {
		echo $do." Lựa chọn không xác định !!!\n"; 
		 echo "\033[1;31m────────────────────────────────────────────────────────────\n";continue;
    }
}
if(!file_exists("configvipig.txt")){
echo $thanh_dep.$luc."Nhập Access_Token VIPIG: $vang";
	$tokenacc = trim(fgets(STDIN));
$file = fopen("configvipig.txt", "a+");
fwrite($file, ''.$tokenacc);
fclose($file);
}
$_SESSION['token'] = fread(fopen("configvipig.txt", "r"), filesize("configvipig.txt"));
	$login = logintoken();
	if($login == true){
		echo $xnhac." Đăng Nhập Thành Công.       \n";
		break;
	} else {
		echo $do." Access_Token VIPIG Sai \n";
		if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
			@system("rm configvipig.txt");
		} else {
			@system("del configvipig.txt");
		}
		
	}
}
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
$xu = $login;
$khock = [];
if (file_exists('cookieig.txt')){
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Sử Dụng List Cookie Instagram Đã Lưu \n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhập Cookie Instagram Mới \n";
echo $thanh_dep.$luc."Nhập Lựa Chọn: $vang";
	$nhap = trim(fgets(STDIN));
if($nhap == '1'){
	echo $trang."=> ".$xnhac."Đang Lấy Dữ Liệu Đã Lưu \n"; sleep (1);
} else {
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
		@system('rm cookieig.txt');
	} else if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		@system('del cookieig.txt');
	} else {
		@system('rm cookieig.txt');
		@system('del cookieig.txt');
	}
	echo "\033[1;31m────────────────────────────────────────────────────────────\n";
}
}
if (!file_exists('cookieig.txt')){
	$x = 0;
    while (true) { $x++;
echo $thanh_dep.$luc." Nhập Cookie Instagram Thứ $x: $vang";
$cookie = trim(fgets(STDIN));
if ($cookie == '' ){ break; }
	$info = getthongtin($cookie);
	if($info[1]){
        array_push($khock, $cookie);
    } else {
        echo $do." Cookie Instagram Sai ! Vui Lòng Nhập Lại !!! \n"; $x--;
}
}
	fwrite(fopen("cookieig.txt","w+"), json_encode($khock));
}
$khock = json_decode(fread(fopen("cookieig.txt","r"),filesize("cookieig.txt")),true);
$demcki=count($khock);
$a = 0;
$b = 0;
$c = 0;
logofull($banner);
echo "\n";
echo $thanh_dep.$luc."Tên Tài Khoản: ".$vang.$_SESSION['user']."\n";
echo $thanh_dep.$luc."Xu hiện tại: ".$vang.$xu."\n";
echo $thanh_dep.$luc."Số Cookie: ".$vang.$demcki."\n";
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Like\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Nhiệm Vụ Comment\n";
echo $thanh_dep.$xnhac."Có Thể Chọn Nhiều Nhiệm Vụ (Ví Dụ 2+3) \n";
echo $thanh_dep.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
if (strpos($nhiemvu, '1') !== false) {
	$a = 1; array_push($listnv, 'like');
}
if (strpos($nhiemvu, '2') !== false) {
	$b = 1; array_push($listnv, 'sub');
}
if (strpos($nhiemvu, '3') !== false) {
	$c = 1; array_push($listnv, 'cmt');
}
 if (count($listnv) == 0){ exit($do."Vui Lòng Chọn Ít Nhất 1 Nhiệm Vụ. \n"); }

while (true){
	echo $thanh_dep.$luc."Nhập Delay: $vang";
		$delay = trim(fgets(STDIN));
	if($delay < 0){ echo $trang."~ ".$do."Delay Không Hợp Lệ, Tối Thiểu 10 \n"; } else { break; }
}
echo $thanh_dep.$luc."Sau ____ Nhiệm Vụ Thì Kích Hoạt Chống Block.     \r";
echo $thanh_dep.$luc."Sau $vang";
	$dungblock = trim(fgets(STDIN));
echo $thanh_dep.$luc."Sau ".$vang.$dungblock.$luc." Nhiệm Vụ Nghỉ Ngơi ____ Giây       \r";
echo $thanh_dep.$luc."Sau ".$vang.$dungblock.$luc." Nhiệm Vụ Nghỉ Ngơi $vang";
	$delaybl = trim(fgets(STDIN));
echo $thanh_dep.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Đổi Nick: $vang";
	$chuyen = trim(fgets(STDIN));
echo $thanh_dep.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Dừng Tool: $vang";
	$dungtool = trim(fgets(STDIN));
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
if (strpos($nhiemvu, '2') !== false) {
	echo $thanh_dep.$luc."Follow ".$vang."6".$luc." Lần Sẽ Nhận Xu Một Lượt \n";
	echo "\033[1;31m────────────────────────────────────────────────────────────\n";
}
$dem = 0;
$demsub = 0;
$demloi = 0;
while (true){
	if(count($khock) == 0){
		if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
			@system('rm cookieig.txt');
		} else if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
			@system('del cookieig.txt');
		} else {
			@system('rm cookieig.txt');
			@system('del cookieig.txt');
		}
	$x = 0;
    while (true) { $x++;
echo $thanh_dep.$luc." Nhập Cookie Instagram Thứ $x: $vang";
$cookie = trim(fgets(STDIN));
if ($cookie == '' ){ break; }
	$info = getthongtin($cookie);
	if($info[1]){
        array_push($khock, $cookie);
    } else {
        echo $do." Cookie Instagram Sai ! Vui Lòng Nhập Lại !!! \n"; $x--;
}
}
	$demcki=count($khock);
	fwrite(fopen("cookieig.txt","w+"), json_encode($khock));
}
for ($tr = 0; $tr < count($khock) ; $tr++){
	$demsub = 0;
	$cookie = $khock[$tr];
	$info = getthongtin($cookie);
	if($info[1]){
        $idig = $info[1];
        $_SESSION['head'] = $info[0];
    } else {
        echo $do." Cookie Instagram Sai !!!! \n"; continue;
	}
	$h = datnick($idig);
	if($h == 1){
		$name = name();
		echo $vang."Đang Cấu Hình ID: ".$luc.$idig." ".$vang."Tên IG: ".$luc.$name."\n";
	} else {
		echo $do." Cấu Hình Thất Bại ID: $idig.            \n"; continue; 
	}
	$dragonx = 0;
 while(true){
 	if($dragonx == 1){ break; }
 	if($a == 1){
 		$listpost = getnv('');
 		sleep (3);
 	}
 	if($b == 1){
 		$listsub = getnv('/subcheo');
 		sleep (3);
 	}
 	if($c == 1){
 		$listcmt = getnv('/cmtcheo');
 		sleep (3);
 	}
	for($lap = 0; $lap < 10; $lap++){
		if($a == 1){
			$uid = $listpost[$lap]["idpost"];
			$link = $listpost[$lap]["link"];
			$id = getid($cookie,$link);
			if(isset($id) and $id != ''){
			$g = like($cookie,$id);
			if($g == '1'){
				echo $do." Tài Khoản $name Đã Bị Block Tính Năng \n";
				array_splice($khock, $tr, 1);
				$dragonx = 1; break;
			}
			$data = "id=".$uid;
			$hoanthanh = nhantien($data, '');
			$xus = xu();
			if ($xus !== $xu and $hoanthanh->mess){ $dem += 1; $xu = $xus;
				hienthi($dem, 'LIKE', $id, 200, $xu);
				if ($dem % $chuyen == 0 ) { $dragonx = 1; break; }
				if ( $dem % $dungblock == 0 ){ delaybl($delaybl); } else { delay($delay); }
			} else {
				echo $luc." [".$do."×".$luc."]".$do." Thất Bại ID: $id        \r";
				sleep (1);
			}
			}
		}
		if($b == 1){
			$uid = $listsub[$lap]["idpost"];
			$id = $listsub[$lap]["soID"];
			if(isset($id)){
			
			$g = follow($cookie,$id);
			if($g == '1'){
				echo $do." Tài Khoản $name Đã Bị Block Tính Năng \n";
				array_splice($khock, $tr, 1);
				$dragonx = 1; break;
			} else if($g == '0' || $g == '2'){
				$trangthai = $luc."SUCCESS";
				fwrite (fopen($idig.".txt", "a+"), $id.',');
			} else {
				$trangthai = $do."ERROR   \r";
			}
			$dem += 1;
			$demsub += 1;
			$kl = "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m"."FOLLOW\033[1;31m | \033[1;37m".$id."\033[1;31m | ".$trangthai." \n";
			for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
			if($demsub % 6 == 0){
				$list = file_get_contents($idig.".txt");
				$lists = substr($list, 0, (strlen($list) - 1));
				$data = "id=".$lists;
				$hoanthanh = nhantiensub($data, '/subcheo');
				$xus = xu();
				if ($xus !== $xu and $hoanthanh->mess){
					$xujob = $hoanthanh->sodu;
					$xu = $xus;
					$kl = "\033[1;36m Nhận Thành Công ".($xujob/600)." Nhiệm Vụ Follow\033[1;31m | \033[1;33m+$xujob \033[1;31m|\033[1;33m $xu \n";
					for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
					if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
						system('rm '.$idig.'.txt');
					} else if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
						system('del '.$idig.'.txt');
					} else {
						system('rm '.$idig.'.txt');
						system('del '.$idig.'.txt');
					}
				} else {
					echo "Lỗi, Đợi 10s Để Reset !!! \n"; delay(10); break;
					if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
						system('rm '.$idig.'.txt');
					} else if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
						system('del '.$idig.'.txt');
					} else {
						system('rm '.$idig.'.txt');
						system('del '.$idig.'.txt');
					}
				}
				$demsub = 0;
			}
			if ($dem % $chuyen == 0 ) { $dragonx = 1; break; }
			if ( $dem % $dungblock == 0 ){ delaybl($delaybl); } else { delay($delay); }
			}
		}
		if($c == 1){
			$uid = $listcmt[$lap]["idpost"];
			$link = $listcmt[$lap]["link"];
			$nd = $listcmt[$lap]["nd"];
			$json = json_decode($nd, true);
            $msg = $json[0];
			if(isset($uid)){
			$id = getid($cookie,$link);
			$g = comment($cookie,$id,$msg);
			if($g == '1'){
				echo $do." Tài Khoản $name Đã Bị Block Tính Năng \n";
				array_splice($khock, $tr, 1);
				$dragonx = 1; break;
			}
			$data = "id=".$uid;
			$hoanthanh = nhantien($data, '/cmtcheo');
			$xus = xu();
			if ($xus !== $xu and $hoanthanh->mess){ $dem += 1; $xu = $xus;
				hienthi($dem, 'COMMENT', $id, 600, $xu);
				if ($dem % $chuyen == 0 ) { $dragonx = 1; break; }
				if ( $dem % $dungblock == 0 ){ delaybl($delaybl); } else { delay($delay); }
			}
			}
		}
}
}
}
}
function logintoken(){
	$data = 'access_token='.$_SESSION['token'];
	$head[] = 'Content-type: application/x-www-form-urlencoded';
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://vipig.net/logintoken.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEJAR => "ig.txt",
		CURLOPT_COOKIEFILE => "ig.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $login = json_decode(curl_exec($ch));
if($login->status == 'success'){
	$xu = $login->data->sodu;
	$_SESSION['user'] = $login->data->user;
	$ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://vipig.net/logintoken.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEJAR => $_SESSION['user']."ig.txt",
		CURLOPT_COOKIEFILE => $_SESSION['user']."ig.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $login = json_decode(curl_exec($ch));
	if($login->status == 'success'){
		return $xu;
	} else {
		return false;
	}
} else {
	return false;
}
}
function datnick($idig){
$data = 'iddat[]='.$idig;
	$head[]='Host: vipig.net';
	$head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
	$head[]='x-requested-with: XMLHttpRequest';
	$head[]='content-length: '.strlen($data);
	$head[] = "referer: https://vipig.net/cauhinh/";
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://vipig.net/cauhinh/datnick.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEFILE => $_SESSION['user']."ig.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $access = curl_exec($ch);
    return $access;
}
function getid($cookie,$link){
  $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL=> $link,
    CURLOPT_USERAGENT => $_SESSION['useragent'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIE => $cookie,
    CURLOPT_HTTPHEADER => $_SESSION['head'],
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_ENCODING => '',
    CURLOPT_HEADER => true));
    $data = curl_exec($ch);
 $id = explode('" />',explode('content="instagram://media?id=',$data)[1])[0];
 return $id;
}
function getthongtin($cookie){
  $ch = curl_init();
$head[] = "Host: www.instagram.com";
$head[] = "referer: https://www.instagram.com";
$head[] = "accept: */*";
$head[] = "content-type: application/x-www-form-urlencoded";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  curl_setopt_array($ch, array(
    CURLOPT_URL=> 'https://www.instagram.com/',
    CURLOPT_USERAGENT =>$_SESSION['useragent'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIE => $cookie,
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_ENCODING => '',
    CURLOPT_HEADER => true));
    $data = curl_exec($ch);
$xinta = explode('","',explode('"rollout_hash":"',$data)[1])[0];
$cookie = explode(';',explode('csrftoken=',$data)[1])[0];
$uid = explode('","is_joined_recently',explode('"id":"',$data)[1])[0];
$head[] = "x-csrftoken: $cookie";
$head[] = "x-ig-app-id: 1217981644879628";
$head[] = "x-instagram-ajax: $xinta";
return array($head,$uid);
}
function like($cookie,$id){
  $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/likes/'.$id.'/like/');
	curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION['useragent']);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $_SESSION['head']);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$send = json_decode(curl_exec($ch),true);
if (is_null($send)){
	return '0';
} else if($send['feedback_message'] == 'Chúng tôi hạn chế một số hoạt động để bảo vệ cộng đồng.' or $send['feedback_message'] == 'We restrict certain activity to protect our community.'){
	return '1';
} else if($send['status'] == 'ok'){
	return '2';
}
curl_close($ch);
}
function follow($cookie,$id){
	$csrftoken = explode(';',explode('csrftoken=', $cookie)[1])[0];
	$headers = array(
    'x-requested-with: XMLHttpRequest',
    'x-ig-www-claim: hmac.AR2KtRYzNVfelijR0GD6-VLJU3G-vRVGUezuXpjzaQ5m4MmZ',
    'x-ig-app-id: 936619743392459',
    'x-csrftoken: '.$csrftoken.'',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36',
    'x-instagram-ajax: bd344c4b4f36',
    'referer: https://www.instagram.com/'
);
  $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/friendships/'.$id.'/follow/');
	curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION['useragent']);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$send = json_decode(curl_exec($ch),true);
if (is_null($send)){
	return '0';
} else if($send['feedback_message'] == 'Chúng tôi hạn chế một số hoạt động để bảo vệ cộng đồng.' or $send['feedback_message'] == 'We restrict certain activity to protect our community.'){
	return '1';
} else if($send['status'] == 'ok'){
	return '2';
}
curl_close($ch);
}
function unfollow($cookie,$id){
	$csrftoken = explode(';',explode('csrftoken=', $cookie)[1])[0];
	$headers = array(
    'x-requested-with: XMLHttpRequest',
    'x-ig-www-claim: hmac.AR2KtRYzNVfelijR0GD6-VLJU3G-vRVGUezuXpjzaQ5m4MmZ',
    'x-ig-app-id: 936619743392459',
    'x-csrftoken: '.$csrftoken.'',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36',
    'x-instagram-ajax: bd344c4b4f36',
    'referer: https://www.instagram.com/'
);
  $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/friendships/'.$id.'/unfollow/');
	curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION['useragent']);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$send = json_decode(curl_exec($ch),true);
curl_close($ch);
}
function comment($cookie,$id,$msg){
  $ch = curl_init();
  $data = array('comment_text' => $msg,'replied_to_comment_id'=> '');
  curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/comments/'.$id.'/add/');
	curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION['useragent']);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $_SESSION['head']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$send = json_decode(curl_exec($ch),true);
if (is_null($send)){
	return '0';
} else if($send['feedback_message'] == 'Chúng tôi hạn chế một số hoạt động để bảo vệ cộng đồng.' or $send['feedback_message'] == 'We restrict certain activity to protect our community.'){
	return '1';
} else if($send['status'] == 'ok'){
	return '2';
}
curl_close($ch);
}
function getnv($loai){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://vipig.net/kiemtien'.$loai.'/getpost.php');
 $head[]='Host: vipig.net';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION['useragent']);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, $_SESSION['user']."ig.txt");
 return json_decode(curl_exec($ch), true);
 curl_close($ch);
}
function nhantien($data,$type){
	$head[]='Host: vipig.net';
	$head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
	$head[]='x-requested-with: XMLHttpRequest';
	$head[]='content-length: '.strlen($data);
	$head[]='referer: https://vipig.net/kiemtien'.$type.'/';
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://vipig.net/kiemtien'.$type.'/nhantien.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEFILE => $_SESSION['user']."ig.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch));
    if($a == '0'){
    	echo "\033[1;31m Lỗi.      \r";
	} else {
		return $a;
    }
}
function nhantiensub($data,$type){
	$head[]='Host: vipig.net';
	$head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
	$head[]='x-requested-with: XMLHttpRequest';
	$head[]='content-length: '.strlen($data);
	$head[]='referer: https://vipig.net/kiemtien/subcheo/';
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://vipig.net/kiemtien/subcheo/nhantien2.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEFILE => $_SESSION['user']."ig.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $access = json_decode(curl_exec($ch));
    return $access;
}
function name(){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://vipig.net/cauhinh/');
 $head[]='Host: vipig.net';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION['useragent']);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, $_SESSION['user']."ig.txt");
 $send = curl_exec($ch);
 curl_close($ch);
 return explode ('</div>', explode ("'/>", $send)[5])[0];
}
function xu(){
   $ch= curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://vipig.net/home.php");
  $head[]='Host: vipig.net';
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $_SESSION['useragent']);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,$_SESSION['user']."ig.txt");
  $data = curl_exec($ch);
  curl_close($ch);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
return $sd["1"];
}
function hienthi($dem, $loai, $id, $xujob, $xu){
date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
	echo "\033[1;33m[\033[1;37m".$dem."\033[1;33m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;".rand(31,37)."m".$loai."\033[1;31m |\033[1;37m".$id."\033[1;31m | \033[1;33m+".$xujob." \033[1;31m|\033[1;33m $xu \n";
}
function delay ($delay){
	for($tt = $delay ;$tt>= 1;$tt--){
        echo "\r\033[1;33m   An Orin \033[1;31m ⚡       \033[1;32m LO      \033[1;31m | $tt | "; usleep(150000);
        echo "\r\033[1;31m   An Orin \033[0;33m   ⚡     \033[0;37m LOA     \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;32m   An Orin \033[0;33m     ⚡   \033[0;37m LOAD    \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;34m   An Orin \033[0;33m       ⚡ \033[0;37m LOADI   \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;35m   An Orin \033[0;33m        ⚡\033[0;37m LOADIN  \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;35m   An Orin \033[0;33m        ⚡\033[0;37m LOADING \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;35m   An Orin \033[0;33m        ⚡\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);} 
echo "\r\e[1;95m    ⚡An Orin⚡                       \r"; 
}
function delaybl($delaybl) {
for ($time = $delaybl; $time > -0; $time--) {echo "\r"; 
	echo "\r\033[1;97m Đang hoạt động chống block sẽ chạy lại sau $time giây"; sleep(1); echo "\r                                                       \r"; 
}}