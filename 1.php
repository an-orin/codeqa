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
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Đánh Dấu Bản Quyền ]***/
$dp_tool = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
$thanh_dep= $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 1500;
	$_SESSION['delay'] = 2000;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 1000;
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
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TRAO ĐỔI SUB TOKEN
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
$khotds = [];
echo $dp_tool."".$luc."Vào Web ".$trang."Traodoisub.com".$luc." Bấm Cài Đặt Trên Web\n";
echo $dp_tool."".$luc."Sao Chép ".$vang."Access_token".$luc." Dán Vào\n";
echo $dp_tool.$luc."Bạn Muốn Nhập Bao Nhiêu Token Trao Đổi Sub$trang: $vang";
    $soluong = trim(fgets(STDIN));
while ($y < $soluong){$y++;
  echo $dp_tool.$luc."Nhập Token Trao Đổi Sub Thứ \033[1;37m$y: $vang";
  $tokenacc = trim(fgets(STDIN));
  if ($tokenacc == ''){ break; }
$info = api("https://traodoisub.com/api/?fields=profile&access_token=$tokenacc");
if ($info["error"]) {
    echo $do.$info["error"]."\n"; $y--; continue;
} else {echo $dp_tool.$luc."Token Trao Đổi Sub \033[1;91m[\033[1;93m$y\033[1;91m] \033[1;92mChính Xác\n"; 
array_push($khotds, $tokenacc);
}
}
$sotds = count($khotds);
$khotk = [];
$list_id = [];
$list_name = [];
for($x = 0; $x < $sotds; $x++){
echo $thanh_thang_mau_trang;
$tokenacc = $khotds[$x];
$info = api("https://traodoisub.com/api/?fields=profile&access_token=$tokenacc");
$user = $info["data"]["user"];
$xuhientai2 = $info["data"]["xu"];
echo $dp_tool.$luc."Tài Khoản Hiện Tại: ".$vang.$user.$do." | ".$vang.$xuhientai2."\n";
echo $dp_tool.$luc."Nhập Token Facebook Trong ".$trang.$user.": $vang";
$access_token = trim(fgets(STDIN));
$token = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token), true);
if ($token["error"]["code"] == 368){
    echo $do.$token["error"]["message"]."\n"; $x--; continue;
} else if (!isset($token)){ echo $do."Access Token Die !!!                          \n"; $x--; continue; 
} else {
    $idfb = $token["id"];
    $tenfb = $token["name"];
    array_push($list_id, $idfb);
    array_push($list_name, $tenfb);
    array_push($khotk,$access_token);
}
}
@system('clear');
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $dp_tool.$luc."Tài Khoản Hiện Tại: ".$vang.$user.$do." | ".$vang.$xuhientai2."\n";
echo $dp_tool.$luc."Nhập Token Facebook Trong ".$trang.$user.": $vang\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Để Chạy Nhiệm Vụ Like\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Để Chạy Nhiệm Vụ Comment\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Để Chạy Nhiệm Vụ Share\n";
echo $dp_tool.$luc."Muốn Chạy Random Thì Ghép Mấy Số Nhiệm Vụ Bất Kỳ\n";
echo $dp_tool.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
echo $dp_tool.$luc."Nhập Thời Gian Làm Nhiệm Vụ: $vang";
$delay = trim(fgets(STDIN));
echo $dp_tool.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Kích Hoạt Chống Block: $vang";
$xxxxx = trim(fgets(STDIN));
echo $dp_tool.$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
echo $dp_tool.$luc."Bạn Muốn Chạy Bao Nhiêu Nhiệm Vụ Thì Chuyển TDS Khác: $vang";
$doinick = trim(fgets(STDIN));
echo $dp_tool.$luc."Chạy Bao Nhiêu Nhiệm Vụ Rồi Dừng Tool: $vang";
$dungtool = trim(fgets(STDIN));
while(true){
if (count($khotds) == 0){
unset($x, $y, $soluong);
    echo $dp_tool.$luc."Bạn Muốn Nhập Bao Nhiêu Token Trao Đổi Sub: $vang";
    $soluong = trim(fgets(STDIN));
while ($y < $soluong){$y++;
  echo $dp_tool.$luc."Nhập Token Trao Đổi Sub Thứ $y: $vang";
  $tokenacc = trim(fgets(STDIN));
  if ($tokenacc == ''){ break; }
$info = api("https://traodoisub.com/api/?fields=profile&access_token=$tokenacc");
if ($info["error"]) {
    echo $do.$info["error"]."\n"; $y--; continue;
} else {echo $dp_tool.$luc."Token Trao Đổi Sub [$y] Chính Xác\n"; 
array_push($khotds, $tokenacc);
}
}
$sotds = count($khotds);
$khotk = [];
for($x = 0; $x < $sotds; $x++){
echo $thanh_thang_mau_trang;
$tokenacc = $khotds[$x];
$info = api("https://traodoisub.com/api/?fields=profile&access_token=$tokenacc");
$user = $info["data"]["user"];
$xuhientai2 = $info["data"]["xu"];
echo $dp_tool.$luc."Tài Khoản Hiện Tại: ".$vang.$user.$do." | ".$vang.$xuhientai2."\n";
echo $dp_tool.$luc."Nhập Token Facebook Trong ".$user.": $vang";
$access_token = trim(fgets(STDIN));
$token = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token), true);
if ($token["error"]["code"] == 368){
    echo $do.$token["error"]["message"]."\n"; $x--; continue;
} else if (!isset($token)){ echo $do."Access Token Die !!!                          \n"; $x--; continue; 
} else {
    $idfb = $token["id"];
    $tenfb = $token["name"];
    array_push($list_id, $idfb);
    array_push($list_name, $tenfb);
    array_push($khotk,$access_token);
}
}
echo $thanh_thang_mau_trang;
}
for($w = 0; $w < count($khotds); $w++){
    $access_token = $khotk[$w];
    $tokenacc = $khotds[$w];
    $info = api("https://traodoisub.com/api/?fields=profile&access_token=$tokenacc");
    $user = $info["data"]["user"];
    $idfb = $list_id[$w];
    $tenfb = $list_name[$w];
    while ($dat < 3){ $dat++;
    $datnick = api("https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc");
    if ($datnick["data"]["msg"] == "Cấu hình thành công!") {
        echo $thanh_thang_mau_trang;
    echo $vang."ID: ".$luc.$idfb.$do." | ".$vang."Tên: ".$luc.$tenfb.$do." | ".$vang."User: ".$luc.$user."\n";
    echo $thanh_thang_mau_trang; break;
} 
}
if ($datnick["error"]){
    echo $do."Cấu Hình Thất Bại, Vui Lòng Thêm $idfb Vào Cấu Hình Tài Khoản $user \r"; $w++; continue;
}
    if (strpos($nhiemvu, '1') !== false) { $nvlike = true; } else { $nvlike = false; }
    if (strpos($nhiemvu, '2') !== false) { $nvcmt = true; } else { $nvcmt = false; }
    if (strpos($nhiemvu, '3') !== false) { $nvshare = true; } else { $nvshare = false; }
while (true){
        if ($nvlike) {
            $listlike = api("https://traodoisub.com/api/?fields=like&access_token=$tokenacc");
            $id = $listlike[0]["id"];
            if (isset($id)) {
                $g = like($access_token, $id, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "\033[1;91m Token Tài Khoản $tenfb Đã Bị Out                            \n";
                    array_splice($khotk, $w, 1);
                    array_splice($khotds, $w, 1);
                    array_splice($list_id, $w, 1);
                    array_splice($list_name, $w, 1);
                    break;
                }
               if ($g -> {'error'} -> {'code'} == 368 && $g->{'error'}->{'error_subcode'} == 1404078) {
                 echo "\033[1;91m".$g-> {'error'}-> {'message'};
                  echo "\n";
                  array_splice($khotk, $w, 1);
                  array_splice($khotds, $w, 1);
                  array_splice($list_id, $w, 1);
                  array_splice($list_name, $w, 1);
                    break;
                }
                $nhanlike = nhantien('LIKE', $id, $tokenacc);
                if ($nhanlike["success"] == 200) {
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = "+300";
                    $dem++;
                    $id = substr("$id",0,14);
                    hoanthanhlike($dem, 'LIKE', $id, $xujob, $xu);
                    if ( $dem >= $dungtool ){ 
 echo $thanh_thang_mau_trang;
echo $dp_tool.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Dừng Tool \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Thay Nhiệm Vụ Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Thay Delay Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Thay Tài Khoản TDS Và Token Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."5".$do."]".$luc." Tiếp Tục Với Các Tài Khoản $vang";
foreach ( $khotk as $access_token ){ 
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
echo $vang.$tenfb.$luc." | ";
}
echo "\n";
echo $dp_tool.$luc."Nhập Số: $vang";
    $stop = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
if ($stop == '1'){
        echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
    echo $luc."Cảm Ơn Bạn Đã Sử Dụng \033[1;37mNguyễn Đức Phát\n";
    exit;}
if (($stop == '2') or ($stop == '3') or ($stop == '4') or ($stop == '5')){
    echo $dp_tool.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
        $chaythem = trim (fgets(STDIN)); 
 $dungtool = $dungtool + $chaythem;
echo $thanh_thang_mau_trang;
}
 if ($stop == '2'){
echo $dp_tool.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Like\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Comment\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Nhiệm Vụ Share   \n";
echo $dp_tool.$luc."Muốn Chạy Random Thì Ghép Mấy Số Nhiệm Vụ Bất Kỳ\n";
echo $dp_tool.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
break;
}
if ($stop == '3'){ 
unset($delay, $xxxxx, $delaybl, $doinick);
echo $dp_tool.$luc."Nhập Thời Gian Làm Nhiệm Vụ: $vang";
$delay = trim(fgets(STDIN));
echo $dp_tool.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Kích Hoạt Chống Block: $vang";
$xxxxx = trim(fgets(STDIN));
echo $dp_tool.$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
echo $dp_tool.$luc."Chuyển Nick Sau Bao Nhiêu Nhiệm Vụ: $vang";
$doinick = trim(fgets(STDIN));
echo $thanh_thang_mau_trang; break;
}
if ($stop == '4'){
$khotk=[]; 
$khotds = [];
$list_id = [];
$list_name = [];
  break;
 } else { continue; }
 } //dừng 
                    if($dem % $doinick == 0){ break; }
                    if($dem % $xxxxx == 0){ delaybl($delaybl); } else { delay($delay); }
                }
            }}
        //cmt
        if ($nvcmt) {
            $listcmt = api("https://traodoisub.com/api/?fields=comment&access_token=$tokenacc");
            $idcmt = $listcmt[0]["id"];
            $msg = $listcmt[0]["msg"];
            if (isset($idcmt)) {
               $g = cmt($access_token, $idcmt, $cookie, $msg);
               if ($g -> {'error'} -> {'code'} == 190) {
                    echo "\033[1;91m Token Tài Khoản $tenfb Đã Bị Out                            \n";
                    array_splice($khotk, $w, 1);
                    array_splice($khotds, $w, 1);
                    break;
                }
                if ($g -> {'error'} -> {'code'} == 368 && $g->{'error'}->{'error_subcode'} == 1404078) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khotk, $w, 1);
                    array_splice($khotds, $w, 1);
                    array_splice($list_id, $w, 1);
                    array_splice($list_name, $w, 1);
                    break;
                    }
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = "+600";
                    $dem++;
                    hoanthanhcmt($dem, 'CMT', $idcmt, $xujob, $xu,$msg);
                    if ( $dem >= $dungtool ){ 
 echo $thanh_thang_mau_trang;
echo $dp_tool.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Dừng Tool \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Thay Nhiệm Vụ Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Thay Delay Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Thay Tài Khoản TDS Và Token Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."5".$do."]".$luc." Tiếp Tục Với Các Tài Khoản $vang";
foreach ( $khotk as $access_token ){ 
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
echo $vang.$tenfb.$luc." | ";
}
echo "\n";
echo $dp_tool.$luc."Nhập Số: $vang";
    $stop = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
if ($stop == '1'){
        echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
    echo $luc."Cảm Ơn Bạn Đã Sử Dụng \033[1;37mNguyễn Đức Phát\n";
    exit;}
if (($stop == '2') or ($stop == '3') or ($stop == '4') or ($stop == '5')){
    echo $dp_tool.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
        $chaythem = trim (fgets(STDIN)); 
 $dungtool = $dungtool + $chaythem;
echo $thanh_thang_mau_trang;
}
 if ($stop == '2'){
echo $dp_tool.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Like\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Comment\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Nhiệm Vụ Share   \n";
echo $dp_tool.$luc."Muốn Chạy Random Thì Ghép Mấy Số Nhiệm Vụ Bất Kỳ\n";
echo $dp_tool.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
break;
}
if ($stop == '3'){ 
unset($delay, $xxxxx, $delaybl, $doinick);
echo $dp_tool.$luc."Nhập Thời Gian Làm Nhiệm Vụ: $vang";
$delay = trim(fgets(STDIN));
echo $dp_tool.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Kích Hoạt Chống Block: $vang";
$xxxxx = trim(fgets(STDIN));
echo $dp_tool.$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
echo $dp_tool.$luc."Chuyển Nick Sau Bao Nhiêu Nhiệm Vụ: $vang";
$doinick = trim(fgets(STDIN));
echo $thanh_thang_mau_trang; break;
}
if ($stop == '4'){
 $khotk=[]; 
$khotds = [];
$list_id = [];
$list_name = [];
  break;
 } else { continue; }
 } //dừng 
                    if($dem % $doinick == 0){ break; }
                    if($dem % $xxxxx == 0){ delaybl($delaybl); } else { delay($delay); }
                }
            }}
            // share
   if ($nvshare) {
    $listshare = api("https://traodoisub.com/api/?fields=share&access_token=$tokenacc");
       $idshare = $listshare[0]["id"];
       $msg = $listshare[0]["msg"];
          if (isset($idshare)) {
              $g = shares($idshare,$access_token);
                    if ($g -> {'error'} -> {'code'} == 190) {
                    echo "\033[1;91m Token Tài Khoản $tenfb Đã Bị Out                            \n";
                    array_splice($khotk, $w, 1);
                    array_splice($khotds, $w, 1);
                    array_splice($list_id, $w, 1);
                    array_splice($list_name, $w, 1);
                    break;
                }
                    if ($g -> {'error'} -> {'code'} == 368 && $g->{'error'}->{'error_subcode'} == 1404078) {
                        echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khotk, $w, 1);
                    array_splice($khotds, $w, 1);
                    array_splice($list_id, $w, 1);
                    array_splice($list_name, $w, 1);
                    break;
                    }
                        $nhanshare = nhantien('SHARE', $idshare, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                            $xu = $nhanshare["data"]["xu"];
                             $xujob = "+800";
                            $dem++;
                            hoanthanhshare($dem, 'SHARE', $idshare, $xujob, $xu);
                            if ( $dem >= $dungtool ){ 
 echo $thanh_thang_mau_trang;
echo $dp_tool.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Dừng Tool \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Thay Nhiệm Vụ Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Thay Delay Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Thay Tài Khoản TDS Và Token Mới \n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."5".$do."]".$luc." Tiếp Tục Với Các Tài Khoản $vang";
foreach ( $khotk as $access_token ){ 
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
echo $vang.$tenfb.$luc." | ";
}
echo "\n";
echo $dp_tool.$luc."Nhập Số: $vang";
    $stop = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
if ($stop == '1'){
        echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
    echo $luc."Cảm Ơn Bạn Đã Sử Dụng \033[1;37mNguyễn Đức Phát\n";
    exit;}
if (($stop == '2') or ($stop == '3') or ($stop == '4') or ($stop == '5')){
    echo $dp_tool.$luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
        $chaythem = trim (fgets(STDIN)); 
 $dungtool = $dungtool + $chaythem;
echo $thanh_thang_mau_trang;
}
 if ($stop == '2'){
echo $dp_tool.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Like\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Comment\n";
echo $dp_tool.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Nhiệm Vụ Share   \n";
echo $dp_tool.$luc."Muốn Chạy Random Thì Ghép Mấy Số Nhiệm Vụ Bất Kỳ\n";
echo $dp_tool.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
break;
}
if ($stop == '3'){ 
unset($delay, $xxxxx, $delaybl, $doinick);
echo $dp_tool.$luc."Nhập Thời Gian Làm Nhiệm Vụ: $vang";
$delay = trim(fgets(STDIN));
echo $dp_tool.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Kích Hoạt Chống Block: $vang";
$xxxxx = trim(fgets(STDIN));
echo $dp_tool.$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
echo $dp_tool.$luc."Chuyển Nick Sau Bao Nhiêu Nhiệm Vụ: $vang";
$doinick = trim(fgets(STDIN));
echo $thanh_thang_mau_trang; break;
}
if ($stop == '4'){
$khotk=[]; 
$khotds = [];
$list_id = [];
$list_name = [];
  break;
 } else { continue; }
 } //dừng 
                            if($dem % $doinick == 0){ break; }
                            if($dem % $xxxxx == 0){ delaybl($delaybl); } else { delay($delay); }
                }
             }
}
}
}
}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}
function thongtin($access_token) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://graph.facebook.com/me/?access_token=".$access_token);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$token = curl_exec($ch);
curl_close($ch);
return json_decode($token, true);
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
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
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
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
    return json_decode($access);
}
function shares($idshare,$access_token) {
   $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$idshare.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
}
function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}
function hoanthanhlike($dem, $type, $id, $xujob, $xu) {
$a = "\033[1;93m[\033[1;93m".$dem."\033[1;93m]\033[1;91m | \033[1;96m".date("H:i:s")."\033[1;91m |\033[1;93m $type\033[1;91m | \033[1;97m".$id."\033[1;91m |\033[1;92m ".$xujob." \033[1;91m| \033[1;93m".$xu." \033[1;91m|\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(2000);
    }}
