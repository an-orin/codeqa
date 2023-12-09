<?php
error_reporting(0); session_start(); $ktfile = file_exists("TTC.txt"); if ($ktfile == 1){ unlink('TTC.txt'); } $ress = "\033[0;32m"; $res = "\033[0;33m"; $red = "\033[0;31m"; $green = "\033[0;37m"; $yellow = "\033[0;33m"; $white = "\033[0;33m"; $xnhac = "\033[1;96m"; $den = "\033[1;90m"; $do = "\033[1;91m"; $luc = "\033[1;92m"; $vang = "\033[1;93m"; $xduong = "\033[1;94m"; $hong = "\033[1;95m"; $trang = "\033[1;97m"; $do="\033[1;91m"; $maufulldo= "\e[1;47;31m"; $res="\033[0m"; $red="\e[1;31m"; $pink="\e[1;35m"; $green="\e[1;32m"; $yellow="\e[1;33m"; $y2="\033[0;33m"; $white= "\033[0;37m"; $cyan= "\e[1;36m"; $blue="\e[1;34m"; $ngreen="\033[42m"; $ngblack="\033[40m"; $nen="\033[1;47;1;34m"; $thanhchay = "\033[1;31m────────────────────────────────────────────────────────────\n"; date_default_timezone_set("Asia/Ho_Chi_Minh"); $useragent="Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36"; @system('clear');
$trim= array(
'$nhiemvu = trim(fgets(STDIN));',//0
'$thoigianmin = trim(fgets(STDIN));',//1
'$thoigianmax = trim(fgets(STDIN));',//2
'$delaybl = trim(fgets(STDIN));',//3
'$doinick = trim(fgets(STDIN));',//4
'$dungtool = trim(fgets(STDIN));',//5
);