function hoanthanhfollow($dem, $type, $idsub, $ten, $xujob, $xu) {
$a = "\033[1;93m[\033[1;93m".$dem."\033[1;93m]\033[1;91m | \033[1;96m".date("H:i:s")."\033[1;91m |\033[1;93m $type\033[1;91m | \033[1;97m".$idsub."\033[1;91m |\033[1;92m ".$xujob." \033[1;91m| \033[1;93m".$xu." \033[1;91m|\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(2000);
    }}
function hoanthanhshare($dem, $type, $idshare, $xujob, $xu) {
$a = "\033[1;93m[\033[1;93m".$dem."\033[1;93m]\033[1;91m | \033[1;96m".date("H:i:s")."\033[1;91m |\033[1;93m $type\033[1;91m | \033[1;97m".$idshare."\033[1;91m |\033[1;92m ".$xujob." \033[1;91m| \033[1;93m".$xu." \033[1;91m|\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(2000);
    }}
function hoanthanhcmt($dem, $type, $idcmt, $xujob, $xu,$msg) {
$a = "\033[1;93m[\033[1;93m".$dem."\033[1;93m]\033[1;91m | \033[1;96m".date("H:i:s")."\033[1;91m |\033[1;93m $type\033[1;91m | \033[1;97m".$idcmt."\033[1;91m |\033[1;92m ".$xujob." \033[1;91m| \033[1;93m".$xu." \033[1;91m|\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(2000);
    }}
 $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(150);
}
function delay ($delay){
    for($tt = $delay ;$tt>= 1;$tt--){
echo "\r\033[1;33m   TDS Token \033[1;31m ~>       \033[1;32m LO      \033[1;31m >   | $tt | ";
        usleep(150000);
        echo "\r\033[1;31m   TDS Token \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m >>  | $tt | ";
        usleep(150000);
        echo "\r\033[1;32m   TDS Token \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m >>> | $tt | ";
        usleep(150000);
        echo "\r\033[1;34m   TDS Token \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m >   | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m   TDS Token \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m >>  | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m   TDS Token \033[0;33m        ~>\033[0;37m LOADING \033[0;31m >>> | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m  TDS Token \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";
        usleep(150000);
    }
    echo "\r\e[1;95m    🍉An Orin 🍉    TDS Token              \r";
}
function delaybl($delaybl) {
    for ($i = $delaybl; $i > 0; $i--) {
echo "\r\033[1;97m Đang hoạt động chống block sẽ chạy lại sau $i giây"; sleep(1);
echo "\r                                                     \r"; 
}}
function tdsdatkdatoken($banner, $dp_tool, $thanh_thang_mau_trang){
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
    echo "\n";
    echo $thanh_thang_mau_trang; usleep($_SESSION['load']);
}