$chonnv= array(
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Nhập [1] Chạy Nhiệm Vụ Like\n",//0
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Nhập [2] Chạy Nhiệm Vụ Follow\n",//1
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Nhập [3] Chạy Nhiệm Vụ Comment\n",//2
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Nhập [4] Chạy Nhiệm Vụ Share\n",//3
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Muốn Chạy Full Nhiệm Vụ Ghép Số Lại Ví DỤ 1+2+3\n",//4
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Vui Lòng Chọn Nhiệm Vụ : ",//5
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Nhập Time Min : ",//6
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Nhập Time Max : ",//7
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Chuyển Nick Sao Bao Nhiêu Nhiệm Vụ : ",//8
"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m Chạy Bao Nhiêu Nhiệm Vụ Rồi Dừng Tool : ",//9
);
banner();
$dem =0;
$_SESSION['fck'] = file_exists("TTC.txt");
if ($_SESSION['fck'] == '1'){
  unlink("TTC.txt");
}
$_SESSION['check'] = file_exists("logttc.txt");
if ($_SESSION['check'] =='1'){
luachon1:
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Bạn Đã Đăng Nhập$cyan Tương Tác Chéo$green Trước Đó. Bấm $yellow Enter $green Để Tiếp Tục, Bấm $red No $green Để Đăng Nhập Tài Khoản Mới : ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='no' and $_SESSION['nhap'] != 'No' and $_SESSION['nhap'] !=''){
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$red."Sai Định Dạng\n";
GOTO luachon1;
}
if ($_SESSION['nhap'] =='no' or $_SESSION['nhap'] =='No'){
$my = fopen("logttc.txt", "w+");
print $red."[".$green."✓".$red."]".$res." =>".$green."Nhập TTC_Access_token ";
$TTC_Access_token =trim(fgets(STDIN));

$arr = array("TTC_Access_token"=> $TTC_Access_token);
fwrite($my,json_encode($arr));
    $my = file("logttc.txt");
$bb = file_get_contents('logttc.txt');
$cc =json_decode($bb);
$_SESSION['TTC_Access_token']= $cc->{"TTC_Access_token"};
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("logttc.txt");
$cc =json_decode($bb);
$_SESSION['TTC_Access_token']= $cc->{"TTC_Access_token"};
}
} else {
luachon2:
$my = fopen("logttc.txt","w+");
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Nhập TTC_Access_token\033[1;37m: \033[1;33m";
$_SESSION["TTC_Access_token"]=trim(fgets(STDIN));
$arr = array("TTC_Access_token"=> $_SESSION["TTC_Access_token"]);
fwrite($my,json_encode($arr));
}
$TTC_Access_token = $_SESSION['TTC_Access_token'];
$source = getcookiettc($TTC_Access_token,$useragent);
$sou= json_decode($source,true);
if ($sou['status'] == 'success' ){
	print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Đăng Nhập Thành Công\n";
  $user = $sou['data']['user'];
  $xuhientai = $sou['data']['sodu'];
}else{
	print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$red.$sou['mess']."\n";
	GOTO luachon2; 
}
usleep(100000);
do {
@system('clear');
banner();

//cookie 
$khocookie = [];

print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Nhập Token Facebook $yellow Dừng Thì Bấm Xuống Dòng\n";
for($a = 1; $a < 999999;$a++){
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}

array_push($khocookie,$nhapck);
}
            
$demcki=count($khocookie);
            
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Token Facebook\n";
sleep(1);
} while (count($khocookie)==0);
system('clear');
banner();
print($chonnv[0]);
print($chonnv[1]);
print($chonnv[2]);
print($chonnv[3]);
print($chonnv[4]);
print($chonnv[5]);
eval($trim[0]);
print($chonnv[6]);
eval ($trim[1]);
print($chonnv[7]);
eval($trim[2]);
print"\33[1;92m\033[1;37m🌺\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m =>\033[1;32m Chạy Bao Nhiêu Nhiệm Vụ Thì Chống Block : ";
$xxxxx = trim(fgets(STDIN));
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$res." =>".$green."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
eval($trim[3]);
print($chonnv[8]);
eval($trim[4]);
print($chonnv[9]);
eval($trim[5]);
system('clear');
banner();

print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Tài Khoản: ".$vang.$user."\n";
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Xu Hiện Tại: ".$pink.$xuhientai."\n";
for($i = 0; $i < strlen($thanhchay); $i++){print $thanhchay[$i];usleep(1000);}
$loilike = [];
$loisub = [];
$loicmt = [];
$loishare = [];
$xu = $xuhientai;
while(true){
  if(count($khocookie) == 0){
    print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Nhập Token Facebook.$yellow Dừng Thì Bấm Xuống Dòng Nha\n";
for($a = 1; $a < 999999;$a++){
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
$demcki=count($khocookie);
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Token Facebook\n";
  }
  $themtk = 0;
  for($xz=0;$xz<count($khocookie);$xz++){
 if ( $themck == 1){ break; }
 $access_token = $khocookie[$xz];

if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
    print "\r";
    print "                                                      \r";
    print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$red."Token Die\n";
    array_splice($khocookie,$xz,1);
    continue;
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$h = datnick($idfb,$useragent);
if ($h == '1'){
for($i = 0; $i < strlen($thanhchay); $i++){print $thanhchay[$i];usleep(1000);}
    echo "\033[1;32m[AN_ORIN\033[1;32m]$luc Đang Cấu Hình: ".$yellow.$tenfb." ID: $trang".$idfb."".$res."\n";
    for($i = 0; $i < strlen($thanhchay); $i++){print $thanhchay[$i];usleep(1000);}
} else {
    print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$red."Cấu Hình Thất Bại Có Thể Do Bạn Chưa Thêm $tenfb Vào Cấu Hình\n";
    exit;
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 30; $i++) {
            $listlike = getlike($useragent);
            if (count($listlike) !== 0) {
                break;
            }}
          
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        while (true) {
            $listsub = getnv('sub',$useragent);
            if (count($listsub) !== 0) {
                break;
            }
        }
      
    }
   
    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listcmt = getnv('cmt',$useragent);
            if (count($listcmt) !== 0) {
                break;
            }}
    }
    //share
    if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listshare = getnv('share',$useragent);
            if (count($listshare) > 0) {
                break;
            }}
    }

    for ($lap = 0; $lap < 30; $lap++) {
        // like
      
        if ($listlike != NULL) {
            $idlike = $listlike[$lap]["idpost"];
            if ($idlike != '') {
                $g = like($access_token, $idlike, $cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}               
if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  print "\r";
       print "                                                      \r";
                    print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Đợi 5s Xem Có Block Ảo Không Rồi Chạy Tiếp \r";
sleep(5);
              $cainit = like($access_token,'10103832396388711', $cookie);
              if ($cainit -> {'error'} -> {'code'} == 368) {
                  print "\r";
       print "                                                      \r";
print $do."[".$trang ."=.=".$do."]".$g-> {'error'}-> {'message'};
                    print "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                $nhanlike = nhantienlike($idlike,$useragent);
                $s= $nhanlike[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+400;
                    $xujob = 400;
                    $dem++;
                    hoanthanh($dem, ' LIKE ', $idlike, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    $dungtool = 999999;
  print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        //follow
        if ($listsub != NULL) {
            $idsub = $listsub[$lap]["idpost"];
            if ($idsub != '') {
                $g = follow($access_token, $idsub, $cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}                
      if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  print "\r";
       print "                                                      \r";
                    print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Đợi 5s Xem Có Block Ảo Không Rồi Chạy Tiếp \r";
sleep(5);
              $cainit = follow($access_token,'4', $cookie);
              if ($cainit -> {'error'} -> {'code'} == 368) {
                  print "\r";
       print "                                                      \r";
print $do."[".$trang ."=.=".$do."]".$g-> {'error'}-> {'message'};
                    print "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                
                $nhansub = traluong('sub',$idsub);
                $s= $nhansub[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                    $xujob = 600;
                    $dem++;
                    hoanthanh($dem, 'FOLLOW', $idsub, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    
    $dungtool = 999999;
  print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
  exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
      
  //share
            if ($listshare != NULL) {
                $id = $listshare[$lap]["idpost"];
                if ($id != '') {
                    $g = share($access_token, $id);
if ($dem % 25 == 0){
  $xu = getxu();
}               
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  print "\r";
       print "                                                      \r";
                    print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Đợi 5s Xem Có Block Ảo Không Rồi Chạy Tiếp \r";
sleep(5);
              $cainit = share($access_token,'10103832396388711');
              if ($cainit -> {'error'} -> {'code'} == 368) {
                  print "\r";
       print "                                                      \r";
print $do."[".$trang ."=.=".$do."]".$g-> {'error'}-> {'message'};
                    print "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                
                $nhanshare = traluong('share',$id);
                $s= $nhanshare[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                            $xujob = 600;
                            $dem++;
                            hoanthanh($dem, 'SHARE', $id, $xujob, $xu);
                            if ( $dem >= $dungtool ){
    $dungtool = 999999;
    print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                            if($dem % $doinick == 0){
                      if (count($khocookie)>1){       
                      $spam = 1; break;
                      }
                            }
                            if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
                }}
        //cmt
        if ($listcmt != NULL) {
            $idcmt = $listcmt[$lap]["idpost"];
            $ms = json_decode($listcmt[$lap]["nd"]);
            $msg = $ms[0];
            if ($idcmt != '') {
                $g = cmt($access_token, $idcmt, $cookie, $msg);
if ($dem % 25 == 0){
$xu = getxu();
}                
if ($g -> {'error'} -> {'code'} == 190) {
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
print "\r";
print "                                                      \r";
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$red."Token Die\n";
array_splice($khocookie,$xz,1);
$spam = 1; break;
}
}
if ($g -> {'error'} -> {'code'} == 368) {
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Đợi 5s Xem Có Block Ảo Không Rồi Chạy Tiếp \r";
sleep(5);
$cainit = cmt($access_token,'10103832396388711', $cookie,'vmt');
if ($cainit -> {'error'} -> {'code'} == 368) {
print "\r";
       print "                                                      \r";
print $do."[".$trang ."=.=".$do."]".$res." =>".$g-> {'error'}-> {'message'};
                    
print "\n";
array_splice($khocookie,$xz,1);
$spam = 1;
break;
}}
                
$nhancmt = traluong('cmt',$idcmt);
$s= $nhancmt[("mess")];
if (strpos($s, 'Thành công') !== false) {
$xu = $xu+600;
$xujob = 600;
$dem++;
hoanthanh($dem, ' CMT  ', $idcmt, $xujob, $xu);
if ( $dem >= $dungtool ){
$dungtool = 999999;
print $do."[".$trang ."=.=".$do."] ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
exit;
}
if($dem % $doinick == 0){
if (count($khocookie)>1){
$spam = 1; break;
}
}
if($dem % $xxxxx == 0){
delay2($delaybl);
} 
$delay = rand($thoigianmin, $thoigianmax);    
delay($delay);
                }}}}}}}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
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


function share($access_token,$id) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
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
function hoanthanh($dem, $type, $id, $xujob, $xu) {
  print "\r";
  print "                                                      \r";
  $t = random_int(31,37);
  $mau = "\e[1;$t"."m";
  $vmt = date('H:i');
echo "\033[1;32m[AN_ORIN\033[1;32m]\033[1;31m ❥ \033[1;33m[".$dem."\033[1;33m] \033[1;31m❥ \033[1;36m".date("H:i:s")."\033[1;31m ❥ \033[1;".rand(31,37)."m".$type."\033[1;31m ❥ \033[1;34m ID ĐÃ ẨN \033[1;31m ❥ \033[1;32m$xujob \033[1;31m❥\033[1;93m $xu \n";
	$len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        print $a[$x];
        usleep(1000);
    }
}
function delay($delay) {
$time = $delay; 
    for ( $x = $time; $x--; $x ) {
    echo "                                                      \r";
       echo "\033[1;32m❥ An Orin <~> Chờ\033[1;93m $x\033[1;91m | ";
usleep(133333);
echo "\033[1;31m -  ";
usleep(133333);
echo "\033[1;32m -  ";
usleep(133333);
echo "\033[1;33m -  ";
usleep(133333);
echo "\033[1;34m -  ";
usleep(133333);
echo "\033[1;35m -  ";
usleep(133333);
echo "\r \033[1;31m> Đang tìm nhiệm vụ.. Loading..\033[1;36m ❥\033[1;32m ❥\033[1;33m ❥ 😆\033[0m\r";
usleep(10);}}function banner(){
$thanhchay = "\033[1;31m────────────────────────────────────────────────────────────\n";
$vmt="
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TTC TOKEN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
for($i = 0; $i < strlen($vmt); $i++){print $vmt[$i];usleep(1000);}
}function getcookiettc($TTC_Access_token,$useragent){
  $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/logintoken.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "ttc.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login =array('access_token' => $TTC_Access_token);
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
$source=curl_exec($ch);
curl_close($ch);
return $source;
}function datnick($idfb,$useragent){
$url = 'https://tuongtaccheo.com/cauhinh/datnick.php';
$header = array(
  "Host: tuongtaccheo.com",
  "accept: */*",
  "x-requested-with: XMLHttpRequest",
  "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
  "content-type: application/x-www-form-urlencoded; charset=UTF-8",
  "origin: https://tuongtaccheo.com",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: cors",
  "sec-fetch-dest: empty",
  "referer: https://tuongtaccheo.com/cauhinh/",
);
  $data = 'iddat%5B%5D='.$idfb."&loai=fb";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_PORT, "443");
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_ENCODING, "");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "TTC.txt");
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  $h = curl_exec($ch);
  curl_close($ch);
  return $h;
}
function getlike($useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "TTC.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}function nhantienlike($id,$useragent){
  $ch= curl_init();
  $data= ('id=').$id;
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='referer: https://tuongtaccheo.com/kiemtien/';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch,CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
  $xu= json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $xu;
}
function getxu(){
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "TTC.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
  return $xu; 
}
function getnv($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/'.$loai.'cheo';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "TTC.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function traluong($loai,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/$loai"."cheo/nhantien.php";
    $data= ('id=').$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/$loai"."cheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function delay2($time){
$do ="\033[1;91m";
$trang ="\033[1;97m";
$vang ="\033[1;93m";
$luc="\033[1;92m";
$xanhduong="\033[1;94m";
$xduong="\033[1;96m";
$hong="\033[1;95m";
for($j = $time;$j> 0;$j--){
print "\r".$do."~"."[".$trang."|".$do."]".$do." Đang Nghỉ Chống Block Vui Lòng Chờ $j \r";
usleep(125000);
print "\r".$do."~"."[".$do."/".$do."]".$trang." Đang Nghỉ Chống Block Vui Lòng Chờ $j  \r";
usleep(125000);
print "\r".$do."~"."[".$vang."-".$do."]".$luc." Đang Nghỉ Chống Block Vui Lòng Chờ $j\r";
usleep(125000);
print "\r".$do."~"."[".$hong."\\".$do."]".$vang." Đang Nghỉ Chống Block Vui Lòng Chờ $j\r";
usleep(125000);
print "\r".$do."~"."[".$xangduong."|".$do."]".$hong." Đang Nghỉ Chống Block Vui Lòng Chờ $j\r";
usleep(125000);
print "\r".$do."~"."[".$xduong."/".$do."]".$xduong." Đang Nghỉ Chống Block Vui Lòng Chờ $j\r";
usleep(125000);
print "\r".$do."~"."[".$luc."-".$do."]".$xanhduong."Đang Nghỉ Chống Block Vui Lòng Chờ $j\r";
usleep(125000);
print "\r".$do."~"."[".$vang."\\".$do."]".$vang."Đang Nghỉ Chống Block Vui Lòng Chờ $j\r";
usleep(125000);
}}